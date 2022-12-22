
<?php
    include_once('newheader.php');
?>
<head>
    <title>Sign Up</title>
    <style>
    .box{
        width: 300px;
    }
    @media screen and (min-width: 768px) {
		.box{
            width: 400px;
        }
	}
</style>
</head>



<main>

    <?php

        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";   

        // check if submit button is clicked 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // validate input

        // sanitize input


                // include shared folder
                include_once("shared/user.php");
                //create object of the user class

                $obj = new User();

                //access insert user
                $output = $obj->registerEditor($_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['email'], $_POST['password'],  $_POST['address']);
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mb-4 box" style="margin: auto;height:auto;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius:10px;">

                <form method="POST" action="" class="px-3 px-md-4 py-3">

                    <h3 style="text-align: center;" class="mt-md-3 mb-md-3">Sign-up Form</h3>

                    <?php

                        if (isset($output)){
                            echo $output;
                            header('Location: loginsuccess.php');
                        }
                    ?>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" name="fname" id="fname" placeholder="Input your firstname" value="" class="form-control" required />
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls mt-3">
                            <input type="text" name="lname" id="lname" placeholder="Input your lastname/surname" value="" class="form-control" required />
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls mt-3">
                            <input type="tel" name="phone" id="phone" placeholder="Input your phone number" value="" class="form-control" required />
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls mt-3">
                            <input type="email" name="email" id="email" placeholder="Input your email address" value="" class="form-control" required>
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls mt-3">
                            <input type="password" name="password" id="password" placeholder="Input your preferred password" value="" class="form-control" required />
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls mt-3">
                            <textarea type="text" name="address" id="address" placeholder="Input your address" value="" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls mt-3 mb-3">
                            <input type="submit" name="submit" id="btnSignUp" value="Sign Up" class="form-control btn btn-outline-success mb-md-3"/>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    
</main>

<!-- footer -->
<?php 
    include_once('footer.php');
?>
<!-- footer ends