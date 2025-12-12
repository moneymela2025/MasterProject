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
      <style>
 
        .Modules {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 15px;
        }
        .table-container {
            overflow-x: auto;
        }
    </style>
       <section>
         <div class="d-flex">
            <div class="xyz">
               <div class="content_wrapper">
                  <div class="row">
                     <div class="col-12">
                           <nav class="breadcrumb">
                              <a class="breadcrumb-item" href="#">Settings </a>
                              <span class="breadcrumb-item active" aria-current="page">Menu Access</span>
                           </nav>
                     </div>
                     </div>
                  <div class="col-12">
                     <div class="section_heading d-flex justify-content-between align-items-center">
                        <div>
                           <h3 class="mb-0 fs-5">Menu Access</h3>
                        </div>
                     </div>
                     <div class="border_500 bg-white position-relative py-3 px-4">
                        <div class="row">
                           <div class="col-md-2 col-sm-6 col-12">
                              <label for="">Group Name</label>
                              <select name="" id="" class="form-select">
                                 <option selected="selected" value=":::: Select Purpose Loan ::::">:::: Select Group ::::</option>
                                 <option value="Admin & Infra">Admin & Infra</option>
                                 <option value="Advisor">Advisor</option>
                                 <option value="Area Sales Manager">Area Sales Manager</option>
                                 <option value="Collection Manager">Collection Manager</option>
                                 <option value="Credit Analyst">Credit Analyst</option>
                                 <option value="Credit Manager">Credit Manager</option>
                                 <option value="Customer">Customer</option>
                                 <option value="Customer service support">Customer service support</option>
                                 <option value="Employee">Employee</option>
                                 <option value="Executive - Account">Executive - Account</option>
                                 <option value="Executive - CAD">Executive - CAD</option>
                                 <option value="Executive Collections">Executive Collections</option>
                                 <option value="Manager - Accounts">Manager - Accounts</option>
                                 <option value="Manager - CAD">Manager - CAD</option>
                                 <option value="Relationship Manager">Relationship Manager</option>
                                 <option value="Sub Admin">Sub Admin</option>
                              </select>
                           </div>
                           <!-- <div class="col-md-2 col-sm-6 col-12">
                              <div class="d-flex" style="margin-top: 28px;">
                                 <input type="submit" name="" value="Submit" id="" class="border_500 btn btn-primary fw-bold logo_bgClr rounded-1 text-white  me-1">
                                 <a id="ContentPlaceHolder1_btnReset" usesubmitbehavior="False">
                                    <button class="btn btn-primary logo_bgClr border_500"><i class="fas fa-sync-alt"></i></button>
                                 </a>
                              </div>
                           </div> -->
                        </div>
                     <div class="row">
                        <!-- <div class="col-md-3">
                           <div class="Modules">
                              <h5>Select Modules</h5>
                              <div class="mb-3">
                                   <label for="">Group Name</label>
                                    <select name="" id="" class="form-select">
                                       <option selected="selected" value=":::: Select Purpose Loan ::::">:::: Select Group ::::</option>
                                       <option value="Admin & Infra">Admin & Infra</option>
                                       <option value="Advisor">Advisor</option>
                                       <option value="Area Sales Manager">Area Sales Manager</option>
                                       <option value="Collection Manager">Collection Manager</option>
                                       <option value="Credit Analyst">Credit Analyst</option>
                                       <option value="Credit Manager">Credit Manager</option>
                                       <option value="Customer">Customer</option>
                                       <option value="Customer service support">Customer service support</option>
                                       <option value="Employee">Employee</option>
                                       <option value="Executive - Account">Executive - Account</option>
                                       <option value="Executive - CAD">Executive - CAD</option>
                                       <option value="Executive Collections">Executive Collections</option>
                                       <option value="Manager - Accounts">Manager - Accounts</option>
                                       <option value="Manager - CAD">Manager - CAD</option>
                                       <option value="Relationship Manager">Relationship Manager</option>
                                       <option value="Sub Admin">Sub Admin</option>
                                    </select>
                              </div>
                              <div class="col-sm-12 ">
                                 <label>Select Module</label>
                                    <select class="form-control" multiple style="font-weight:bold;height:200px;">
                                       <option value="Dashboard">Dashboard (Moneymela_Admin/Menu_Access.php)</option>
                                       <option value="Masters">Masters</option>
                                       <option value="Branches Management">Branches Management</option>
                                       <option value="Member Management">Member Management</option>
                                       <option value="Fund Transfer">Fund Transfer</option>
                                       <option value="Shares Management">Shares Management</option>
                                       <option value="Advisor Management">Advisor Management</option>
                                       <option value="Lender Management">Lender Management</option>
                                       <option value="Employee Management">Employee Management</option>
                                       <option value="Make Payment">Make Payment</option>
                                       <option value="Open A/C Management">Open A/C Management</option>
                                       <option value="Loan Management">Loan Management</option>
                                       <option value="Partner Management">Partner Management</option>
                                       <option value="Approval Management">Approval Management</option>
                                       <option value="Reports">Reports</option>
                                       <option value="Settings">Settings</option>
                                       <option value="Change Password">Change Password</option>
                                       <option value="Support Management">Support Management</option>
                                    </select>
                                 </div>
                           </div>
                        </div> -->
                        <div class="col-md-12">
                           <div class="table-container">
                              <table class="table table-bordered text-center w-100">
                                 <thead>
                                       <tr class="bg-body-secondary">
                                          <th>SrNo</th>
                                          <th>Select Menu Module</th>
                                          <th>View</th>
                                          <th>Add</th>
                                          <th>Approval</th>
                                          <th>All</th>
                                          <th>Menu Name</th>
                                          <th>Sub Menu Name</th>
                                          <th>Sub Child Menu</th>
                                       </tr>
                                       <tr>
                                          <th></th>
                                          <th></th>
                                          <th>
                                          <label id="allCheckView" class="btn btn-primary logo_bgClr border_500 btn-sm">All</label>
                                          </th>
                                          <th>
                                          <label id="allCheckAdd" class="btn btn-primary logo_bgClr border_500 btn-sm">All</label>
                                          </th>
                                          <th>
                                          <label id="allCheckApproval" class="btn btn-primary logo_bgClr border_500 btn-sm">All</label>
                                          </th>
                                          <th>
                                          <label id="allCheckAll" class="btn btn-primary logo_bgClr border_500 btn-sm">All</label>
                                          </th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                       </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Masters</td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td>Bank Master</td>
                                       <td>Accounting</td>
                                       <td>-</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>Branches Management</td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td>Branch Registration	</td>
                                       <td>-</td>
                                       <td>-</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>Member Management</td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td>Member Registration	</td>
                                       <td>-</td>
                                       <td>-</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>Fund Transfer</td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td>Fund Transfer</td>
                                       <td>Fund Transfer</td>
                                       <td>Fund Transfer</td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>Shares Management</td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td>Search & Edit</td>
                                       <td>Share Allotment	</td>
                                       <td>-</td>
                                    </tr>
                                    <tr>
                                       <td>6</td>
                                       <td>Advisor Management</td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td><input type="checkbox"></td>
                                       <td>Advisor Management</td>
                                       <td>Add Advisor</td>
                                       <td>-</td>
                                    </tr>
                                    
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="d-flex justify-content-end">
                              <a href="">
                                 <button class="btn btn-primary logo_bgClr border_500 me-1 fw-bold"><i class="fa-duotone fa-solid fa-pen-to-square fa-lg"></i> Edit</button>
                              </a>
                              <input type="submit" name="" value="Submit" id="" class="border_500 btn btn-primary d-none fw-bold logo_bgClr me-1 rounded-1">
                              <a id="ContentPlaceHolder1_btnReset" usesubmitbehavior="False">
                                 <button class="btn btn-primary logo_bgClr border_500"><i class="fas fa-sync-alt"></i></button>
                              </a>
                           </div>
                        </div> 
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php require_once 'include/common-js.php' ?>
   </body>
