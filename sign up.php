<?php include "includes/navbar.php"; ?>

<br>
<br>


<?php include "includes/header.php"; ?>
<div class="line">
To acces our services first you must have an acount registered to our services.
     <p>Fill in the form below to create an account</p> 
<div class="signup">
    
     <div class="form">
          <div class="main-user-info">
               <label for="fullName">Full Name</label>
               <input type="text"
               id="fullName"
               name="fullName"
               placeholder="Enter Full Name">
          </div>
          <div class="main-user-info">
               <label for="username">Username</label>
               <input type="text"
               id="username"
               name="username"
               placeholder="Enter Username">
          </div>
          <div class="main-user-info">
               <label for="email">Email</label>
               <input type="email"
               id="email"
               name="email"
               placeholder="Enter email">
          </div>
          <div class="main-user-info">
               <label for="Phone Number">Phone Number</label>
               <input type="phone number"
               id="Phone Number"
               name="Phone Number"
               placeholder="Enter Phone Number">
          </div>
          <div class="main-user-info">
               <label for="Password">Password</label>
               <input type="password"
               id="Password"
               name="Password"
               placeholder="Password">
          </div>
          <div class="main-user-info">
               <label for="Confirm Password">Confirm Password</label>
               <input type="password"
               id="Confirm Password"
               name="Confirm Password"
               placeholder="Confirm Password">
          </div>
          <div class="gender">
               <span class="gender-category">Gender</span>
               <div class="gender-category">
                    <input type="radio" name="gender" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other">
                    <label for="other">Other</label>
               </div>
          </div>
          <div class="form-submit-btn">
               <input type="reset" value="Submit">
          </div>
     </div>
     
</div>
</div>
<?php include "includes/footer.php"; ?>