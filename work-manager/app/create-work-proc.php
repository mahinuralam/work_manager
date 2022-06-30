<?php
require_once "..\config.php";
$result = "";
if (empty($_POST['projectname']) || empty($_POST['projectDesc'])) {
    $result = "Fillup All Data";
}
else{
    session_start();
    $projectname = $_POST['projectname'];
    $projectDesc = $_POST['projectDesc'];
    $createdBy = $_SESSION['email'];
    
    $sql = "INSERT INTO work(work_name, work_desc, createdby) VALUES ('$projectname', '$projectDesc', '$createdBy')";
    
    if(mysqli_query($conn,$sql) )
    {
        $last_work_id = $conn->insert_id;
        //echo $last_id;
        $sql1 = "INSERT INTO works_member(works_id, members_email, members_role) VALUES ('$last_work_id', '$createdBy', 'Admin')";
        if(mysqli_query($conn,$sql1) )
        {
            echo '<div class="text-center w-100 h-100 d-flex align-items-center justify-content-center">
                <h4 class="text-center w-75 h-75 d-flex  align-items-center justify-content-center">
                    <i class="fas fa-check-circle text-primary"></i> 
                    Work Created!!
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