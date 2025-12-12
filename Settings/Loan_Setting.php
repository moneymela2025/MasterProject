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

      <section>
         <div class="d-flex">
            <div class="xyz">
               <div class="content_wrapper">
                  <div class="row">
                     <div class="col-12">
                           <nav class="breadcrumb">
                              <a class="breadcrumb-item" href="#">Loan Master </a>
                              <span class="breadcrumb-item active" aria-current="page">Loan Settings</span>
                           </nav>
                     </div>
                     </div>
                  <div class="col-12">
                     <div class="section_heading d-flex justify-content-between align-items-center">
                        <div>
                           <h3 class="mb-0 fs-5">Loan Settings - Flat (Form-3)</h3>
                        </div>
                        <div class="m-1">
                           <a href="Loan_Setting_form.php">
                              <button class="btn btn-primary btn-sm p-1" type="button" style="background-color:#E66526;">
                                 Raise Form
                              </button>
                           </a>
                        </div>
                     </div>
                     <div class="border_500 bg-white position-relative py-3 px-4">
                     <div class="row">
                           <div class="col-md-12" id="countrymaster_pills">
                           <ul class="gap-2 mb-2 nav nav-pills" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    All
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-approved" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
                                    Approved
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
                                    Pending
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-recheck" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
                                    Recheck
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-mypending" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
                                    My Pending
                                 </button>
                              </li>
                           </ul>
                              <div class="row">
                                 <div class="col-md-2 col-sm-6 col-12">
                                    <label for="">From Date</label>
                                    <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date1">
                                 </div>
                                 <div class="col-md-2 col-sm-6 col-12">
                                    <label for="">To Date</label>
                                    <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date2">
                                 </div>
                                <div class="form-group col-md-2 col-sm-6 col-12">
                                    <label for="">Loan Type<span class="star">*</span></label>
                                    <select name="" id="" class="form-select">
                                       <option selected="selected" value=":::: Select Purpose Loan ::::">:::: Select Loan Type::::</option>
                                       <option value="Business Loan">Business Loan</option>
                                       <option value="Personal Loan">Personal Loan</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-2 col-sm-6 col-12">
                                    <label for="">Loan Sub Type<span class="star">*</span></label>
                                    <select name="" id="" class="form-select">
                                       <option selected="selected" value=":::: Select Purpose Loan ::::">:::: Select Loan Sub Type::::</option>
                                       <option value="Marriage Loan">Marriage Loan</option>
                                   
                                    </select>
                                 </div>
                                    <!-- <div class="col-md-2 col-sm-6 col-12">
                                       <label for="">IFSC Code</label>
                                       <input name="Enter State" type="text" maxlength="7" id="" autocomplete="off" placeholder="IFSC Code" class="form-control">
                                    </div> -->
       
                                 <div class="col-md-4 col-12">
                                    <div class="d-flex justify-content-end" style="margin-top: 28px;">
                                       <!-- <a id="ContentPlaceHolder1_btnSearch">
                                          <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                                       </a> -->
                                       <input type="submit" name="" value="Submit" id="" class="border_500 btn btn-primary fw-bold logo_bgClr rounded-1 text-white  me-1">
                                       <a id="ContentPlaceHolder1_btnReset" usesubmitbehavior="False">
                                          <button class="btn btn-primary logo_bgClr border_500"><i class="fas fa-sync-alt"></i></button>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-content" id="pills-tabContent">
                                 <div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="col-12">
                                       <table id="example" class="cusTbale d-block dataTable display no-footer nowrap small table table-bordered table-responsive w-100">
                                          <thead>
                                             <tr class="table-primary">
                                                <th scope="col">SrNo</th>
                                                <th scope="col">Loan Type</th>
                                                <th scope="col">Loan Sub Type</th>
                                                <th scope="col">Weightage</th>
                                                <th scope="col">EMI Type</th>
                                                <th scope="col">EMI Sub type</th>
                                                <th scope="col">Loan Duration</th>
                                                <th scope="col">ROI</th>
                                                <th scope="col">LFC</th>
                                                <th scope="col">DF</th>
                                                <th scope="col">PF</th>
                                                <th scope="col">CBC</th>
                                                <th scope="col">FCC</th>
                                                <th scope="col">OC</th>
                                                <th scope="col">Applicable From</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Created By</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Status By</th>
                                                <th scope="col">View</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>Personal Loan</td>
                                                <td>Marriage Loan</td>
                                                <td>60%</td>
                                                <td>WP</td>
                                                <td>Reducing</td>
                                                <td>6-36 Months</td>
                                                <td>9-36%</td>
                                                <td>36%</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>4%</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>
                                                   <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                </td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="#">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a class="btn btn-sm" href="Loan_Setting_form.php">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>02</td>
                                                <td>Personal Loan</td>
                                                <td>Marriage Loan</td>
                                                <td>60%</td>
                                                <td>WP</td>
                                                <td>Reducing</td>
                                                <td>6-36 Months</td>
                                                <td>9-36%</td>
                                                <td>36%</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>4%</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>
                                                   <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                </td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="#">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>03</td>
                                                <td>Personal Loan</td>
                                                <td>Marriage Loan</td>
                                                <td>60%</td>
                                                <td>WP</td>
                                                <td>Reducing</td>
                                                <td>6-36 Months</td>
                                                <td>9-36%</td>
                                                <td>36%</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>4%</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>
                                                   <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                </td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="#">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="col-12">
                                    <table id="example" class="cusTbale d-block dataTable display no-footer nowrap small table table-bordered table-responsive w-100">
                                          <thead>
                                             <tr class="table-primary">
                                                <th scope="col">SrNo</th>
                                                <th scope="col">Loan Type</th>
                                                <th scope="col">Loan Sub Type</th>
                                                <th scope="col">Weightage</th>
                                                <th scope="col">EMI Type</th>
                                                <th scope="col">EMI Sub type</th>
                                                <th scope="col">Loan Duration</th>
                                                <th scope="col">ROI</th>
                                                <th scope="col">LFC</th>
                                                <th scope="col">DF</th>
                                                <th scope="col">PF</th>
                                                <th scope="col">CBC</th>
                                                <th scope="col">FCC</th>
                                                <th scope="col">OC</th>
                                                <th scope="col">Applicable From</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Created By</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Status By</th>
                                                <th scope="col">View</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>Personal Loan</td>
                                                <td>Marriage Loan</td>
                                                <td>60%</td>
                                                <td>WP</td>
                                                <td>Reducing</td>
                                                <td>6-36 Months</td>
                                                <td>9-36%</td>
                                                <td>36%</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>4%</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>
                                                   <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                </td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="#">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="col-12">
                                    <table id="example" class="cusTbale d-block dataTable display no-footer nowrap small table table-bordered table-responsive w-100">
                                          <thead>
                                             <tr class="table-primary">
                                                <th scope="col">SrNo</th>
                                                <th scope="col">Loan Type</th>
                                                <th scope="col">Loan Sub Type</th>
                                                <th scope="col">Weightage</th>
                                                <th scope="col">EMI Type</th>
                                                <th scope="col">EMI Sub type</th>
                                                <th scope="col">Loan Duration</th>
                                                <th scope="col">ROI</th>
                                                <th scope="col">LFC</th>
                                                <th scope="col">DF</th>
                                                <th scope="col">PF</th>
                                                <th scope="col">CBC</th>
                                                <th scope="col">FCC</th>
                                                <th scope="col">OC</th>
                                                <th scope="col">Applicable From</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Created By</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Status By</th>
                                                <th scope="col">View</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>Personal Loan</td>
                                                <td>Marriage Loan</td>
                                                <td>60%</td>
                                                <td>WP</td>
                                                <td>Reducing</td>
                                                <td>6-36 Months</td>
                                                <td>9-36%</td>
                                                <td>36%</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>Rs.500/-</td>
                                                <td>4%</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>
                                                   <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                </td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="#">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
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
      <script>
            flatpickr("#date1,#date2", {
            enableTime: false,   
            dateFormat: "d-m-Y",
            // disableMobile: "true"
         });
      </script>
   </body>
</html>