<?php
    include_once ('newheader.php');
?>
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
<div class="container" style="min-height:450px">
    <div class="row">
        <div class="col-md-6 mt-5 py-4 box" style="margin: auto;height:auto;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius:10px;">
            <form action="payment.php" method="post" class="px-3 px-md-4 py-3">
                <div>
                    <label for=""> Name of Donor:</label>
                    <input type="text" name="name"  class="form-control text-md-center">
                </div>

                <div>
                    <label for=""> Email:</label>
                    <input type="email" name="email"  class="form-control text-md-center">
                </div>

                <div>
                    <label for="">Amount:</label>
                    <input type="number" name="amount" class="form-control" >
                </div>

                <div>
                    <label for="" class="form-label"> Phone Number:</label>
                    <input type="number" name="phone" class="form-control" >
                </div>

                <input type="submit" name="pay" class="form mt-3 btn btn-success">
            </form>
        </div>

    </div>

</div>
<?php
    include_once 'footer.php';
?>
