<!-- header -->
<?php
// new header
    include_once('newheader.php');
?>
<head>
    <title>Home Page</title>
    <style>
        .box{
            height: 500px;
        }
        .searchbox{
            width: 300px;
        }
        @media screen and (min-width: 768px) {
            .box{
                height: 450px;
            }
            .searchbox{
                width: 500px;
            }
        }
</style>
</head>
<!-- header ends -->


<!-- the main content starts here -->
    <!-- <p><a href="admin_login.php">Staff Login</a></p> -->
    <main>
        <div class="container-fluid mb-4">
            <div class="row">
                <div class="box" style="background-color:bisque; margin:auto; background-image:url(pictures/coronavirus-maps-disease.webp); background-repeat:no-repeat;background-size:cover;">
                    <div class="d-flex flex-column justify-content-center align-items-center mt-5" style="background-color:rgba(0,0,0,0.5);color:#fff;">
                        <h4 class="text-warning text-center mt-3 mt-md-4">A database to search for the prevalence of various disease in Nigeria</h4>
                        <p class="text-center">To be part of the Army of contributors, click here to <span ><a href="signup.php" class="text-warning">sign up</a>.</p>
                        
                        <form action="search.php" method="get" class="form d-flex flex-column justify-content-center align-items-center">
                            <input type="text" name="search" id="frontsearchbar" class="form-control searchbox" style="margin-top:100px;" placeholder="Search for a disease name (e.g. malaria)" />

                        
                            <div>
                                <button class="btn btn-outline-warning mt-3 mb-3 mb-md-4" type="submit" >Search</button>
                            </div>
                        </form>
                    
                    </div>
                    
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