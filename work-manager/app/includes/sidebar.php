<!-- MAIN CONTENT START-->
<main class="overflow-hidden">
    <div class="row p-3  d-flex justify-content-around ">

        <!-- SIDE BAR START-->
        <div class="col-3 col-md-2 bg-white rounded-3 shadow d-none d-md-block h-50" id="sideBar">
            <!-- Sidebar -->
            <ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar">

                <!-- Sidebar - Brand ONLY FOR DESKTOP-->
                <a class="sidebar-brand d-md-flex align-items-center justify-content-center text-decoration-none fs-5 py-3 d-none"
                    href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="sidebar-brand-text p-2">
                        Work Manager<sup>1.0</sup>
                    </div>
                </a>

                <!-- Sidebar - Brand ONLY FOR MOBLE-->
                <a class="sidebar-brand d-flex align-items-center justify-content-center text-decoration-none fs-5 py-3 d-md-none"
                    href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="sidebar-brand-text">WM<sup>1.0</sup></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard For desktop-->
                <li class="nav-item py-3 fs-6 text-center bg-custom rounded mt-2 d-none d-md-block">
                    <a class="nav-link p-0" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span class="fs-6">Dashboard</span></a>
                </li>

                <!-- Nav Item - Dashboard for mobile-->
                <li class="nav-item py-3 fs-6 text-center bg-custom rounded mt-2 d-block d-md-none">
                    <a class="nav-link p-0" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span class="fs-6">DB</span></a>
                </li>


                <!-- Nav Item - Work Collapse Menu -->
                <li class="nav-item bg-custom rounded mt-2 p-1 p-md-2">
                    <a class="nav-link collapsed text-center" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span>Works</span>
                    </a>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white p-0 p-md-2 collapse-inner rounded ">
                            <a class="collapse-item text-decoration-none text-dark dropdown-item p-0 rounded-3 fs-6"
                                href="work-view.php">View</a>

                            <a class="collapse-item text-decoration-none text-dark dropdown-item p-0 rounded-3 fs-6"
                                href="work-create.php">Create</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Teams Collapse Menu -->
                <li class="nav-item bg-custom rounded mt-2 p-1 p-md-2">
                    <a class="nav-link collapsed text-center" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <span>Teams</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white p-0 p-md-2 collapse-inner rounded">
                            <h6 class="collapse-header"></h6>
                            <a class="collapse-item text-decoration-none text-dark dropdown-item p-0 rounded-3"
                                href="team-view.php">View</a>
                            <!-- <a class="collapse-item text-decoration-none text-dark dropdown-item p-0 rounded-3"
                                href="team-join.php">Join</a> -->
                            <a class="collapse-item text-decoration-none text-dark dropdown-item p-0 rounded-3"
                                href="team-create.php">Create</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Members Collapse Menu -->
                <li class="nav-item bg-custom rounded mt-2 p-1 p-md-2">
                    <a class="nav-link collapsed text-center" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <span>Members</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white p-0 p-md-2 collapse-inner rounded">
                            <h6 class="collapse-header"></h6>
                            <a class="collapse-item text-decoration-none text-dark dropdown-item p-0 rounded-3"
                                href="member-view.php">View</a>
                            <!-- <a class="collapse-item text-decoration-none text-dark dropdown-item p-0 rounded-3"
                                href="team-join.php">Join</a> -->
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">

            </ul>
            <!-- End of Sidebar -->
        </div>
        <!-- SIDE BAR END-->