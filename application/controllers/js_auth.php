<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class vanilla_forum extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    //Add this line to load the library from the library folder
    $this->load->library('jsconnect');
  }

  function index()
  {
    
  }

  function vanilla()
  {

    // 1. Get your client ID and secret here. These must match those in your jsConnect settings.
    $clientID = "CLIENT_ID";
    $secret = "SECRET";
    
    // 2. Grab the current user from your session management system or database here.
    $signedIn = true; // this is just a placeholder


    // YOUR CODE HERE. Please grab your user info from database or session and make your own code. I just use session for example
    $user_id = $this->session->userdata('user_id');
    $user_name = $this->session->userdata('user_name');
    $user_email = $this->session->userdata('user_email');
    $photourl = "[user photo url, if you don't have keep this blank like $photourl = '' ]";

    // 3. Fill in the user information in a way that Vanilla can understand.
    
    // CHANGE THESE FOUR LINES.
    $user['uniqueid'] = $user_id;
    $user['name'] = $user_name;
    $user['email'] = $user_email;
    $user['photourl'] = $photourl;
      
    // 4. Generate the jsConnect string.

    // This should be true unless you are testing. 
    // You can also use a hash name like md5, sha1 etc which must be the name as the connection settings in Vanilla.
    $secure = true; 

    $this->jsconnect->WriteJsConnect($user, $_GET, $clientID, $secret, $secure);

    
  }

}

/* End of file js-auth.php */
/* Location: ./application/controllers/js-auth.php */