<?php require_once('../private/initialize.php'); ?>

<?php  is_login_active() ?>
<?php

$errors=[];
$login_failure_msg = "Log in was unsuccessful.";
$login_error_acess = "User dont have login access. Please wait for the admin to authorise you.";

if(is_post_request())
{
    $user_type=$_POST['user'];
    $email=$_POST['email'];

    $usr=find_user_by_email($email,$user_type);
    if($usr) {
        if(has_access($usr)) {
            if(password_verify($_POST['password'],$usr['pwd']))
            {
                log_in_user($usr,$user_type);
                redirect_to(url_for($user_type.'/index.php'));
            }
            else
            {
                $errors[] = $login_failure_msg;
                // $errors[] = "Invalid Password.";
            }
        }else {
            $errors[]=$login_error_acess;
        }
    }else {
        $errors[] = $login_failure_msg;
    }
}
?>


<?php include(SHARED_PATH . '/home_header.php'); ?>

<section style="height: 87vh;">
    <div class="row signup">
        <div class="sign">
            <h1>LOGIN</h1>
        </div>
        <div>
            <div class="row">
                <?php echo display_errors($errors); ?>
                
                <form action="" class="form" method="post">
                    <div class="row">
                        <div class="col-1-of-2">
                            <div>
                                <h2>User</h2>
                            </div>
                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email" id="email" required name="email">
                                <label for="email" class="form__label" style="padding-top: 0.3rem; padding-bottom: 1.5rem;">Email</label>
                            </div>
                            <div class="form__group">
                                <input type="password" class="form__input" placeholder="Password" id="pwd" required name='password'>
                                <div class="row">
                                    <div class="col-1-of-3">
                                        <label for="pwd" class="form__label" style="padding-top: 0.3rem; padding-bottom: 1rem;">Password</label>
                                    </div>
                                    <div class="col-1-of-3" style="padding-top: 0.3rem; padding-bottom: 1rem;">
                                        <a href="#" style="text-decoration: underline; color: black; font-size: 14px; ">Forget Password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form__group" style="margin-left:10px; margin-bottom:10px; margin-top: 10px;">
                                    <div class="row">
                                        <div class="col-1-of-4">
                                            <label for="gn">USER: </label>
                                        </div>
                                        <div class="col-1-of-6">
                                            <input type="radio" id="student" name="user" value="student" required>
                                            <label for="student">Student</label>
                                        </div>
                                        <div class="col-1-of-3">
                                            <input type="radio" id="admin" name="user" value="admin" required>
                                            <label for="admin">Admin</label>
                                        </div>
                                    </div>
                                </div>
                            <div class="row sbmt" style="text-align: left;">
                                <input type="submit" class="in-btn"  value="Login" style="color:white; font-size: 14px;">
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