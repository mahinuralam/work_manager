<?php
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
?>

<?php
    require_once '..\config.php';
    $teamId = $_GET['teamId'];
    $sql = "SELECT * from team where team_id='$teamId'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
?>

<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0 overflow-hidden" id="mainPanel" style="height: 30rem">
    <h4 class="text-center bg-primary text-white p-0 m-0 shadow d-flex justify-content-between">
        <span>
            Team Name: <?php echo $row['team_name'];?>
        </span>
        <span>
            Team ID: <?php echo $teamId;?>
        </span>

    </h4>

    <div class="h-100 p-3" style="overflow-y: scroll;">
        <div class="row">
            <div class="col-12 col-md-6 border my-2">
                <h5 class="">About Team:</h5>
                <?php echo $row['team_desc'];?>
            </div>
            <div class="col-12 col-md-6 border my-2">
                <h5>About Members:</h5>
                <form class="d-flex">
                    <div class="mx-1">
                        <input type="text" placeholder="Members Email" class="form-control" id="MembersEmail" required>
                    </div>
                    <div class="mx-1">
                        <input type="text" placeholder="Members Role" class="form-control" id="MembersRole" required>
                    </div>
                    <input type="hidden" id="inputTeamId" name="teamId" value="<?php echo $teamId;?>">
                    <div class="mx-1">
                        <button id="addMemberSubmit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </form>
                <div id="members-table">
                    <?php
                    $sql1 = "SELECT * from teams_members where teams_id='$teamId'";
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
        <div class="row">
            <!-- <h4>Work Of This Team</h4> -->

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

    // $("#addMemberSubmit").click(
    //     function() {
    //         var MembersEmail = $("#MembersEmail").val().trim();
    //         var MembersRole = $("#MembersRole").val().trim();
    //         $.ajax({
    //             url: 'add-members.php',
    //             type: 'post',
    //             data: {
    //                 MembersEmail: MembersEmail,
    //                 MembersRole: MembersRole,
    //                 teamId : $teamId
    //             },
    //             success: function(response) {

    //                 $('#tname_response').html(response);

    //             }
    //         });
    //     }
    //     event.preventDefault();
    // );

    $("#addMemberSubmit").click(function() {
        var formData = {
            MembersEmail: $("#MembersEmail").val(),
            MembersRole: $("#MembersRole").val(),
            teamId: $("#inputTeamId").val()
        };
        $.ajax({
            type: "POST",
            url: "add-member.php",
            data: formData,
            dataType: "json",
            success: function(data) {
                //alert(data);
                //$('#exampleModal').html(data);
                alert(data);
            }

        });

        //event.preventDefault();
    });


});
</script>