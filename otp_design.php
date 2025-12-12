<div class="otp-modal">
                           <div class="otp-container">
                              <h4 class="fs-5 fw-bold">Email Verification</h4>
                              <p class="text-black text-opacity-50 small">Please enter OTP received in your registered email for verification.</p>
                              <h6 class="fw-bold text-start">Enter OTP :</h6>
                              <div class="otp-inputs">
                                 <input type="text" maxlength="1" class="otp-box" id="otp1" oninput="handleInput(event, 'otp2')" onkeydown="handleBackspace(event, 'otp1')">
                                 <input type="text" maxlength="1" class="otp-box" id="otp2" oninput="handleInput(event, 'otp3')" onkeydown="handleBackspace(event, 'otp1')">
                                 <input type="text" maxlength="1" class="otp-box" id="otp3" oninput="handleInput(event, 'otp4')" onkeydown="handleBackspace(event, 'otp2')">
                                 <input type="text" maxlength="1" class="otp-box" id="otp4" oninput="handleInput(event, '')" onkeydown="handleBackspace(event, 'otp3')">
                              </div>
                              <button class="verify-btn" id="resendBtn" onclick="startResendTimer()">VERIFY</button>
                              <button class="resend-btn">Resend OTP</button>
                              <br>
                              <p id="timer" style="color: #e56b27;"></p>
                           </div>
                        </div>

                        <script>
                           let timer;
                           let countdown = 60; // Set the countdown duration in seconds
                           function startResendTimer() {
                              // Disable the button during the countdown
                              document.getElementById('resendBtn').disabled = true;
                              timer = setInterval(updateTimer, 1000);
                           }
                           function updateTimer() {
                              const timerElement = document.getElementById('timer');
                              if (countdown > 0) {
                                 timerElement.textContent = `Resend in ${countdown} seconds`;
                                 countdown--;
                              } else {
                                 // Enable the button when the countdown reaches zero
                                 document.getElementById('resendBtn').disabled = false;
                                 timerElement.textContent = '';
                                 
                                 // Reset countdown for the next attempt
                                 countdown = 60;
                                 // Stop the timer
                                 clearInterval(timer);
                              }
                           }
                        </script>
                       
                        
                        <script>
                           function handleInput(event, nextFieldId) {
                              const input = event.target;
                              if (input.value.length === 1) {
                                 if (nextFieldId !== "") {
                                       document.getElementById(nextFieldId).focus();
                                 }
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
                           // Verify OTP function
                           function verifyOtp() {
                              const otp1 = document.getElementById("otp1").value;
                              const otp2 = document.getElementById("otp2").value;
                              const otp3 = document.getElementById("otp3").value;
                              const otp4 = document.getElementById("otp4").value;
                              const otp = otp1 + otp2 + otp3 + otp4;
                              if (otp.length === 4) {
                                 alert("OTP Verified: " + otp);
                              }
                           }
                       
                        </script>




<script>
   let timer;
   let countdown = 60; // Set the countdown duration in seconds

   function startResendTimer() {
      // Disable the VERIFY button during the countdown
      document.getElementById('resendBtn').disabled = true;
      
      // Hide the Resend OTP button
      document.getElementById('resendOtpBtn').style.display = 'none';
      
      timer = setInterval(updateTimer, 1000);
   }

   function updateTimer() {
      const timerElement = document.getElementById('timer');
      if (countdown > 0) {
         timerElement.textContent = `Resend in ${countdown} seconds`;
         countdown--;
      } else {
         // Enable the VERIFY button when the countdown reaches zero
         document.getElementById('resendBtn').disabled = false;
         
         // Show the Resend OTP button
         document.getElementById('resendOtpBtn').style.display = 'inline';
         
         // Clear the timer display and reset countdown
         timerElement.textContent = '';
         countdown = 60;
         clearInterval(timer);
      }
   }

   function handleInput(event, nextFieldId) {
      const input = event.target;
      if (input.value.length === 1) {
         if (nextFieldId !== "") {
            document.getElementById(nextFieldId).focus();
         }
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

   // Verify OTP function
   function verifyOtp() {
      const otp1 = document.getElementById("otp1").value;
      const otp2 = document.getElementById("otp2").value;
      const otp3 = document.getElementById("otp3").value;
      const otp4 = document.getElementById("otp4").value;
      const otp = otp1 + otp2 + otp3 + otp4;
      if (otp.length === 4) {
         alert("OTP Verified: " + otp);
      }
   }
</script>



<script>
   let timer;
   let countdown = 300; // Set the countdown duration to 5 minutes (300 seconds)

   function startResendTimer() {
      // Disable the VERIFY button during the countdown
      document.getElementById('resendBtn').disabled = true;
      
      // Hide the Resend OTP button
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
         // Enable the VERIFY button when the countdown reaches zero
         document.getElementById('resendBtn').disabled = false;
         
         // Show the Resend OTP button
         document.getElementById('resendOtpBtn').style.display = 'inline';
         
         // Clear the timer display and reset countdown
         timerElement.textContent = '';
         countdown = 300; // Reset countdown to 5 minutes for the next cycle
         clearInterval(timer);
      }
   }

   function handleInput(event, nextFieldId) {
      const input = event.target;
      if (input.value.length === 1) {
         if (nextFieldId !== "") {
            document.getElementById(nextFieldId).focus();
         }
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

   // Verify OTP function
   function verifyOtp() {
      const otp1 = document.getElementById("otp1").value;
      const otp2 = document.getElementById("otp2").value;
      const otp3 = document.getElementById("otp3").value;
      const otp4 = document.getElementById("otp4").value;
      const otp = otp1 + otp2 + otp3 + otp4;
      if (otp.length === 4) {
         alert("OTP Verified: " + otp);
      }
   }
</script>

------------------------
<div class="otp-modal">
   <div class="otp-container">
      <h4 class="fs-5 fw-bold">Email Verification</h4>
      <p class="text-black text-opacity-50 small">Please enter OTP received in your registered email for verification.</p>
      <h6 class="fw-bold text-start">Enter OTP :</h6>
      <div class="otp-inputs">
         <input type="text" maxlength="1" class="otp-box" id="otp1" oninput="handleInput(event, 'otp2')" onkeydown="handleBackspace(event, 'otp1')">
         <input type="text" maxlength="1" class="otp-box" id="otp2" oninput="handleInput(event, 'otp3')" onkeydown="handleBackspace(event, 'otp1')">
         <input type="text" maxlength="1" class="otp-box" id="otp3" oninput="handleInput(event, 'otp4')" onkeydown="handleBackspace(event, 'otp2')">
         <input type="text" maxlength="1" class="otp-box" id="otp4" oninput="handleInput(event, '')" onkeydown="handleBackspace(event, 'otp3')">
      </div>
      <button class="verify-btn" id="verifyBtn" onclick="startResendTimer()">VERIFY</button>
      <button class="resend-btn" id="resendOtpBtn" style="display: none;">Resend OTP</button>
      <p id="timer" style="color: #e56b27;"></p>
   </div>
</div>
<script>
   let timer;
   let countdown = 60; // Set the countdown duration in seconds

   function startResendTimer() {
      // Disable the VERIFY button during the countdown
      document.getElementById('verifyBtn').disabled = true;
      
      // Hide the Resend OTP button
      document.getElementById('resendOtpBtn').style.display = 'none';
      
      timer = setInterval(updateTimer, 1000);
   }

   function updateTimer() {
      const timerElement = document.getElementById('timer');
      if (countdown > 0) {
         timerElement.textContent = `Resend in ${countdown} seconds`;
         countdown--;
      } else {
         // Enable the VERIFY button when the countdown reaches zero
         document.getElementById('verifyBtn').disabled = false;
         
         // Show the Resend OTP button
         document.getElementById('resendOtpBtn').style.display = 'inline';
         
         // Clear the timer display and reset countdown
         timerElement.textContent = '';
         countdown = 60;
         clearInterval(timer);
      }
   }

   function handleInput(event, nextFieldId) {
      const input = event.target;
      if (input.value.length === 1) {
         if (nextFieldId !== "") {
            document.getElementById(nextFieldId).focus();
         }
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

   // Verify OTP function
   function verifyOtp() {
      const otp1 = document.getElementById("otp1").value;
      const otp2 = document.getElementById("otp2").value;
      const otp3 = document.getElementById("otp3").value;
      const otp4 = document.getElementById("otp4").value;
      const otp = otp1 + otp2 + otp3 + otp4;
      if (otp.length === 4) {
         alert("OTP Verified: " + otp);
      }
   }
</script>




------------------------60sce


<script>
   let timer;
let countdown = 60; // Set the countdown duration to 60 seconds (1 minute)

function startResendTimer() {
// Disable the VERIFY button during the countdown (if necessary)
document.getElementById('verifyBtn').disabled = false; // Keep enabled
document.getElementById('timer').style.display = 'block'; // Show the timer

// Hide the Resend OTP button initially
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
   // Show the Resend OTP button when timer completes
   document.getElementById('resendOtpBtn').style.display = 'inline'; // Show Resend OTP button

   // Keep the VERIFY button visible
   document.getElementById('verifyBtn').style.display = 'inline'; // Keep VERIFY button visible
   
   // Clear the timer display and reset countdown
   timerElement.textContent = '';
   countdown = 60; // Reset to 60 seconds for next use
   clearInterval(timer);
}
}

function handleInput(event, nextFieldId) {
const input = event.target;
if (input.value.length === 1) {
   if (nextFieldId !== "") {
      document.getElementById(nextFieldId).focus();
   }
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

// Verify OTP function
function verifyOtp() {
const otp1 = document.getElementById("otp1").value;
const otp2 = document.getElementById("otp2").value;
const otp3 = document.getElementById("otp3").value;
const otp4 = document.getElementById("otp4").value;
const otp = otp1 + otp2 + otp3 + otp4;
if (otp.length === 4) {
   alert("OTP Verified: " + otp);
} else {
   alert("Please enter a valid 4-digit OTP.");
}
}

// Start the timer when the page loads or when needed
window.onload = function() {
startResendTimer();
};

  </script>
-----------------------------
timer5mint



<script>
   let timer;
   let countdown = 300; // Set the countdown duration to 5 minutes (300 seconds)

   function startResendTimer() {
      // Disable the VERIFY button during the countdown (if necessary)
      document.getElementById('verifyBtn').disabled = false; // Keep enabled
      document.getElementById('timer').style.display = 'block'; // Show the timer

      // Hide the Resend OTP button initially
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
         // Show the Resend OTP button when timer completes
         document.getElementById('resendOtpBtn').style.display = 'inline'; // Show Resend OTP button

         // Keep the VERIFY button visible
         document.getElementById('verifyBtn').style.display = 'inline'; // Keep VERIFY button visible
         
         // Clear the timer display and reset countdown
         timerElement.textContent = '';
         countdown = 300; // Reset to 5 minutes for next use
         clearInterval(timer);
      }
   }

   function handleInput(event, nextFieldId) {
      const input = event.target;
      if (input.value.length === 1) {
         if (nextFieldId !== "") {
            document.getElementById(nextFieldId).focus();
         }
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

   // Verify OTP function
   function verifyOtp() {
      const otp1 = document.getElementById("otp1").value;
      const otp2 = document.getElementById("otp2").value;
      const otp3 = document.getElementById("otp3").value;
      const otp4 = document.getElementById("otp4").value;
      const otp = otp1 + otp2 + otp3 + otp4;
      if (otp.length === 4) {
         alert("OTP Verified: " + otp);
      } else {
         alert("Please enter a valid 4-digit OTP.");
      }
   }

   // Start the timer when the page loads or when needed
   window.onload = function() {
      startResendTimer();
   };
</script>

----------------------------------------------

<div class="otp-modal">
   <div class="otp-container">
      <h4 class="fs-5 fw-bold">Email Verification</h4>
      <p class="text-black text-opacity-50 small">Please enter OTP received in your registered email for verification.</p>
      <h6 class="fw-bold text-start">Enter OTP :</h6>
      <div class="otp-inputs">
         <input type="text" maxlength="1" class="otp-box" id="otp1" oninput="handleInput(event, 'otp2')" onkeydown="handleBackspace(event, 'otp1')">
         <input type="text" maxlength="1" class="otp-box" id="otp2" oninput="handleInput(event, 'otp3')" onkeydown="handleBackspace(event, 'otp1')">
         <input type="text" maxlength="1" class="otp-box" id="otp3" oninput="handleInput(event, 'otp4')" onkeydown="handleBackspace(event, 'otp2')">
         <input type="text" maxlength="1" class="otp-box" id="otp4" oninput="handleInput(event, '')" onkeydown="handleBackspace(event, 'otp3')">
      </div>
      <button class="verify-btn" id="verifyBtn" onclick="verifyOtp()">VERIFY</button>
      <button class="resend-btn" id="resendOtpBtn" style="display: none;">Resend OTP</button>
      <p id="timer" style="color: #e56b27;"></p>
   </div>
</div>

<script>
   let timer;
   let countdown = 300; // Set the countdown duration to 5 minutes (300 seconds)

   function startResendTimer() {
      // Disable the VERIFY button during the countdown (if necessary)
      document.getElementById('verifyBtn').disabled = false; // Keep enabled
      document.getElementById('timer').style.display = 'block'; // Show the timer

      // Hide the Resend OTP button initially
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
         // Show the Resend OTP button when timer completes
         document.getElementById('resendOtpBtn').style.display = 'inline'; // Show Resend OTP button

         // Keep the VERIFY button visible
         document.getElementById('verifyBtn').style.display = 'inline'; // Keep VERIFY button visible
         
         // Clear the timer display and reset countdown
         timerElement.textContent = '';
         countdown = 300; // Reset to 5 minutes for next use
         clearInterval(timer);
      }
   }

   function handleInput(event, nextFieldId) {
      const input = event.target;
      if (input.value.length === 1) {
         if (nextFieldId !== "") {
            document.getElementById(nextFieldId).focus();
         }
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

   // Verify OTP function
   function verifyOtp() {
      const otp1 = document.getElementById("otp1").value;
      const otp2 = document.getElementById("otp2").value;
      const otp3 = document.getElementById("otp3").value;
      const otp4 = document.getElementById("otp4").value;
      const otp = otp1 + otp2 + otp3 + otp4;
      if (otp.length === 4) {
         alert("OTP Verified: " + otp);
      } else {
         alert("Please enter a valid 4-digit OTP.");
      }
   }

   // Start the timer when the page loads or when needed
   window.onload = function() {
      startResendTimer();
   };
</script>