<!-- TODO Employee view -->
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->
    <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?> assets/css/login.css" type="text/css">
     <script src="<?= BASE_URL ?> assets/js/index.js" defer></script> 
    <title>Document</title>
</head>
<body >
    <section class='bg-light rounded ml-5 mr-5 pt-5 pb-5'>

      <!-- FORM START -->
    <form class="my-4 mx-4" action="<?php echo BASE_URL . 'employee/addEmployee'?>" method= "post">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="firstName">First name</label>
          <input type="text" class="form-control is-valid" name="firstName" id="firstName" placeholder="First name" data-type="input" value="<?php echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : null ?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="lastName">Last name</label>
          <input type="text" class="form-control is-valid" id="lastName" name = "lastName" placeholder="Last name"data-type="input" value="<?php echo isset($_SESSION['lastName']) ? $_SESSION['lastName'] : null ?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control is-valid" name="email" id="email" placeholder="Email" data-type="input" value="<?php echo isset($_SESSION['employeeEmail']) ? $_SESSION['employeeEmail'] : null ?>">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email. We keep it low key!.</small>
        </div>
    </div>
    <div class="form-row">
    <div class="col-md-2  mb-2">
        <label for="age">Age</label>
          <input type="text" id="age" name="age" pattern="[0-9]{2}" class="form-control is-valid"  placeholder="insert your age" data-type="input" value="<?php echo isset($_SESSION['age']) ? $_SESSION['age'] : null ?>">
        </div>

        <div class="col-md-4  mb-2">
        <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" class="form-control is-valid"  data-type="input" placeholder="Phone number" value="<?php echo isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : null ?>">
        </div>
        <div class="col-md-4  mb-3">
        <label for="address">Street Address</label>
          <input type="text" class="form-control is-valid" name="address" value="<?php echo isset($_SESSION['streetAddress']) ? $_SESSION['streetAddress'] : null ?>" placeholder="Dominguish street" id="address" data-type="input" required>
        </div>
        </div>
        <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="city">City</label>
          <input type="text" class="form-control is-valid" id="city" name="city" placeholder="City" data-type="input" value="<?php echo isset($_SESSION['city']) ? $_SESSION['city'] : null ?>">

        </div>
        <div class="col-md-2 mb-3">
          <label for="state">State</label>
          <input type="text" class="form-control is-valid" id="state" name="state" placeholder="State" data-type="input" value="<?php echo isset($_SESSION['state']) ? $_SESSION['state'] : null ?>">
        </div>
        <div class="col-md-1 mb-3">
          <label for="zip">Zip</label>
          <input type="text" class="form-control is-valid" id="zip" name="zip"placeholder="Zip" data-type="input" value="<?php echo isset($_SESSION['postalCode']) ? $_SESSION['postalCode'] : null ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-3 mb-5">
         <select id="gender" name = "gender" data-type="input" value="<?php echo isset($_SESSION['gender']) ? $_SESSION['gender'] : null ?>" class="custom-select">
            <option >Choose your gender</option>
            <option>Male </option>
            <option>Female</option>
            <option>Somthing else</option>
          </select>
       </div>
      </div>
      <button class="btn btn-primary" name ="submit" type="submit">Submit form</button>
      <a href="<?php echo BASE_URL?>dashboard/getAllEmployees"><button class="btn btn-secondary" type ="button" name="return" id="return">Go back!</button></a> 
    </form>
  <section>
</body>
</html>