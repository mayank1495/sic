<?php

function url_for($script_path) {

	if($script_path[0] != '/') {
		$script_path = "/" . $script_path;
	}
	return WWW_ROOT . $script_path;
}

function u($string="") {
	return urlencode($string);
}

function raw_u($string="") {
	return rawurlencode($string);
}

function h($string="") {
	return htmlspecialchars($string);
}

function redirect_to($location) {
	header("Location: " . $location);
	exit;
}

function admin() {
	redirect_to(url_for('/admin/index.php'));
}

function student() {
	redirect_to(url_for('/student/index.php'));
}

function is_post_request() {
	return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
	return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function display_errors($errors=array()) {
	$output = '';
	if(!empty($errors)) {
	  $output .= "<div class=\"errors\">";
	  $output .= "Please fix the following errors:";
	  $output .= "<ul>";
	  foreach($errors as $error) {
		$output .= "<li>" . h($error) . "</li>";
	  }
	  $output .= "</ul>";
	  $output .= "</div>";
	}
	return $output;
	}
	
function display_success($success="") {
	$output='';
	if($success!='') {
		$output .= "<div class=\"alert\">";
		$output .= "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";
		$output .= "<strong>Success !! </strong> ";
		$output .=$success;
		$output .=" </div>";
	}
	return $output;
}

  
  function get_and_clear_session_message() {
	if(isset($_SESSION['message']) && $_SESSION['message'] != '') {
	  $msg = $_SESSION['message'];
	  unset($_SESSION['message']);
	  return $msg;
	}
  }
  
  function display_session_message() {
	$msg = get_and_clear_session_message();
	if(!is_blank($msg)) {
	  return '<div id="message">' . h($msg) . '</div>';
	}
  }
  


?>
