<?php
    require_once "..\config.php";
    session_start();
    $email = $_SESSION['email'];
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
?>



<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0 overflow-hidden" id="mainPanel" style="height: 30rem">
    <h3 class="text-center bg-primary text-white p-0 m-0 shadow">Dashboard</h3>

    <div class="h-100 p-3" style="overflow-y: scroll;">
        <div class="row ">

            <div class="col-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-0">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Projects
                                </div>
                                <div class="h6 mb-0 font-weight-bold text-gray-800">
                                    5
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-0">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Teams
                                </div>
                                <div class="h6 mb-0 font-weight-bold text-gray-800">
                                    6
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-0">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Members
                                </div>
                                <div class="h6 mb-0 font-weight-bold text-gray-200">
                                    12
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
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