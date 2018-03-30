<?php require_once('../../private/initialize.php') ?>
<?php require_login('student') ?>

<?php
$errors=[];
$success="";
$no_password_match="Current Password does not match.";

if(is_post_request()) {
    $oldpwd=$_POST['oldpwd'];
    $pwd=get_pwd($_SESSION['std_id'],'student');
    if(password_verify($oldpwd,$pwd)) {
        change_pwd($_POST['pwd'],$_SESSION['std_id'],'student');
        $success="Password changed.";
    }else {
        $errors[]=$no_password_match;        
    }
}

?>

<?php include(SHARED_PATH.'/profile_header.php') ?>


<section style="min-height: 87vh; max-height: 100%;">
    <div class="row signup">
        <div class="sign">
            <h1>Change password</h1>
        </div>
        <div>
            <div class="row">
                <?php echo display_errors($errors); ?>
                <?php echo display_success($success); ?>
                <form action="" class="form" method="post">
                    <div class="row">
                        <div class="col-1-of-2">
                            <div>
                                <h2>Student</h2>
                            </div>
                            <div class="form__group">
                                <label for="oldpwd" class="form__label">Current Password</label>
                                <input type="password" class="form__input" placeholder="Password" id="oldpwd" name="oldpwd" required>
                            </div>
                            <div class="form__group">
                                <label for="pwd" class="form__label">New Password</label>
                                <input type="password" class="form__input" placeholder="Password" id="pwd" name="pwd" required>
                            </div>
                            <div class="form__group">
                                <label for="cpwd" class="form__label">Confirm Password</label>
                                <input type="password" class="form__input" placeholder="Confirm Password" id="cpwd" name="cpwd" onblur="checkPwdb(this);"
                                    onkeyup="checkPwd(this);" required>
                            </div>
                            <div class="row sbmt" style="text-align: left; margin-top: 2rem">
                                <input type="submit" class="in-btn" value="Change" style="color:white; font-size: 14px;">
                                <input type="reset" class="in-btn">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


<?php include(SHARED_PATH . '/home_footer.php'); ?>