    <?php 
    
    include_once("header.php");
    ?>

<?php 
   
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['search'] != '') {

      $query = $_GET['search'];
                    // validate input
                
                    // sanitize input
        function sanitizeInput($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = addslashes($data);
            $data = stripslashes($data);
                            
            return $data;
        }

        $query = sanitizeInput($query);
            
        // include shared folder
        include_once("csl.php");
        
        //create object of the user class
            
        $obj = new Country();
                    
        //access insert user
        
        $output = $obj->Search($query);
    }else{
        //echo '<script>alert("No way")</script>';
        header("Location:index.php");
        
    }
       
?>

<style>
    main{
        min-height: 400px;
    }
</style>


<main>
    <h2> Results</h2>

   

    <table class="table table-bordered table-responsive-md table-active table-striped table-hover">
        <thead>
            <th>No</th>
            <th>Disease</th>
            <th>Country</th>
            <th>State</th>
            <th>Local Government</th>
            <th>Status</th>
            <th>Comment</th>
        </thead>
        <tbody>
            <?php   
                $number = 0;
                foreach ($output as $key => $value){
                    $number++;
                    
        
            ?>
            <tr>
                <td> 
                    <?php 
                      
                       //while (count($output) >= $number){   
                        echo $number."."; 
                        
                        
                        
                    //} 
                
                    ?> 

                </td>
                <td> <?php echo $value['disease_name']; ?> </td>
                <td> <?php echo $value['country_name']; ?> </td>
                <td> <?php echo $value['state_name']; ?> </td>
                <td> <?php echo $value['lga_name']; ?> </td>
                <td> <?php echo ucfirst($value['rd_status']); ?> </td>
                <td> <?php echo ucfirst($value['rd_comment']); ?> </td>

            <?php 
                    
                //continue; 
                } 
            ?>
                
            </tr>
           
        </tbody>
    </table>
    
</main>



<?php
    include_once("footer.php");
?>