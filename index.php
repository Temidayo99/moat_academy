<!-- header -->
<?php
    include_once('header.php');
?>
<head>
    <title>Home Page</title>
</head>
<!-- header ends -->


<!-- the main content starts here -->
    <p><a href="admin_login.php">Staff Login</a></p>
    <main>
        <div class="container-fluid" style="background-color:blanchedalmond;" >
            <div class="row">
                <div class="col-md-8" style="background-color:bisque; margin:auto; ">
                    <h4 class="text-warning mt-md-4">A database to search for the prevalence of various disease in Nigeria</h4>
                    <p class="text-center">To be part of the Army of contributors, click here to <span ><a href="signup.php" class="text-danger">sign up</a> if you have an account, <a href="login.php" class="text-success">sign in</a></span></p>
                    
                    <form action="search.php" method="get" class="form">
                        <input type="text" name="search" id="frontsearchbar" class="form-control" style="margin-top:100px;" placeholder="Search for a disease name (e.g. malaria)"/>

                    
                        <button class="btn btn-outline-success justify-item-md-end mt-md-2" type="submit" >Search</button>
                    </form>
                    
                </div>
            </div>

        </div>


    </main>
<!-- the main content ends here -->


<!-- footer -->
<?php
    include_once('footer.php');
?>
<!-- footer ends -->