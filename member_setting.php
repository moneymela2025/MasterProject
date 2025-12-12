<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MoneyMela | </title>
      <?php require_once 'include/common-css.php' ?>
<style>
.border_500 {
    border: 1px solid var(--logo-clr-600);
}
.logo_bgClr {
    background-color: var(--logo-clr);
}
</style>
   <body>
      <?php require_once 'include/header.php' ?>
      <?php require_once 'include/sidebar.php' ?>
      <div>
         <section>
            <div class="d-flex">
               <div class="xyz">
                  <!-- <div class="content_wrapper"> -->
                  <div class="content_wrapper">
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                               <h3 class="mb-0 fs-5">Member Settings</h3>
                           </div>
                           <div>
                              <a href="Member_registration.php">
                                 <button class="btn btn-primary btn-sm p-1" type="button" style="background-color:#E66526;">
                                    Member Registration
                                 </button>
                              </a>
                           </div>
                        </div>
               
                        <div class="border_500 bg-white position-relative py-2 px-2">
                           <div class="row">
                              <div class="col-md-2 col-sm-6 col-12">
                                 <label for="">From Date</label>
                                 <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date1">
                              </div>
                              <div class="col-md-2 col-sm-6 col-12">
                                 <label for="">To Date</label>
                                 <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date2">
                              </div>
                              <div class="col-md-8 col-sm-6 col-12">
                                 <div class="d-flex justify-content-end" style="margin-top: 28px;">
                                    <input type="submit" name="" value="Submit" id="" class="border_500 btn btn-primary fw-bold logo_bgClr rounded-1 text-white  me-1">
                                    <a id="ContentPlaceHolder1_btnReset" usesubmitbehavior="False">
                                       <button class="btn btn-primary logo_bgClr border_500"><i class="fas fa-sync-alt"></i></button>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">  
                              <table id="example" class="table table-bordered cusTbale small display w-100 table-responsive d-lg-table d-block" style="margin-top: 1rem!important;">
                                 <thead>
                                    <tr class="table-primary">
                                       <th scope="col">Sl.No.</th>
                                       <th scope="col">Member Type</th>
                                       <th scope="col">Member ID Prefix</th>
                                       <th scope="col">Memmber ID</th>
                                       <th scope="col">Bank Mandate Fee</th>
                                       <th scope="col">Status</th>
                                       <th scope="col">Status By</th>
                                       <th scope="col">View</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>01</td>
                                       <td>Lender</td>
                                       <td>ID Prefix</td>
                                       <td>284728OP</td>
                                       <td>500</td>
                                       <td>-</td>
                                       <td>-</td>
                                       <td>
                                          <div class="d-flex justify-content-end">
                                          <a href="member_setting_view.php">
                                             <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                          </a>
                                             <a id="" class="btn btn-sm" href="Member_registration.php">
                                             <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>02</td>
                                       <td>Channel Partner</td>
                                       <td>ID Prefix</td>
                                       <td>284728OP</td>
                                       <td>500</td>
                                       <td>-</td>
                                       <td>-</td>
                                       <td>
                                          <div class="d-flex justify-content-end">
                                          <a href="member_setting_view.php">
                                             <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                          </a>
                                             <a id="" class="btn btn-sm" href="Member_registration.php">
                                             <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>03</td>
                                       <td>Lender</td>
                                       <td>ID Prefix</td>
                                       <td>284728OP</td>
                                       <td>500</td>
                                       <td>-</td>
                                       <td>-</td>
                                       <td>
                                          <div class="d-flex justify-content-end">
                                          <a href="member_setting_view.php">
                                             <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                          </a>
                                             <a id="" class="btn btn-sm" href="Member_registration.php">
                                             <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>04</td>
                                       <td>Employee</td>
                                       <td>ID Prefix</td>
                                       <td>284728OP</td>
                                       <td>500</td>
                                       <td>-</td>
                                       <td>-</td>
                                       <td>
                                          <div class="d-flex justify-content-end">
                                          <a href="#">
                                             <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                          </a>
                                             <a id="" class="btn btn-sm" href="Member_registration.php">
                                             <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>05</td>
                                       <td>Borrower</td>
                                       <td>ID Prefix</td>
                                       <td>284728OP</td>
                                       <td>500</td>
                                       <td>-</td>
                                       <td>-</td>
                                       <td>
                                          <div class="d-flex justify-content-end">
                                          <a href="#">
                                             <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                          </a>
                                             <a id="" class="btn btn-sm" href="#">
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