<?php
    // Initialize the language code variable
$lc = "";
    // Check to see that the global language server variable isset()
    // If it is set, we cut the first two characters from that string
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // Now we simply evaluate that variable to detect specific languages

switch ($lc) {
  case 'es':
      header("location: es/home.php");
      exit();
    break;

  case 'en':
      header("location: en/home.php");
      exit();
    break;

  default:
      header("location: es/home.php");
      exit();
    break;
}
?>
