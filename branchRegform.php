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
                                <a class="breadcrumb-item" href="#">Branches Management</a>
                                <span class="breadcrumb-item active" aria-current="page">Branch Registration Form</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Branch Registration Form</h3>
                           </div>
                           <div>
                              <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3" style="cursor: pointer;"></i>
                              </a>
                           </div>
                        </div>
                        <div class="border_500 bg-white position-relative py-4 px-4">
                           <div class="my-0 subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Branch Details</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label id="">Company<span class="star">*</span></label>
                                    <input name="" type="text" id="" class="form-control" placeholder="surya infrastructure pvt ltd">
                                 </div>
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label id="">Branch Name <span class="star">*</span></label>
                                    <input name="Branch Name" type="text" id="" class="form-control" placeholder="Branch Name ">
                                 </div>
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label id="">Branch Code <span class="star">*</span></label>
                                    <input name="" type="text" maxlength="10"  id="" class="form-control" placeholder="BranchCode">
                                 </div>
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label id="">GST No.<span class="star">*</span></label>
                                    <input name="" type="text" id="" class="form-control" placeholder="Email ID">
                                 </div>
                              </div>
                           </div>
                           <div class="subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Branch Address Details</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Address 1</label>
                                    <input name="" type="text" id="" class="form-control" placeholder="surya infrastructure pvt ltd">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Address 2 </label>
                                    <input name="Branch Name" type="text" id="" class="form-control" placeholder="Branch Name ">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Address 3 </label>
                                    <input name="" type="text" maxlength="10"  id="" class="form-control" placeholder="BranchCode">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Country <span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select Country ::::</option>
                                       <option value="india">India</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">State <span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select State ::::</option>
                                       <option value="Odisha">Odisha</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">District <span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select District ::::</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">City </label>
                                    <input name="City" type="text" id="" class="form-control" placeholder="City">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Pin No </label>
                                    <input name="" type="text" maxlength="10"  id="" class="form-control" placeholder="Pin No">
                                 </div>
                              </div>
                           </div>
                           <div class="subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Contact Details</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Branch Phone<span class="star">*</span></label>
                                    <input name="" type="text" id="" class="form-control" placeholder="Branch Phone">
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">E-Mail Id<span class="star">*</span></label>
                                    <input name="Branch Name" type="text" id="" class="form-control" placeholder="E-Mail">
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex justify-content-center mt-4">
                                <input type="submit" name="" value="Submit"  id="" class="btn fs-5 fw-bold me-sm-4 me-2 logo_bgClr text-white rounded-1 px-sm-5 btn-primary border_500">
                                <button class="btn fs-5 fw-bold me-4 logo_bgClr text-white rounded-1 px-sm-5 btn-danger border_500">Reset</button>
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