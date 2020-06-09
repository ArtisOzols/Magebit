<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Info</title>
   <link rel="stylesheet" href="./public/css/AddInfo.css">
</head>
<body>

   <div class="bg-img">
      <div class="box">
         <div class="row">
            <h1 style="<?php if ($_SESSION['Added']){echo 'color: #49abfe;';} ?>">Add Info <br></h1>
            <img src="./public/images/Logo.svg" alt="MAGEBIT" class="logo">
         </div>

         <form action="add" method="post">
         
            <label for="AddAge">
               <div class="row">
                  <input type="number" name="AddAge" value="<?php if(isset($_SESSION["AddAge"])) {echo $_SESSION["AddAge"];} ?>"> <br>
                  <p class="d-inline">Age</p>
               </div>
            </label>
            <label for="AddGender">
               <div class="row">
                  <input type="radio" name="gender" value="Male" <?php $gender=$_SESSION["AddGender"]; if(isset($gender) && $gender=="Male") {echo "checked";}?>>
                  <label for="male">Male</label><br>
                  <input type="radio" name="gender" value="Female" <?php $gender=$_SESSION["AddGender"]; if(isset($gender) && $gender=="Female") {echo "checked";}?>>
                  <label for="female">Female</label><br>
                  <input type="radio" name="gender" value="NotShow" <?php $gender=$_SESSION["AddGender"]; if(isset($gender) && $gender=="NotShow") {echo "checked";}?>>
                  <label for="other" id="notShow">Not show</label>    
               </div>
            </label>
            <label for="AddPhoneNr">
               <div class="row">
                  <input type="tel" name="AddPhoneNr" value="<?php if(isset($_SESSION["AddPhoneNr"])) {echo $_SESSION["AddPhoneNr"];} ?>"> <br>
                  <p class="d-inline">Phone number</p>
               </div>
            </label>
            <label for="AddCountry">
               <div class="row">
                  <input type="text" name="AddCountry" value="<?php if(isset($_SESSION["AddCountry"])) {echo $_SESSION["AddCountry"];} ?>"> <br>
                  <p class="d-inline">Country</p>
               </div>
            </label>
            <label for="AddCity">
               <div class="row">
                  <input type="text" name="AddCity" value="<?php if(isset($_SESSION["AddCity"])) {echo $_SESSION["AddCity"];} ?>"> <br>
                  <p class="d-inline">City</p>
               </div>
            </label>
            <label for="AddStreet">
               <div class="row">
                  <input type="text" name="AddStreet" value="<?php if(isset($_SESSION["AddStreet"])) {echo $_SESSION["AddStreet"];} ?>"> <br>
                  <p class="d-inline">Street</p>
               </div>
            </label>

            <input type="submit" value="ADD" class="btn orange-btn">
         </form>
      </div>
   </div>

   <script src="./public/js/transform.js"></script>
</body>
</html>