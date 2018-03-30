<?php require_once('../../private/initialize.php'); ?>

<?php

$errors=[];
$msg="User Already exists.";

if(is_post_request())
{
    // $email=$_POST['email'].$_POST['emaildom'];
    // $std=find_student_by_email($email);
    // if(!$std) {
    //     $errors=[];
    //     $data=get_fields_and_values();
    //     insert_into_stu($data);
    // } else {
    //     $errors[]=$msg;
    // }
    $namef=$_POST['namef'];
    $namel=$_POST['namel'];
    $email=$_POST['email'];
    $pwd=password_hash($_POST['pwd'],PASSWORD_BCRYPT);
    $query="INSERT INTO admins(namef,namel,email,pwd) VALUES";
    $query.="('".$namef."',";
    $query.="'".$namel."',";
    $query.="'".$email."',";
    $query.="'".$pwd."')";
    // echo $query;
    $result=mysqli_query($db,$query);
    if(!$result) {
        die('Query FAILED' . mysqli_error($db));
    } else {
    echo "Record Created";
    }
}

?>

<?php include(SHARED_PATH . '/home_header.php'); ?>

    <section>

        <div class="row signup">
            <div class="sign">
                <h1>Student Sign up</h1>
            </div>
            <div>
                <div class="row">
                <?php echo display_errors($errors) ?>
                    <form action="" class="form" name="form" method="post">
                        <div class="row">
                            <div>
                                <h2>Admin Details</h2>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="namef" class="form__label">First Name</label>
                                    <input type="text" onblur="checkString(this);" onkeyup="checkString(this);" class="form__input" placeholder="First Name" id="namef" name="namef" required>
                               </div>
                                <div class="form__group">
                                    <label for="namel" class="form__label">Last Name</label>
                                    <input type="text" class="form__input" onblur="checkString(this);" onkeyup="checkString(this);" placeholder="Last Name" id="namel" name="namel" required>
                                </div>

                                <div class="form__group">
                                    <label for="email" class="form__label">Email</label>
                                    <input type="email" class="form__input" placeholder="Email" id="email" required name="email">
                                </div>
                                <div class="form__group">
                                    <label for="pwd" class="form__label">Password</label>
                                    <input type="password" class="form__input" placeholder="Password" id="pwd" name="pwd" required>
                                </div>
                                <div class="form__group">
                                    <label for="cpwd" class="form__label">ReEnter Password</label>
                                    <input type="password" class="form__input" placeholder="Confirm Password" id="cpwd" name="cpwd" onblur="checkPwdb(this);" onkeyup="checkPwd(this);" required>
                                </div>
                                <div class="row sbmt">
                                    <input type="submit" class="in-btn" id="sub" name="submit">
                                    <input type="reset" class="in-btn" name="reset">
                                </div>
                            </div>
                            </div>
                    </form>
                </div>
            </div>


        </div>
    </section>

<?php include(SHARED_PATH . '/home_footer.php'); ?>