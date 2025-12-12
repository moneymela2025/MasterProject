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
      <style>
         :root {
         --primary-bg-color: white;
         --box-shadow-color: rgba(0, 0, 0, 0.2);
         --border-color: #ddd;
         --focus-border-color: #de8e2c;
         --gradient-start-color: #de8e2c;
         --gradient-end-color: #e56b27;
         --hover-color: #0056b3;
         --text-color: white;
         --padding-container: 30px;
         --padding-button: 10px 20px;
         --border-radius-container: 8px;
         --border-radius-box: 4px;
         --border-radius-button: 5px;
         --box-width: 300px;
         --box-width-otp: 50px;
         --box-height-otp: 50px;
         --font-size-otp: 24px;
         --flex-justify-center: center;
         --flex-align-center: center;
      }
      .otp-modal {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         display: flex;
         justify-content: var(--flex-justify-center);
         align-items: var(--flex-align-center);
      }
      .otp-container {
         background-color: var(--primary-bg-color);
         padding: var(--padding-container);
         border-radius: var(--border-radius-container);
         text-align: center;
         box-shadow: 0 4px 8px var(--box-shadow-color);
         width: var(--box-width);
      }
      .otp-inputs {
         display: flex;
         justify-content: space-between;
         margin: 20px 0;
      }
      .otp-box {
         width: var(--box-width-otp);
         height: var(--box-height-otp);
         text-align: center;
         font-size: var(--font-size-otp);
         border: 1px solid var(--border-color);
         border-radius: var(--border-radius-box);
      }
      .otp-box:focus {
         border-color: var(--focus-border-color);
         outline: none;
      }
      .verify-btn, .resend-btn {
         background: linear-gradient(60deg, var(--gradient-start-color) 40%, var(--gradient-end-color) 100%);
         color: var(--text-color);
         border: none;
         padding: var(--padding-button);
         border-radius: var(--border-radius-button);
         cursor: pointer;
         margin: 10px 0;
      }
      .verify-btn:hover, .resend-btn:hover {
         background-color: var(--hover-color);
      }
      </style>

   <section>
      <div class="d-flex">
         <div class="xyz">
            <div class="content_wrapper">
               <!-- <div class="row">
                  <div class="col-12">
                        <nav class="breadcrumb">
                           <a class="breadcrumb-item" href="#">Dashboard</a>
                           <span class="breadcrumb-item active" aria-current="page">Transaction Report</span>
                        </nav>
                  </div>
                  </div> -->
                   <div id="ContentPlaceHolder1_noamount">
                        <div class="col-md-4 mx-auto">
                           <div class="heading text-center">
                              <img src="public/images/noactiveloan.png" class="img-fluid" alt="">
                              <!-- <h2 class="h1 fs-3 my-3">You don't have take any loan.</h2> -->
                           </div>
                        </div>
                  </div> 

                  <!-- <div class="otp-modal">
                     <div class="otp-container">
                        <h4 class="fs-5 fw-bold">Email Verification</h4>
                        <p class="text-black text-opacity-50 small">Please enter OTP received in your registered email for verification.</p>
                        <h6 class="fw-bold text-start">Enter OTP :</h6>
                        <div class="otp-inputs">
                           <input type="password" maxlength="1" class="otp-box" id="otp1" oninput="handleInput(event, 'otp2')" onkeydown="handleBackspace(event, 'otp1')" autofocus>
                           <input type="password" maxlength="1" class="otp-box" id="otp2" oninput="handleInput(event, 'otp3')" onkeydown="handleBackspace(event, 'otp1')">
                           <input type="password" maxlength="1" class="otp-box" id="otp3" oninput="handleInput(event, 'otp4')" onkeydown="handleBackspace(event, 'otp2')">
                           <input type="password" maxlength="1" class="otp-box" id="otp4" oninput="handleInput(event, '')" onkeydown="handleBackspace(event, 'otp3')">
                        </div>
                           <button class="verify-btn" id="verifyBtn" onclick="verifyOtp()">VERIFY</button>
                           <button class="resend-btn" id="resendOtpBtn" style="display: none;">Resend OTP</button>
                           <p id="timer" style="color: #e56b27;"></p>
                     </div>
                  </div>  -->
            </div>
         </div>
      </div>
   </section>
   <?php require_once 'include/common-js.php'?>
   <script>
      let timer;
      let countdown = 60; // Set the countdown duration to 60 seconds

      function startResendTimer() {
         document.getElementById('verifyBtn').disabled = false; // Keep enabled
         document.getElementById('timer').style.display = 'block'; // Show the timer
         document.getElementById('resendOtpBtn').style.display = 'none';
         timer = setInterval(updateTimer, 1000);
      }

      function updateTimer() {
         const timerElement = document.getElementById('timer');
         if (countdown > 0) {
            const minutes = Math.floor(countdown / 60);
            const seconds = countdown % 60;
            timerElement.textContent = `Resend in ${minutes} minutes and ${seconds} seconds`;
            countdown--;
         } else {
            document.getElementById('resendOtpBtn').style.display = 'inline'; // Show Resend OTP button
            document.getElementById('verifyBtn').style.display = 'inline'; // Keep VERIFY button visible
            timerElement.textContent = '';
            countdown = 60; // Reset to 60 seconds for next use
            clearInterval(timer);
         }
      }

      function handleInput(event, nextFieldId) {
         const input = event.target;

         // Allow only numeric values
         const value = input.value.replace(/[^0-9]/g, '');
         input.value = value;

         if (value.length === 1 && nextFieldId !== "") {
            document.getElementById(nextFieldId).focus();
         }
      }

      function handleBackspace(event, previousFieldId) {
         const input = event.target;
         if (event.key === 'Backspace' && input.value === '') {
            if (previousFieldId !== "") {
               document.getElementById(previousFieldId).focus();
            }
         }
      }

      window.onload = function() {
         startResendTimer();
      };
   </script>

   </body>
</html>