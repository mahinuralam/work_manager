<?php
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
?>

<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0 overflow-hidden" id="mainPanel" style="height: 30rem">
    <h3 class="text-center bg-primary text-white p-0 m-0 shadow">Create Team</h3>

    <div class="h-100 p-3" style="overflow-y: scroll;" id="content">
        <form id="#createteamform">
            <div class="mb-3">
                <label for="projectname" class="form-label">Team Name</label>
                <div class="row align-items-center">
                    <div class="col-8">
                        <input type="text" name="teamName" class="form-control" id="projectname"
                            aria-describedby="projectHelp">
                    </div>
                    <div class="col-4">
                        <h6 id="tname_response"></h6>
                    </div>
                </div>
                <div id="projectHelp" class="form-text m-0">Select an unique team name.</div>
            </div>
            <div class="mb-3">
                <label for="project-descriptions" class="form-label">Team Descriptions</label>
                <textarea class="form-control" form="createteamform" name="teamDesc" rows="5"
                    id="project-descriptions"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Create</button>
        </form>
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

    $("#projectname").keyup(function() {

        var teamname = $(this).val().trim();

        if (teamname != '') {

            $.ajax({
                url: 'api/team-list.php',
                type: 'post',
                data: {
                    teamname: teamname
                },
                success: function(response) {

                    $('#tname_response').html(response);

                }
            });
        } else {
            $("#tname_response").html("");
        }
    });

    $("form").submit(function(event) {
        var formData = {
            teamname: $("#projectname").val(),
            teamDesc: $("#project-descriptions").val(),
        };

        $.ajax({
            type: "POST",
            url: "create-team-proc.php",
            data: formData,
            //dataType: "json",
            success: function(data) {
                //alert(data);
                $('#content').html(data);
            }

        });

        event.preventDefault();
    });

});
</script>