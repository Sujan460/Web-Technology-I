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
                    <a href="../dashboard.php" class="text-decoration-none">
                        <h1>Dashboard</h1>
                    </a>
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
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
                                <input class="form-control me-2" type="search" placeholder="Search"
                                       aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>

                <div class="card py-3 my-3">
                    <div>
                        <a href="index.php" class="btn btn-sm btn-primary">Manage Users</a>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){
                            $id= $_GET['id'];

                            $select="SELECT *FROM users WHERE id=$id";
                            $select_result= mysqli_query($conn, $select);
                            $data=mysqli_fetch_assoc($select_result);
                        }

                        ?>

                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="text" class="form-control" readonly value="<?php echo $data['name']; ?>" name="name" id="exampleInputName" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" readonly value="<?php echo $data['address']; ?>" name="address" id="exampleInputAddress" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhone" class="form-label">Phone</label>
                                <input type="tel" class="form-control"readonly value="<?php echo $data['phone']; ?>" name="phone" id="exampleInputPhone" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" readonly value="<?php echo $data['email']; ?>" name="email" id="exampleInputEmail1" required>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
