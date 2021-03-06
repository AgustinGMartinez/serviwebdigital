<?php 
	ini_set('display_errors', 0);
	include('includes/config.php');
	include('includes/helpers/locale.php');
	include('includes/helpers/integrations/zapier/triggers/functions.php');
	//--------------------------------------------------------------//
	function dbConnect() { //Connect to database
	//--------------------------------------------------------------//
	    // Access global variables
	    global $mysqli;
	    global $dbHost;
	    global $dbUser;
	    global $dbPass;
	    global $dbName;
	    global $dbPort;
	    
	    // Attempt to connect to database server
	    if(isset($dbPort)) $mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $dbPort);
	    else $mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
	
	    // If connection failed...
	    if ($mysqli->connect_error) {
	        fail("<!DOCTYPE html><html><head><meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\"/><link rel=\"Shortcut Icon\" type=\"image/ico\" href=\"/img/favicon.png\"><title>"._('Can\'t connect to database')."</title></head><style type=\"text/css\">body{background: #ffffff;font-family: Helvetica, Arial;}#wrapper{background: #f2f2f2;width: 300px;height: 110px;margin: -140px 0 0 -150px;position: absolute;top: 50%;left: 50%;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}p{text-align: center;line-height: 18px;font-size: 12px;padding: 0 30px;}h2{font-weight: normal;text-align: center;font-size: 20px;}a{color: #000;}a:hover{text-decoration: none;}</style><body><div id=\"wrapper\"><p><h2>"._('Can\'t connect to database')."</h2></p><p>"._('There is a problem connecting to the database. Please try again later.')."</p></div></body></html>");
	    }
	    
	    global $charset; mysqli_set_charset($mysqli, isset($charset) ? $charset : "utf8");
	    
	    return $mysqli;
	}
	//--------------------------------------------------------------//
	function fail($errorMsg) { //Database connection fails
	//--------------------------------------------------------------//
	    echo $errorMsg;
	    exit;
	}
	// connect to database
	dbConnect();
