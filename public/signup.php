<?php require_once('../private/initialize.php'); ?>

<?php

$error=[];
$msg="User Already exists.";
if(isset($_GET['err'])){
// echo "i up";
$err=$_GET['err']?$_GET['err']:0;
if($err==1)
{
    $error[]=$msg;
    $err=0;
    // redirect_to('signup.php');
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
                <?php echo display_errors($error) ?>
                    <form action="procs.php" class="form" name="form" method="post">
                        <div class="row">
                            <div>
                                <h2>Important Details</h2>
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
                                    <div class="row">
                                        <div class="col-1-of-2">  
                                            <input type="text" class="form__input_small" placeholder="example199X" id="email" name="email" required onblur="checkEmail(this);" onkeyup="checkEmail(this);">
                                        </div>
                                        <div class="col-1-of-2">
                                            <input list="emaildom" class="form__input_small" placeholder="@gmail.com" name="emaildom" required>
                                            <datalist id="emaildom">
                                                <option value="@gmail.com">
                                                <option value="@btech.nitdgp.ac.in">
                                                <option value="@yahoo.co.in">
                                                <option value="@hotmail.com">
                                                <option value="@xyz.com">
                                                <option value="@outlook.com">
                                                <option value="@aol.com">
                                                <option value="@inbox.com">
                                                <option value="@icloud.com">
                                                <option value="@microsoft.com">
                                            </datalist>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__group">
                                    <label for="pwd" class="form__label">Password</label>
                                    <input type="password" class="form__input" placeholder="Password" id="pwd" name="pwd" required>
                                </div>
                                <div class="form__group">
                                    <label for="cpwd" class="form__label">ReEnter Password</label>
                                    <input type="password" class="form__input" placeholder="Confirm Password" id="cpwd" name="cpwd" onblur="checkPwdb(this);" onkeyup="checkPwd(this);" required>
                                </div>
                                <div class="form__group">
                                    <label for="add" class="form__label">Address</label>
                                    <input type="text" class="form__input_big" placeholder="Address" id="add" name="addr" required>
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="citycol" class="form__label">City</label>
                                    <input type="text" class="form__input" onblur="checkString(this);" onkeyup="checkString(this);" placeholder="City" id="citycol" name="citycol" required>
                                </div>
                                <div class="form__group">
                                    <label for="statecol" class="form__label">State</label>
                                    <input list="statecol" class="form__input" placeholder="State" name="statecol" required>
                                    <datalist id="statecol">
                                        <option value="Andaman & Nicobar Islands">
                                        <option value="Andhra Pradesh" >
                                        <option value="Arunachal Pradesh" >
                                        <option value="Assam" >
                                        <option value="Bihar" >
                                        <option value="Chandigarh" >
                                        <option value="Chhattisgarh" >
                                        <option value="Dadra & Nagar Haveli" >
                                        <option value="Daman & Diu" >
                                        <option value="Delhi" >
                                        <option value="Goa" >
                                        <option value="Gujarat" >
                                        <option value="Haryana" >
                                        <option value="Himachal Pradesh" >
                                        <option value="Jammu & Kashmir" >
                                        <option value="Jharkhand" >
                                        <option value="Karnataka" >
                                        <option value="Kerala" >
                                        <option value="Lakshadweep" >
                                        <option value="Madhya Pradesh" >
                                        <option value="Maharashtra" >
                                        <option value="Manipur" >
                                        <option value="Meghalaya" >
                                        <option value="Mizoram" >
                                        <option value="Nagaland" >
                                        <option value="Orissa" >
                                        <option value="Puducherry" >
                                        <option value="Punjab" >
                                        <option value="Rajasthan" >
                                        <option value="Sikkim" >
                                        <option value="Tamil Nadu" >
                                        <option value="Telangana" >
                                        <option value="Tripura" >
                                        <option value="Uttarakhand" >
                                        <option value="Uttar Pradesh" >
                                        <option value="West Bengal" >
                                    </datalist>
                                </div>
                                <div class="form__group">
                                    <label for="pincol" class="form__label">Pincode</label>
                                    <input type="number" class="form__input" placeholder="713209" id="pincol" name="pincol" min="0" required>
                                </div>
                                <div class="form__group">
                                    <label for="dob" class="form__label">Date of Birth</label>
                                    <input type="date" class="form__input" placeholder="" id="dob" name="dob" required>
                                </div>
                                <div class="form__group">
                                    <label for="tel" class="form__label">Phone No.</label>
                                    <input type="number" class="form__input" placeholder="Phone" id="tel" name="tel" min="1000000000" max="9999999999" onblur="checkPhone(this);" onkeyup="checkPhone(this);" required>
                                </div>
                                <div class="form__group">
                                    <label for="telalt" class="form__label">Alternate Phone No.</label>
                                    <input type="number" class="form__input" placeholder="Phone" id="telalt" name="telalt" min="1000000000" max="9999999999" onblur="checkPhone(this);" onkeyup="checkPhone(this);"  required>
                                </div>
                                <br>
                                <div class="form__group">
                                    <div class="row">
                                        <div class="col-1-of-4">
                                            <label for="gn">Gender</label>
                                        </div>
                                        <div class="col-1-of-6">
                                            <input type="radio" id="male" name="gen" required>
                                            <label for="male">Male</label>
                                        </div>
                                        <div class="col-1-of-3">
                                            <input type="radio" id="female" name="gen" required>
                                            <label for="female">Female</label>
                                        </div>
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
                                    <input type="number" class="form__input" placeholder="Registration No." id="reg" name="reg" step="1" min="20140000" max="20179990" required>
                                </div>
                                <div class="form__group">
                                    <label for="dept" class="form__label">Department</label>
                                    <input list="dept" class="form__input" placeholder="IT" name="dept" required>
                                    <datalist id="dept">
                                      <option value="IT">
                                      <option value="CSE">
                                      <option value="EE">
                                      <option value="ECE">
                                      <option value="ME">
                                      <option value="MME">
                                      <option value="CE">
                                      <option value="BT">
                                    </datalist>
                                </div>
                                <div class="form__group">
                                    <label for="session" class="form__label">Session</label>
                                    <input list="session" class="form__input" placeholder="2015-2019" name="session" required>
                                    <datalist id="session">
                                      <option value="2014-2018">
                                      <option value="2015-2019">
                                      <option value="2016-2020">
                                      <option value="2017-2021">
                                    </datalist>
                                </div>
                                <div class="form__group">
                                    <label for="degree" class="form__label">Degree</label>
                                    <input list="degree" class="form__input" placeholder="BTECH" name="degree" required>
                                    <datalist id="degree">
                                      <option value="BTECH">
                                      <option value="MTECH">
                                      <option value="MCA">
                                      <option value="MBA">
                                      <option value="PhD">
                                    </datalist>
                                </div>
                                <div class="form__group">
                                    <label for="roll" class="form__label">Roll number</label>
                                    <div class="row">
                                        <div class="col-1-of-3">
                                            <input type="number" class="form__input_small" placeholder="15" id="rollyr" name="rollyr" step="1" min="14" max="17" required>
                                        </div>
                                        <div class="col-1-of-3">
                                            <input list="rolld" class="form__input_small" placeholder="IT" name="rolld" required> <datalist id="rolld">
                                              <option value="IT">
                                              <option value="CSE">
                                              <option value="EE">
                                              <option value="ECE">
                                              <option value="ME">
                                              <option value="MME">
                                              <option value="CE">
                                              <option value="BT">
                                            </datalist>       
                                        </div>
                                        <div class="col-1-of-3">
                                            <input type="number" class="form__input_small" placeholder="76" id="rolln" name="rolln" step="1" min="1" max="150" required>        
                                        </div>
                                    </div>
                                </div>
                                <div class="form__group">
                                    <label for="sem" class="form__label">Semester</label>
                                    <input type="number" class="form__input" placeholder="Semester" id="sem" name="sem" step="1.0" min="1" max="8.0"  onblur="disSg(this);" required>
                                    <!-- onblur="disSg(this);" -->
                                </div>
                                <div class="form__group">
                                    <label for="cg" class="form__label">CGPA</label>
                                    <input type="number" class="form__input" placeholder="CGPA" id="cg" name="cg" step="0.1" min="1" max="10.0" required>
                                </div>
                                <div class="form__group">
                                    <label for="sg1" class="form__label">SGPA SEM 1</label>
                                    <input type="number" class="form__input" placeholder="SGPA (put 0 if not started yet)" id="sg1" name="sg1" step="0.1" min="1" max="10.0" required>
                                </div>
                                <div class="form__group">
                                    <label for="sg2" class="form__label">SGPA SEM 2</label>
                                    <input type="number" class="form__input" placeholder="SGPA (put 0 if not started yet)" id="sg2" name="sg2" step="0.1" min="1" max="10.0" required>
                                </div>
                                <div class="form__group">
                                    <label for="sg3" class="form__label">SGPA SEM 3</label>
                                    <input type="number" class="form__input" placeholder="SGPA (put 0 if not started yet)" id="sg3" name="sg3" step="0.1" min="1" max="10.0" required>
                                </div>
                                <div class="form__group">
                                    <label for="sg4" class="form__label">SGPA SEM 4</label>
                                    <input type="number" class="form__input" placeholder="SGPA (put 0 if not started yet)" id="sg4" name="sg4" step="0.1" min="1" max="10.0" required>
                                </div>
                                <div class="form__group">
                                    <label for="sg5" class="form__label">SGPA SEM 5</label>
                                    <input type="number" class="form__input" placeholder="SGPA (put 0 if not started yet)" id="sg5" name="sg5" step="0.1" min="1" max="10.0" required>
                                </div>
                                <div class="form__group">
                                    <label for="sg6" class="form__label">SGPA SEM 6</label>
                                    <input type="number" class="form__input" placeholder="SGPA (put 0 if not started yet)" id="sg6" name="sg6" step="0.1" min="1" max="10.0" required>
                                </div>
                                <div class="form__group">
                                    <label for="sg7" class="form__label">SGPA SEM 7</label>
                                    <input type="number" class="form__input" placeholder="SGPA (put 0 if not started yet)" id="sg7" name="sg7" step="0.1" min="1" max="10.0" required>
                                </div>
                                <div class="form__group">
                                    <label for="sg8" class="form__label">SGPA SEM 8</label>
                                    <input type="number" class="form__input" placeholder="SGPA (put 0 if not started yet)" id="sg8" name="sg8" step="0.1" min="1" max="10.0" required>
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="projects" class="form__label">Projects</label>
                                    <input type="text" class="form__input_big" placeholder="Project details" id="projects" name="projects" required>
                                </div>
                                <div class="form__group">
                                    <label for="interns" class="form__label">Interns</label>
                                    <input type="text" class="form__input_big" placeholder="Intern details" id="interns" name="interns" required>
                                </div>
                                <div class="form__group">
                                    <label for="research" class="form__label">Research Interests</label>
                                    <input type="text" class="form__input_big" placeholder="Research Interests details" id="research" name="research" required>
                                </div>
                                <div class="form__group">
                                    <label for="fav_course" class="form__label">Favourite Courses</label>
                                    <input type="text" class="form__input_big" placeholder="Only include academic courses" id="fav_course" name="fav_course" required>
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
                                    <input type="text" class="form__input_med" placeholder="Motto" id="motto" name="motto" required>
                                </div>
                                <div class="form__group">
                                    <label for="club" class="form__label">Club Membership</label>
                                    <input type="checkbox" name="club" value="GLUG"> GLUG &nbsp
                                    <input type="checkbox" name="club" value="MNTC"> MNTC &nbsp
                                    <input type="checkbox" name="club" value="SAE"> SAE &nbsp
                                    <input type="checkbox" name="club" value="CCA"> CCA &nbsp
                                    <input type="checkbox" name="club" value="Music_Club"> Music_Club &nbsp<br>
                                    <input type="checkbox" name="club" value="Dance_Club"> Dance_Club &nbsp
                                    <input type="checkbox" name="club" value="LC"> LC &nbsp
                                    <input type="checkbox" name="club" value="Spic_Macay"> Spic_Macay &nbsp
                                    <input type="checkbox" name="club" value="EDC"> EDC &nbsp
                                    <input type="checkbox" name="club" value="Prakriti"> Prakriti &nbsp<br>
                                    <input type="checkbox" name="club" value="Debating_Society"> Debating_Society &nbsp
                                    <input type="checkbox" name="club" value="BMEP"> BMEP &nbsp
                                    <input type="checkbox" name="club" value="Other"> Other &nbsp
                                    <input type="checkbox" name="club" value="None"> None &nbsp<br>
                                </div>
                                <div class="form__group">
                                    <label for="sportcol" class="form__label">Sports Activities</label>
                                    <input type="text" class="form__input_big" placeholder="Sports Activities" id="sportcol" name="sportcol" required>
                                </div>
                                <div class="form__group">
                                    <label for="hobbcol" class="form__label">Hobbies</label>
                                    <input type="text" class="form__input_big" placeholder="Hobbies Activities" id="hobbcol" name="hobbcol" required>
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="achievementcol" class="form__label">Achievements</label>
                                    <input type="text" class="form__input_big" placeholder="Achievements" id="achievementcol" name="achievementcol" required>
                                </div>
                                <div class="form__group">
                                    <label for="posr" class="form__label">Position of Responsibility</label>
                                    <input type="text" class="form__input_big" placeholder="Position of Responsibility" id="posr" name="posr" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div>
                                <h2>School Academic Details</h2>
                            </div>
                            <div class="row">
                                <div>
                                    <br><h3 align="center">Class 12</h3><br>
                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <label for="board12" class="form__label">Board</label>
                                        <input type="text" class="form__input" placeholder="CBSE/WBSSE/ICSC" id="board12" name="board12" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="scname12" class="form__label">School Name</label>
                                        <input type="text" class="form__input" placeholder="School Name" id="scname12" name="scname12" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="scadd12" class="form__label">School Address</label>
                                        <input type="text" class="form__input" placeholder="School Address" id="scadd12" name="scadd12" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="sccit12" class="form__label">City</label>
                                        <input type="text" class="form__input" placeholder="Kolkata" id="sccit12" onblur="checkString(this);" onkeyup="checkString(this);" name="sccit12" required>
                                    </div>
                                    <div class="form__group">
                                    <label for="state12" class="form__label">State</label>
                                    <input list="state12" class="form__input" placeholder="State" name="state12" required>
                                    <datalist id="state12">
                                        <option value="Andaman & Nicobar Islands">
                                        <option value="Andhra Pradesh" >
                                        <option value="Arunachal Pradesh" >
                                        <option value="Assam" >
                                        <option value="Bihar" >
                                        <option value="Chandigarh" >
                                        <option value="Chhattisgarh" >
                                        <option value="Dadra & Nagar Haveli" >
                                        <option value="Daman & Diu" >
                                        <option value="Delhi" >
                                        <option value="Goa" >
                                        <option value="Gujarat" >
                                        <option value="Haryana" >
                                        <option value="Himachal Pradesh" >
                                        <option value="Jammu & Kashmir" >
                                        <option value="Jharkhand" >
                                        <option value="Karnataka" >
                                        <option value="Kerala" >
                                        <option value="Lakshadweep" >
                                        <option value="Madhya Pradesh" >
                                        <option value="Maharashtra" >
                                        <option value="Manipur" >
                                        <option value="Meghalaya" >
                                        <option value="Mizoram" >
                                        <option value="Nagaland" >
                                        <option value="Orissa" >
                                        <option value="Puducherry" >
                                        <option value="Punjab" >
                                        <option value="Rajasthan" >
                                        <option value="Sikkim" >
                                        <option value="Tamil Nadu" >
                                        <option value="Telangana" >
                                        <option value="Tripura" >
                                        <option value="Uttarakhand" >
                                        <option value="Uttar Pradesh" >
                                        <option value="West Bengal" >
                                    </datalist>
                                </div>
                                    <div class="form__group">
                                        <label for="pin12" class="form__label">School Pincode</label>
                                        <input type="number" class="form__input" placeholder="School Pincode" id="pin12" name="pin12" min="0" required>
                                    </div>
                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <label for="reg12" class="form__label">Roll No.</label>
                                        <input type="number" class="form__input" placeholder="Roll No." id="reg12" name="reg12" min="0" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="mar12" class="form__label">Marks in %</label>
                                        <input type="number" class="form__input" placeholder="92.8" id="mar12" name="mar12" step="0.01" min="0" max="100" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <br><h3 align="center">Class 11</h3><br>
                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <label for="board11" class="form__label">Board</label>
                                        <input type="text" class="form__input" placeholder="CBSE/WBSSE/ICSC" id="board11" name="board11" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="scname11" class="form__label">School Name</label>
                                        <input type="text" class="form__input" placeholder="School Name" id="scname11" name="scname11" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="scadd11" class="form__label">School Address</label>
                                        <input type="text" class="form__input" placeholder="School Address" id="scadd11" name="scadd11" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="sccit11" class="form__label">City</label>
                                        <input type="text" class="form__input" placeholder="Kolkata" id="sccit11" name="sccit11" onblur="checkString(this);" onkeyup="checkString(this);" required>
                                    </div>
                                    <div class="form__group">
                                    <label for="state11" class="form__label">State</label>
                                    <input list="state11" class="form__input" placeholder="1State" name="state11" required>
                                    <datalist id="state11">
                                        <option value="Andaman & Nicobar Islands">
                                        <option value="Andhra Pradesh" >
                                        <option value="Arunachal Pradesh" >
                                        <option value="Assam" >
                                        <option value="Bihar" >
                                        <option value="Chandigarh" >
                                        <option value="Chhattisgarh" >
                                        <option value="Dadra & Nagar Haveli" >
                                        <option value="Daman & Diu" >
                                        <option value="Delhi" >
                                        <option value="Goa" >
                                        <option value="Gujarat" >
                                        <option value="Haryana" >
                                        <option value="Himachal Pradesh" >
                                        <option value="Jammu & Kashmir" >
                                        <option value="Jharkhand" >
                                        <option value="Karnataka" >
                                        <option value="Kerala" >
                                        <option value="Lakshadweep" >
                                        <option value="Madhya Pradesh" >
                                        <option value="Maharashtra" >
                                        <option value="Manipur" >
                                        <option value="Meghalaya" >
                                        <option value="Mizoram" >
                                        <option value="Nagaland" >
                                        <option value="Orissa" >
                                        <option value="Puducherry" >
                                        <option value="Punjab" >
                                        <option value="Rajasthan" >
                                        <option value="Sikkim" >
                                        <option value="Tamil Nadu" >
                                        <option value="Telangana" >
                                        <option value="Tripura" >
                                        <option value="Uttarakhand" >
                                        <option value="Uttar Pradesh" >
                                        <option value="West Bengal" >
                                    </datalist>
                                </div>
                                    <div class="form__group">
                                        <label for="pin11" class="form__label">School Pincode</label>
                                        <input type="number" class="form__input" placeholder="School Pincode" id="pin11" name="pin11" min="0" required>
                                    </div>
                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <label for="reg11" class="form__label">Roll No.</label>
                                        <input type="number" class="form__input" placeholder="Roll No." id="reg11" name="reg11" min="0" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="mar11" class="form__label">Marks in %</label>
                                        <input type="number" class="form__input" placeholder="92.8" id="mar11" name="mar11" step="0.01" min="0" max="100" required>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div>
                                    <br><h3 align="center">Class 10</h3><br>
                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <label for="board10" class="form__label">Board</label>
                                        <input type="text" class="form__input" placeholder="CBSE/WBSSE/ICSC" id="board10" name="board10" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="scname10" class="form__label">School Name</label>
                                        <input type="text" class="form__input" placeholder="School Name" id="scname10" name="scname10" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="scadd10" class="form__label">School Address</label>
                                        <input type="text" class="form__input" placeholder="School Address" id="scadd10" name="scadd10" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="sccit10" class="form__label">City</label>
                                        <input type="text" class="form__input" placeholder="Kolkata" id="sccit10" name="sccit10" onblur="checkString(this);" onkeyup="checkString(this);" required>
                                    </div>
                                    <div class="form__group">
                                    <label for="state10" class="form__label">State</label>
                                    <input list="state10" class="form__input" placeholder="State" name="state10" required>
                                    <datalist id="state10">
                                        <option value="Andaman & Nicobar Islands">
                                        <option value="Andhra Pradesh" >
                                        <option value="Arunachal Pradesh" >
                                        <option value="Assam" >
                                        <option value="Bihar" >
                                        <option value="Chandigarh" >
                                        <option value="Chhattisgarh" >
                                        <option value="Dadra & Nagar Haveli" >
                                        <option value="Daman & Diu" >
                                        <option value="Delhi" >
                                        <option value="Goa" >
                                        <option value="Gujarat" >
                                        <option value="Haryana" >
                                        <option value="Himachal Pradesh" >
                                        <option value="Jammu & Kashmir" >
                                        <option value="Jharkhand" >
                                        <option value="Karnataka" >
                                        <option value="Kerala" >
                                        <option value="Lakshadweep" >
                                        <option value="Madhya Pradesh" >
                                        <option value="Maharashtra" >
                                        <option value="Manipur" >
                                        <option value="Meghalaya" >
                                        <option value="Mizoram" >
                                        <option value="Nagaland" >
                                        <option value="Orissa" >
                                        <option value="Puducherry" >
                                        <option value="Punjab" >
                                        <option value="Rajasthan" >
                                        <option value="Sikkim" >
                                        <option value="Tamil Nadu" >
                                        <option value="Telangana" >
                                        <option value="Tripura" >
                                        <option value="Uttarakhand" >
                                        <option value="Uttar Pradesh" >
                                        <option value="West Bengal" >
                                    </datalist>
                                </div>
                                    <div class="form__group">
                                        <label for="pin10" class="form__label">School Pincode</label>
                                        <input type="number" class="form__input" placeholder="School Pincode" id="pin10" name="pin10" min="0" required>
                                    </div>
                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <label for="reg10" class="form__label">Roll No.</label>
                                        <input type="number" class="form__input" placeholder="Roll No." id="reg10" name="reg10" min="0" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="mar10" class="form__label">Marks in %</label>
                                        <input type="number" class="form__input" placeholder="92.8" id="mar10" name="mar10" step="0.01" min="0" max="100" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <br><h3 align="center">Class 9 and before</h3><br>
                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <label for="board9b" class="form__label">Board</label>
                                        <input type="text" class="form__input" placeholder="CBSE/WBSSE/ICSC" id="board9b" name="board9b" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="scname9b" class="form__label">School Name</label>
                                        <input type="text" class="form__input" placeholder="School Name" id="scname9b" name="scname9b" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="scadd9b" class="form__label">School Address</label>
                                        <input type="text" class="form__input" placeholder="School Address" id="scadd9b" name="scadd9b" required>
                                    </div>
                                    <div class="form__group">
                                        <label for="sccit9b" class="form__label">City</label>
                                        <input type="text" class="form__input" placeholder="Kolkata" id="sccit9b" name="sccit9b" onblur="checkString(this);" onkeyup="checkString(this);" required>
                                    </div>
                                    <div class="form__group">
                                    <label for="state9b" class="form__label">State</label>
                                    <input list="state9b" class="form__input" placeholder="State" name="state9b" required>
                                    <datalist id="state9b">
                                        <option value="Andaman & Nicobar Islands">
                                        <option value="Andhra Pradesh" >
                                        <option value="Arunachal Pradesh" >
                                        <option value="Assam" >
                                        <option value="Bihar" >
                                        <option value="Chandigarh" >
                                        <option value="Chhattisgarh" >
                                        <option value="Dadra & Nagar Haveli" >
                                        <option value="Daman & Diu" >
                                        <option value="Delhi" >
                                        <option value="Goa" >
                                        <option value="Gujarat" >
                                        <option value="Haryana" >
                                        <option value="Himachal Pradesh" >
                                        <option value="Jammu & Kashmir" >
                                        <option value="Jharkhand" >
                                        <option value="Karnataka" >
                                        <option value="Kerala" >
                                        <option value="Lakshadweep" >
                                        <option value="Madhya Pradesh" >
                                        <option value="Maharashtra" >
                                        <option value="Manipur" >
                                        <option value="Meghalaya" >
                                        <option value="Mizoram" >
                                        <option value="Nagaland" >
                                        <option value="Orissa" >
                                        <option value="Puducherry" >
                                        <option value="Punjab" >
                                        <option value="Rajasthan" >
                                        <option value="Sikkim" >
                                        <option value="Tamil Nadu" >
                                        <option value="Telangana" >
                                        <option value="Tripura" >
                                        <option value="Uttarakhand" >
                                        <option value="Uttar Pradesh" >
                                        <option value="West Bengal" >
                                    </datalist>
                                </div>
                                    <div class="form__group">
                                        <label for="pin9b" class="form__label">School Pincode</label>
                                        <input type="number" class="form__input" placeholder="School Pincode" id="pin9b" name="pin9b" min="0" required>
                                    </div>
                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__group">
                                        <label for="reg9b" class="form__label">Estimated Average Marks in %</label>
                                        <input type="number" class="form__input" placeholder="92.8" id="reg9b" name="reg" step="0.01" min="0" max="100" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <h2>Other School Details</h2>
                            </div>

                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="sportsc" class="form__label">Sports Activities</label>
                                    <input type="text" class="form__input_big" placeholder="Sports Activities" id="sportsc" name="sportsc" required>
                                </div>
                                <div class="form__group">
                                    <label for="hobbsc" class="form__label">Hobbies</label>
                                    <input type="text" class="form__input_big" placeholder="Hobbies" id="hobbsc" name="hobbsc" required>
                                </div>
                            </div>
                            <div class="col-1-of-2">
                                <div class="form__group">
                                    <label for="achievementsc" class="form__label">Achievements</label>
                                    <input type="text" class="form__input_big" placeholder="Achievements" id="achievementsc" name="achievementsc" required>
                                </div>
                                <div class="form__group">
                                    <label for="posr" class="form__label">Position of Responsibility</label>
                                    <input type="text" class="form__input_big" placeholder="Position of Responsibility" id="posr" name="posr" required>
                                </div>
                            </div>
                            
                        </div> -->
                        <div class="row sbmt">
                            <input type="submit" class="in-btn" id="sub" name="submit">
                            <input type="reset" class="in-btn" name="reset">
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>

<?php include(SHARED_PATH . '/home_footer.php'); ?>