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
        <span>
            Project Name: <?php echo $row['work_name'];}?>
        </span>

        <span>
            Project ID: <?php echo $workId;?>
        </span>
    </h4>

    <div class="h-100 p-3">
        <div class="row">
            <div class="col-12 col-md-6  my-2">

                <div class="">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xs-offset-2 well">
                            <form action="fileupload.php" method="post" enctype="multipart/form-data">
                                <h6>Select File to Upload:</h6>
                                <div class="d-flex">
                                    <div class="form-group">
                                        <input type="file" name="file1" />
                                        <input type="hidden" name="workId" value="<?php echo $workId; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Upload" class="btn btn-info" />
                                    </div>
                                </div>
                                <!-- 
                                <?php //if(isset($_GET['st'])) { ?>
                                <div class="alert alert-danger text-center">
                                    <?php //if ($_GET['st'] == 'success') {
                                       // echo "File Uploaded Successfully!";
                                    //}
                                    //else
                                    // {
                                     //    echo 'Invalid File Extension!';
                                    // } ?>
                                </div>
                                <?php //} ?> -->
                            </form>
                        </div>
                    </div>


                    <table class="table table-responsive table-striped table-hover w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>File Name</th>
                                <th>Uploaded By</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody class="position-absolute " style="overflow-y: scroll; height: 270px;">
                            <?php
                                    $sql2 = "select * from workfile where workId='$workId'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $i = 1;
                                    while($row2 = mysqli_fetch_array($result2)) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row2['workfileName']; ?></td>
                                <td><?php echo $row2['createdBy']; ?></td>
                                <td><a href="uploads/<?php echo $row2['workfileName']; ?>" download>Download
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-12 col-md-6  my-2">

                <h5>Write Somthing:</h5>
                <form id="textform">
                    <textarea id="worktext" name="worktext" cols="45" rows="3"></textarea>
                    <input id="workId" type="hidden" name="workId" value="<?php echo $workId;?>">
                    <button id="Addtext" class='btn btn-primary'>Send</button>
                </form>


                <div id="textMessage" class="border p-3 position-absolute w-25"
                    style="overflow-y: scroll; height: 270px; ">
                    <?php
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
                    ?>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-6">
                <h5>Project File</h5>
                <div>
                    <h6>File 1</h6>
                    <h6>File 1</h6>
                    <h6>File 1</h6>
                </div>
            </div>
            <div class="col-6">
                <h5>Work Log</h5>
                <div>
                    <h6>File 1</h6>
                    <h6>File 1</h6>
                    <h6>File 1</h6>
                </div>
            </div>
        </div> -->
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

    // $("#Addtext").click(function() {
    //     var formData = {
    //         worktext: $("#worktext").val(),
    //         workId: $("#workId").val(),
    //     };
    //     $.ajax({
    //         type: "POST",
    //         url: "work-text.php",
    //         data: formData,
    //         dataType: "json",
    //         success: function(data) {
    //             //alert(data);
    //             //$('#exampleModal').html(data);
    //             alert(data);
    //         }

    //     });

    //     //event.preventDefault();
    // });
    $("#textform").on("submit", function(e) {
        var dataString = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "work-text.php",
            data: dataString,
            success: function(data) {
                // Display message back to the user here
                //alert(data);
                $('#textMessage').html(data);
            }
        });

        e.preventDefault();
    });
    // $("#Addtext").submit(function(event) {
    //     var formData = {
    //         teamname: $("#projectname").val(),
    //         teamDesc: $("#project-descriptions").val(),
    //     };

    //     $.ajax({
    //         type: "POST",
    //         url: "create-team-proc.php",
    //         data: formData,
    //         //dataType: "json",
    //         success: function(data) {
    //             //alert(data);
    //             $('#content').html(data);
    //         }

    //     });

    //     event.preventDefault();
    // });

});
</script>