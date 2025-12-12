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
                                <span class="breadcrumb-item active" aria-current="page">Master Details</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Master Details View</h3>
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
                                    <label for="jureq">Master Type:</label> PROJECT SALES
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="jureq">Prepared By: </label> Sushanta ku Mohapatra
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                 <div class="form-group">
                                       <label for="jureq">Prepared On: </label> 2024-10-03 11:55:37
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="jureq">Code : </label> master-projectsales
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