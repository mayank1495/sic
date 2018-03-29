<?php require_once('../private/initialize.php'); ?>

<?php  is_login_active() ?>
<?php

$errors=[];
$login_failure_msg = "Log in was unsuccessful.";

if(is_post_request())
{
    $query="SELECT * FROM stu where email='".$_POST['email']."'";
    $res=mysqli_query($db,$query);
    if(!$res)
    {
        exit("Database query failed.");
    }
    $std=mysqli_fetch_assoc($res);
    if($std)
    {
        if(password_verify($_POST['password'],$std['pwd']))
        {
            log_in_user($std,"student");
            redirect_to(url_for('/student/index.php'));
        }
        else
        {
            $errors[] = $login_failure_msg;
            // $errors[] = "Invalid Password.";
        }
    }
    else
    {
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
                                <h2>Student</h2>
                            </div>
                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Student email" id="email" required name="email">
                                <label for="email" class="form__label">Email</label>
                            </div>
                            <div class="form__group">
                                <input type="password" class="form__input" placeholder="Password" id="pwd" required name='password'>
                                <div class="row">
                                    <div class="col-1-of-3">
                                        <label for="pwd" class="form__label">Password</label>
                                    </div>
                                    <div class="col-1-of-3">
                                        <a href="#" style="text-decoration: underline; color: black; font-size: 14px;">Forget Password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row sbmt" style="text-align: left;">
                                <input type="submit" class="in-btn">
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