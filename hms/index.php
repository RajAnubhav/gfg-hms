<?php
include("include/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <style>
        .dim:hover{
            background-color: rgb(241, 240, 240);
        }
        .dim{
            border-radius: 3px;
        }
        button{
            background-color: aquamarine;
            border: none;
            border-radius: 4px;
            padding: 4px 5px 8px 5px;
            margin-right:6px;
        }
        button:hover{
            background-color: rgb(122, 221, 188);
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="col-md-12">
            <div class="row px-md-6 py-md-5 my-3 " style="display: flex;">
                <div class="col-md-3 mx-md-5 shadow dim" style="margin-bottom: 50px;">
                    <img src="img/info.jpg" style="width: 300px; padding-top: 33px;" alt="info">
                    <h5 style="width:330px; padding: 50px 10px 0px 10px;">For more information, please 
                       <button><a href=""> contact us </a></button></h5>
                </div>
                <div class="col-md-3 mx-md-5 shadow dim" style="margin-bottom: 50px;">
                    <img src="img/patients.jpg" style="width: 300px; padding-top:10px;" alt="patients">
                    <h5 style="width:330px; padding: 50px;">
                        <button><a href=""> Create account </a></button>for the costomers.</h5>
                </div>
                <div class="col-md-3 mx-md-5 shadow dim" style="margin-bottom: 50px;">
                    <img src="img/doctors.jpg" style="width: 300px; " alt="doctors">
                    <h5 style="width:330px; padding: 50px;">
                        <button><a href=""> Create account </a></button>for the doctors.</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>