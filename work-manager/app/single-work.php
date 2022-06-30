<?php
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
?>

<?php
    require_once '..\config.php';
    $workId = $_GET['workId'];
    $sql = "SELECT * from work where work_id='$workId'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
?>
<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0 overflow-hidden" id="mainPanel" style="height: 30rem">
    <h4 class="text-center bg-primary text-white p-0 m-0 shadow d-flex justify-content-between">
        <div class="text-center">
            <a href="worklog.php?workId=<?php echo $workId;?>" class="btn btn-light btn-sm shadow mx-2" href="">Work
                Log</a>
        </div>

        <div class="text-center">
            <a href="work-details.php?workId=<?php echo $workId;?>" class="btn btn-light btn-sm shadow mx-2" href="">Work Details</a>
        </div>

        
        
        <span>
            Project Name: <?php echo $row['work_name'];?>
        </span>

        <span>
            Project ID: <?php echo $workId;?>
        </span>

        <div class="text-center">
            <a href="work-up.php?workId=<?php echo $workId;?>" class="btn btn-light btn-sm shadow mx-2" href="">Update Work Details</a>
        </div>

    </h4>

    <div class="h-100 p-3" style="overflow-y: scroll;">
        <div class="row">
            <div class="col-12 col-md-6  my-2">
                <h5 class="">About Project:</h5>
                <?php echo $row['work_desc'];?>
            </div>
            <div class="col-12 col-md-6  my-2">

                <form id="addTeamToWork" class="d-flex">
                    <h5>About Team:</h5>
                    <div class="mx-1">
                        <input type="text" placeholder="Team ID" class="form-control" name="teamId" id="teamId" required>
                    </div>
                    <input type="hidden" id="inputTeamId" name="workId" value="<?php echo $workId;?>">
                    <div class="mx-1">
                        <button id="addMemberSubmit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </form>
                <div id="members-table">
                    <?php
                    $sql1 = "SELECT * from works_member where works_id='$workId'";
                    $result1 = $conn->query($sql1);
                    echo '<table class="table table-hover table-striped">';
                        echo '<thead>';
                            echo '<tr>';
                                echo '<td> Members Email </td>';
                                echo '<td> Role </td>';
                            echo '</tr>';
                        echo '</thead>';
                        echo '<body>';
                        

                    while($row1 = $result1->fetch_assoc()) {
                        echo '<tr>';
                            echo '<td>';
                                echo $row1['members_email'];
                            echo '</td>';
                            echo '<td>';
                                echo $row1['members_role'];
                            echo '</td>';
                        echo '</tr>';

                    }
                    
                    echo '</body>';
                    echo '</table>';
                }?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<!-- CONTENT SECTION END -->

<?php
    require_once "includes/footer.php";
?>
<!-- COMMON JAVASCRIPT CODE -->
<script src="js/common.js"></script>

<script>
$(document).ready(function() {
    $("#addTeamToWork").on("submit", function(e) {
        var dataString = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "add-team-to-work.php",
            data: dataString,
            success: function(data) {
                $('#addTeamToWork').html(data);
            }
        });
        e.preventDefault();
    });

});
</script>