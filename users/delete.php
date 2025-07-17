<?php
require('../config/db.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);
    
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";

}    
