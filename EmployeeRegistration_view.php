<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MoneyMela | </title>
      <?php require_once 'include/common-css.php' ?>
      <style>
       i.fa-solid {
         cursor: pointer;
         }
      </style>
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
                                <a class="breadcrumb-item" href="#">Dashboard</a>
                                <span class="breadcrumb-item active" aria-current="page">Employee Registration</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Employee</h3>
                           </div>
                              <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3" style="cursor: pointer;"></i>
                              </a>
                           </div>
                        <div class="bg-white border_500 position-relative px-4 py-2">
                        <div class="row">
                           <div class="col-xl-7 col-12">
                              <dl class="row mb-0">
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading">Employee Name:</dt>
                                 <dd class="col-sm-8">Deenabandhu Dakua</dd>
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading">Employee Role:</dt>
                                 <dd class="col-sm-8">Employee</dd>
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading">Created On:</dt>
                                 <dd class="col-sm-8">13/06/2024</dd>

                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading">Employee Branch:</dt>
                                 <dd class="col-sm-8">Bhubaneswar</dd>
                          
                              </dl>
                           </div>
                           <div class="col-xl-5 col-12">
                              <dl class="row mb-0">
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading">Registration Date:</dt>
                                 <dd class="col-sm-8">10/06/2024</dd>
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading">Employee ID:</dt>
                                 <dd class="col-sm-8">EMP1002585</dd>
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading">Approved Status:</dt>
                                 <dd class="col-sm-8">Pending</dd>
                                
                              </dl>
                           </div>
                         
                     </div>
                        <div class="row">
                           <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                    <label for="jureq" class="fw-bold">Name of the Company : </label> Model.CompanyName
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                    <label for="jureq" class="fw-bold">CIN No. : </label> Model.CinNo
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                    <label for="jureq" class="fw-bold">PAN No. : </label> Model.PanNo
                              </div>
                           </div>
                           
                           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                    <label for="jureq" class="fw-bold">Created By : </label> Model.CreatedBy
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                    <label for="jureq" class="fw-bold">Created On : </label> Model.CreatedOn
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                    <label for="jureq" class="fw-bold">Status : </label> Model.Status
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                    <label for="jureq" class="fw-bold">Status By : </label> StatusBy
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                    <label for="jureq">Company Logo : </label>
                                    <span>
                                    <a href="public/images/logom.png" target="_blank">
                                    <img src="public/images/logom.png" width="100px" height="100px" class="border rounded-2">
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                 <label for="jureq">Company Letter Head : </label> 
                                 <span>
                                 <a href="public/images/borrowbanner.png" target="_blank">
                                 <img src="public/images/borrowbanner.png"  height="100px" class="border rounded-2">
                                 </a>
                                 </span>
                              </div>
                           </div> -->
                        <!-- <div class="card">
                           <div class="card-header d-flex align-items-center justify-content-between">
                              <h6 class="m-0">Approver Action Message:</h6>
                                 <a  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1">
                                    <i class="fa-sharp-duotone fa-solid fa-list-radio"></i>
                                    </button>
                                 </a>
                           </div>
                              <div class="collapse" id="collapseExample">
                              <div class="card-body">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th scope="col">Sl.NO</th>
                                          <th scope="col">Stage Remark</th>
                                          <th scope="col">Approval Action By</th>
                                          <th scope="col">Created At</th>
                                          <th scope="col">Message</th>
                                          <th scope="col">IP Address</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <th scope="row">1</th>
                                          <td>Raised</td>
                                          <td>Sushanta ku Mohapatra</td>
                                          <td>2024-06-18 15:08:08</td>
                                          <td>Request Raised</td>
                                          <td>191.62.23.54</td>
                                       </tr>
                                       <tr>
                                          <th scope="row">2</th>
                                          <td>Raised</td>
                                          <td>Sushanta ku Mohapatra</td>
                                          <td>2024-06-18 15:08:08</td>
                                          <td>Request Raised</td>
                                          <td>191.62.23.54</td>
                                       </tr>
                                       <tr>
                                          <th scope="row">3</th>
                                          <td>Raised</td>
                                          <td>Sushanta ku Mohapatra</td>
                                          <td>2024-06-18 15:08:08</td>
                                          <td>Request Raised</td>
                                          <td>191.62.23.54</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <?php require_once 'include/common-js.php' ?>
   </body>
</html>