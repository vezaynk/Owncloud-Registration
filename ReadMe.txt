Owncloud-Registration
=====================

Substitute for a much-needed feature in Own Cloud which devs neglet to implement.
In order for this to work you will need to remove the password salt from the config.php file.

This:
'passwordsalt' => 'xxxxxxx',

Needs to become this:
'passwordsalt' => '',

After this change, owncloud will no longer be able to read the current passwords and will require for you to use the 'forgot password' function.
