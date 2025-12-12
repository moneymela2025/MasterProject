<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MoneyMela | </title>
      <?php require_once 'include/common-css.php' ?>


<style>
:root {
    /* Color Variables */
    --success-color: #28a745;
    --error-color: #db3646;
    --modal-bg-color: #fff;
    
    /* Size Variables */
    --border-radius: 20px;
    --icon-size: 100px;
    
    /* Stroke Variables */
    --stroke-width: 6;
    --circle-radius: 62.1;
    --dasharray: 1000;
    
    /* Animation Timing Variables */
    --dash-duration: 0.9s;
    --check-delay: 0.35s;
    --check-duration: 0.95s;
}

/* Success Modal */
.modal#CountrySuccess .modal-content {
    border-radius: var(--border-radius);
}

.modal#CountrySuccess .modal-content svg {
    width: var(--icon-size);
    display: block;
    margin: 0 auto;
}

.modal#CountrySuccess .modal-content .path {
    stroke-dasharray: var(--dasharray);
    stroke-dashoffset: 0;
}

.modal#CountrySuccess .modal-content .path.circle {
    animation: dash var(--dash-duration) ease-in-out;
    fill: none;
    stroke: var(--success-color);
    stroke-width: var(--stroke-width);
    stroke-miterlimit: 10;
}

.modal#CountrySuccess .modal-content .path.check {
    stroke-dashoffset: -100;
    animation: dash-check var(--check-duration) var(--check-delay) ease-in-out forwards;
    fill: none;
    stroke: var(--success-color);
    stroke-width: var(--stroke-width);
    stroke-linecap: round;
    stroke-miterlimit: 10;
}

/* Error Modal */
.modal#CountryErrors .modal-content {
    border-radius: var(--border-radius);
}

.modal#CountryErrors .modal-content svg {
    width: var(--icon-size);
    display: block;
    margin: 0 auto;
}

.modal#CountryErrors .modal-content .path {
    stroke-dasharray: var(--dasharray);
    stroke-dashoffset: 0;
}

.modal#CountryErrors .modal-content .path.circle {
    animation: dash var(--dash-duration) ease-in-out;
    fill: none;
    stroke: var(--error-color);
    stroke-width: var(--stroke-width);
    stroke-miterlimit: 10;
}

.modal#CountryErrors .modal-content .path.line {
    stroke-dashoffset: var(--dasharray);
    animation: dash var(--check-duration) var(--check-delay) ease-in-out forwards;
    fill: none;
    stroke: var(--error-color);
    stroke-width: var(--stroke-width);
    stroke-linecap: round;
    stroke-miterlimit: 10;
}

