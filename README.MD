#Polite Warning:
Do not use! I broke it! Will fix! Eventually!

#Owncloud Registration System
This is a substitute for a much-needed feature in Own Cloud which devs neglet to implement - the registration system.
I did a lot and I mean **a lot** of searching to find someone who already made this but to no avail... I had to do it myself.
I nicely commented everything so there shouldn't be any confusion whatsoever.
##Update config.php
This:
```
'passwordsalt' => 'xxxxxxx',
```
Needs to become this:
```
'passwordsalt' => '',
```
After this change, owncloud will no longer be able to read the current passwords and will require for you to use the 'forgot password' function.
##Installation
Simply upload these files to where they seem most appropriate.
###Files include
####registration.php
This file does all the heavy lifting. It validates all the input then adds it to the appropriate database and sends an activation email to the user.
####activate.php
This file is tasked with changing or removing the quota limit thus *activating* the account.
####terminate.php
This is a makeshift form that will let you terminate any user (apart from yourself) by simply entering their username and a secret password
####pswd.php
Contains a lot of functions required for the registration process to go smoothly.
