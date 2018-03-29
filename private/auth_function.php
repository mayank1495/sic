<?php

  // Performs all actions necessary to log in an std
  // function log_in_std($std) {
  // // Renerating the ID protects the std from session fixation.
  //   session_regenerate_id();
  //   $_SESSION['std_id'] = $std['id'];
  //   $_SESSION['last_login'] = time();
  //   // $_SESSION['username'] = $std['username'];
  //   return true;
  // }

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
    // $type=="student"? unset($_SESSION['std_id']):unset($_SESSION['adm_id']);
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


  // is_logged_in() contains all the logic for determining if a
  // request should be considered a "logged in" request or not.
  // It is the core of require_login() but it can also be called
  // on its own in other contexts (e.g. display one link if an std
  // is logged in and display another link if they are not)
  function is_logged_in($type="") {
    // Having a std_id in the session serves a dual-purpose:
    // - Its presence indicates the std is logged in.
    // - Its value tells which std for looking up their record.
    if($type=="student") {
      return isset($_SESSION['std_id']);
    } else {
      return isset($_SESSION['adm_id']);
    }
    // return isset($_SESSION['std_id']);
  }

  // function is_logged_in_direct() {
  //   if(isset($_SESSION['admin_id']))
  //    return "adm";
  //   if(isset($_SESSION['std_id']))
  //    return "stu";
  // }

  // Call require_login() at the top of any page which needs to
  // require a valid login before granting acccess to the page.
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
