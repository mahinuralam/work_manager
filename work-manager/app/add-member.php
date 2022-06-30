<?php
require_once "..\config.php";
$result = "";
if (empty($_POST['MembersEmail']) || empty($_POST['MembersRole'])) {
    $result = "Fillup All Data";
}
else{
    session_start();
    $MembersEmail = $_POST['MembersEmail'];
    $MembersRole = $_POST['MembersRole'];
    $teamId = $_POST['teamId'];
    //echo $teamId;
    $sql = "INSERT INTO teams_members(teams_id, members_email, members_role) VALUES ('$teamId', '$MembersEmail', '$MembersRole')";
    
    if(mysqli_query($conn,$sql) )
    {
         echo '<div class="text-center w-100 h-100 d-flex align-items-center justify-content-center">
        <h4 class="text-center w-75 h-75 d-flex  align-items-center justify-content-center">
            <i class="fas fa-check-circle text-primary"></i> 
            Members Added!!
        </h4>
    </div>';
    }
     else{
      echo "ERROR: Could not able to execute . " . mysqli_error($conn);
    }
}

?>