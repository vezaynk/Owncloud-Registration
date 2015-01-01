<h2>User Termination</h2>

<form method="POST">

<input type="text" name="user" placeholder="User" value="<? echo $_GET['user'] ?>"/>

<input type="text" name="auth" placeholder="Auth"/>

<input type="submit" />

</form>

<?
//Mess around with it
if (isset($_POST['user'])&&$_POST['auth']=="xxxx"&&$_POST['user']!="admin"){

$user=$_GET['user'];

$sql = "DELETE 

FROM oc_users

WHERE uid = '$user';";



$servername = "localhost";

$username = "xxxx_ownc934";

$password = "xxxxxx";

$dbname = "xxxxx_ownc934";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->query($sql) === TRUE) {

    echo "Terminated User<br/>";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

$sql = "DELETE 

FROM oc_preferences

WHERE userid = '$user';";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->query($sql) === TRUE) {

    echo "Terminated Records";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}



}

?>