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
                                <span class="breadcrumb-item active" aria-current="page">Lender List</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Lender List</h3>
                           </div>
                           <!-- <div class="m-1">
                              <a href="EmployeeRegistration_form.php">
                                 <button class="btn btn-primary btn-sm p-1" type="button" style="background-color:#E66526;">
                                    Add Employee
                                 </button>
                              </a>
                           </div> -->
                        </div>
                        <div class="border_500 bg-white position-relative py-4 px-4">
                        <div class="row">
                              <div class="col-md-12" id="countrymaster_pills">
                                 <!-- <ul class="gap-2 mb-2 nav nav-pills" id="pills-tab" role="tablist">
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
                                       <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-approved" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
                                          Pending
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-approved" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
                                       My Pending
                                      </button>
                                    </li>
                                 </ul> -->
                                 <div class="row">
                                    <div class="col-md-2 col-sm-6 col-12">
                                       <label for="">From Date</label>
                                       <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date1">
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-12">
                                       <label for="">To Date</label>
                                       <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date2">
                                    </div>
                                    <!-- <div class="form-group col-md-2 col-sm-6 col-12">
                                       <label for="">Lender ID<span class="star">*</span></label>
                                       <select name="" id="" class="form-select">
                                          <option selected="selected" value=":::: Select Purpose Loan ::::">:::: Select ::::</option>
                                          <option value="Employee Role">Employee Role</option>
                                          <option value="Employee ID">Employee ID</option>
                                       </select>
                                     </div> -->
                                     <!-- <div class="form-group col-md-4 col-sm-6 col-12">
                                       <div style="margin-top:30px;">
                                         <input type="submit" name="" value="Submit" id="" class="border_500 btn btn-primary fw-bold logo_bgClr rounded-1 text-white">
                                       </div>
                                    </div> -->

                                    <div class="col-md-2 col-sm-6 col-12">
                                       <div class="d-flex" style="margin-top: 28px;">
                                          <!-- <a id="ContentPlaceHolder1_btnSearch">
                                             <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                                          </a> -->
                                          <input type="submit" name="" value="Submit" id="" class="border_500 btn btn-primary fw-bold logo_bgClr rounded-1 text-white  me-1">
                                          <a id="ContentPlaceHolder1_btnReset" usesubmitbehavior="False">
                                             <button class="btn btn-primary logo_bgClr border_500"><i class="fas fa-sync-alt"></i></button>
                                          </a>
                                          
                                          <!-- <a href="EmployeeRegistration_form.php">
                                             <button class="btn btn-primary logo_bgClr border_500 btn-sm"> Add Employee</button>
                                          </a> -->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">
                                       <div class="col-12">
                                          <table id="example" class="table table-bordered cusTbale small display w-100 table-responsive d-block d-lg-table">
                                             <thead>
                                                <tr class="table-primary">
                                                   <th scope="col">SrNo</th>
                                                   <th scope="col">Investor ID</th>
                                                   <th scope="col">Registration Date</th>
                                                   <th scope="col">Name</th>
                                                   <th scope="col">User Type</th>
                                                   <th scope="col">CP ID</th>
                                                   <th scope="col">Status</th>
                                                   <th scope="col">View</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>01</td>
                                                   <td>INV2422502</td>
                                                   <td>05/11/2023</td>
                                                   <td>Sabita kumari Swain</td>
                                                   <td>Individual</td>
                                                   <td></td>
                                                   <td>
                                                      <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                         <a href="#">
                                                            <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                         </a>
                                                         <a id="" class="btn btn-sm" href="Lender_Individual.php">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                </tr>
                                               
                                                <tr>
                                                   <td>02</td>
                                                   <td>INV2422501</td>
                                                   <td>05/11/2023</td>
                                                   <td>Deenabandhu Dakua</td>
                                                   <td>Individual</td>
                                                   <td>CP2424231</td>
                                                   <td>
                                                     <a id="" class="badge bg-label-danger rounded-pill w-100" href="">Rejected</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                         <a href="#">
                                                            <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                         </a>
                                                         <a id="" class="btn btn-sm" href="Lender_Individual.php">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                            style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                         </a>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>03</td>
                                                   <td>INV2422455</td>
                                                   <td>09/11/2023</td>
                                                   <td>Deenabandhu Dakua</td>
                                                   <td>Non Individual</td>
                                                   <td>CP2424231</td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning rounded-pill w-100" href="">Pending</a>
                                                   </td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                         <a href="#">
                                                            <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                         </a>
                                                         <a id="" class="btn btn-sm" href="Lender_Individual.php">
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