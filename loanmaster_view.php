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
                                <a class="breadcrumb-item" href="#">Dashboard</a>
                                <span class="breadcrumb-item active" aria-current="page">Loan Master View</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Country Master View</h3>
                           </div>
                           <div>
                           <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3" style="cursor: pointer;"></i>
                              </a>
                           </div>
                        </div>
                        <div class="bg-white border_500 position-relative px-4 py-2">
                              <div class="row">
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                       <label for="jureq">Loan Type: </label> Personal Loan
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                       <label for="jureq">Created By: </label> Deenabandhu
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                       <label for="jureq">Created On: </label> 25-09-2024
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                       <label for="jureq">Status: </label> Pending
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                       <label for="jureq">Status By: </label> Deenabandhu
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                       <label for="jureq">Created On: </label> 
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                       <label for="jureq">Name of the Country: </label> 
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                           
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
                                                <th scope="col">Raised by</th>
                                                <th scope="col">Raised On</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">IP Address</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <th scope="row">1</th>
                                                <td>Sabita</td>
                                                <td>9/27/2024  12:24:00 PM</td>
                                                <td>Raised</td>
                                                <td>plz approve</td>
                                                <td>191.62.23.54</td>
                                             </tr>
                                             <tr>
                                                <th scope="row">1</th>
                                                <td>Sabita</td>
                                                <td>9/27/2024  12:24:00 PM</td>
                                                <td>Raised</td>
                                                <td>plz approve</td>
                                                <td>191.62.23.54</td>
                                             </tr>
                                             <tr>
                                                <th scope="row">1</th>
                                                <td>Sabita</td>
                                                <td>9/27/2024  12:24:00 PM</td>
                                                <td>Raised</td>
                                                <td>plz approve</td>
                                                <td>191.62.23.54</td>
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
         </section>
      </div>
      <?php require_once 'include/common-js.php' ?>
   </body>
</html>