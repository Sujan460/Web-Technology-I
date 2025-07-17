
<?php
require('../config/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="aside col-lg-3 col-md-4 col-sm-6 col-12 bg-light">
                    <div class="link">
                        <a href="../dashboard.php" class="text-decoration-none"><h1>Dashboard</h1></a>
</div>
 <div class="link">
                        <a href="index.php" class="text-decoration-none d-block fs-4">Users</a>
                         <a href="dashboard.php" class="text-decoration-none d-block fs-4">Tasks</a>
</div>

</div>
<div class="content col-lg-8 col-md-8 col-sm-6 col-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="card py-3 my-3">
      <div class="card-body">
        <div>
          <a href="create.php" class="btn btn-sm btn-primary">Create User</a>
        </div>
       <table class="table">
         <thead>
           <tr>
             <th scope="col">#</th>
             <th scope="col">Name</th>
             <th scope="col">Address</th>
             <th scope="col">Phone</th>
             <th scope="col">Email</th>
             <th scope="col">Status</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         <tbody>
          <?php
          $select="SELECT*FROM users";
          $result=mysqli_query($conn,$select);
          $i=1;
          while($data=mysqli_fetch_array($result)){
            ?>

            <tr>
             <th scope="row">
              <?php
              echo $i++;
              ?>
             </th>
             <td>
              <?php
              echo $data['name'];
              ?>
             </td>
             <td>
              <?php
              echo $data['address'];
              ?>
             </td>
             <td>
              <?php
              echo $data['phone'];
              ?>
             </td>
             <td>
              <?php
              echo $data['email'];
              ?>
             </td>
             <td>1</td>
             <td>
              <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
              <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-info">Show</a>
              <a href="delete.php?id=<?php echo $data['id']; ?> " class="btn btn-sm btn-danger">Delete</a>
             </td>
           </tr>
          

          <?php
          }
          ?>

          
         </tbody>
       </table>
      </div>
    </div>
</div>
</div>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
