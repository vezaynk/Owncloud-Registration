<h1>Owncloud Registration System</h1>
This is a substitute for a much-needed feature in Own Cloud which devs neglet to implement - the registration system.
I did a lot and I mean **a lot** of searching to find someone who already made this but to no avail... I had to do it myself.
I nicely commented everything so there shouldn't be any confusion whatsoever.
<h2>Update config.php</h2>
This:
```
'passwordsalt' => 'xxxxxxx',
```
Needs to become this:
```
'passwordsalt' => '',
```
After this change, owncloud will no longer be able to read the current passwords and will require for you to use the 'forgot password' function.
<h2>Installation</h2>
Simply upload these files to where they seem most appropriate.
