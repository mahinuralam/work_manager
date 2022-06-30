<?php
session_start();
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
    require_once "config.php";
?>

<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0 overflow-hidden" id="mainPanel" style="height: 30rem">
    <h3 class="text-center bg-primary text-white p-0 m-0 shadow">Work Details</h3>

    <div class="h-100 p-3" style="overflow-y: scroll;">
        <div>
            <?php


        /*
            $workId = $_GET['workId'];
            //echo $workId;
            $sql = "SELECT * from work_details where workid='$workId'";
            $result = $conn->query($sql);
            echo $result;
            while($row = $result->fetch_assoc()) {

            $complete_date = $row['complete_date'];
            $progress = $row['progress'];
            $project_name = $row['project_name'];
            $project_name = $row['workid'];


            echo '<h4>Name: '; echo $complete_date;
            echo '</h4>';
            echo '<h4>Designation: '; echo $progress;
            echo '</h4>';
            echo '<h4>Email: '; echo $project_name;
            echo '</h4>';

            }

            
*/

            echo '<h4>Project Name: '; echo 'Shop Management System'; 
            echo '</h4>';
            echo '<h4>Project Progress: '; echo '80%';
            echo '</h4>';
            echo '<h4>Project Dealine: '; echo '30/1/2022';
            echo '</h4>';
            

            ?>
        </div>
    </div>
</div>
<!-- CONTENT SECTION END -->

<?php
    require_once "includes/footer.php";
?>
<!-- COMMON JAVASCRIPT CODE -->
<script src="js/common.js"> </script>