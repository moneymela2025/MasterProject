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
                                <a class="breadcrumb-item" href="#">System Setting</a>
                                <span class="breadcrumb-item active" aria-current="page">Member Settings</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Member Form</h3>
                           </div>
                           <div>
                           <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3" style="cursor: pointer;"></i>
                              </a>
                           </div>
                        </div>
                        <div class="border_500 bg-white position-relative py-4 px-4">
                           <div class="my-0 subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Member Settings</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label id="">Member Type <span class="star">*</span></label>
                                    <select name="Member Type" id="" class="form-select">
                                       <option value=":::: Select Member::::">:::: Select Member Type ::::</option>
                                       <option value="Borrower">Borrower</option>
                                       <option value="Lender">Lender</option>
                                       <option value="Lender">Channel Partner</option>
                                       <option value="Employee">Employee</option>
                                    </select>
                                 </div>

                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label id="">Member ID Prefix<span class="star">*</span></label>
                                    <input name="" type="text" id="" class="form-control" placeholder="Member ID Prefix">
                                 </div>
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label id="">Member ID <span class="star">*</span></label>
                                    <input name="Member ID" type="text" id="" class="form-control" placeholder="Member ID">
                                 </div>
                                 <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label id="">Bank Mandate Fee <span class="star">*</span></label>
                                    <input name="" type="text" maxlength="10"  id="" class="form-control" placeholder="Bank Mandate Fee">
                                 </div>

                              </div>
                           </div>
                        
                        
                   
                           <div class="d-flex justify-content-end mt-4">
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