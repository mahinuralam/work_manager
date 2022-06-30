<?php
    session_start();
    require_once "..\config.php";
    $email = $_SESSION['email'];
    $teamType = $_POST['teamType'];
    if($teamType=='All')
    {
        $sql = "SELECT * FROM teams_members WHERE members_email='$email'";
        //echo $sql;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-hover table-striped">';
                echo '<thead>';
                echo '<tr>';
                    echo '<td class=""> Team Name </td>';
                    echo '<td> My Role </td>';
                    echo '<td> View </td>';
                echo '</tr>';
                echo '</thead>';
                echo '<body>';
            while($row = $result->fetch_assoc()) {
                //Query Team Name
                $tameName = '';
                $teamId = $row['teams_id'];
                $sql1 = "SELECT team_name FROM team WHERE team_id='$teamId'";
                //echo $sql1;
                $result1 = $conn->query($sql1);
                while($row1 = $result1->fetch_assoc()) {
                    $tameName = $row1['team_name'];
                }
                echo '<tr class="table" id="'; echo $teamId; echo'">';
                    echo'<td class="">';
                        echo $tameName;
                    echo '</td>';
                    echo'<td class="">';
                        echo $row['members_role'];
                    echo '</td>';
                    echo'<td class="">';
                        echo '<a href="single-team.php?teamId='; echo $teamId; echo'" class="text-primary border-0"><i class="fas fa-info-circle bg-white"></i></a>';
                    echo '</td>';
                echo '</tr>';

            }
            echo '</body>';
            echo '</table>';

        }
    }
    else{
        if($teamType=='Created')
        {
            $role = 'Admin';
            $sql = "SELECT * FROM teams_members WHERE members_email='$email' AND members_role='$role'";
            $result = $conn->query($sql);
        }
        else{
            $role = 'Admin';
            $sql = "SELECT * FROM teams_members WHERE members_email='$email' AND members_role!='$role'";
            $result = $conn->query($sql);
        }

        if ($result->num_rows > 0) {
            echo '<table class="table table-hover table-striped">';
                echo '<thead>';
                echo '<tr>';
                    echo '<td class=""> Team Name </td>';
                    echo '<td> My Role </td>';
                    echo '<td> View </td>';
                echo '</tr>';
                echo '</thead>';
                echo '<body>';
            while($row = $result->fetch_assoc()) {
                //Query Team Name
                $tameName = '';
                $teamId = $row['teams_id'];
                $sql1 = "SELECT team_name FROM team WHERE team_id='$teamId'";
                //echo $sql1;
                $result1 = $conn->query($sql1);
                while($row1 = $result1->fetch_assoc()) {
                    $tameName = $row1['team_name'];
                }
                echo '<tr class="" id="'; echo $teamId; echo'">';
                    echo'<td class="">';
                        echo $tameName;
                    echo '</td>';
                    echo'<td class="">';
                        echo $row['members_role'];
                    echo '</td>';
                    echo'<td class="">';
                        echo '<a href="single-team.php?teamId='; echo $teamId; echo'" class="text-primary border-0"><i class="fas fa-info-circle bg-white"></i></a>';
                    echo '</td>';
                echo '</tr>';

            }
            echo '</body>';
            echo '</table>';

        }
        
    }
    
?>