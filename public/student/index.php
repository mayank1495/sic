<?php require_once('../../private/initialize.php'); ?>
<?php require_login("student"); ?>

<?php

$std=find_user_by_id($_SESSION['std_id'],'student');

?>

<?php include(SHARED_PATH . '/profile_header.php'); ?>

<section>

    <div class="row signup">
        <div class="sign">
            <h1>Student Profile</h1>
        </div>
        <div>
            <div class="row">
            <style scoped>
                input[disabled]{ background-color: white;}
            </style>
                <form action="" class="form" name="form" method="post">
                    <div class="row">
                        <div>
                            <h2>Important Details</h2>
                        </div>
                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="namef" class="form__label">First Name</label>
                                <input type="text" class="form__input" value="<?php echo $std['namef'] ?>" id="namef" name="namef" disabled>
                            </div>
                            <div class="form__group">
                                <label for="namel" class="form__label">Last Name</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['namel'] ?>" id="namel" name="namel">
                            </div>

                            <div class="form__group">
                                <label for="email" class="form__label">Email</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['email'] ?>" id="email" name="email">
                            </div>
                            <div class="form__group">
                                <label for="add" class="form__label">Address</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['addr'] ?>" id="add" name="addr">
                            </div>
                        </div>
                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="citycol" class="form__label">City</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['citycol'] ?>" id="citycol" name="citycol">
                            </div>
                            <div class="form__group">
                                <label for="statecol" class="form__label">State</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['statecol'] ?>" name="statecol">
                            </div>
                            <div class="form__group">
                                <label for="pincol" class="form__label">Pincode</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['pincol'] ?>" id="pincol" name="pincol" min="0">
                            </div>
                            <div class="form__group">
                                <label for="dob" class="form__label">Date of Birth</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['dob'] ?>" id="dob" name="dob">
                            </div>
                            <div class="form__group">
                                <label for="tel" class="form__label">Phone No.</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['tel'] ?>" id="tel" name="tel" min="1000000000" max="9999999999">
                            </div>
                            <div class="form__group">
                                <label for="telalt" class="form__label">Alternate Phone No.</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['telalt'] ?>" id="telalt" name="telalt" min="1000000000" max="9999999999">
                            </div>
                            <br>
                            <div class="form__group">
                                <label for="gn" class="form__label">Gender</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['gen'] ?>" id="gn" name="gen">
                            </div>
                            <!-- <div class="form__group">
                                <div class="row">
                                    <div class="col-1-of-4">
                                        <label for="gn">Gender</label>
                                    </div> -->
                                    <!-- <div class="col-1-of-6">
                                            <input type="text" id="male" name="gen" >
                                            <label for="male">Male</label>
                                        </div>
                                        <div class="col-1-of-3">
                                            <input type="text" id="female" name="gen" >
                                            <label for="female">Female</label>
                                        </div> -->
                                <!-- </div> -->
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
                                <input type="text" class="form__input" disabled value="<?php echo $std['reg'] ?>" id="reg" name="reg">
                            </div>
                            <div class="form__group">
                                <label for="dept" class="form__label">Department</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['dept'] ?>" name="dept">
                            </div>
                            <div class="form__group">
                                <label for="session" class="form__label">Session</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['session'] ?>" name="session">

                            </div>
                            <div class="form__group">
                                <label for="degree" class="form__label">Degree</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['degree'] ?>" name="degree">
                            </div>
                            <div class="form__group">
                                <label for="roll" class="form__label">Roll number</label>
                                <div class="row">
                                    <div class="col-1-of-3">
                                        <input type="text" class="form__input_small" disabled value="<?php echo $std['rollyr'] ?>" id="rollyr" name="rollyr">
                                    </div>
                                    <div class="col-1-of-3">
                                        <input type="text" class="form__input_small" disabled value="<?php echo $std['rolld'] ?>" name="rolld">
                                    </div>
                                    <div class="col-1-of-3">
                                        <input type="text" class="form__input_small" disabled value="<?php echo $std['rolln'] ?>" id="rolln" name="rolln">
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                <label for="sem" class="form__label">Semester</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sem'] ?>" id="sem" name="sem">
                                <!--  -->
                            </div>
                            <div class="form__group">
                                <label for="cg" class="form__label">CGPA</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['cg'] ?>" id="cg" name="cg">
                            </div>
                            <div class="form__group">
                                <label for="sg1" class="form__label">SGPA SEM 1</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sg1'] ?>" id="sg1" name="sg1">
                            </div>
                            <div class="form__group">
                                <label for="sg2" class="form__label">SGPA SEM 2</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sg2'] ?>" id="sg2" name="sg2">
                            </div>
                            <div class="form__group">
                                <label for="sg3" class="form__label">SGPA SEM 3</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sg3'] ?>" id="sg3" name="sg3">
                            </div>
                            <div class="form__group">
                                <label for="sg4" class="form__label">SGPA SEM 4</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sg4'] ?>" id="sg4" name="sg4">
                            </div>
                            <div class="form__group">
                                <label for="sg5" class="form__label">SGPA SEM 5</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sg5'] ?>" id="sg5" name="sg5">
                            </div>
                            <div class="form__group">
                                <label for="sg6" class="form__label">SGPA SEM 6</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sg6'] ?>" id="sg6" name="sg6">
                            </div>
                            <div class="form__group">
                                <label for="sg7" class="form__label">SGPA SEM 7</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sg7'] ?>" id="sg7" name="sg7">
                            </div>
                            <div class="form__group">
                                <label for="sg8" class="form__label">SGPA SEM 8</label>
                                <input type="text" class="form__input" disabled value="<?php echo $std['sg8'] ?>" id="sg8" name="sg8">
                            </div>
                        </div>
                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="projects" class="form__label">Projects</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['projects'] ?>" id="projects" name="projects">
                            </div>
                            <div class="form__group">
                                <label for="interns" class="form__label">Interns</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['interns'] ?>" id="interns" name="interns">
                            </div>
                            <div class="form__group">
                                <label for="research" class="form__label">Research Interests</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['research'] ?>" id="research" name="research">
                            </div>
                            <div class="form__group">
                                <label for="fav_course" class="form__label">Favourite Courses</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['fav_course'] ?>" id="fav_course" name="fav_course">
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
                                <input type="text" class="form__input_med" disabled value="<?php echo $std['motto'] ?>" id="motto" name="motto">
                            </div>
                            <div class="form__group">
                                <label for="club" class="form__label">Clubs</label>
                                <!-- <input type="textarea" class="form__input_med" disabled value="<?php echo $std['club'] ?>" id="club" name="club"> -->
                                <textarea name="club" id="club" disabled  class="form__input_med"><?php echo $std['club'] ?></textarea>
                            </div>
                            <div class="form__group">
                                <label for="sportcol" class="form__label">Sports Activities</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['sportcol'] ?>" id="sportcol" name="sportcol">
                            </div>
                            <div class="form__group">
                                <label for="hobbcol" class="form__label">Hobbies</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['hobbcol'] ?>" id="hobbcol" name="hobbcol">
                            </div>
                        </div>
                        <div class="col-1-of-2">
                            <div class="form__group">
                                <label for="achievementcol" class="form__label">Achievements</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['achievementcol'] ?>" id="achievementcol" name="achievementcol">
                            </div>
                            <div class="form__group">
                                <label for="posr" class="form__label">Position of Responsibility</label>
                                <input type="text" class="form__input_big" disabled value="<?php echo $std['posr'] ?>" id="posr" name="posr">
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
                                    <input type="text" class="form__input" disabled value="<?php echo $std['board12'] ?>" id="board12" name="board12">
                                </div>
                                <div class="form__group">
                                    <label for="scname12" class="form__label">School Name</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['scname12'] ?>" id="scname12" name="scname12">
                                </div>
                                <div class="form__group">
                                    <label for="scadd12" class="form__label">School Address</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['scadd12'] ?>" id="scadd12" name="scadd12">
                                </div>
                                <div class="form__group">
                                    <label for="sccit12" class="form__label">City</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['sccit12'] ?>" id="sccit12" name="sccit12">
                                </div>
                                <div class="form__group">
                                    <label for="state12" class="form__label">State</label>
                                    <input list="state12" class="form__input" disabled value="<?php echo $std['state12'] ?>" name="state12">

                                </div>
                                <div class="form__group">
                                    <label for="pin12" class="form__label">School Pincode</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['pin12'] ?>" id="pin12" name="pin12" min="0">
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="reg12" class="form__label">Roll No.</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['reg12'] ?>" id="reg12" name="reg12" min="0">
                                </div>
                                <div class="form__group">
                                    <label for="mar12" class="form__label">Marks in %</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['mar12'] ?>" id="mar12" name="mar12">
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
                                    <input type="text" class="form__input" disabled value="<?php echo $std['board11'] ?>" id="board11" name="board11">
                                </div>
                                <div class="form__group">
                                    <label for="scname11" class="form__label">School Name</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['scname11'] ?>" id="scname11" name="scname11">
                                </div>
                                <div class="form__group">
                                    <label for="scadd11" class="form__label">School Address</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['scadd11'] ?>" id="scadd11" name="scadd11">
                                </div>
                                <div class="form__group">
                                    <label for="sccit11" class="form__label">City</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['sccit11'] ?>" id="sccit11" name="sccit11">
                                </div>
                                <div class="form__group">
                                    <label for="state11" class="form__label">State</label>
                                    <input list="state11" class="form__input" disabled value="<?php echo $std['state11'] ?>" name="state11">
                                </div>
                                <div class="form__group">
                                    <label for="pin11" class="form__label">School Pincode</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['pin11'] ?>" id="pin11" name="pin11" min="0">
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="reg11" class="form__label">Roll No.</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['reg11'] ?>" id="reg11" name="reg11" min="0">
                                </div>
                                <div class="form__group">
                                    <label for="mar11" class="form__label">Marks in %</label>
                                    <input type="text" class="form__input" disabled value="<?php echo $std['mar11'] ?>" id="mar11" name="mar11">
                                </div>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
</section>

<?php include(SHARED_PATH . '/home_footer.php'); ?>