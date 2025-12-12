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
                                <span class="breadcrumb-item active" aria-current="page">Master Type Details</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Create Master Type Details</h3>
                           </div>
                           <div>
                               <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3"></i>
                               </a>
                           </div>
                        </div>
                        <div class="bg-white border_500 position-relative px-4 py-2">
                           <div class="form-row">
                           <div class="row">
                              <div class="form-group col-lg-4 col-md-6 col-12">
                                 <label for="">MASTER TYPE <span class="star">*</span></label>
                                 <select name="" id="" class="form-select">
                                       <option selected="selected" value=":::: Select Purpose Loan ::::">:::: Select Master Type ::::</option>
                                       <option value="India">India</option>
                                 </select>
                              </div>
                           </div>
                               <div class="row">
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="">MASTER TYPE VALUE :<span class="star">*</span></label>
                                    <input name="Enter District" type="text" maxlength="7" id="" autocomplete="off" placeholder="Enter Master Type Values" class="form-control">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label for="">MASTER TYPE NAME :<span class="star">*</span></label>
                                    <input name="Enter District" type="text" maxlength="7" id="" autocomplete="off" placeholder="Enter Master Type Names" class="form-control">
                                 </div>
                                 <div class="form-group col-md-2 col-sm-6 col-12">
                                    <button type="button" class="btn logo_bgClr border_500 btn-primary waves-effect waves-light mt-4">
                                       <i class="fa-duotone fa-solid fa-hexagon-plus fa-lg"></i> ADD
                                    </button>
                                 </div>
                              </div> 
                              <div class="form-group col-lg-3 col-md-6 col-12">
                                 <div class="mt-2">
                                       <input type="Create" name="" value="Create" class="border_500 btn btn-primary col-3 fs-6 logo_bgClr me-2 px-0 text-white">
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