?>
<?php
	include_once('includes/helpers/short.php');
	
	//vars
	$time = time();	
	$feedback = '';
	
	//get variable
	if(isset($_GET['i']))
	{
		$i_array = array();
		$i_array = explode('/', mysqli_real_escape_string($mysqli, $_GET['i']));
		//new camapign encrytped string
		if(count($i_array)==1)
		{
			$i_array = array();
			$i_array = explode('/', mysqli_real_escape_string($mysqli, short($_GET['i'], true)));
			$email = short(trim($i_array[0]));
			$list_id = $i_array[1];
			$campaign_id = $i_array[2];
		}
		//new AR encrypted string
		else if($i_array[1]=='a')
		{
			$i_array = array();
			$i_array1 = array();
			$i_array1 = explode('/', mysqli_real_escape_string($mysqli, $_GET['i']));
			$i_array2 = $i_array1[0];
			$i_array = explode('/', mysqli_real_escape_string($mysqli, short($i_array2, true)));
			$email = short(trim($i_array[0]));
			$list_id = $i_array[1];
			$campaign_id = $i_array[2];
			$i_array[3] = 'a';
		}
		//old encrypted string
		else
		{
			$email = trim($i_array[0]);
			$email = str_replace(" ", "+", $email);
	        $email = str_replace("%20", "+", $email);
			$list_id = short($i_array[1], true);
			$return_boolean = $i_array[2];
			$campaign_id = short($return_boolean, true);
		}
		
		//Set language
		$q = 'SELECT login.language FROM lists, login WHERE lists.id = '.$list_id.' AND login.app = lists.app';
		$r = mysqli_query($mysqli, $q);
		if ($r && mysqli_num_rows($r) > 0) while($row = mysqli_fetch_array($r)) $language = $row['language'];
		set_locale($language);
		
		//check if email is passed in as an email address instead of encrypted string
		$validator = new EmailAddressValidator;
		if ($validator->check_email_address($email)) 
		{
			if($return_boolean=='true')
			{
				echo 'Invalid email address.';
				exit;
			}
			else $feedback = _('Email address is invalid.');
		}
		else
		{
			$email = short($email, true);
			
			//check if email is valid
			$validator = new EmailAddressValidator;
			if ($validator->check_email_address($email)) {}
			else
			{
				if($return_boolean=='true')
				{
					echo 'Invalid email address.';
					exit;
				}
				else $feedback = _('Email address is invalid.');
			}
		}
	}
	else if(isset($_POST['email']))
	{
		//parameters
		$email = trim(mysqli_real_escape_string($mysqli, $_POST['email'])); //compulsory
		$list_id = short(mysqli_real_escape_string($mysqli, $_POST['list']), true); //compulsory
		$return_boolean = mysqli_real_escape_string($mysqli, $_POST['boolean']); //compulsory
		
		//Set language
		$q = 'SELECT login.language FROM lists, login WHERE lists.id = '.$list_id.' AND login.app = lists.app';
		$r = mysqli_query($mysqli, $q);
		if ($r && mysqli_num_rows($r) > 0) while($row = mysqli_fetch_array($r)) $language = $row['language'];
		set_locale($language);
		
		//check if no data passed
		if($email=='' || $list_id=='')
		{
			if($return_boolean=='true')
			{
				echo 'Some fields are missing.';
				exit;
			}
			else
				$feedback = _('Some fields are missing.');
		}
		else
		{
			//check if email is valid
			$validator = new EmailAddressValidator;
			if ($validator->check_email_address($email)) {}
			else
			{
				if($return_boolean=='true')
				{
					echo 'Invalid email address.';
					exit;
				}
				else
				    $feedback = _('Email address is invalid.');
			}
		}
	}
	else if($_GET['i']=='')
	{
		exit;
	}
	
	//Check if email exists in the list
	$q = 'SELECT id FROM subscribers WHERE email = "'.$email.'" AND list = '.$list_id;
	$r = mysqli_query($mysqli, $q);
	if ($r && mysqli_num_rows($r) == 0)
	{
		if($return_boolean=='true')
		{
			echo 'Email does not exist.';
			exit;
		}
		else $feedback = _('Email does not exist.');
	}
	
	if($feedback!=_('Some fields are missing.') && $feedback!=_('Email address is invalid.') && $feedback!=_('Email does not exist.'))
	{
		//check if unsubscribe_all_list
		$q = 'SELECT app, userID, unsubscribe_all_list, unsubscribed_url, goodbye, goodbye_subject, goodbye_message FROM lists WHERE id = '.$list_id;
		$r = mysqli_query($mysqli, $q);
		if ($r && mysqli_num_rows($r) > 0)
		{
		    while($row = mysqli_fetch_array($r))
		    {
				$app = $row['app'];
				$userID = $row['userID'];
				$unsubscribe_all_list = $row['unsubscribe_all_list'];
				$unsubscribed_url = $row['unsubscribed_url'];
				$goodbye = $row['goodbye'];
				$goodbye_subject = stripslashes($row['goodbye_subject']);
				$goodbye_message = stripslashes($row['goodbye_message']);
		    }
		}
		
		//get comma separated lists belonging to this app
		$q = 'SELECT id FROM lists WHERE app = '.$app;
		$r = mysqli_query($mysqli, $q);
		if ($r)
		{
			$all_lists = '';
		    while($row = mysqli_fetch_array($r)) $all_lists .= $row['id'].',';
		    $all_lists = substr($all_lists, 0, -1);
		}
		
		if(empty($campaign_id) || $return_boolean=='true')
		{
			if($unsubscribe_all_list) //if user wants to unsubscribe email from ALL lists
				$q = 'UPDATE subscribers SET unsubscribed = 1, timestamp = '.$time.' WHERE email = "'.$email.'" AND list IN ('.$all_lists.')';
			else
				$q = 'UPDATE subscribers SET unsubscribed = 1, timestamp = '.$time.' WHERE email = "'.$email.'" AND list = '.$list_id;
		}
		else
		{
			if($unsubscribe_all_list) //if user wants to unsubscribe email from ALL lists
			{
				//unsubscribe email from all lists
				$q = 'UPDATE subscribers SET unsubscribed = 1, timestamp = '.$time.' WHERE email = "'.$email.'" AND list IN ('.$all_lists.')'; 
				
				//then update last_campaign for only the list user unsubscribed from (so that report will show unsubscribed number correctly)
				//if this is an autoresponder unsubscribe,
				if(count($i_array)==4 && $i_array[3]=='a')
					mysqli_query($mysqli, 'UPDATE subscribers SET last_ares = '.$campaign_id.' WHERE email = "'.$email.'" AND list = '.$list_id); 
				else
					mysqli_query($mysqli, 'UPDATE subscribers SET last_campaign = '.$campaign_id.' WHERE email = "'.$email.'" AND list = '.$list_id); 
			}
			else
			{
				//if this is an autoresponder unsubscribe,
				if(count($i_array)==4 && $i_array[3]=='a')
					$q = 'UPDATE subscribers SET unsubscribed = 1, timestamp = '.$time.', last_ares = '.$campaign_id.' WHERE email = "'.$email.'" AND list = '.$list_id;
				else
					$q = 'UPDATE subscribers SET unsubscribed = 1, timestamp = '.$time.', last_campaign = '.$campaign_id.' WHERE email = "'.$email.'" AND list = '.$list_id;
			}
		}
		$r = mysqli_query($mysqli, $q);
		if ($r){
			$feedback = _('You\'re unsubscribed.');
			
			//Retrieve subscriber's name
			$q = 'SELECT id, name FROM subscribers WHERE email = "'.$email.'" AND list = "'.$list_id.'"';
			$r = mysqli_query($mysqli, $q);
			if ($r && mysqli_num_rows($r) > 0) //if a record exists, then trigger Zapier below
			{
				while($row = mysqli_fetch_array($r)) 
				{
					$name = $row['name'];
					$email_id = $row['id'];
				}
				
				//Zapier Trigger 'new_user_unsubscribed' event
				zapier_trigger_new_user_unsubscribed($name, $email, $list_id);
			}
		}
		
		//get AWS creds
		$q = 'SELECT s3_key, s3_secret FROM login WHERE id = '.$userID;
		$r = mysqli_query($mysqli, $q);
		if ($r)
		{
		    while($row = mysqli_fetch_array($r))
		    {
				$s3_key = $row['s3_key'];
				$s3_secret = $row['s3_secret'];
		    }
		}
		
		//get from name and from email
		$q2 = 'SELECT app FROM lists WHERE id = '.$list_id;
		$r2 = mysqli_query($mysqli, $q2);
		if ($r2)
		{
		    while($row = mysqli_fetch_array($r2))
		    {
				$app = $row['app'];
		    }  
		    $q3 = 'SELECT from_name, from_email, reply_to, smtp_host, smtp_port, smtp_ssl, smtp_username, smtp_password, allocated_quota FROM apps WHERE id = '.$app;
			$r3 = mysqli_query($mysqli, $q3);
			if ($r3)
			{
			    while($row = mysqli_fetch_array($r3))
			    {
					$from_name = $row['from_name'];
					$from_email = $row['from_email'];
					$reply_to = $row['reply_to'];
					$smtp_host = $row['smtp_host'];
					$smtp_port = $row['smtp_port'];
					$smtp_ssl = $row['smtp_ssl'];
					$smtp_username = $row['smtp_username'];
					$smtp_password = $row['smtp_password'];
					$allocated_quota = $row['allocated_quota'];
			    }  
			}
		}
		
		if($goodbye)
		{
			//Convert personaliztion tags
			convert_tags($goodbye_subject, $email_id, 'subject');
			convert_tags($goodbye_message, $email_id, 'message');
			
			//Convert email tag
			$goodbye_message = str_replace('[Email]', $email, $goodbye_message);
			$goodbye_subject = str_replace('[Email]', $email, $goodbye_subject);
			
			//Resubscribe tag
			$goodbye_message = str_replace('<resubscribe', '<a href="'.APP_PATH.'/subscribe/'.short($email).'/'.short($list_id).'" ', $goodbye_message);
	    	$goodbye_message = str_replace('</resubscribe>', '</a>', $goodbye_message);
			$goodbye_message = str_replace('[resubscribe]', APP_PATH.'/subscribe/'.short($email).'/'.short($list_id), $goodbye_message);
			
			include('includes/helpers/PHPMailerAutoload.php');
			$mail = new PHPMailer();	
			if($s3_key!='' && $s3_secret!='')
			{
				$mail->IsAmazonSES();
				$mail->AddAmazonSESKey($s3_key, $s3_secret);
			}
			else if($smtp_host!='' && $smtp_port!='' && $smtp_ssl!='' && $smtp_username!='' && $smtp_password!='')
			{
				$mail->IsSMTP();
				$mail->SMTPDebug = 0;
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = $smtp_ssl;
				$mail->Host = $smtp_host;
				$mail->Port = $smtp_port; 
				$mail->Username = $smtp_username;  
				$mail->Password = $smtp_password;
			}
			$mail->CharSet	  =	"UTF-8";
			$mail->From       = $from_email;
			$mail->FromName   = $from_name;
			$mail->Subject = $goodbye_subject;
			$mail->MsgHTML($goodbye_message);
			$mail->AddAddress($email, '');
			$mail->AddReplyTo($reply_to, $from_name);
			$mail->Send();
			
			//Update quota if a monthly limit was set
			if($allocated_quota!=-1)
			{
				//if so, update quota
				$q4 = 'UPDATE apps SET current_quota = current_quota+1 WHERE id = '.$app;
				mysqli_query($mysqli, $q4);
			}
		}
	}
	