</html>
<script>
   // Toggle checkboxes in the "View" column
   document.getElementById("allCheckView").addEventListener("click", function() {
      const viewCheckboxes = document.querySelectorAll("td:nth-child(3) input[type='checkbox']");
      const allChecked = Array.from(viewCheckboxes).every(checkbox => checkbox.checked);
      viewCheckboxes.forEach(checkbox => checkbox.checked = !allChecked);
   });

   // Toggle checkboxes in the "Add" column
   document.getElementById("allCheckAdd").addEventListener("click", function() {
      const addCheckboxes = document.querySelectorAll("td:nth-child(4) input[type='checkbox']");
      const allChecked = Array.from(addCheckboxes).every(checkbox => checkbox.checked);
      addCheckboxes.forEach(checkbox => checkbox.checked = !allChecked);
   });

   // Toggle checkboxes in the "Approval" column
   document.getElementById("allCheckApproval").addEventListener("click", function() {
      const approvalCheckboxes = document.querySelectorAll("td:nth-child(5) input[type='checkbox']");
      const allChecked = Array.from(approvalCheckboxes).every(checkbox => checkbox.checked);
      approvalCheckboxes.forEach(checkbox => checkbox.checked = !allChecked);
   });

   // Toggle checkboxes in the "All" column
   document.getElementById("allCheckAll").addEventListener("click", function() {
      const allCheckboxes = document.querySelectorAll("td:nth-child(6) input[type='checkbox']");
      const allChecked = Array.from(allCheckboxes).every(checkbox => checkbox.checked);
      allCheckboxes.forEach(checkbox => checkbox.checked = !allChecked);
   });
</script>
