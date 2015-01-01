<?
//Mess around with it
$key = $_GET['key'];

$user = $_GET['user'];



if (md5($user . $user)==$key){

$servername = "localhost";

$username = "xxxxx_ownc934";

$password = "xxxxxxx";

$dbname = "xxxxxx_ownc934";



// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}


//Removes quota limit
$sql = "REPLACE `$dbname`.`oc_preferences` (`userid`, `appid`, `configkey`, `configvalue`) VALUES ('$user', 'files', 'quota', 'none');";



if (mysqli_query($conn, $sql)) {

    echo "Record updated successfully";

} else {

    echo "Error updating record: " . mysqli_error($conn);

}



mysqli_close($conn);

}

?>