/* Animations */
@keyframes dash {
    0% {
        stroke-dashoffset: var(--dasharray);
    }
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes dash-check {
    0% {
        stroke-dashoffset: -100;
    }
    100% {
        stroke-dashoffset: 900;
    }
}
</style>
   <body>
      <?php require_once 'include/header.php' ?>
      <?php require_once 'include/sidebar.php' ?>
      <div>
         <section>
            <div class="d-flex">
               <div class="xyz">
                  <!-- <div class="content_wrapper"> -->
                  <div class="container-fluid">
                     <div class="col-12 mt-2">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">Country Master</h3>
                           </div>
                       
                        </div>
                        <div class="border_500 bg-white position-relative py-2 px-2">
                           <div class="row">
                              <div class="col-md-12" id="countrymaster_pills">
                                 <ul class="gap-2 mb-2 nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                             All
                                       </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-approved" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
                                             Approved</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
                                             Pending</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-recheck" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
                                             Recheck</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                       <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-mypending" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
                                             My Pending</button>
                                    </li>
                                 </ul>
                                 <div class="row">
                                    <div class="col-md-3 col-sm-6 col-12">
                                       <label for="">From Date</label>
                                       <input class="form-control" placeholder="DD-MM-YYYY" type="text" id="date1">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                       <label for="">To Date</label>
                                       <input class="form-control" placeholder="DD-MM-YYYY" tabindex="0" type="text" readonly="readonly" id="date2">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                          <label for="">Enter Country</label>
                                          <input name="Enter State" type="text" maxlength="7" id="" autocomplete="off" placeholder="Enter Country" class="form-control">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                       <div class="d-flex justify-content-end mt-4">
                                             <a id="ContentPlaceHolder1_btnSearch">
                                                <button class="border_500 btn btn-primary btn-sm logo_bgClr me-1"><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                                             </a>
                                             <a id="ContentPlaceHolder1_btnReset" usesubmitbehavior="False">
                                                <button class="btn btn-primary logo_bgClr border_500 btn-sm me-1"><i class="fas fa-sync-alt"></i></button>
                                             </a>
                                             <!-- <a id="ContentPlaceHolder1_btnSearch" class="btn fs-5 fw-bold me-4 logo_bgClr text-white rounded-1  btn-primary border_500" href=""><i class="fa fa-search"></i></a> -->
                                             <!-- <a id="ContentPlaceHolder1_btnReset" class="btn fs-5 fw-bold me-4 logo_clr rounded-1  border_500" usesubmitbehavior="False" href=""><i class="fas fa-sync-alt"></i></a> -->
                                             <a href="raise.php">
                                                <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-sharp-duotone fa-solid fa-blinds-raised"></i> Raise</button>
                                             </a>
                                         
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">
                                       <div class="col-12">
                                          <table id="example" class="table table-bordered cusTbale small display w-100 table-responsive d-lg-table d-block" style="margin-top: 1rem!important;">
                                             <thead>
                                                <tr class="table-primary">
                                                   <th scope="col">SrNo</th>
                                                   <th scope="col">Name of the Country</th>
                                                   <th scope="col">Created By</th>
                                                   <th scope="col">Created On</th>
                                                   <th scope="col">Status</th>
                                                   <th scope="col">Status By</th>
                                                   <th scope="col">View</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>01</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-09-2024</td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td></td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="countrymaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
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
                                                   <td>RID025</td>
                                                   <td>22-09-2024</td>
                                                   <td>
                                                   <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td></td>
                                                   <td>
                                                   <div class="d-flex justify-content-end">
                                                   <a href="countrymaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
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
                                                   <td>RID025</td>
                                                   <td>25-09-2023</td>
                                                   <td>
                                                   <a id="" class="badge bg-label-danger rounded-pill w-100" href="">Rejected</a>
                                                   </td>
                                                   <td></td>
                                                   <td>
                                                    
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>04</td>
                                                   <td>India</td>
                                                   <td>RID025fdsfgdsf</td>
                                                   <td>25-10-2022</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                      
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>05</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td>
                                                      
                                                   </td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>06</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>01-09-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>07</td>
                                                   <td>India</td>
                                                   <td>RID0258787</td>
                                                   <td>12-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>08</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>16-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>09</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>29-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>10</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>11</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>20-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>12</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>13</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>14</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>15</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>16</td>
                                                   <td>India</td>
                                                   <td>RID025777</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-profile-tab">
                                       <div class="col-12">
                                       <table id="example2" class="table table-bordered cusTbale small display w-100 table-responsive d-lg-table d-block" style="margin-top: 1rem!important;">
                                             <thead>
                                                <tr class="table-primary">
                                                   <th scope="col">SrNo</th>
                                                   <th scope="col">Name of the Country</th>
                                                   <th scope="col">Created By</th>
                                                   <th scope="col">Created On</th>
                                                   <th scope="col">Status</th>
                                                   <th scope="col">Status By</th>
                                                   <th scope="col">View</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>01</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-09-2024</td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td></td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="countrymaster_approved_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
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
                                                   <td>RID025</td>
                                                   <td>22-09-2024</td>
                                                   <td>
                                                   <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td></td>
                                                   <td>
                                                   <div class="d-flex justify-content-end">
                                                   <a href="countrymaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
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
                                                   <td>RID025</td>
                                                   <td>25-09-2023</td>
                                                   <td>
                                                   <a id="" class="badge bg-label-danger rounded-pill w-100" href="">Rejected</a>
                                                   </td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>04</td>
                                                   <td>India</td>
                                                   <td>RID025fdsfgdsf</td>
                                                   <td>25-10-2022</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>05</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>06</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>01-09-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>07</td>
                                                   <td>India</td>
                                                   <td>RID0258787</td>
                                                   <td>12-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>08</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>16-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>09</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>29-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>10</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>11</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>20-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>12</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>13</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>14</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>15</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>16</td>
                                                   <td>India</td>
                                                   <td>RID025777</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-contact-tab">
                                      <div class="col-12">
                                          <table id="example3" class="table table-bordered cusTbale small display w-100 table-responsive d-lg-table d-block" style="margin-top: 1rem!important;">
                                             <thead>
                                                <tr class="table-primary">
                                                   <th scope="col">SrNo</th>
                                                   <th scope="col">Name of the Country</th>
                                                   <th scope="col">Created By</th>
                                                   <th scope="col">Created On</th>
                                                   <th scope="col">Status</th>
                                                   <th scope="col">Status By</th>
                                                   <th scope="col">View</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>01</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-09-2024</td>
                                                   <td>
                                                     <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                   </td>
                                                   <td></td>
                                                   <td>
                                                      <div class="d-flex justify-content-end">
                                                      <a href="countrymaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
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
                                                   <td>RID025</td>
                                                   <td>22-09-2024</td>
                                                   <td>
                                                   <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                   </td>
                                                   <td></td>
                                                   <td>
                                                   <div class="d-flex justify-content-end">
                                                   <a href="countrymaster_view.php">
                                                         <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
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
                                                   <td>RID025</td>
                                                   <td>25-09-2023</td>
                                                   <td>
                                                   <a id="" class="badge bg-label-danger rounded-pill w-100" href="">Rejected</a>
                                                   </td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>04</td>
                                                   <td>India</td>
                                                   <td>RID025fdsfgdsf</td>
                                                   <td>25-10-2022</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>05</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>06</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>01-09-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>07</td>
                                                   <td>India</td>
                                                   <td>RID0258787</td>
                                                   <td>12-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>08</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>16-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>09</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>29-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>10</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>11</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>20-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>12</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td>25-07-2024</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>13</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>14</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>15</td>
                                                   <td>India</td>
                                                   <td>RID025</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>16</td>
                                                   <td>India</td>
                                                   <td>RID025777</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-recheck" role="tabpanel" aria-labelledby="pills-contact-tab">
                                       <table id="example4" class="table table-bordered cusTbale small display w-100 table-responsive d-lg-table d-block" style="margin-top: 1rem!important;">
                                          <thead>
                                             <tr class="table-primary">
                                                <th scope="col">SrNo</th>
                                                <th scope="col">Name of the Country</th>
                                                <th scope="col">Created By</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Status By</th>
                                                <th scope="col">View</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>25-09-2024</td>
                                                <td>
                                                   <a id="" class="badge bg-label-warning w-100" href="">Pending</a>
                                                </td>
                                                <td></td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                   <a href="countrymaster_view.php">
                                                      <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
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
                                                <td>RID025</td>
                                                <td>22-09-2024</td>
                                                <td>
                                                <a id="" class="badge rounded-pill bg-label-success w-100" href="">Approved</a>
                                                </td>
                                                <td></td>
                                                <td>
                                                <div class="d-flex justify-content-end">
                                                <a href="countrymaster_view.php">
                                                      <button class="btn btn-primary logo_bgClr border_500 btn-sm"><i class="fa-solid fa-eye"></i> View</button>
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
                                                <td>RID025</td>
                                                <td>25-09-2023</td>
                                                <td>
                                                <a id="" class="badge bg-label-danger rounded-pill w-100" href="">Rejected</a>
                                                </td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>04</td>
                                                <td>India</td>
                                                <td>RID025fdsfgdsf</td>
                                                <td>25-10-2022</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>05</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>25-07-2024</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>06</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>01-09-2024</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>07</td>
                                                <td>India</td>
                                                <td>RID0258787</td>
                                                <td>12-07-2024</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>08</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>16-07-2024</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>09</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>29-07-2024</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>10</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>25-07-2024</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>11</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>20-07-2024</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>12</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td>25-07-2024</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>13</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>14</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>15</td>
                                                <td>India</td>
                                                <td>RID025</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                             </tr>
                                             <tr>
                                                <td>16</td>
                                                <td>India</td>
                                                <td>RID025777</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
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