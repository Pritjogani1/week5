<!-- <html>
<body>

Welcome <?php //echo $_GET["name"]; ?><br>
Your email address is: <?php //echo $_GET["email"]; ?>

</body>
</html> -->
<html>
<body>

<h1>Welcome to my home page!</h1>

<?php /*require 'noFileExists.php';   
include 'noFileExists.php';
echo "I have a.";*/
// echo readfile("prit.txt");



?>
<?php
$myfile = fopen("prit.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("prit.txt"));
fclose($myfile);
?>
</body>
</html>