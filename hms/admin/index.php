<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        include('../include/header.php');
        include('../include/connection.php');
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-12px;">

                <?php
                    include("sidenav.php");
                ?>
                </div>
                <div class="col-md-10">

                    <h4 class="my-5">Admin Dashboard</h4>

                    <div class="col-md-12 my-1 mx-4">
                        <div class="row">

                            <!-- admin -->
                            <div class="col-md-3 bg-success mx-2 my-2" style="height:130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9" style="margin: 5px -40px 0px 35px;">
                                            <?php
                                                $admin = mysqli_query($connect, "SELECT * FROM admin");
                                                $num = mysqli_num_rows($admin);
                                            ?>
                                            <h5 class="my-2 text-white" style="font-size: 30px;">
                                            <?php
                                                echo $num;
                                            ?>
                                            </h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Admin</h5>
                                        </div>
                                        <div class="col-md-3" style="margin: 35px 0px 0px -40px;">
                                            <a href="admin.php">
                                                <i class="fa-solid fa-user-gear fa-3x" style="color:white;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- doctors -->
                            <div class="col-md-3 bg-warning mx-2 my-2" style="height:130px;">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-9" style="margin: 5px -40px 0px 35px;">
                                                <h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
                                                <h5 class="text-white">Total</h5>
                                                <h5 class="text-white">Doctors</h5>
                                            </div>
                                            <div class="col-md-3" style="margin: 35px 0px 0px -40px;">
                                                <i class="fa-solid fa-user-doctor fa-3x" style="color:white;"></i>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <!-- patients -->
                            <div class="col-md-3 bg-info mx-2 my-2" style="height:130px;">
                            <div class="col-md-12">
                                <div class="row">
                                        <div class="col-md-9" style="margin: 5px -40px 0px 35px;">
                                            <h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Patients</h5>
                                        </div>
                                        <div class="col-md-3" style="margin: 35px 0px 0px -40px;">
                                            <i class="fa-solid fa-bed-pulse fa-3x" style="color: white;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- report -->
                            <div class="col-md-3 bg-danger mx-2 my-2" style="height:130px;">
                            <div class="col-md-12">
                                <div class="row">
                                        <div class="col-md-9" style="margin: 5px -40px 0px 35px;">
                                            <h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Admin</h5>
                                        </div>
                                        <div class="col-md-3" style="margin: 35px 0px 0px -40px;">
                                            <i class="fa-solid fa-flag fa-3x" style="color:white;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- job request -->
                            <div class="col-md-3 bg-info mx-2 my-2" style="height:130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9" style="margin: 5px -40px 0px 35px;">
                                            <h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Admin</h5>
                                        </div>
                                        <div class="col-md-3" style="margin: 35px 0px 0px -40px;">
                                            <i class="fa-solid fa-address-card fa-3x" style="color:white;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- income -->
                            <div class="col-md-3 bg-success mx-2 my-2" style="height:130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9" style="margin: 5px -40px 0px 35px;">
                                            <h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Admin</h5>
                                        </div>
                                        <div class="col-md-3" style="margin: 35px 0px 0px -40px;">
                                            <i class="fa-solid fa-money-bill-trend-up fa-3x" style="color:white;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>