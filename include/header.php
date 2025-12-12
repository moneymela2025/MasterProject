<header class="header px-2 bg-white">
        <nav class="navbar navbar-expand-md">
            <div class="navbar-brand me-sm-3 me-0">
                <a href="dashboard.php" class="d-block">
                    <img src="public/images/logo.png" width="200px" class="d-sm-block d-none" alt="MoneyMela's Logo" />
                    <img src="public/images/logom.png" width="50px" class="d-block d-sm-none me-2" alt="MoneyMela's Logo" />
                </a>
            </div>
            <div class="d-sm-block d-none mx-auto">
                <ul class="navbar-nav gap-3">
                    <!-- <li class="nav-item">
                        <a href="NewLoanApply.aspx" class="nav-link fs-6 fw-bold text-opacity-50 text-black position-relative">
                            Quick Loan 
                            <span class="position-absolute spinner-grow start-100 translate-middle badge rounded-pill bg-danger">New</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fs-6 fw-bold text-opacity-50 text-black position-relative">
                            Loan Status 
                            <span class="position-absolute spinner-grow start-100 translate-middle badge rounded-pill bg-success">New</span>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link fs-6 fw-bold text-opacity-50 text-black position-relative">
                            Loan Repay 
                            <span class="position-absolute spinner-grow start-100 translate-middle badge rounded-pill bg-danger"></span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="wallet_balance ms-auto px-3 py-2 bg-light shadow-sm rounded-5 me-5" data-bs-toggle="tooltip" style="display: none"
                data-bs-title="Wallet Balance" data-bs-placement="bottom">
                <i class="fas fa-wallet me-2"></i>
                <span class="fw-bold fs-6 text-dark text-opacity-50">Rs. 5,679</span>
            </div>
            <div class="avatar me-3 position-relative" data-bs-toggle="tooltip" data-bs-title="Profile"
                data-bs-placement="bottom">
                <div data-bs-toggle="collapse" data-bs-target="#showProfile" aria-expanded="false"
                    aria-controls="showProfile">
                    <span class="p-2 bg-light shadow-sm rounded-5 me-2">
                        <i class="fa-duotone fa-solid fa-user fa-flip fa-lg" style="--fa-primary-color: #ec7c46; --fa-secondary-color: #ec7c46;"></i>
                    </span>
                    <span class="fw-bold fs-6 text-dark text-opacity-50" id="spanname" runat="server">Deenabandhu Dakua</span>
                </div>
            </div>
            <div class="collapse collapse-horizontal position-absolute shadow-lg" id="showProfile" style="right: 0px; top: 65px;">
                <div class="profileWrapper border border-1 border-opacity-50 p-3 bg-light rounded-top"
                    style="width: 300px;">
                    <div class="d-flex gap-3 align-items-start">
                        <div class="avatar_profile">
                            <img src="https://picsum.photos/50/50" runat="server" id="ProfileImage" height="30" width="30" class="rounded-circle" alt="">
                            <div class="avatar_details mt-2">
                                <h6 class="avatar_name fs mb-0 fw-bold text-dark">
                                    <span id="#">Deenabandhu Dakua</span></h6>
                                <span class="avatar_memId small text-dark text-opacity-50">
                                    <span id="">INV2421513</span></span>
                            </div>
                        </div>
                        <button class="border-opacity-10 border border-1 border-dark ms-auto px-2 py-1 rounded-1"
                            data-bs-toggle="tooltip" data-bs-title="Edit Profile" data-bs-placement="start">
                            <i class="fas fa-user-edit"></i>
                        </button> 
                  
                    </div>
                    <hr>
                    <div class="mt-2">
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <span class="small fw-bold">Last login :</span>
                            <span class="small fw-bold logo_clr">
                                <span id="" style="font-size:14px;font-weight:bold;">24/09/2024, 02:36:46 </span></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <span class="small fw-bold">Current Ip :</span>
                            <span class="small fw-bold logo_clr">
                                <span id="">::1</span></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <span class="small fw-bold">Branch Name :</span>
                            <span class="small fw-bold logo_clr">
                                <span id=""></span>HEAD OFFICE
                            </span>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-1 border-opacity-50 px-3 py-2 profileWrapper_Footer rounded-bottom mt-1">
                    <div class="d-flex justify-content-between">
                        <button class="bg-success border-0 rounded-1 px-3 py-2 text-white fw-bold fs-6">
                            <i class="fas fa-headset"></i>
                            <a href="#">Support</a>
                        </button>
                        <a href="login_newpage.php" class="bg-danger border-0 rounded-1 px-3 py-2 text-white fw-bold fs-6">Sign out</a>
                    </div>
                </div>
            </div>
            <div id="toggleNavbar">
                <div class="toggle" data-bs-toggle="tooltip" data-bs-title="Toggle Navbar" data-bs-placement="bottom">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>