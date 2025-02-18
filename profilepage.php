
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
       <style>
        body {
            margin-top: 20px;
            background-color: #f2f6fc;
            color: #69707a;
        }
        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
            border-radius: 0.35rem;
            background-color: #fff;
            margin-bottom: 1rem;
        }
        .card-header {
            font-weight: 500;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }
        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }
        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }
    </style>
 

</head>
<body>
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="#profile-details">Profile</a>
            <a class="nav-link active ms-0" href="index.html">Home</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div id="profile-details" class="card">
            <div class="card-header">Profile Details</div>
            <div class="card-body">
                <form>
                    <!-- Username -->
                    <div class="mb-3">
                        <label class="small mb-1" for="inputUsername">Username</label>
                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                    </div>
                    <!-- First and Last Name -->
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputFirstName">First name</label>
                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Last name</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                    </div>
                    <!-- Phone and Birthday -->
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputPhone">Phone number</label>
                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputBirthday">Birthday</label>
                            <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                        </div>
                    </div>
                    <!-- Save changes button-->
                    <button class="btn btn-primary" type="button">Save changes</button>
                </form>
            </div>
        </div>
		
		<br><br>
        <div id="security-settings" class="card">
            <div class="card-header">Security Settings</div>
            <div class="card-body">
                <form>
                    <!-- Change Password -->
                    <h5 class="mb-3">Change Password</h5>
                    <div class="mb-3">
                        <label class="small mb-1" for="currentPassword">Current Password</label>
                        <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="newPassword">New Password</label>
                        <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="confirmPassword">Confirm Password</label>
                        <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password">
                    </div>
					 <!-- Save changes button-->
                    <button class="btn btn-primary" type="button" onclick="window.location.href='logout.php'">Save changes</button>
                 </form
			
		
 </div>

 
 </body>
 </html>