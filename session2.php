<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION["favcolor"]);



session_destroy();

setcookie(session_name(), '', time() - 3600, '/'); // Expire cookie

?>

</body>
</html>