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
                              <a class="breadcrumb-item" href="#">Loan Master </a>
                              <span class="breadcrumb-item active" aria-current="page">Loan Setting Form</span>
                           </nav>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Loan Settings Form-3</h3>
                           </div>
                           <div>
                              <a onclick="location.href = document.referrer; return false;">
                                 <i class="fa-2xl fa-duotone fa-solid fa-square-left fs-3" style="cursor: pointer;"></i>
                              </a>
                           </div>
                        </div>

                        <div class="border_500 bg-white position-relative py-4 px-4">
                           <div class="subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Loan Settings - Flat (Form-3)</h3>
                           </div>
                           <div class="col-12">
                              <div class="form-row row">
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Loan Type<span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">::::  Select Loan  ::::</option>
                                       <option value="Personal Loans">Personal Loans</option>
                                       <option value="Business Loan">Business Loan</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">Loan Sub Type<span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">::::  Select Loan Sub  ::::</option>
                                       <option value="Marriage Loan">Marriage Loan</option>
                                       <option value="Marriage Loan">Marriage Loan2</option>
                                       <option value="Marriage Loan">Marriage Loan3</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-2 col-sm-6 col-12">
                                    <label id="">Loan weightage </label>
                                    <input name="" type="text" id="" class="form-control" placeholder="Loan weightage">
                                 </div>
                                 <div class="form-group col-md-2 col-sm-6 col-12">
                                    <label id="">EMI Type <span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select EMI Type::::</option>
                                       <option value="EMI Type 1">EMI Type 1</option>
                                       <option value="EMI Type 2">EMI Type 2</option>
                                       <option value="EMI Type 3">EMI Type 3</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <label id="">EMI Sub Type<span class="star">*</span></label>
                                    <select name="Country" id="" class="form-select">
                                       <option value=":::: Select Gender ::::">:::: Select EMI Sub Type ::::</option>
                                       <option value="EMI Sub Type 1">EMI Sub Type 1</option>
                                       <option value="EMI Sub Type 2">EMI Sub Type 2</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <div class="row align-items-end">
                                       <div class="col-sm-6 col-6">
                                          <label>Loan Duration<span class="star">*</span></label>
                                          <input type="text" class="form-control" placeholder="(Min Duration)">
                                       </div>
                                       <div class="col-sm-6 col-6">
                                       <input type="text" class="form-control" placeholder="(Max Duration)">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-4 col-sm-6 col-12">
                                    <div class="row align-items-end">
                                       <div class="col-sm-6 col-6">
                                          <label>Rate Of Interest<span class="star">*</span></label>
                                          <input type="text" class="form-control" placeholder="MIN in Percentage">
                                       </div>
                                       <div class="col-sm-6 col-6">
                                       <input type="text" class="form-control" placeholder="MAX in Percentage">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0">Charges</h3>
                           </div>
                           <div class="row">
                              <div class="form-group col-md-4 col-sm-6 col-12">
                                 <div class="row align-items-end">
                                    <div class="col-sm-6 col-6">
                                       <label>Late fine charges Per EMI<span class="star">*</span></label>
                                       <select name="Country" id="" class="form-select">
                                          <option value="Percentage">Percentage</option>
                                          <option value="Flat">Flat</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6 col-6">
                                    <input type="text" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-md-4 col-sm-6 col-12">
                                 <div class="row align-items-end">
                                    <div class="col-sm-6 col-6">
                                       <label>Documentation Fees</label>
                                       <select name="Country" id="" class="form-select">
                                          <option value="Percentage">Percentage</option>
                                          <option value="Flat">Flat</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6 col-6">
                                    <input type="text" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-md-4 col-sm-6 col-12">
                                 <div class="row align-items-end">
                                    <div class="col-sm-6 col-6">
                                       <label>Processing Fees<span class="star">*</span></label>
                                       <select name="Country" id="" class="form-select">
                                          <!-- <option value=":::: Select Charges ::::"> Select Charges </option> -->
                                          <option value="Percentage">Percentage</option>
                                          <option value="Flat">Flat</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6 col-6">
                                    <input type="text" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-md-4 col-sm-6 col-12">
                                 <div class="row align-items-end">
                                    <div class="col-sm-6 col-6">
                                       <label>Other Charges<span class="star">*</span></label>
                                       <select name="Country" id="" class="form-select">
                                          <option value="Percentage">Percentage</option>
                                          <option value="Flat">Flat</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6 col-6">
                                    <input type="text" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-md-4 col-sm-6 col-12">
                                 <div class="row align-items-end">
                                    <div class="col-sm-6 col-6">
                                       <label>Cheque Bounce Charges</label>
                                       <select name="Country" id="" class="form-select">
                                          <option value="Percentage">Percentage</option>
                                          <option value="Flat">Flat</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6 col-6">
                                       <input type="text" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-md-4 col-sm-6 col-12">
                                 <div class="row align-items-end">
                                    <div class="col-sm-6 col-6">
                                       <label>Fore Closure Charges</label>
                                       <select name="Country" id="" class="form-select">
                                          <option value="Percentage">Percentage</option>
                                          <option value="Flat">Flat</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6 col-6">
                                    <input type="text" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-md-4 col-sm-6 col-12">
                                 <div class="row align-items-end">
                                    <div class="col-sm-6 col-6">
                                       <label>CP Commision<span class="star">*</span></label>
                                       <select name="Country" id="" class="form-select">
                                          <option value=":::: Select Charges ::::"> Select Commision </option>
                                          <option value="Lender">Lender</option>
                                          <option value="Borrower">Borrower</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-6 col-6">
                                    <input type="text" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-md-4 col-sm-6 col-12">
                                 <label>Applicable From</label>
                                 <input class="form-control flatpickr-input active" placeholder="DD-MM-YYYY" type="text" id="date1" readonly="readonly">
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
         </section>
      </div>
      <?php require_once 'include/common-js.php' ?>
      <script>
            flatpickr("#date1,#date2", {
            enableTime: false,   
            dateFormat: "d-m-Y",
            // disableMobile: "true"
         });
      </script>
   </body>
</html>