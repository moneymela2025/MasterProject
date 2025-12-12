<div class="sidebar pb-3">
    <div class="navbar-brand d-flex justify-content-center align-items-center">
        <a href=""><img src="public/images/logo.png" width="220px" alt=""></a>
    </div>
    <nav class="navbar py-1">
        <div class="navbar-nav w-100"> 
            <a href="dashboard.php" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Dashboard</a>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#settingmenu"
                    aria-expanded="false" aria-controls="settingmenu" onclick="toggleParentCollapse('#settingmenu')" title="settingmenu">
                    <i class="fa-sharp-duotone fa-solid fa-cash-register fa-lg me-2"></i>
                    <span class="nav_span">Settings</span>
                </a>
                <div class="collapse mt-0" id="settingmenu">
                    <div class="">
                        <a href="mstr_type.php" class="nav-item nav-link" ><i class="fa-duotone fa-solid fa-address-card fa-lg me-2"></i>Master Type</a>
                        <a href="mstr_details.php" class="nav-item nav-link"><i class="fa-duotone fa-solid fa-address-card fa-lg me-2"></i>Master Details</a>
                        <div>
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#locationMaster"
                                aria-expanded="false" aria-controls="locationMaster" onclick="showChildCollapse('#locationMaster')">
                                <i class="fa-duotone fa-solid fa-location-crosshairs fa-lg me-2"></i>
                                <span class="nav_span">Location Master</span>
                            </a>
                            <div class="collapse mt-0" id="locationMaster">
                                <div class="">
                                <a href="countrymaster.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Country master</a>
                                <a href="state_master.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>State Master</a>
                                <a href="district_master.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>District Master</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#loanMaster"
                                aria-expanded="false" aria-controls="loanMaster" onclick="showChildCollapse('#loanMaster')">
                                <i class="fa-duotone fa-solid fa-landmark fa-lg me-2"></i>
                                <span class="nav_span">Loan Master</span>
                            </a>
                            <div class="collapse mt-0" id="loanMaster">
                                <div class="">
                                    <a href="loan_type.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Loan Type master</a>
                                    <a href="loan_subtype.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Loan Sub type</a>
                                    <a href="Loan_Setting.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Loan Setting</a>
                                </div>
                            </div>
                        </div>
                        <a href="Company_creation.php" class="nav-item nav-link"><i class="fa-duotone fa-solid fa-buildings fa-lg me-2"></i>Company Creation</a>
                        <a href="BranchRegistration.php" class="nav-item nav-link"><i class="fa-duotone fa-solid fa-address-card fa-lg me-2"></i>Branch Registration</a>
                        <a href="member_setting.php" class="nav-item nav-link"><i class="fa-duotone fa-solid fa-address-card fa-lg me-2"></i>Member Setting</a>
                        <a href="EmployeeRegistration.php" class="nav-item nav-link"><i class="fa-duotone fa-solid fa-buildings fa-lg me-2"></i>Employee Service Register</a>
                        <a href="bank_account_master.php" class="nav-item nav-link"><i class="fa-duotone fa-solid fa-diagram-venn fa-lg me-2"></i>Bank Account Master</a>
                        <a href="Menu_Access.php" class="nav-item nav-link"><i class="fa-duotone fa-solid fa-address-card fa-lg me-2"></i>Menu Access</a> 
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#branchManage"
                    aria-expanded="false" aria-controls="branchManage" onclick="toggleParentCollapse('#branchManage')" title="Member Management">
                    <i class="fa-duotone fa-solid fa-users fa-lg me-2"></i>
                    <span class="nav_span">Registration</span>
                </a>
                <div class="collapse mt-0" id="branchManage">
                    <div>
                        <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#masterChild6"
                            aria-expanded="false" aria-controls="masterChild6" onclick="showChildCollapse('#masterChild6')">
                            <i class="fas fa-angle-double-right me-2"></i>
                            <span class="nav_span">Lender Report</span>
                        </a>
                        <div class="collapse mt-0" id="masterChild6">
                            <div class="">
                                <a href="notActive_lenders.php" class="nav-item nav-link"><i class="fa-thin fa-angle-right me-2"></i>Not Active Lenders</a>
                                <a href="Pending_Profileupdate.php" class="nav-item nav-link"><i class="fa-thin fa-angle-right me-2"></i>Pending for Profile Update</a>
                                <a href="" class="nav-item nav-link"><i class="fa-thin fa-angle-right me-2"></i>Pending for Profile </a>
                                <a href="" class="nav-item nav-link"><i class="fa-thin fa-angle-right me-2"></i>Lender Registration details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item ">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#lendermaster"
                    aria-expanded="false" aria-controls="lendermaster" onclick="toggleParentCollapse('#lendermaster')" title="lendermaster">
                    <i class="fa-duotone fa-solid fa-landmark fa-lg me-2"></i>
                    <span class="nav_span">Lender Management</span>
                </a>
                <div class="collapse mt-0" id="lendermaster">
                    <div class="">
                        <a href="Lender_Individual.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Lender Individual</a>
                        <a href="Lender_NonIndividual.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>NonIndividual</a>
                        <a href="Lender_list.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Lender List</a>
                        <a href="Lender_approval_list.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Lender Approval List</a>
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#borrowermaster"
                    aria-expanded="false" aria-controls="borrowermaster" onclick="toggleParentCollapse('#borrowermaster')" title="borrowermaster">
                    <i class="fa-duotone fa-solid fa-hand-holding-dollar fa-lg me-2"></i>
                    <span class="nav_span">Borrower Management</span>
                </a>
                <div class="collapse mt-0" id="borrowermaster">
                    <div class="">
                        <a href="Borrower_Individual.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Borrower Update</a>
                        <a href="Borrower_NonIndividual.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>NonIndividual</a>
                        <a href="Borrower_list.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Borrower List</a>
                        <a href="Borrower_approval_list.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Borrower Approval List</a> 
                        <!-- <a href="Borrower_Individual.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Borrower Update</a>
                        <a href="" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>NonIndividual</a>
                        <a href="" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Borrower List</a>
                        <a href="" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Borrower Approval List</a> -->
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#lonemaster"
                    aria-expanded="false" aria-controls="borrowermaster" onclick="toggleParentCollapse('#lonemaster')" title="lonemaster">
                    <i class="fa-duotone fa-solid fa-money-bill-1 fa-lg me-2"></i>
                    <span class="nav_span">Loan Management</span>
                </a>
                <div class="collapse mt-0" id="lonemaster">
                    <div class="">
                        <a href="Lone_list.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Loan Applications</a>
                        <a href="Loan_Edit.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Edit Loan</a>
                        <a href="LoanSearch_Approve.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Approval Search & Edit</a>
                        <a href="Loan_Approve.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Approval Loan</a>
                        <a href="formpage.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Form60</a>
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#LoanDisbursment"
                    aria-expanded="false" aria-controls="borrowermaster" onclick="toggleParentCollapse('#LoanDisbursment')" title="LoanDisbursment">
                    <i class="fa-duotone fa-solid fa-circle-dollar-to-slot fa-lg me-2"></i>
                    <span class="nav_span">Loan Disbursment</span>
                </a>
                <div class="collapse mt-0" id="LoanDisbursment">
                    <div class="">
                        <a href="Searchloan_Disbursement.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Search & Edit</a>
                        <a href="Loan_Disbursement.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Loan Disbursment</a>
                        <a href="approval_bursement.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Approval Search & Edit</a>
                        <a href="#" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Approval disbursment</a>
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#EMIcollection"
                    aria-expanded="false" aria-controls="EMIcollection" onclick="toggleParentCollapse('#EMIcollection')" title="EMIcollection">
                    <i class="fa-duotone fa-solid fa-calculator fa-lg me-2"></i>
                    <span class="nav_span">EMI Collection</span>
                </a>
                <div class="collapse mt-0" id="EMIcollection">
                    <div class="">
                        <a href="Collection_followUp.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Collection follow up</a>
                        <a href="Loan_EMIReceipt.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>EMI receiving Maker</a>
                        <a href="Loan_EMICollection.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>EMI Collection Approval</a>
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#EMItoLender"
                    aria-expanded="false" aria-controls="EMItoLender" onclick="toggleParentCollapse('#EMItoLender')" title="EMItoLender">
                    <i class="fa-sharp-duotone fa-solid fa-cash-register fa-lg me-2"></i>
                    <span class="nav_span">Pay EMI to Lender</span>
                </a>
                <div class="collapse mt-0" id="EMItoLender">
                    <div class="">
                        <a href="pay_EMIlender.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Pay EMI List</a>
                        <a href="pay_EMIDetails.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Lenders Details Form</a>
                        <a href="Foreclose_list.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>After Loan Foreclosure</a>
                        <!-- <a href="Foreclose_list.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Pay EMI loan foreclose</a> -->
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#Loan_Foreclosure"
                    aria-expanded="false" aria-controls="Loan_Foreclosure" onclick="toggleParentCollapse('#Loan_Foreclosure')" title="Loan_Foreclosure">
                    <i class="fa-sharp-duotone fa-solid fa-cash-register fa-lg me-2"></i>
                    <span class="nav_span">Loan Foreclosure</span>
                </a>
                <div class="collapse mt-0" id="Loan_Foreclosure">
                    <div class="">
                        <a href="Loan_Foreclose_list.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Foreclosure List</a>
                        <a href="Loan_Foreclosure.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Loan Foreclosure Maker</a>
                        <a href="#" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>loan foreclose</a>
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#wallet_withdrawal"
                    aria-expanded="false" aria-controls="wallet_withdrawal" onclick="toggleParentCollapse('#wallet_withdrawal')" title="wallet_withdrawal">
                    <i class="fa-duotone fa-solid fa-money-bill-1 fa-lg me-2"></i>
                    <span class="nav_span">Wallet fund withdrawal</span>
                </a>
                <div class="collapse mt-0" id="wallet_withdrawal">
                    <div class="">
                        <a href="walletfund_withdrawal.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Withdrawal List Page</a>
                        <a href="withdrawal_maker.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i>Withdrawal maker</a>
                        <a href="walletfund_withdrawal_approval.php" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i> approval list page</a>
                        <a href="#" class="nav-item nav-link"><i class="fas fa-chevron-right me-2"></i> Withdrawal Approval</a>
                    </div>
                </div>
            </div>

            <!-- <a href="login_newpage.php" class="nav-item nav-link"><i class="fa-duotone fa-solid fa-address-card fa-lg me-2"></i>Login</a> -->
        </div>
    </nav>
</div>