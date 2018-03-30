<?php

  function log_in_user($user,$type="") {
    session_regenerate_id();
    if($type=="student") {
      $_SESSION['std_id'] = $user['id'];
    } else {
      $_SESSION['adm_id'] = $user['id'];
    }
    $_SESSION['last_login'] = time();
  }

  function log_out_user($type="") {
    if($type=="student") {
      unset($_SESSION['std_id']);
    } else {
      unset($_SESSION['adm_id']);
    }
    unset($_SESSION['last_login']);
  }

  // Performs all actions necessary to log out an std
  // function log_out_std() {
  //   unset($_SESSION['std_id']);
  //   unset($_SESSION['last_login']);
  //   // unset($_SESSION['username']);
  //   // session_destroy(); // optional: destroys the whole session
  //   return true;
  // }

  function is_logged_in($type="") {

    if($type=="student") {
      return isset($_SESSION['std_id']);
    } else {
      return isset($_SESSION['adm_id']);
    }
    // return isset($_SESSION['std_id']);
  }


  function require_login($type="") {
    if(!is_logged_in($type)) {
      redirect_to(url_for('/login.php'));
    } else {
      // Do nothing, let the rest of the page proceed
    }
  }

  function is_login_active() {
    if(is_logged_in('student')) {
      student();
    }else if(is_logged_in('admin')) {
      admin();
  }
}

?>
