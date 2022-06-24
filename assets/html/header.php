<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <body>
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
  </body>



</head>
<body>
  
