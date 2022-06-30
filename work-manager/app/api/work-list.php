<?php
  // Include config file
    require_once "..\..\config.php";
    if(isset($_POST['projectname']))
    {
        $text = $_POST["projectname"];
        $sql = "SELECT projectname from work where work_name='$text'";
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