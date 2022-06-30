<?php
require_once "..\config.php";
$result = "";
if (empty($_POST['teamname']) || empty($_POST['teamDesc'])) {
    $result = "Fillup All Data";
}
else{
    session_start();
    $teamName = $_POST['teamname'];
    $teamDesc = $_POST['teamDesc'];
    $createdBy = $_SESSION['email'];
    
    $sql = "INSERT INTO team(team_name, team_desc, createdby) VALUES ('$teamName', '$teamDesc', '$createdBy')";
    
    if(mysqli_query($conn,$sql) )
    {
        $last_team_id = $conn->insert_id;
        //echo $last_id;
        $sql1 = "INSERT INTO teams_members(teams_id, members_email, members_role) VALUES ('$last_team_id', '$createdBy', 'Admin')";
        if(mysqli_query($conn,$sql1) )
        {
            echo '<div class="text-center w-100 h-100 d-flex align-items-center justify-content-center">
                <h4 class="text-center w-75 h-75 d-flex  align-items-center justify-content-center">
                    <i class="fas fa-check-circle text-primary"></i> 
                    Team Created!!
                </h4>
            </div>';
        }
        else{
            echo "ERROR: Could not able to execute . " . mysqli_error($conn);
          }
    }
     else{
      echo "ERROR: Could not able to execute . " . mysqli_error($conn);
    }
}

?>