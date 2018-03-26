<?php

  // Performs all actions necessary to log in an std
  function log_in_std($std) {
  // Renerating the ID protects the std from session fixation.
    session_regenerate_id();
    $_SESSION['std_id'] = $std['id'];
    $_SESSION['last_login'] = time();
    // $_SESSION['username'] = $std['username'];
    return true;
  }

  // Performs all actions necessary to log out an std
  function log_out_std() {
    unset($_SESSION['std_id']);
    unset($_SESSION['last_login']);
    // unset($_SESSION['username']);
    // session_destroy(); // optional: destroys the whole session
    return true;
  }


  // is_logged_in() contains all the logic for determining if a
  // request should be considered a "logged in" request or not.
  // It is the core of require_login() but it can also be called
  // on its own in other contexts (e.g. display one link if an std
  // is logged in and display another link if they are not)
  function is_logged_in() {
    // Having a std_id in the session serves a dual-purpose:
    // - Its presence indicates the std is logged in.
    // - Its value tells which std for looking up their record.
    return isset($_SESSION['std_id']);
  }

  // Call require_login() at the top of any page which needs to
  // require a valid login before granting acccess to the page.
  function require_login() {
    if(!is_logged_in()) {
      redirect_to(url_for('/login.php'));
    } else {
      // Do nothing, let the rest of the page proceed
    }
  }

?>
