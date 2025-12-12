<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MoneyMela | </title>
      <?php require_once 'include/common-css.php' ?>
      <style>
        .form-field {
            display: flex;
            align-items: center;
            margin-bottom: 3px;
        }
        .form-field label {
            width: 22%;
        }
        .form-field input[type="text"],
        .form-field input[type="number"] {
            width: 65%;
            padding: 2px;
            border: none;
            border-bottom: 1px solid #ccc;
        }
        .form-field input[type="radio"] {
            margin-left: 10px;
        }
    
        .fborder1 {
            border-bottom: 1px dashed #a7a0a0;
        }
        /* .formdeclaration {
            padding: 19px;
        } */
    </style>
   <body>
      <?php require_once 'include/header.php' ?>
      <?php require_once 'include/sidebar.php' ?>
      <div>
         <section> 
            <div class="d-flex">
               <div class="xyz">
                  <div class="container">

                     <div class="col-12 mt-3">
                        <div class="section_heading d-flex justify-content-between align-items-center">
                           <div>
                              <h3 class="mb-0 fs-5">FORM NO. 60</h3>
                           </div>
                        </div>
                        <div class="border_500 bg-white position-relative py-4 px-4">
                            <!-- <div class="formdeclaration"> -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="public/images/logo.png" alt="Logo" style="width: 150px;">
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-0 text-danger text-end">FORM NO. 60</h6>
                                    </div>
                                    <div class="col-12"> 
                                        <div class="text-center">
                                            <p class="fst-italic mb-0">[See second proviso to rule 114B]</p>
                                            <p class="mb-0 mx-5">Form for declaration to be filed by an individual or a person (not being a company or firm) who does not have a Permanent Account Number and who enters into any transaction specified in rule 114B</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <label>1. Full Name and Address of the Declarant</label>
                                    <input type="text">
                                </div>
                                <div class="form-field">
                                    <label>2. Amount of the Transaction</label>
                                    <input type="text">
                                </div>
                                <div class="form-field">
                                    <label class="mb-0">3. Are you assessed to tax?</label>
                                    <div>
                                    <input type="radio" name="Yes" value="Yes"> <label for="taxYes" class="mb-0">Yes</label>
                                    </div>
                                    <div>
                                    <input type="radio" name="No" value="No"> <label for="taxNo" class="mb-0">No</label>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <label class="mb-0">4. Details of document being produced in support of address in row (1)</label>
                                </div>
                                <h6 class="fw-bold text-center text-decoration-underline">Verification</h6>
                                <div class="col-md-12">
                                    <p class="form-field">
                                        I, <input type="text" class="w-25">,do hereby declare that what is stated above is true to the best of my knowledge and belief.
                                    </p>
                                    <p class="form-field">
                                        Verified today,  Date <input type="text" class="w-25"> place <input type="text" class="w-25">
                                    </p>
                                  
                                    <p class="form-field">
                                    <b>Signature of the Declarant *</b> <input type="text" class="w-50">
                                    </p>
                                </div>
                                <p class="fborder1 my-3"></p>
                                <div class="instructions">
                                    <p class="mb-0">Instructions: Documents which can be produced in support of the address are</p>
                                    <p>a) Ration Card b) Passport c) Driving licence d) Identity Card issued by any institution e) Copy of the electricity bill or telephone bill showing residential address f) Any document or communication issued by any authority of the Central Government, State Government or local bodies showing residential address g) Any other documentary evidence in support of this address given in the declaration.</p>
                                    <p>*In case of a transaction in the name of a Minor, any of the above mentioned documents as proof of Identity and Address of any of parents/guardians of such minor shall be deemed to be the proof of identity and address for the minor declarant, and the declaration should be signed by the parent/guardian.</p>
                                    <input type="checkbox" id="" name="MoneyMela">
                                    <label for="MoneyMela">  I Confirm the details through the digital platform of MoneyMela and shall be treated as my formal acceptance in accordance with applicable legal provisions.</label><br>
                                  
                                </div>
                                
                            </div>
                           
                        </div>
                     </div>
                      <button id="download-pdf" class="btn btn-success">Download PDF</button>
                  </div>

               </div>
               
            </div>
         </section>
      </div>

      <?php require_once 'include/common-js.php' ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
      <script>
        document.getElementById('download-pdf').addEventListener('click', () => {
            const { jsPDF } = window.jspdf;
            const element = document.querySelector('.container');
            html2canvas(element, { scale: 2 }).then((canvas) => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF('p', 'mm', 'a4');
                const imgWidth = 210; 
                const pageHeight = 297;
                const imgHeight = (canvas.height * imgWidth) / canvas.width;
                let heightLeft = imgHeight;
                let position = 0;
                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;
                while (heightLeft > 0) {
                    position = heightLeft - imgHeight;
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }
                pdf.save('form.pdf');
            });
        });
    </script>
   

   </body>
</html>