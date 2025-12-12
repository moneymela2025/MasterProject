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
                                <span class="breadcrumb-item active" aria-current="page">State Master</span>
                            </nav>
                        </div>
                        </div>
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">State Master</h3>
                           </div>
                        </div>
                        <div class="border_500 bg-white position-relative py-4 px-4">
                        <div class="justify-content-center row">
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="">Select Country<span class="star">*</span></label>
                                    <select name="" id="" class="form-select">
                                        <option selected="selected" value=":::: Select Purpose Loan ::::">:::: Select Country ::::</option>
                                        <option value="India">India</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <label for="">Enter State<span class="star">*</span></label>
                                    <input name="Enter State" type="text" maxlength="7" id="" autocomplete="off" placeholder="Enter State" class="form-control">
                                </div>
                                <div class="form-group col-md-3 col-sm-6 col-12">
                                    <div class="mt-4" style="margin-top: 30px;">
                                        <input type="Save" name="" value="Save" class="border_500 btn btn-primary col-3 fs-6 logo_bgClr me-2 px-0 text-white">
                                        <button class="border_500 btn btn-danger fs-5 fs-6 logo_bgClr text-white col-4">Reset</button>
                                    </div>
                                </div>
                           </div>


                           <div class="subHeading">
                              <h3 class="fs-5 fw-bold logo_clr mb-0"> State List</h3>
                           </div>
                           <div class="col-12">
                              <table id="example" class="d-block d-xl-table dataTable display no-footer small table table-bordered table-responsive w-100"
                                 data-ordering="false">
                                 <thead>
                                    <tr class="bg-body-secondary">
                                       <th scope="col">SrNo</th>
                                       <th scope="col">Country</th>
                                       <th scope="col">State</th>
                                       <th scope="col">RID</th>
                                       <th scope="col">Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>01</td>
                                       <td>India</td>
                                       <td>TELENGANA</td>
                                       <td>35</td>
                                       <td>
                                          <div class="d-flex gap-1 justify-content-end">
                                             <a id="" class="btn btn-sm" href="" data-bs-toggle="modal" data-bs-target="#CountryErrors">
                                             <i class="fa-duotone fa-solid fa-trash-can fa-lg"
                                                style="--fa-primary-color: #d0111a; --fa-secondary-color: #d0111a;"></i>
                                                  <div class="modal fade" id="CountryErrors" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
                                                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-body text-center p-lg-4">
                                                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                                <circle class="path circle" fill="none" stroke="#db3646" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                                                <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3" />
                                                                <line class="path line" fill="none" stroke="#db3646" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" X2="34.4" y2="92.2" />
                                                              </svg>
                                                              <h4 class="text-danger mt-3">Confirmation Dialog</h4>
                                                              <p class="mt-3">Can't be Deleted <span class="fw-light text-danger">SRILANKA </span>is in Use.</p>
                                                              <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Ok</button> 
                                                          </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                             </a>
                                             <a id="" class="btn btn-sm" href="">
                                             <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                    <td>02</td>
                                       <td>India</td>
                                       <td>TELENGANA</td>
                                       <td>35</td>
                                       <td>
                                          <div class="d-flex gap-1 justify-content-end">
                                             <a id="" class="btn btn-sm" href="">
                                             <i class="fa-duotone fa-solid fa-trash-can fa-lg"
                                                style="--fa-primary-color: #d0111a; --fa-secondary-color: #d0111a;"></i>
                                             </a>
                                             <a id="" class="btn btn-sm" href="">
                                             <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                    <td>03</td>
                                       <td>India</td>
                                       <td>TELENGANA</td>
                                       <td>35</td>
                                       <td>
                                          <div class="d-flex gap-1 justify-content-end">
                                             <a id="" class="btn btn-sm" href="">
                                             <i class="fa-duotone fa-solid fa-trash-can fa-lg"
                                                style="--fa-primary-color: #d0111a; --fa-secondary-color: #d0111a;"></i>
                                             </a>
                                             <a id="" class="btn btn-sm" href="">
                                             <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                    <td>04</td>
                                       <td>India</td>
                                       <td>TELENGANA</td>
                                       <td>35</td>
                                       <td>
                                          <div class="d-flex gap-1 justify-content-end">
                                             <a id="" class="btn btn-sm" href="">
                                             <i class="fa-duotone fa-solid fa-trash-can fa-lg"
                                                style="--fa-primary-color: #d0111a; --fa-secondary-color: #d0111a;"></i>
                                             </a>
                                             <a id="" class="btn btn-sm" href="">
                                             <i class="fa-duotone fa-solid fa-pen-to-square fa-lg"
                                                style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
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
         </section>
      </div>
      <?php require_once 'include/common-js.php' ?>
   </body>
</html>