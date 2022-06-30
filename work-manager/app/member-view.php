<?php
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
?>

<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0 overflow-hidden" id="mainPanel" style="height: 30rem">
    <h3 class="text-center bg-primary text-white p-0 m-0 shadow">Memebers List</h3>

    <div class="h-100 p-3" style="overflow-y: scroll;">
        <h6 class="border d-flex justify-content-center ">
            <form action="" class="d-flex">
                <div class="form-check mx-1 mx-md-5">
                    <input class="form-check-input" type="radio" id="CheckAll" name="ProjectType" value="All">
                    <label class="form-check-label" for="CheckAll">All</label>
                </div>
            </form>
        </h6>
        <div id="table">

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
    $("#CheckAll").click(
        function() {
            var ProjectType = $("#CheckAll").val();
            //alert(teamname);

            $.ajax({
                type: "POST",
                url: "my-member-list-proc.php",
                data: {
                    ProjectType: ProjectType
                },
                //dataType: "json",
                success: function(data) {
                    $('#table').html(data);
                }

            });
        }
    );
});
</script>

