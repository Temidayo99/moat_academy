<?php
    include_once('editor_user_header.php');
    // include_once('dashboard.php');
?>
<style>
    table tr td a{
        text-decoration: none;
    }

    table caption{
        font-size: 3em;
        color: #000000;
    }
</style>
<main>
<div class="container">
    <div class="row">
        <div class="col-md">

        <?php 
        // var_dump($_POST);
        // var_dump($_SESSION);
        ?>
            <table class="table table-md table-hover table-striped table-responsive-md table-active caption-top ">
                <caption class="text-center">List of all Recorded Cases </caption>
                <thead class= "table-light">
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Disease Name</th>
                        <th scope="col">Country</th>
                        <th scope="col">State</th>
                        <th scope="col">Local Government</th>
                        <th scope="col">Status</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                        include_once('csl.php');

                        // create object of the class

                        $obj = new Country;
                        // reference the method to get the list
                        // $listR = $obj->listRecordedCases();

                        $listR = $obj->listRecordedCases();
                        // i dunno what to do
                        // loop thrugh the array


                        if (count($listR) > 0){
                            $number = 0;
                            foreach ($listR as $key => $value){
                                $listId = $value['rd_id'];
                                $number++;
                           
                    
                        
                    ?>
                    <tr>
                        <th scope="row"> <?php echo $number.'.'; ?></th>
                        <td><?php echo $value['disease_name'] ?></td>
                        <td><?php echo $value['country_name'] ?></td>
                        <td><?php echo $value['state_name'] ?></td>
                        <td><?php echo $value['lga_name'] ?></td>
                        <td><?php echo ucfirst($value['rd_status']); ?></td>
                        <td><?php echo ucfirst($value['rd_comment']); ?></td>
                        <td colspan="5"><a href="edit_input.php?rd_id=<?php echo $listId ?>"><span class="text-info">Edit</span></a> | <a href="delete_input.php?rd_id=<?php echo $listId ?>"><span class="text-danger">Delete</span></a></td>
                    </tr>

                    <?php
                         }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</main>


<?php
    include_once('editor_user_footer.php');
?>
