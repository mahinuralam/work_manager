<?php
  // Include config file
    require_once "..\..\config.php";
    if(isset($_POST['teamname']))
    {
        $text = $_POST["teamname"];
        $sql = "SELECT team_name from team where team_name='$text'";
        $result = $conn->query($sql);
            if ($result){
                
                    if ( $result->num_rows > 0) {
                        echo "Not Abailable";
                    }
                    else{
                        echo "Abailable";
                    }
                }
    }
?>