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
                                <a class="breadcrumb-item" href="#">Country Master</a>
                                <span class="breadcrumb-item active" aria-current="page">Company Creation Raise</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Company Creation</h3>
                           </div>
                           <div>
                              <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3" style="cursor: pointer;"></i>
                              </a>
                           </div>
                        </div>
                        <div class="border_500 bg-white position-relative py-4 px-4">
                        <div class="row">
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="">Company Name<span class="star">*</span></label>
                                    <input name="Company Name" type="text" maxlength="7" id="" autocomplete="off" placeholder="Company Name" class="form-control">
                                </div>
                               <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="">CIN No<span class="star">*</span></label>
                                    <input type="file" name="" id="" class="form-control lh-lg">
                                </div>
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="">PAN No<span class="star">*</span></label>
                                    <input type="file" name="" id="" class="form-control lh-lg">
                                </div>
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="">Company Logo<span class="star">*</span></label>
                                    <input type="file" name="" id="" class="form-control lh-lg">
                                </div>
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="">Company Letter Head<span class="star">*</span></label>
                                    <input type="file" name="" id="" class="form-control lh-lg">
                                </div> 
                                <div class="form-group col-md-2 col-sm-6 col-12">
                                    <div class="mt-4" style="margin-top: 30px;">
                                        <input type="Save" name="" value="Save" class="border_500 btn btn-primary col-3 fs-6 logo_bgClr me-2 px-0 text-white">
                                        <button class="border_500 btn btn-danger fs-5 fs-6 logo_bgClr text-white col-4">Reset</button>
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