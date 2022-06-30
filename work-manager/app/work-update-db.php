<?php
  require_once "config.php";

  $complete_date = $_POST['complete_date'];
  $progress = $_POST['progress'];
  $project_name = $_POST['project_name'];
  $workid = $_POST['workid'];

  $sql_e = "SELECT * FROM work_details";
  $res_e = mysqli_query($conn, $sql_e);
 
    
          $query = "INSERT INTO work_details (complete_date, progress, project_name, workid) VALUES ('$complete_date', '$progress', '$project_name' , '$workid')";
          if(mysqli_query($conn,$query) ) {
              echo '<script type="text/javascript">
              alert("Work Status Updated!!");
              window.location.href = "index.php";
              </script>';
          }
           else{
            echo "ERROR: Could not able to execute . " . mysqli_error($conn);
          }

    
?>