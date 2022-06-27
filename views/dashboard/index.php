<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL ?> assets/js/index.js" defer></script>
    <link rel="stylesheet" href="<?= BASE_URL ?> assets/css/dashboard.css" type="text/css">
</head>
<body onload="printTable()">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="../src/dashboard.php">Dashboard</a>
      <ul class="navbar-nav w-100 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href='../src/employee.php'>Employee</a>
        </li>
      </ul>
      <div class="d-flex justify-content-around">
        <h4>BIENVENIDO, <?php echo strtoupper($name); ?></h4>
        <form method="post" action="./library/loginController.php">
            <button class="btn btn-primary" type="submit" name="logout">LOG OUT</button>
        </form>
      </div>
    </div>
  </div>
</nav>
    <div class="divTable w-100 row d-flex justify-content-around">
    <table class="table table-striped mt-5 w-75 rounded">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>Street No.</th>
                <th>State</th>
                <th>Age</th>
                <th>Postal Code</th>
                <th>Phone Number</th>
                <th></th>
                <th>
                    
                    <a href='./employee.php?action=add'><button name="addEmployee" type="submit"  class="btn btn-success" data-toggle="modal" data-target="#infoDisplay"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    </button></a></th>
                </tr>
        </thead>
        <tbody id="tableEmployee">
          <?php 
          // echo '<pre>';
          //  var_dump($this->employeeData);
          //  echo '<br><br><br><pre>';
            foreach ($this->employeeData as $index => $employee) {
              echo "<tr>";
              // echo "<td class='tg-0lax'>" . $employee["id"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["name"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["lastName"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["email"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["gender"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["city"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["streetAddress"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["state"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["age"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["postalCode"] . "</td>";
              echo "<td class='tg-0lax'>" . $employee["phoneNumber"] . "</td>";
              echo "<td colspan='2' class='tg-0lax'>
              <a class='btn btn-secondary' href='?controller=employee&action=getEmployee&id=" . $employee["id"] . "'>Edit</a>
              <a class='btn btn-danger' href='?controller=employee&action=deleteEmployee&id=" . $employee["id"] . "'>Delete</a>
              </td>";
              echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>