<!doctype html>

?php>

    $username = $_POST['username'];
    $password = $_POST['password'];


$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to db

mysql_connect("localhost","root","");
mysql_select_db()

?>


</html>