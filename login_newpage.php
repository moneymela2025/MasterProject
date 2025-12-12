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
         div#staticBackdrop {
            background-color: rgb(0 0 0 / 33%);
            backdrop-filter: blur(5px);
         }


   .Email-header {
      position: absolute;
      top: 0px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: var(--logo-clr-500);
      width: 258px;
      height: 47px;
      border-radius: 0 0 20px 20px;
   }

    @media (max-width: 768px) {
        .Email-header {
            width: 200px !important;
        }
    }

    .Email-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: -30px;
        width: 30px;
        height: 30px;
        border-top-right-radius: 50%;
        background: transparent;
        box-shadow: 15px 0 0 0 var(--logo-clr-500);
    }

    .Email-header::after {
        content: "";
        position: absolute;
        top: 0;
        right: -30px;
        width: 30px;
        height: 30px;
        border-top-left-radius: 50%;
        background: transparent;
        box-shadow: -15px 0 0 0 var(--logo-clr-500);
    }

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
    --padding-button: 3px 10px;
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
    margin: 4px 0;
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
   .emailValClass {
      background-color: #fff;
      max-width: 450px;
      width: 100%;
      padding: 40px 30px;
      box-shadow: var(--box-shadow-lg);
      border-radius: 10px;
   }

   .show-password-label {
      display: flex;
      align-items: center;
      margin-top: 10px;
      position: absolute;
      top: 3px;
      right: 15px;
   }

    .show-password-label input {
        margin-right: 5px;
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
                           <h4 class="fs-4 fw-bolder mb-0">Login</h4>
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
                                       <input name="UserID" type="text" id="" class="form-control" placeholder="Enter Your UserID / Email ID">
                                    </div>
                                    <div class="form-group position-relative">
                                       <input type="password" id="txtPassword" class="form-control" placeholder="Enter Your Password">
                                       <label for="showPassword" class="show-password-label">
                                          <input type="checkbox" id="showPassword" hidden>
                                          <i class="fa fa-eye" id="showPasswordLabel" aria-hidden="true" style="color:#E75B22;"></i>
                                       </label>
                                    </div>
                                    <div class="form-group">
                                       <span id="captcha1" class="form-control" style="color: #FF0000;">
                                          <p class="fs-6">11 + 06 =</p>
                                       </span>
                                    </div>
                                    <div class="form-group">
                                       <input name="UserID" type="text" id="" class="form-control" placeholder="Enter Your Captcha">
                                    </div>
                                    <input type="submit" name="" value="Submit" class="fs-5 mt-3 pill_btn py-2 rounded-2 text-capitalize w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                       <span class="d-block text-center mt-2">
                                          <a href="Forgotusername.php" class="logo_clr"> Forget User ID </a> / <a href="Forgotpassword.php" class="logo_clr">Forget Password</a>
                                       </span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog-centered">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="otp-container">
                                 <div class="Email-header">
                                    <h5 class="fw-bolder mb-0 text-light">Email Verification</h5>
                                 </div>
                                 <p class="text-black text-opacity-50 small mt-4">
                                    Please enter OTP received in your registered email for verification.
                                 </p>
                                 <label class="fst-italic small" id="emailLabel"></label>
                                 <h6 class="fw-bold text-start">Enter OTP :</h6>
                                 <div class="otp-inputs">
                                    <input type="password" maxlength="1" class="otp-box" id="otp1" oninput="handleInput(event, 'otp2')" onkeydown="handleBackspace(event, 'otp1')" autofocus>
                                    <input type="password" maxlength="1" class="otp-box" id="otp2" oninput="handleInput(event, 'otp3')" onkeydown="handleBackspace(event, 'otp1')">
                                    <input type="password" maxlength="1" class="otp-box" id="otp3" oninput="handleInput(event, 'otp4')" onkeydown="handleBackspace(event, 'otp2')">
                                    <input type="password" maxlength="1" class="otp-box" id="otp4" oninput="handleInput(event, '')" onkeydown="handleBackspace(event, 'otp3')">
                                 </div>
                                 <div class="">
                                    <button class="border border-danger border-opacity-10 btn btn-light text-danger btn-sm">
                                       Cancel
                                    </button>
                                    <button class="btn verify-btn">Verify</button>
                                 </div>

                                 <button id="resendOtpBtn" class="resend-btn" style="display: none;">
                                    Resend OTP
                                 </button>
                                 <p id="timer" style="color: #e56b27; font-size: 12px;"></p>
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
         document.getElementById('showPasswordLabel').addEventListener('click', function () {
         const passwordInput = document.getElementById('txtPassword');
         const eyeIcon = this;
         // Toggle password visibility
         if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
         } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
         }
         });
      </script>

   <script>
      let timer;
      let countdown = 300; // Set the countdown duration to 5 minutes (300 seconds)

      function startTimer() {
         // Show the timer
         document.getElementById('timer').style.display = 'block';
         timer = setInterval(updateTimer, 1000);
      }

      function updateTimer() {
         const timerElement = document.getElementById('timer');
         if (countdown > 0) {
               const minutes = Math.floor(countdown / 60);
               const seconds = countdown % 60;
               timerElement.textContent = `${minutes} minutes and ${seconds} seconds`;
               countdown--;
         } else {
               // Clear the timer display and stop the interval
               timerElement.textContent = '';
               clearInterval(timer);
         }
      }

      window.onload = function () {
         startTimer();
      };
   </script>
   </body>
</html>
