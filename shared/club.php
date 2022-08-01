<?php
// include contants
    include_once"shared/constant.php";

    // class definition 
    class Club{
        public $clubname;
        public $clubyear;
        public $clubdescription;
        public $slogan;
        public $country;
        public $emblem;
        public $conn; //DB connection handler


        // member functions
        // begin constructor

        function __construct(){
            // INSTANTIATE MYSQLI OBJECT 
            $this->conn = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

            // check if it is connected
            if ($this->conn->connect_error){
                die("Connection Failed: ".$this->conn->connect_error);
            }
        }
        // end constructor 

        // get country name from listclub.php file
        // begin list club

        function listclubs(){
            // prepare statement
            $stmt = $this->conn->prepare("SELECT * FROM clubs JOIN countries ON countries.country_id = clubs.country_id");

            // execute
            $stmt->execute();

            // get result
            $result = $stmt->get_result();

            // fetch records
            $records = array();
            if ($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $records[]=$row;
                };
            }
            return $records;
        }

        // end list club

         // begin get club

         function getCountry(){
            // prepare statement
            $stmt = $this->conn->prepare("SELECT country_id, country_name FROM countries");

            // execute
            $stmt->execute();

            // get result
            $result = $stmt->get_result();

            // fetch records
            $records = array();
            if ($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $records[]=$row;
                }
            }
            return $records;
        }

        // end get club

        // begin insert club
            function insertClub($name, $year, $description, $country, $slogan){
                $stmt = $this->conn->prepare("INSERT INTO clubs(club_name, year_established, club_desc, emblem, country_id, slogan) VALUES(?,?,?,?,?,?)");

                // bind parameters

                $emblem = "image";
                $stmt->bind_param("ssssis",$name, $year, $description, $emblem, $country, $slogan);

                // excecute
                $stmt->execute();

                if($stmt->affected_rows==1){
                    return true;
                }else{
                    return $stmt->error;
                }
            }

        // end insert club

        // begin get club
            function getClub($clubid){
                // prepare statement

                $stmt = $this->conn->prepare("SELECT * FROM clubs WHERE club_id= ?");

                // bind parameter
                $stmt->bind_param('i',$clubid);

                // execute

                $stmt->execute();

                // get result
                $result = $stmt->get_result();

                return $result->fetch_assoc();
            }

        // end get clubl

    }
?>

