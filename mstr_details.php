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
                  <!-- <div class="content_wrapper"> -->
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb mt-2">
                                <a class="breadcrumb-item" href="#">Master</a>
                                <span class="breadcrumb-item active" aria-current="page">Master Details</span>
                            </nav>
                        </div>
                     </div>
                     
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Manage Master Details</h3>
                           </div>
                           <div>
                              <a href="Add_mstr_details.php">
                                 <button class="bg-primary border_500 btn btn-primary btn-sm logo_bgClr p-1">ADD MASTER TYPE DETAILS</button>
                              </a>
                           </div>
                        </div>
                   
                        <div class="border_500 bg-white position-relative py-2 px-2">
                           <div class="col-md-12">
                              <div class="tab-content" id="pills-tabContent">
                                 <div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="col-12">
                                       <table id="example" class="table table-bordered cusTbale small display w-100 table-responsive d-lg-table d-block" style="margin-top: 1rem!important;">
                                          <thead>
                                             <tr class="table-primary">
                                                <th scope="col">SrNo</th>
                                                <th scope="col">Master Type</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Created By</th>
                                                <th scope="col">Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>RELATION MASTER</td>
                                                <td>Countryetc</td>
                                                <td>2024-10-03 09:09:05</td>
                                                <td>Sushanta ku Mohapatra</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="mstrdetails_view.php">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="Add_mstr_details.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>02</td>
                                                <td>GENERAL MASTER</td>
                                                <td>testetc</td>
                                                <td>2024-10-03 09:09:05</td>
                                                <td>Sushanta ku Mohapatra</td>
                                                <td>
                                                  <div class="d-flex justify-content-end">
                                                      <a href="mstrdetails_view.php">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="Add_mstr_details.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>03</td>
                                                <td>MY MASTER</td>
                                                <td>testetc</td>
                                                <td>2024-10-03 09:09:05</td>
                                                <td>Sushanta ku Mohapatra</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="mstrdetails_view.php">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="Add_mstr_details.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>04</td>
                                                <td>RESCO DPR PURPOSE</td>
                                                <td>testetc</td>
                                                <td>2024-10-03 09:09:05</td>
                                                <td>Sushanta ku Mohapatra</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="#">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="Add_mstr_details.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>05</td>
                                                <td>India</td>
                                                <td>testetc</td>
                                                <td>2024-10-03 09:09:05</td>
                                                <td>Sushanta ku Mohapatra</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="#">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="Add_mstr_details.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
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
         </section>
      </div>
      <?php require_once 'include/common-js.php' ?>

      <!-- <script>
            flatpickr("#date1,#date2,", {
            enableTime: false,   
            dateFormat: "d-m-Y",
            // disableMobile: "true"
   
         });
      </script> -->
   </body>
</html>