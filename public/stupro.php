<?php require_once('../private/initialize.php'); ?>
<?php require_login(); ?>
<?php

    $query="SELECT * FROM stu where id='".$_SESSION['std_id']."'";
    $res=mysqli_query($db,$query);
    if(!$res)
    {
        exit("Query failed..");
    }
    $std=mysqli_fetch_assoc($res);
?>
<?php include(SHARED_PATH . '/profile_header.php'); ?>

<section>

    <div class="row signup">
        <div class="sign">
            <h1>Student Profile</h1>
        </div>
        <div>
            <div class="row">
                <form action="" class="form" name="form" method="post">
                    <div class="row">
                        <div>
                            <h2>Important Details</h2>
                        </div>
                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="namef" class="form__label">First Name</label>
                                <input type="text"   class="form__input" value="<?php echo $std['namef'] ?>" id="namef"
                                    name="namef" disabled>
                            </div>
                            <div class="form__group">
                                <label for="namel" class="form__label">Last Name</label>
                                <input type="text" class="form__input"   disabled value="<?php echo $std['namel'] ?>" id="namel"
                                    name="namel">
                            </div>

                            <div class="form__group">
                                <label for="email" class="form__label">Email</label>
                                        <input type="text" class="form__input" disabled value="<?php echo $std['email'] ?>" id="email" name="email"  >
                            </div>
                            <div class="form__group">
                                <label for="add" class="form__label">Address</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['addr'] ?>" id="add" name="addr">
                            </div>
                        </div>
                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="citycol" class="form__label">City</label>
                                <input type="text" class="form__input"   disabled value="" id="citycol"
                                    name="citycol">
                            </div>
                            <div class="form__group">
                                <label for="statecol" class="form__label">State</label>
                                <input type="text" class="form__input" disabled value="" name="statecol">
                            </div>
                            <div class="form__group">
                                <label for="pincol" class="form__label">Pincode</label>
                                <input type="text" class="form__input" disabled value="" id="pincol" name="pincol" min="0">
                            </div>
                            <div class="form__group">
                                <label for="dob" class="form__label">Date of Birth</label>
                                <input type="text" class="form__input" disabled value="" id="dob" name="dob">
                            </div>
                            <div class="form__group">
                                <label for="tel" class="form__label">Phone No.</label>
                                <input type="text" class="form__input" disabled value="" id="tel" name="tel" min="1000000000" max="9999999999" 
                                    >
                            </div>
                            <div class="form__group">
                                <label for="telalt" class="form__label">Alternate Phone No.</label>
                                <input type="text" class="form__input" disabled value="" id="telalt" name="telalt" min="1000000000" max="9999999999" 
                                    >
                            </div>
                            <br>
                            <div class="form__group">
                                <div class="row">
                                    <div class="col-1-of-4">
                                        <label for="gn">Gender</label>
                                    </div>
                                    <!-- <div class="col-1-of-6">
                                            <input type="text" id="male" name="gen" >
                                            <label for="male">Male</label>
                                        </div>
                                        <div class="col-1-of-3">
                                            <input type="text" id="female" name="gen" >
                                            <label for="female">Female</label>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <h2>College Academic Details</h2>
                        </div>

                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="reg" class="form__label">Registration No.</label>
                                <input type="text" class="form__input" disabled value="" id="reg" name="reg" >
                            </div>
                            <div class="form__group">
                                <label for="dept" class="form__label">Department</label>
                                <input type="text" class="form__input" disabled value="" name="dept">
                            </div>
                            <div class="form__group">
                                <label for="session" class="form__label">Session</label>
                                <input type="text" class="form__input" disabled value="" name="session">

                            </div>
                            <div class="form__group">
                                <label for="degree" class="form__label">Degree</label>
                                <input type="text" class="form__input" disabled value="" name="degree">
                            </div>
                            <div class="form__group">
                                <label for="roll" class="form__label">Roll number</label>
                                <div class="row">
                                    <div class="col-1-of-3">
                                        <input type="text" class="form__input_small" disabled value="" id="rollyr" name="rollyr" >
                                    </div>
                                    <div class="col-1-of-3">
                                        <input type="text" class="form__input_small" disabled value="" name="rolld">
                                    </div>
                                    <div class="col-1-of-3">
                                        <input type="text" class="form__input_small" disabled value="" id="rolln" name="rolln" >
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                <label for="sem" class="form__label">Semester</label>
                                <input type="text" class="form__input" disabled value="" id="sem" name="sem" >
                                <!--  -->
                            </div>
                            <div class="form__group">
                                <label for="cg" class="form__label">CGPA</label>
                                <input type="text" class="form__input" disabled value="" id="cg" name="cg" >
                            </div>
                            <div class="form__group">
                                <label for="sg1" class="form__label">SGPA SEM 1</label>
                                <input type="text" class="form__input" disabled value="" id="sg1" name="sg1" >
                            </div>
                            <div class="form__group">
                                <label for="sg2" class="form__label">SGPA SEM 2</label>
                                <input type="text" class="form__input" disabled value="" id="sg2" name="sg2" >
                            </div>
                            <div class="form__group">
                                <label for="sg3" class="form__label">SGPA SEM 3</label>
                                <input type="text" class="form__input" disabled value="" id="sg3" name="sg3" >
                            </div>
                            <div class="form__group">
                                <label for="sg4" class="form__label">SGPA SEM 4</label>
                                <input type="text" class="form__input" disabled value="" id="sg4" name="sg4" >
                            </div>
                            <div class="form__group">
                                <label for="sg5" class="form__label">SGPA SEM 5</label>
                                <input type="text" class="form__input" disabled value="" id="sg5" name="sg5" >
                            </div>
                            <div class="form__group">
                                <label for="sg6" class="form__label">SGPA SEM 6</label>
                                <input type="text" class="form__input" disabled value="" id="sg6" name="sg6" >
                            </div>
                            <div class="form__group">
                                <label for="sg7" class="form__label">SGPA SEM 7</label>
                                <input type="text" class="form__input" disabled value="" id="sg7" name="sg7" >
                            </div>
                            <div class="form__group">
                                <label for="sg8" class="form__label">SGPA SEM 8</label>
                                <input type="text" class="form__input" disabled value="" id="sg8" name="sg8" >
                            </div>
                        </div>
                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="projects" class="form__label">Projects</label>
                                <input type="text" class="form__input_big" disabled value="" id="projects" name="projects">
                            </div>
                            <div class="form__group">
                                <label for="interns" class="form__label">Interns</label>
                                <input type="text" class="form__input_big" disabled value="" id="interns" name="interns">
                            </div>
                            <div class="form__group">
                                <label for="research" class="form__label">Research Interests</label>
                                <input type="text" class="form__input_big" disabled value="" id="research" name="research">
                            </div>
                            <div class="form__group">
                                <label for="fav_course" class="form__label">Favourite Courses</label>
                                <input type="text" class="form__input_big" disabled value="" id="fav_course" name="fav_course">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <h2>Personal Details</h2>
                        </div>

                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="motto" class="form__label">Motto</label>
                                <input type="text" class="form__input_med" disabled value="" id="motto" name="motto">
                            </div>
                            <!-- <div class="form__group">
                                    <label for="club" class="form__label">Club Membership</label>
                                    <input type="text" name="club" value="GLUG"> GLUG &nbsp
                                    <input type="text" name="club" value="MNTC"> MNTC &nbsp
                                    <input type="text" name="club" value="SAE"> SAE &nbsp
                                    <input type="text" name="club" value="CCA"> CCA &nbsp
                                    <input type="text" name="club" value="Music_Club"> Music_Club &nbsp<br>
                                    <input type="text" name="club" value="Dance_Club"> Dance_Club &nbsp
                                    <input type="text" name="club" value="LC"> LC &nbsp
                                    <input type="text" name="club" value="Spic_Macay"> Spic_Macay &nbsp
                                    <input type="text" name="club" value="EDC"> EDC &nbsp
                                    <input type="text" name="club" value="Prakriti"> Prakriti &nbsp<br>
                                    <input type="text" name="club" value="Debating_Society"> Debating_Society &nbsp
                                    <input type="text" name="club" value="BMEP"> BMEP &nbsp
                                    <input type="text" name="club" value="Other"> Other &nbsp
                                    <input type="text" name="club" value="None"> None &nbsp<br>
                                </div> -->
                            <div class="form__group">
                                <label for="sportcol" class="form__label">Sports Activities</label>
                                <input type="text" class="form__input_big" disabled value="" id="sportcol" name="sportcol">
                            </div>
                            <div class="form__group">
                                <label for="hobbcol" class="form__label">Hobbies</label>
                                <input type="text" class="form__input_big" disabled value="" id="hobbcol" name="hobbcol">
                            </div>
                        </div>
                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="achievementcol" class="form__label">Achievements</label>
                                <input type="text" class="form__input_big" disabled value="" id="achievementcol" name="achievementcol">
                            </div>
                            <div class="form__group">
                                <label for="posr" class="form__label">Position of Responsibility</label>
                                <input type="text" class="form__input_big" disabled value="" id="posr" name="posr">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div>
                            <h2>School Academic Details</h2>
                        </div>
                        <div class="row">
                            <div>
                                <br>
                                <h3 align="center">Class 12</h3>
                                <br>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="board12" class="form__label">Board</label>
                                    <input type="text" class="form__input" disabled value="" id="board12" name="board12">
                                </div>
                                <div class="form__group">
                                    <label for="scname12" class="form__label">School Name</label>
                                    <input type="text" class="form__input" disabled value="" id="scname12" name="scname12">
                                </div>
                                <div class="form__group">
                                    <label for="scadd12" class="form__label">School Address</label>
                                    <input type="text" class="form__input" disabled value="" id="scadd12" name="scadd12">
                                </div>
                                <div class="form__group">
                                    <label for="sccit12" class="form__label">City</label>
                                    <input type="text" class="form__input" disabled value="" id="sccit12"  
                                        name="sccit12">
                                </div>
                                <div class="form__group">
                                    <label for="state12" class="form__label">State</label>
                                    <input list="state12" class="form__input" disabled value="" name="state12">

                                </div>
                                <div class="form__group">
                                    <label for="pin12" class="form__label">School Pincode</label>
                                    <input type="text" class="form__input" disabled value="" id="pin12" name="pin12" min="0">
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="reg12" class="form__label">Roll No.</label>
                                    <input type="text" class="form__input" disabled value="" id="reg12" name="reg12" min="0">
                                </div>
                                <div class="form__group">
                                    <label for="mar12" class="form__label">Marks in %</label>
                                    <input type="text" class="form__input" disabled value="" id="mar12" name="mar12" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <br>
                                <h3 align="center">Class 11</h3>
                                <br>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="board11" class="form__label">Board</label>
                                    <input type="text" class="form__input" disabled value="" id="board11" name="board11">
                                </div>
                                <div class="form__group">
                                    <label for="scname11" class="form__label">School Name</label>
                                    <input type="text" class="form__input" disabled value="" id="scname11" name="scname11">
                                </div>
                                <div class="form__group">
                                    <label for="scadd11" class="form__label">School Address</label>
                                    <input type="text" class="form__input" disabled value="" id="scadd11" name="scadd11">
                                </div>
                                <div class="form__group">
                                    <label for="sccit11" class="form__label">City</label>
                                    <input type="text" class="form__input" disabled value="" id="sccit11" name="sccit11"  >
                                </div>
                                <div class="form__group">
                                    <label for="state11" class="form__label">State</label>
                                    <input list="state11" class="form__input" disabled value="" name="state11">
                                </div>
                                <div class="form__group">
                                    <label for="pin11" class="form__label">School Pincode</label>
                                    <input type="text" class="form__input" disabled value="" id="pin11" name="pin11" min="0">
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="reg11" class="form__label">Roll No.</label>
                                    <input type="text" class="form__input" disabled value="" id="reg11" name="reg11" min="0">
                                </div>
                                <div class="form__group">
                                    <label for="mar11" class="form__label">Marks in %</label>
                                    <input type="text" class="form__input" disabled value="" id="mar11" name="mar11" >
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row sbmt">
                            <input type="text" class="in-btn" id="sub" name="submit">
                            <input type="text" class="in-btn" name="reset">
                        </div> -->
                </form>
                </div>
            </div>


        </div>
</section>

<?php include(SHARED_PATH . '/home_footer.php'); ?>