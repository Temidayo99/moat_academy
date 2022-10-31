<?php
//var_dump($_REQUEST);

//var_dump($_SERVER);

//var_dump($_GET);
//here, I capture the response from the flutterwave payment platform
    if (isset($_GET['status'])){
//        check payment status
        if ($_GET['status'] == 'cancelled'){
            header('Location: donate.php');
        }elseif($_GET['status'] == 'successful'){

//        verify the transaction if and when it is confirmed successful
//            start by creating needed variables
            $tx_id = $_GET['tx_ref'];
            $secret_key = "FLWSECK_TEST-670a3122cb51b60332fbf6a98bfd6378-X"; //flutterwave secret key
//            end of needed variables
            $txid = $_GET['transaction_id'];

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: Bearer $secret_key"
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $resp = json_decode($response);

            // echo "<pre>";
            // echo $response;
            // echo "</pre>";

            print_r($response);

            if($resp->status == 'success'){
                if($resp->data->charged_amount >= $resp->data->meta->price){
                    echo "Donation completed successfully. Thank you!";
                }else{
                    echo "Fraud Detected!!!";
                }
            }else{
                echo "Donation cannot be processed successfully";
            }
        }
    }
?>