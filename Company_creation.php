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
                  <!-- <div class="content_wrapper container"> -->
                  <div class="content_wrapper">
                     <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb mt-2">
                                <a class="breadcrumb-item" href="#">Master</a>
                                <span class="breadcrumb-item active" aria-current="page">Company Creation</span>
                            </nav>
                        </div>
                     </div>
                     
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Company Creation</h3>
                           </div>
                        </div>
                        <div class="border_500 bg-white position-relative py-2 px-2">
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
                                          Approved</button>
                                    </li>
                                 </ul>
                                 <div class="row">
                                    <div class="col-md-3 col-sm-6 col-12">
                                       <label for="">From Date</label>
                                       <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date1">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                       <label for="">To Date</label>
                                       <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date2">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                          <label for="">Company Name</label>
                                          <input name="Loan Type" type="text" maxlength="7" id="" autocomplete="off" placeholder="Loan Type" class="form-control">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                       <div class="d-flex justify-content-end mt-4">
                                          <a id="ContentPlaceHolder1_btnSearch">
                                             <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                                          </a>
                                          <a id="ContentPlaceHolder1_btnReset" usesubmitbehavior="False">
                                             <button class="btn btn-primary logo_bgClr border_500 btn-sm me-1"><i class="fas fa-sync-alt"></i></button>
                                          </a>
                                          
                                          <a href="company_raise.php">
                                             <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-layer-group"></i> Raise</button>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">
                                       <div class="col-12">
                                          <table id="example" class="table table-bordered cusTbale small display w-100 table-responsive d-lg-table d-block" style="margin-top: 1rem!important;">
                                             <thead>
                                                <tr class="table-primary">
                                                   <th scope="col">SrNo</th>
                                                   <th scope="col">Company Name</th>
                                                   <th scope="col">CIN No</th>
                                                   <th scope="col">PAN No</th>
                                                   <th scope="col">Company Logo</th>
                                                   <th scope="col">Company Letter Head</th>
                                                   <th scope="col">Created On</th>
                                                   <th scope="col">Created By</th>
                                                   <th scope="col">Status</th>
                                                   <th scope="col">View</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>01</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="company_creation_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="company_raise.php">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>02</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="company_raise.php">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>03</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                <tr>
                                                   <td>04</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                <tr>
                                                   <td>05</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-profile-tab">
                                       <div class="col-12">
                                          <table id="example2" class="table table-bordered cusTbale small display w-100 table-responsive d-lg-table d-block" style="margin-top: 1rem!important;">
                                             <thead>
                                                <tr class="table-primary">
                                                   <th scope="col">SrNo</th>
                                                   <th scope="col">Company Name</th>
                                                   <th scope="col">CIN No</th>
                                                   <th scope="col">PAN No</th>
                                                   <th scope="col">Company Logo</th>
                                                   <th scope="col">Company Letter Head</th>
                                                   <th scope="col">Created On</th>
                                                   <th scope="col">Created By</th>
                                                   <th scope="col">Status</th>
                                                   <th scope="col">View</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>01</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>02</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>03</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                <tr>
                                                   <td>04</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                <tr>
                                                   <td>05</td>
                                                   <td>Surya Infrastructure Pvt Ltd</td>
                                                   <td>7410</td>
                                                   <td>BL284728OP</td>
                                                   <td>Company Logo.jpg</td>
                                                   <td>Company Letter Head.jpg</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="loanmaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                         <a id="" class="btn btn-sm" href="">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
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