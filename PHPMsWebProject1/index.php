
<?php

include 'pages/header.php';
//include 'Connect.php';

if($_GET["link"]) include 'pages/'.$_GET["link"];
else include 'pages/home.php';

include 'pages/footer.php';

?>
