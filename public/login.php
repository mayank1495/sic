<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/home_header.php'); ?>


<section style="height: 87vh;">
<div class="row signup">
    <div class="sign">
        <h1>LOGIN</h1>
    </div>

    <div>
        <div class="row">
            <form action="" class="form">
                <div class="row">

                    <div class="col-1-of-2">
                        <div>
                            <h2>Student</h2>
                        </div>
                        <div class="form__group">
                            <input type="email" class="form__input" placeholder="Student email" id="email" required>
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group">
                            <input type="password" class="form__input" placeholder="Password" id="pwd" required>
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
                    <div class="col-1-of-2">
                        <div>
                            <h2>Admin</h2>
                        </div>
                        <div class="form__group">
                            <input type="email" class="form__input" placeholder="Admin email" id="email" required>
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group">
                            <input type="password" class="form__input" placeholder="Password" id="pwd" required>
<!--                                    <label for="pwd" class="form__label">Password</label>-->
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