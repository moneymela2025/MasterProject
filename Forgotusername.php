<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MoneyMela | </title>
      <?php require_once 'include/common-css.php' ?>
      <style>
        .timer-display {
            font-size: 1rem;
            color: #0c0b0bbd;
            padding: 6px 12px;
            border: 1px solid #403c3c33;
         }
  
    </style>
   <body>
      <?php require_once 'include/header.php' ?>
         <section id="loginWrapper">
            <div class="container">
               <div class="col-lg-4 offset-lg-4 col-sm-8 offset-sm-2 col-12">
                  <div class="loginWrapperOuter">
                     <div class="card">
                        <div class="login-header">
                           <h4 class="fs-4 fw-bolder mb-0">Forgot Username</h4>
                        </div>
                        <div class="col-12">
                           <label for="roleSelection">Choose User Type <span class="star">*</span></label>
                           <div id="roleSelection" class="d-flex form-check-inline justify-content-around">
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="roleSelection" id="lender" value="1">
                                 <label class="form-check-label" for="lender">Lender</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="roleSelection" id="borrower" value="2">
                                 <label class="form-check-label" for="borrower">Borrower</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="roleSelection" id="channelPartner" value="3">
                                 <label class="form-check-label" for="channelPartner">Channel Partner</label>
                              </div>
                           </div>
                           </div>
                        <div class="card-body p-0 pt-3">
                           <div class="tab-content p-0">
                              <div class="tab-pane fade show active">
                                 <div class="form-row">
                                 <div class="form-group">
                                    <label for="">Your PAN number <span class="star">*</span></label>
                                    <input name="pan number" type="text" maxlength="10" id="" class="form-control" placeholder="Enter Your PAN number">
                                </div>
                                <div class="form-group">
                                    <label for="">Your Email Id <span class="star">*</span></label>
                                    <input name="Email ID" type="text" id="" class="form-control" placeholder="Enter Your Email Id">
                                </div>
                                 <input type="submit" name="" value="Submit" class="fs-5 mt-3 pill_btn py-2 rounded-2 text-capitalize w-100">
                                 <span class="d-block mt-3 text-center">Already have account..!! <a href="login_newpage.php" class="logo_clr">Sign In</a></span>
                                       
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <?php require_once 'include/common-js.php' ?>
      <script>
        // Initialize timer variables
        let timeLeft = 60;
        const timerDisplay = document.getElementById('timer');
        // Function to format time in mm:ss format
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${String(minutes).padStart(2, '0')}:${String(remainingSeconds).padStart(2, '0')}`;
        }

        // Update the timer every second
        const countdown = setInterval(() => {
            if (timeLeft > 0) {
                timeLeft--;
                timerDisplay.textContent = formatTime(timeLeft);
            } else {
                clearInterval(countdown);
                timerDisplay.textContent = "Time's Up!";
            }
        }, 1000);

    </script>
   </body>
</html>
