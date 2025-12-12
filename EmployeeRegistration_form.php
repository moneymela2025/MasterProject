<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MoneyMela | </title>
      <?php require_once 'include/common-css.php' ?>
   <body>
      <?php require_once 'include/header.php' ?>
      <?php require_once 'include/sidebar.php' ?>
      <div>
         <section>
            <div class="d-flex">
               <div class="xyz">
                  <div class="content_wrapper">
                     <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb">
                                <a class="breadcrumb-item" href="#">Employee Management </a>
                                <span class="breadcrumb-item active" aria-current="page">Employee Registration Form </span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Employee Registration Form</h3>
                           </div>
                           <div>
                              <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3" style="cursor: pointer;"></i>
                              </a>
                           </div>
                        </div>
                        <div class="border_500 bg-white position-relative py-4 px-4">
                           <div class="my-0 subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Personal Details</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                                <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="txtInvestorID">Employee Code <span class="star">*</span></label>
                                    <input type="text" placeholder="EMP1002575" class="form-control">
                                 </div>
                                 <!-- <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="txtInvestorID">Branch <span class="star">*</span></label>
                                    <input type="text" placeholder="Branch" class="form-control" readonly>
                                 </div> -->
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="ddlMaritalStatus">Branch <span class="star">*</span></label>
                                    <select id="ddlMaritalStatus" class="form-select">
                                          <option>:::: Select Branch::::</option>
                                          <option>Branch1</option>
                                          <option>Branch2</option>
                                    </select>
                                 </div>

                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="ddlDob_Date">Date Of Joining <span class="star">*</span></label>
                                    <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date2">
                                 </div>                                 
                                 <div class="form-group col-md-2 col-sm-6 col-12">
                                    <label for="">Salutation</label>
                                    <select id="" class="form-select">
                                    <option selected="selected" value="Mr.">Mr.</option>
                                       <option value="Mrs.">Mrs.</option>
                                       <option value="Miss.">Miss.</option>
                                       <option value="MS">MS</option>
                                       <option value="Dr.">Dr.</option>
                                       <option value="OTHER">OTHER</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="txtFirstName">First Name <span class="star">*</span></label>
                                    <input type="text" id="txtFirstName" placeholder="FirstName" class="form-control">
                                 </div>
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="txtLastName">Last Name <span class="star">*</span></label>
                                    <input type="text" id="txtLastName" placeholder="LastName" class="form-control">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="ddlDob_Date">Date Of Birth <span class="star">*</span></label>
                                    <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date1">
                                 </div>
                                 <div class="form-group col-md-2 col-sm-6 col-12">
                                    <label for="ddlgender">Gender <span class="star">*</span></label>
                                    <select id="ddlgender" class="form-select">
                                          <option>:::: Select ::::</option>
                                          <option>Male</option>
                                          <option>Female</option>
                                          <option>Others</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-2 col-sm-6 col-12">
                                    <label for="ddlMaritalStatus">Marital Status <span class="star">*</span></label>
                                    <select id="ddlMaritalStatus" class="form-select">
                                          <option>:::: Select ::::</option>
                                          <option>Married</option>
                                          <option>Single</option>
                                    </select>
                                 </div>

                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="txtPanNo">PAN No</label>
                                    <input type="text" id="txtPanNo" placeholder="PAN Number" style="text-transform:uppercase" class="form-control">
                                 </div>
                          
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="txtaadharnumber">Aadhar Number</label>
                                    <input type="text" id="txtaadharnumber" placeholder="Aadhar Number" class="form-control">
                                 </div>
                                 
                           </div>
                           <div class="subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Contact Details</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Mobile Number <span class="star">*</span></label>
                                    <input name="" type="text" id="" class="form-control" placeholder="Mobile Number " maxlength="10">
                                 </div>
                                
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Phone No_1</label>
                                    <input name="" type="text" id="" class="form-control" placeholder="Phone No_1 " maxlength="10">
                                 </div>

                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Email Address <span class="star">*</span></label>
                                    <input name="City" type="text" id="" class="form-control" placeholder="Email Address">
                                 </div>
                              </div>
                           </div> 

                           <div class="subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Bank Details</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Bank Name <span class="star">*</span></label>
                                    <input name="" type="text" id="" class="form-control" placeholder="Bank Name">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Branch Name <span class="star">*</span></label>
                                    <input name="Branch Name" type="text" id="" class="form-control" placeholder="Branch Name">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Account Number <span class="star">*</span></label>
                                    <input name="" type="text" maxlength="10"  id="" class="form-control" placeholder="Account Number">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Account Type <span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select Account Type::::</option>
                                       <option value="Saving Account">Saving Account</option>
                                       <option value="Current Account">Current Account</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">IFSC Code  </label>
                                    <input name="City" type="text" id="" class="form-control" placeholder="IFSC Code">
                                 </div>
  
                              </div>
                           </div>
                           <div class="subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Department</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                            
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Department Name <span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select Department Name::::</option>
                                       <option value="Accounts Dept">Accounts Dept</option>
                                       <option value="Collection">Collection</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Designation <span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select Department Name::::</option>
                                       <option value="Accountant">Accountant</option>
                                       <option value="Business Developer">Business Developer</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Employee Role<span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select Group Name::::</option>
                                       <option value="Group 1">Group 1</option>
                                       <option value="Group 2">Group2</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex justify-content-center mt-4">
                                <input type="submit" name="" value="Submit"  id="" class="btn fs-5 fw-bold me-sm-4 me-2 logo_bgClr text-white rounded-1 px-sm-5 btn-primary border_500">
                                <button class="btn fs-5 fw-bold me-4 logo_bgClr text-white rounded-1 px-sm-5 btn-danger border_500">Reset</button>
                            </div> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <?php require_once 'include/common-js.php' ?>
      <script>
            flatpickr("#date1,#date2", {
            enableTime: false,   
            dateFormat: "d-m-Y",
            // disableMobile: "true"
            
         });
      </script>
   </body>
</html>