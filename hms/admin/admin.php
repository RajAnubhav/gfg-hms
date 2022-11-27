<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php
        include("../include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-30px;">
                    <?php
                        include('sidenav.php');
                        include('../include/connection.php');
                    ?>
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-center my-3">All Admin</h5>

                                <?php
                                    $ad = $_SESSION['admin'];
                                    $query =  "SELECT * FROM admin WHERE username != '$ad";
                                    $res = mysqli_query($connect, $query);

                                    $output = "";
                                    if(mysqli_num_rows($res)<1){
                                        $ouput = "<h5 class='text-center'>No New Admin</h5>";
                                    }

                                    while($row = mysqli_fetch_array($res)){
                                        $id = $row['id'];
                                        $username = $row['username'];

                                        $output .="";
                                    }
                                ?>

                                <table  class='table table-responsive table-bordered'>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Action</th>

                                    <tr>
                                        <td>1</td>
                                        <td>Admin</td>
                                        <td style='width:10%;'>
                                            <button id='remove' class='btn btn-danger' >Remove</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-center my-3">Add Admin</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>