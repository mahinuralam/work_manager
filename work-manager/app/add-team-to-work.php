<?php
require_once "..\config.php";
//echo "Antu";
$result = "";
if (empty($_POST['teamId']) || empty($_POST['workId'])) {
    $result = "Fillup All Data";
}
else{
    session_start();
    $teamId = $_POST['teamId'];
    $workId = $_POST['workId'];
    $email = $_SESSION['email'];
    //echo $teamId;
    $sql = "SELECT * FROM teams_members where teams_id='$teamId'";
    $result = $conn->query($sql);
    $f=0;
    while($row = $result->fetch_assoc()) {
        $email1 = $row['members_email'];
        $members_role = $row['members_role'];
        if($email1==$_SESSION['email']){
            continue;
        }
        $sql2 = "INSERT INTO works_member(works_id, members_email, members_role) VALUE('$workId', '$email1', '$members_role')";
        if(mysqli_query($conn,$sql2) )
    {
         //echo $members_role;
    }
     else{
      //echo "ERROR: Could not able to execute . " . mysqli_error($conn);
      $f=1;
    }
    }
    if($f==0){
        echo 'Team Added';
    }
    else{
        echo 'Something Wrong';
    }
    
}

?>