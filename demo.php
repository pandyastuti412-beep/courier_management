<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="text-light">
  <ul class="nav justify-content-end bg-primary">
  <div class="container-fluid ml-auto">
    <a class="navbar-brand" href="#">Courier</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="addparcel.php">Add parcel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="track_parcel.php">Track parcel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Signup</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            branch
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addnewbranch.php">add new</a></li>
            <li><a class="dropdown-item" href="#">list</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Staff
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addnewstaff.php">add new</a></li>
            <li><a class="dropdown-item" href="#">list</a></li>
          </ul>
        </li>
      </ul>
</ul>
    </div>
  </div>
</nav>
</div>
</body>
</html>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>