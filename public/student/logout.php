<?php
require_once('../../private/initialize.php');

log_out_user('student');
redirect_to(url_for('/login.php'));
?>