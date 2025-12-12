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
                               <h3 class="mb-0 fs-5">Branches Management</h3>
                           </div>
                           <div>
                           <a href="branchRegform.php">
                              <button class="btn btn-primary btn-sm p-1" type="button" style="background-color:#E66526;">
                                 Branch Registration
                              </button>
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
                                                <th scope="col">Company Name</th>
                                                <th scope="col">Branch Name</th>
                                                <th scope="col">Branch Code</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">State</th>
                                                <th scope="col">District</th>
                                                <th scope="col">City</th>
                                                <th scope="col">View</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>Surya Infrastructure Pvt Ltd</td>
                                                <td>Pokhariput</td>
                                                <td>284728OP</td>
                                                <td>A/24,BDA HIG,Pokhariput, Bhubaneswar</td>
                                                <td>INDIA</td>
                                                <td>Odisha</td>
                                                <td>khordha</td>
                                                <td>Bhubaneswar</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                   <a href="BranchRegistration_view.php">
                                                      <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                   </a>
                                                      <a id="" class="btn btn-sm" href="branchRegform.php">
                                                      <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                         style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>02</td>
                                                <td>Surya Infrastructure Pvt Ltd</td>
                                                <td>Pokhariput</td>
                                                <td>284728OP</td>
                                                <td>A/24,BDA HIG,Pokhariput, Bhubaneswar</td>
                                                <td>INDIA</td>
                                                <td>Odisha</td>
                                                <td>khordha</td>
                                                <td>Bhubaneswar</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                   <a href="BranchRegistration_view.php">
                                                      <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                   </a>
                                                      <a id="" class="btn btn-sm" href="branchRegform.php">
                                                      <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                         style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>03</td>
                                                <td>Surya Infrastructure Pvt Ltd</td>
                                                <td>Pokhariput</td>
                                                <td>284728OP</td>
                                                <td>A/24,BDA HIG,Pokhariput, Bhubaneswar</td>
                                                <td>INDIA</td>
                                                <td>Odisha</td>
                                                <td>khordha</td>
                                                <td>Bhubaneswar</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                   <a href="BranchRegistration_view.php">
                                                      <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                   </a>
                                                      <a id="" class="btn btn-sm" href="branchRegform.php">
                                                      <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                         style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>04</td>
                                                <td>Surya Infrastructure Pvt Ltd</td>
                                                <td>Pokhariput</td>
                                                <td>284728OP</td>
                                                <td>A/24,BDA HIG,Pokhariput, Bhubaneswar</td>
                                                <td>INDIA</td>
                                                <td>Odisha</td>
                                                <td>khordha</td>
                                                <td>Bhubaneswar</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <a href="BranchRegistration_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
                                                      </a>
                                                      <a id="" class="btn btn-sm" href="branchRegform.php">
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
         </section>
      </div>
      <?php require_once 'include/common-js.php' ?>

   </body>
</html>