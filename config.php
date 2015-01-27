<?
//Configuration file

//Define Connection Records
$servername = "localhost";
$username = "xxxxx_ownc934";
$password = "xxxxxx";
$dbname = "xxxxx_ownc934";

//Email
$emailHTML='
  <h2>A new user has registered</h2><ul><li>Name: $user_real</li><li>Email: $user_email</li><li>Username: $user_id</li></ul><a href='http://xxxxx.com/terminate.php?user=$user_id'>Terminate User?</a>
  ",$headers);
    mail("$user_email", "Welcome to our Cloud" ,"<html style='padding:0;
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
     $user_real, by now you are probably wondering 'What's next?'. After registration you should download and install the client for your system or the app for your smart phone for which you can find the link on the <a href='http://xxxxx.com'>homepage</a>.
     If you want to manage your account, please login on our website or <a href='http://xxxx.com/index.php'>click here</a>!
   </p>
   <h2>Setting up sync client</h2>
   <p>
    To syncronise your files, set the host to <i>xxxx.com</i> while login and password are the credentials you would normally login with.
   </p>
   <h2>Activate Account</h2>
   <p>
     In order to enable your account, please click the link below.<br/><a href='http://xxxxx.com/activate.php?key=". md5($user_id . $user_id) ."&amp;user=$user_id'>Activate now!</a>
   </p>
  </div>
 
</div></body></html>';
$sendFrom = "admin@xxxx.com";
