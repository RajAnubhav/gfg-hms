<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>

    <!-- Adding all the cdns -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- Cdn for jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js"
        integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- font awesome cdn -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- css -->
    <style>
        .nav-color:hover{
            background-color: aliceblue;
            color:black;
            border-radius: 3px;
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            color:white;
        }
    </style>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
        <h5 class="text-white px-5">Hospital Management System</h5>
        <div class="mr-auto"></div>
        <ul class="navbar-nav">
            <?php
                if(isset($_SESSION['admin'])){
                    $user = $_SESSION['admin'];
                    echo "<li class='nav-item' style='margin-left:55rem; padding-left:2rem;'><a href='#' class='nav-link text-white'><div class='nav-color'>$user</div></a></li><li class='nav-item' style='padding-left:2rem;'><a href='logout.php' class='nav-link text-white'><div class='nav-color'>logout</div></a></li>";
                }else{
                    echo '
                    <li class="nav-item" style="margin-left:25rem; padding-left:25rem;"><a href="adminlogin.php" class="nav-link text-white">
                    <div class="nav-color">Admin</div>
                    </a></li>
                    <li class="nav-item" style="padding-left:2rem;"><a href="" class="nav-link text-white">
                        <div class="nav-color">Doctor</div>
                    </a></li>
                    <li class="nav-item" style="padding-left:2rem;"><a href="" class="nav-link text-white">
                        <div class="nav-color">Patient</div>
                    </a></li>
                    ';
                }
            ?>
        </ul>
    </nav>
</body>

</html>