<?php
    session_start();
    require_once "..\config.php";
    $email = $_SESSION['email'];
    $ProjectType = $_POST['ProjectType'];
    if($ProjectType=='All')
    {
        $sql = "SELECT * FROM users";
        //echo $sql;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-hover table-striped">';
                echo '<thead>';
                echo '<tr>';
                    echo '<td class=""> Member Name </td>';
                    echo '<td> Designation </td>';
                echo '</tr>';
                echo '</thead>';
                echo '<body>';
            while($row = $result->fetch_assoc()) {
                $MemberName = '';
                $userid = $row['userid'];
                $MemberName = $row['fullName'];
                echo '<tr class="table" id="';
                echo $userid;
                echo'">';
                    echo'<td class="">';
                        echo $MemberName;
                    echo '</td>';
                    echo'<td class="">';
                        echo $row['designation'];
                    echo '</td>';
                echo '</tr>';
            }
            echo '</body>';
            echo '</table>';

        }
    }
    else{
        
    }
    
?>