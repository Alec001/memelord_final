<?php
require 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
?>


<?php
$check = $detect->isMobile();
 if($check == true) {
     echo '<div id="mobile">';
     echo '<h3>This is a Mobile</h3>';
     echo '</div>';
 } else {
     echo '<div id="desk">';
     echo '<h3>This is a Desktop</h3>';
     echo '</div>';
 }
?>

<?php
echo '<div id="session">';
var_dump($_SESSION);
echo '</pre>';
var_dump($_GET);
echo '</pre>';
var_dump($_POST);
echo '</pre>';
echo '<div>';


?>
