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
                     <div class="col-12">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Loan Details</h3>
                           </div>
                        </div>
                        <div class="bg-gradient border_500 position-relative px-4 py-2">
                           <div class="row">
                              <div class="col-md-12" id="countrymaster_pills">
                                 <div class="row">
                                    <div class="col-md-2 col-sm-6 col-12">
                                       <label for="">From Date</label>
                                       <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date1">
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-12">
                                       <label for="">To Date</label>
                                       <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date2">
                                    </div>
                                    <div class="form-group col-md-2 col-sm-6 col-12">
                                       <label for="">Select Loan Status Filter<span class="star">*</span></label>
                                       <select name="" id="" class="form-select">
                                          <option selected="selected" value=":::: Select Loan Status ::::">:::: Select Loan Status ::::</option>
                                          <option value="Pending From Maker">Pending From Maker</option>
                                          <option value="Pending From Maker">Pending From Checker</option>
                                          <option value="Pending From Maker">Approved</option>
                                          <option value="Pending From Maker">Rejected</option>
                                          <option value="Pending From Maker">Recheck</option>
                                       </select>
                                    </div>
                                    <div class="col-md-2 col-sm-6 col-12">
                                       <div class="d-flex" style="margin-top: 28px;">
                                          <input type="submit" name="" value="Submit" id="" class="border_500 btn btn-primary fw-bold logo_bgClr rounded-1 text-white  me-1">
                                          <a id="ContentPlaceHolder1_btnReset" usesubmitbehavior="False">
                                             <button class="btn btn-primary logo_bgClr border_500"><i class="fas fa-sync-alt"></i></button>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">
                                       <div class="col-12">
                                          <table id="example" class="cusTbale d-block d-lg-table dataTable display no-footer small table table-bordered table-responsive w-100">
                                             <thead>
                                                <tr class="table-primary">
                                                   <th scope="col">SrNo</th>
                                                   <th scope="col">Loan Registration Date</th>
                                                   <th scope="col">Loan Account No</th>
                                                   <th scope="col">Member Id</th>
                                                   <th scope="col">Member Name</th>
                                                   <th scope="col">Loan Type</th>
                                                   <th scope="col">LoanSub Category</th>
                                                   <th scope="col">Status</th>
                                                   <th scope="col">Is Loan Disbursed</th>
                                                   <th scope="col">View</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>01</td>
                                                   <td>05/11/2023</td>
                                                   <td>PL2013101000658</td>
                                                   <td>M2530012328</td>
                                                   <td>Parth naraayn</td>
                                                   <td>Personal Loan</td>
                                                   <td>Marriage loan</td>
                                                   <td>
                                                      <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td>Yes</td>
                                                   <td>
                                                      <a id="" class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>02</td>
                                                   <td>05/11/2023</td>
                                                   <td>PL2013101000656</td>
                                                   <td>M2430012322</td>
                                                   <td>Swapnamayee  Swain</td>
                                                   <td>Personal Loan</td>
                                                   <td>Other</td>
                                                   <td>
                                                      <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td>Yes</td>
                                                   <td>
                                                      <a id="" class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>03</td>
                                                   <td>05/11/2023</td>
                                                   <td>PL2013101000656</td>
                                                   <td>M2430012322</td>
                                                   <td>Swapnamayee  Swain</td>
                                                   <td>Personal Loan</td>
                                                   <td>Other</td>
                                                   <td>
                                                      <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td>Yes</td>
                                                   <td>
                                                      <a id="" class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>04</td>
                                                   <td>05/11/2023</td>
                                                   <td>PL2013101000656</td>
                                                   <td>M2430012322</td>
                                                   <td>Swapnamayee  Swain</td>
                                                   <td>Personal Loan</td>
                                                   <td>Other</td>
                                                   <td>
                                                      <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td>Yes</td>
                                                   <td>
                                                      <a id="" class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>05</td>
                                                   <td>05/11/2023</td>
                                                   <td>PL2013101000656</td>
                                                   <td>M2430012322</td>
                                                   <td>Swapnamayee  Swain</td>
                                                   <td>Personal Loan</td>
                                                   <td>Other</td>
                                                   <td>
                                                      <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td>Yes</td>
                                                   <td>
                                                      <a id="" class="btn btn-sm" href="#">
                                                         <i class="fa-duotone fa-solid fa-pen-to-square fa-lg" style="--fa-primary-color: #0d6efd; --fa-secondary-color: #0d6efd;"></i>
                                                      </a>
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