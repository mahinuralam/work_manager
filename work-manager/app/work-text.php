<?php
    require_once "..\config.php";
    session_start();
    $worktext = $_POST['worktext'];
    $workId = $_POST['workId'];
    $email = $_SESSION['email'];
    // echo $worktext;
    // echo $email;
    // echo $workId;
    $sql1 = "SELECT members_role FROM works_member WHERE members_email='$email' AND works_id='$workId'";
    $result1 = $conn->query($sql1);
    $Role = '';
    while($row1 = $result1->fetch_assoc()) {
        $Role = $row1['members_role'];
    }
    $sql = "INSERT INTO worktext(worktextBy, worktext, worktextRole, worktextWorkid) value('$email', '$worktext', '$Role', '$workId')";
    if(mysqli_query($conn,$sql) )
    {
        $sql2 = "SELECT * FROM worktext WHERE worktextWorkid='$workId'";
        $result2 = $conn->query($sql2);
        while($row2 = $result2->fetch_assoc()) {
            echo '
                <div class="card my-3">
                        <h6 class="ps-2">
                        ';
                        echo $row2['worktextRole'];
                        echo '</h6>
                        <p class="ps-4">';
                        echo $row2['worktext'];
                        echo '</p>
                        </div>';            
        }
    }
    else{
        echo "hoy nai";
    }
?>