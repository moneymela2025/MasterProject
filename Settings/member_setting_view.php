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
                                <a class="breadcrumb-item" href="#">Member Settings</a>
                                <span class="breadcrumb-item active" aria-current="page">Member Settings View</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Member Settings View</h3>
                           </div>
                           <div>
                              <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3" style="cursor: pointer;"></i>
                              </a>
                           </div>
                        </div>
                        <div class="bg-white border_500 position-relative px-4 py-2">
                        <div class="row">
                           <div class="col-xl-7 col-12">
                              <dl class="row mb-0">
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading fw-bold">Member Type:</dt>
                                 <dd class="col-sm-8">Lender</dd>

                                <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading fw-bold">Memmber ID:</dt>
                                 <dd class="col-sm-8">284728OP</dd>

                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading fw-bold">Status:</dt>
                                 <dd class="col-sm-8">Status --</dd>
                                  <!-- 
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading fw-bold">District:</dt>
                                 <dd class="col-sm-8">khordha</dd> -->
                  
                              </dl>
                           </div>
                           <div class="col-xl-5 col-12">
                              <dl class="row mb-0">
                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading fw-bold">Member ID Prefix:</dt>
                                 <dd class="col-sm-8">ID85964</dd>

                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading fw-bold">Bank Mandate Fee:</dt>
                                 <dd class="col-sm-8">5000</dd>

                                 <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading fw-bold">Status By:</dt>
                                 <dd class="col-sm-8">Status By---</dd>
                                 <!-- <dt class="col-sm-4 mb-sm-3 text-nowrap fw-medium text-heading fw-bold">City:</dt>
                                 <dd class="col-sm-8">Bhubaneswar</dd> -->
                              </dl>
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