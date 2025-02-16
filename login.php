<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="icon" href="assets/icons/SpicyMonk-Logo-V2.png" type="image/icon type">
    <link rel="stylesheet" href="credentials.css">
    <link rel="icon" href="Resources/SpicyMonk-Logo-V2.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
       
.notifications-container {
  width: 390px;
  max-width: 100%; 
  height: auto;
  font-size: 0.875rem;
  line-height: 1.25rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
  display: none;
}

.flex {
  display: flex;
}

.flex-shrink-0 {
  flex-shrink: 0;
}

.alert {
  background-color: rgb(254 252 232);
  border-left-width: 4px;
  border-color: rgb(250 204 21);
  border-radius: 0.375rem;
  padding: 1rem;
}

.alert-svg {
  height: 1.25rem;
  width: 1.25rem;
  color: rgb(250 204 21);
}

.alert-prompt-wrap {
  margin-left: 0.75rem;
  color: rgb(202 138 4);
}

.alert-prompt-link {
  font-weight: 500;
  color: rgb(141, 56, 0);
  text-decoration: underline;
}

.alert-prompt-link:hover {
  color: rgb(202 138 4);
}

/* Responsive Design */
@media (max-width: 768px) {
  .notifications-container {
    width: 100%; 
    padding: 1rem;
  }

  .alert {
    padding: 0.75rem; 
  }

  .alert-prompt-wrap {
    margin-left: 0.5rem; 
  }

  .alert-svg {
    height: 1.5rem; 
    width: 1.5rem;
  }
}

@media (max-width: 480px) {
  .notifications-container {
    width: 100%;
  }

  .alert {
    font-size: 0.8rem; 
    padding: 0.5rem;
  }

  .alert-svg {
    height: 1.25rem;
    width: 1.25rem;
  }

  .alert-prompt-wrap {
    margin-left: 0.5rem;
  }
}

    </style>
</head>
<body>
    
<form class="form" action="profile.php" method="POST">
    <div class="flex-column">
      <label>Email </label></div>
      <div class="inputForm">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20"><g data-name="Layer 3" id="Layer_3"><path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path></g></svg>
        <input placeholder="Enter your Email" class="input" type="text" name="email" required>
      </div>
    
    <div class="flex-column">
      <label>Password </label></div>
      <div class="inputForm">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>        
        <input placeholder="Enter your Password" class="input" type="password" name="password" required>
      </div>
    

<div class="notifications-container show">
  <div class="alert">
    <div class="flex">
      <div class="flex-shrink-0">
        <svg aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 alert-svg">
          <path clip-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" fill-rule="evenodd"></path>
        </svg>
      </div>
      <div class="alert-prompt-wrap">
        <p class="text-sm text-yellow-700">
          Invalid Email or Password. Please try again.
        </p>
    </div>
  </div>
  </div>
</div>

    <div class="flex-row">
      <div>
      <input type="radio">
      <label>Remember me </label>
      </div>
      <span class="span">Forgot password?</span>
    </div>
    <button class="button-submit">Sign In</button>
    <p class="p">Don't have an account? <span class="span" onclick="location.href='signup.php'">Sign Up</span>

</form>

<script src="main.js"></script>

</body>
</html>