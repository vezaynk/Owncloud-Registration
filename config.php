<?
//User
$quota = "none";
//Configuration file
//General
$websiteUrl = "http://xxxx.com";
//Path to files
$pathToActivate = "http://xxxx.com/activate.php";
$pathToTerminate = "http://xxxx.com/terminate.php";
//Define Connection Records
$servername = "localhost";
$username = "xxxxx_ownc934";
$password = "xxxxxx";
$dbname = "xxxxx_ownc934";
$prefix = "oc_";
//Email
$sendFrom = "noreply@xxxx.com";
$yourEmail = "xxxx@gmail.com";

$emailHTML="<html style='padding:0;
  margin:0;'><body style='padding:0;
  margin:0;'><div id='wrapper' style='font-family:Verdana;width:100%;background-color:#fff;text-align:center;'>
<div id='header' style='font-family:Verdana;width:80%;background-color:#00CDCD;color:white;padding:5px;'>
  <h2>Welcome to our Cloud!</h2>
</div>
 <div id='body' style='width: 80%;
  background-color: #E0EEEE;
  padding: 5px;'>
   <h2>What's next?</h2>
   <p>
     $user_real, by now you are probably wondering 'What's next?'. After registration you should download and install the 
     client for your PC, phone and tablet <a href=''>here</a>.
     If you want to manage your account, please login on our website or <a href='$websiteUrl'>click here</a>!
   </p>
   <h2>Setting up sync client</h2>
   <p>
    To syncronise your files, set the host to <i>$websiteUrl</i> while login and password are the credentials you would normally login with.
   </p>
   <h2>Activate Account</h2>
   <p>
     In order to enable your account, please click the link below.<br/><a href='$pathToActivate?key=". md5($user_id . $user_id) ."&amp;user=$user_id'>Activate now!</a>
   </p>
  </div>
 
</div></body></html>";

//Email Headers (Should not modify)
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "From: $sendFrom";

