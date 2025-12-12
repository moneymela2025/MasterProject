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
                                <span class="breadcrumb-item active" aria-current="page">Master Type</span>
                            </nav>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Manage Master Type</h3>
                           </div>
                           <div>
                              <button class="bg-primary btn btn-primary btn-sm p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">ADD MASTER TYPE</button>
                              <!-- <button class="bg-primary border_500 btn btn-primary btn-sm logo_bgClr p-1">ADD MASTER TYPE</button> -->
                           </div>
                        </div>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                           <div class="offcanvas-header">
                              <h5 id="offcanvasRightLabel">
                              </h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                           </div>
                        
                           <div class="offcanvas-body mx-0 flex-grow-0">
                              <div class="col-12">
                                 <div class="section_heading d-flex justify-content-between align-items-center">
                                    <div>
                                       <h3 class="mb-0 fs-5">Create Master Type</h3>
                                    </div>
                                 </div>
                                 <div class="border_500 bg-white position-relative py-4 px-2">
                                    <div class="row">
                                       <div class="form-group col-12">
                                          <label for="">MASTER TYPE<span class="star">*</span></label>
                                          <input name="master type" type="text" maxlength="7" id="" autocomplete="off" placeholder="Enter District" class="form-control">
                                          <button type="button" class="btn btn-primary mb-2 d-grid w-100 waves-effect waves-light logo_bgClr border_500">Create</button>
                                       </div>
                                    </div>

                                 </div>
                              </div>
                              <!-- <button type="button" class="btn btn-primary mb-2 d-grid w-100 waves-effect waves-light">Continue</button>
                              <button type="button" class="btn btn-outline-secondary d-grid w-100 waves-effect" data-bs-dismiss="offcanvas">Cancel</button> -->
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
                                                <th scope="col">Created On</th>
                                                <th scope="col">Created By</th>
                                                <th scope="col">IP Address</th>
                                                <th scope="col">Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>UPGRADATION STATUS</td>
                                                <td>2023-04-11 14:22:23</td>
                                                <td>Satyabrata Jati</td>
                                                <td>191.62.23.54</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="countrymaster_view.php">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="countrymaster_edit.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>02</td>
                                                <td>STAUS OF TENDER FINANCE</td>
                                                <td>2023-04-11 13:14:17</td>
                                                <td>Satyabrata Jati</td>
                                                <td>191.62.23.54</td>
                                                <td>
                                                  <div class="d-flex justify-content-end">
                                                      <a href="countrymaster_view.php">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="countrymaster_edit.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>03</td>
                                                <td>SUBMISSION MODE</td>
                                                <td>2023-04-11 11:10:54</td>
                                                <td>Satyabrata Jati</td>
                                                <td>191.62.23.54</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="countrymaster_view.php">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="countrymaster_edit.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>04</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>25-09-2024</td>
                                                <td>191.62.23.54</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="countrymaster_view.php">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="#">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"> <i class="fa-duotone fa-solid fa-pen-to-square fa-md"></i> Edit</button>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>05</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>25-09-2024</td>
                                                <td>191.62.23.54</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="countrymaster_view.php">
                                                         <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"> <i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a href="#">
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

   </body>
</html>