if($return_boolean=='true'):
	echo true;
else:
	//if user sets a redirection URL
	if($unsubscribed_url != ''):
		$unsubscribed_url = str_replace('%e', $email, $unsubscribed_url);
		$unsubscribed_url = str_replace('%l', short($list_id), $unsubscribed_url);
		$unsubscribed_url = str_replace('%s', APP_PATH.'/subscribe/'.short($email).'/'.short($list_id), $unsubscribed_url);
		header("Location: ".$unsubscribed_url);
	else:
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="Shortcut Icon" type="image/ico" href="<?php echo APP_PATH;?>/img/favicon.png">
		<title><?php echo _('Unsubscribed');?></title>
	</head>
	<style type="text/css">
		body{
			background: #ffffff;
			font-family: Helvetica, Arial;
		}
		#wrapper 
		{
			background: #f9f9f9;
			
			width: 300px;
			<?php if($feedback!='Email address is invalid.' && $feedback!='Email does not exist.'):?>
			height: 110px;
			<?php else:?>
			height: 70px;
			<?php endif;?>
			
			margin: -150px 0 0 -150px;
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		}
		p{
			text-align: center;
		}
		h2{
			font-weight: normal;
			text-align: center;
		}
		a{
			color: #000;
		}
		a:hover{
			text-decoration: none;
		}
		#top-pattern{
			margin-top: -8px;
			height: 8px;
			background: url("<?php echo APP_PATH; ?>/img/top-pattern.gif") repeat-x 0 0;
			background-size: auto 8px;
		}
	</style>
	<body>
		<div id="top-pattern"></div>
		<div id="wrapper">
			<h2><?php echo $feedback;?></h2>
			<?php if($feedback!=_('Email address is invalid.') && $feedback!=_('Email does not exist.')):?>
				<p><a href="<?php echo APP_PATH; ?>/subscribe/<?php echo short($email);?>/<?php echo short($list_id);?>" title=""><?php echo _('Re-subscribe?');?></a></p>
			<?php endif;?>
		</div>
	</body>
