<?php
session_start();
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
?>

<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0 overflow-hidden" id="mainPanel" style="height: 30rem">
    <h3 class="text-center bg-primary text-white p-0 m-0 shadow">My Profile</h3>

    <div class="h-100 p-3" style="overflow-y: scroll;">
        <div>
            <?php
            echo '<h4>Name: '; echo $_SESSION['fullName'];
            echo '</h4>';
            echo '<h4>Designation: '; echo $_SESSION['designation'];
            echo '</h4>';
            echo '<h4>Email: '; echo $_SESSION['email'];
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
<script src="js/common.js"></script>