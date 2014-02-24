vanilla-codeigniter-js-connect
==============================

A JSConnect Library Class for CodeIgniter

This contains 2 php file that we need to connect JSConnect (Vanilla forum) with Codeigniter App for SSO and Auto Login (optional)
- application/libraries/jsconnect.php
- application/controllers/js-auth.php

In order to get this to work on your vanilla installation you must:
- Install and configure Vanilla Forums
- Add the JsConnect Plugin to your forums from this address: 
 -- http://vanillaforums.org/addon/jsconnect-plugin
- I recommend this other plugin which does an auto sign-in:
 -- http://vanillaforums.org/addon/jsconnectautosignin-plugin

- configure the jsconnect plugin with desired data.
 -- You may read the doc for JSConnect from here: http://vanillaforums.org/docs/jsconnect

Now let's integrate this code into your codeigniter project
- Copy the Jsconnect.php file into your libraries folder. ( CI_Install_folder/application/libraries )
- Open the js-auth.php file.
- give the $clientID and $secret in line 21 and 22, You have to set this client_id and secret id from vanilla forum jsconnect plugin
- Upload this file to your Controllers folder (CI_Install_folder/application/controllers)
- Add the details to your settings in JsConnect Plugin and then add your clientID and secret to the Codeigniter function.


You are done!