</html>
<?php endif;?>
<?php endif;
	//--------------------------------------------------------------//
	function convert_tags($content_to_replace, $sid, $to_replace)
	//--------------------------------------------------------------//
	{
		global $mysqli;
		global $list_id;
		global $name;
		global $goodbye_subject;
		global $goodbye_message;
		
		preg_match_all('/\[([a-zA-Z0-9!#%^&*()+=$@._\-\:|\/?<>~`"\'\s]+),\s*fallback=/i', $content_to_replace, $matches_var, PREG_PATTERN_ORDER);
		preg_match_all('/,\s*fallback=([a-zA-Z0-9!,#%^&*()+=$@._\-\:|\/?<>~`"\'\s]*)\]/i', $content_to_replace, $matches_val, PREG_PATTERN_ORDER);
		preg_match_all('/(\[[a-zA-Z0-9!#%^&*()+=$@._\-\:|\/?<>~`"\'\s]+,\s*fallback=[a-zA-Z0-9!,#%^&*()+=$@._\-\:|\/?<>~`"\'\s]*\])/i', $content_to_replace, $matches_all, PREG_PATTERN_ORDER);
		preg_match_all('/\[([^\]]+),\s*fallback=/i', $content_to_replace, $matches_var, PREG_PATTERN_ORDER);
		preg_match_all('/,\s*fallback=([^\]]*)\]/i', $content_to_replace, $matches_val, PREG_PATTERN_ORDER);
		preg_match_all('/(\[[^\]]+,\s*fallback=[^\]]*\])/i', $content_to_replace, $matches_all, PREG_PATTERN_ORDER);
		$matches_var = $matches_var[1];
		$matches_val = $matches_val[1];
		$matches_all = $matches_all[1];
		for($i=0;$i<count($matches_var);$i++)
		{   
			$field = $matches_var[$i];
			$fallback = $matches_val[$i];
			$tag = $matches_all[$i];
			
			//if tag is Name
			if($field=='Name')
			{
				if($name=='')
					$content_to_replace = str_replace($tag, $fallback, $content_to_replace);
				else
					$content_to_replace = str_replace($tag, $name, $content_to_replace);
			}
			else //if not 'Name', it's a custom field
			{
				//Get subscriber's custom field values
				$q = 'SELECT custom_fields FROM subscribers WHERE id = '.$sid;
				$r = mysqli_query($mysqli, $q);
				if ($r) while($row = mysqli_fetch_array($r)) $custom_values = $row['custom_fields'];
								
				//if subscriber has no custom fields, use fallback
				if($custom_values=='')
					$content_to_replace = str_replace($tag, $fallback, $content_to_replace);
				//otherwise, replace custom field tag
				else
				{					
					$q5 = 'SELECT custom_fields FROM lists WHERE id = '.$list_id;
					$r5 = mysqli_query($mysqli, $q5);
					if ($r5)
					{
					    while($row2 = mysqli_fetch_array($r5)) $custom_fields = $row2['custom_fields'];
					    $custom_fields_array = explode('%s%', $custom_fields);
					    $custom_values_array = explode('%s%', $custom_values);
					    $cf_count = count($custom_fields_array);
					    $k = 0;
					    
					    for($j=0;$j<$cf_count;$j++)
					    {
						    $cf_array = explode(':', $custom_fields_array[$j]);
						    $key = str_replace(' ', '', $cf_array[0]);
						    
						    //if tag matches a custom field
						    if($field==$key)
						    {
						    	//if custom field is empty, use fallback
						    	if($custom_values_array[$j]=='')
							    	$content_to_replace = str_replace($tag, $fallback, $content_to_replace);
						    	//otherwise, use the custom field value
						    	else
						    	{
						    		//if custom field is of 'Date' type, format the date
						    		if($cf_array[1]=='Date')
							    		$content_to_replace = str_replace($tag, strftime("%a, %b %d, %Y", $custom_values_array[$j]), $content_to_replace);
						    		//otherwise just replace tag with custom field value
						    		else
								    	$content_to_replace = str_replace($tag, $custom_values_array[$j], $content_to_replace);
						    	}
						    }
						    else
						    	$k++;
					    }
					    if($k==$cf_count)
					    	$content_to_replace = str_replace($tag, $fallback, $content_to_replace);
					}
				}
			}
		}
		if($to_replace=='subject')
			$goodbye_subject = $content_to_replace;
		else if($to_replace=='message')
			$goodbye_message = $content_to_replace;
	}
?>