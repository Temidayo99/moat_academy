<style>
#sm .links{
    display: inline-block;
    /* padding-right: 10px; */
} 

#sm a{
    text-decoration: none;
    color: #000;
    font-size: 20px;
    
}

#hrLine{
    color: #000;
    /* width: 450px;  */
}
@media screen and (min-width: 767px) {
    #hrLine{
        /* color: #000; */
        width: 450px; 
    }
}
</style>

<!-- the footer starts here -->
<footer>
    <div class="mt-md-3">
        <div class=" mt-md-3">
            <div class="container-fluid" >
                <div class="row">
                    <div align="center">
                        <hr id="hrLine"/>
                    </div>
                
                    <div class="col-md-12 text-center">
                        <div id="sm" class="mb-2">
                            <div class="links git">
                                <i class="fa-brands fa-github"></i>
                                <a href="https://github.com/topinsn">Github</a>
                            </div>
                            <div class="links twitter">
                                <i class="fa-brands fa-twitter"></i>
                                <a href="https://twitter.com/topinsn">Twitter</a>
                            </div>
                            <div class="links">
                                <i class="fa-brands fa-linkedin"></i>
                                <a href="https://www.linkedin.com/in/topeoyelami/">LinkedIn</a>
                            </div>
                    </div>               

                        <span> All rights reserved. &copy; Qi-Wang <?php $year = 2022; echo $year?> - <?php $newYear = date('Y'); echo $newYear; ?> </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>
<!-- the footer ends here -->
</body>
</html>