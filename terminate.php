<h2>User Termination</h2>

<form method="POST">

<input type="text" name="user" placeholder="User" value="<? echo $_GET['user'] ?>"/>

<input type="text" name="auth" placeholder="Auth"/>

<input type="submit" />

</form>

<?
//Mess around with it, you'll figure it out.
if (isset($_POST['user'])&&$_POST['auth']=="xxxx"&&$_POST['user']!="admin"){

require("config.php");

$user=$_POST['user'];

$sql = "DELETE 

FROM ".$prefix."users

WHERE uid = '$user';";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->query($sql) === TRUE) {

    echo "Terminated User<br/>";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

$sql = "DELETE 

FROM ".$prefix."preferences

WHERE userid = '$user';";
if ($conn->query($sql) === TRUE) {

    echo "Terminated Records";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}



}

?>