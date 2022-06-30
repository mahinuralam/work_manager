<?php
    session_start();
    require_once "..\config.php";
    $email = $_SESSION['email'];
    $ProjectType = $_POST['ProjectType'];
    if($ProjectType=='All') {
        $sql = "SELECT * FROM works_member WHERE members_email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-hover table-striped">';
                echo '<thead>';
                echo '<tr>';
                    echo '<td class=""> Project Name </td>';
                    echo '<td> My Role </td>';
                    echo '<td> View </td>';
                echo '</tr>';
                echo '</thead>';
                echo '<body>';
            while($row = $result->fetch_assoc()) {
                $WorkName = '';
                $works_id = $row['works_id'];
                $sql1 = "SELECT work_name FROM work WHERE work_id='$works_id'";
                $result1 = $conn->query($sql1);
                while($row1 = $result1->fetch_assoc()) {
                    $WorkName = $row1['work_name'];
                }
                echo '<tr class="table" id="'; echo $works_id; echo'">';
                    echo'<td class="">';
                        echo $WorkName;
                    echo '</td>';
                    echo'<td class="">';
                        echo $row['members_role'];
                    echo '</td>';
                    echo'<td class="">';
                        echo '<a href="single-work.php?workId=';
                        echo $works_id;
                        echo'" class="text-primary border-0"><i class="fas fa-info-circle bg-white"></i></a>';
                    echo '</td>';
                echo '</tr>';

            }
            echo '</body>';
            echo '</table>';
        }
    }
    else{
        if($ProjectType=='Created'){
            $role = 'Admin';
            $sql = "SELECT * FROM works_member WHERE members_email='$email' AND members_role='$role'";
            $result = $conn->query($sql);
        }
        else{
            $role = 'Admin';
            $sql = "SELECT * FROM works_member WHERE members_email='$email' AND members_role!='$role'";
            $result = $conn->query($sql);
        }

        if ($result->num_rows > 0) {
            echo '<table class="table table-hover table-striped">';
                echo '<thead>';
                echo '<tr>';
                    echo '<td class=""> Project Name </td>';
                    echo '<td> My Role </td>';
                    echo '<td> View </td>';
                echo '</tr>';
                echo '</thead>';
                echo '<body>';
            while($row = $result->fetch_assoc()) {
                $WorkName = '';
                $works_id = $row['works_id'];
                $sql1 = "SELECT work_name FROM work WHERE work_id='$works_id'";
                $result1 = $conn->query($sql1);
                while($row1 = $result1->fetch_assoc()) {
                    $WorkName = $row1['work_name'];
                }
                echo '<tr class="table" id="'; echo $works_id; echo'">';
                    echo'<td class="">';
                        echo $WorkName;
                    echo '</td>';
                    echo'<td class="">';
                        echo $row['members_role'];
                    echo '</td>';
                    echo'<td class="">';
                        echo '<a href="single-work.php?workId='; echo $works_id; echo'" class="text-primary border-0"><i class="fas fa-info-circle bg-white"></i></a>';
                    echo '</td>';
                echo '</tr>';
            }
            echo '</body>';
            echo '</table>';
        }
    }
?>