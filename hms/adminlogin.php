<?php
session_start();
include("include/connection.php");

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['upass'];

    $error = array();

    if (empty($username)) {
        $error['admin'] = "Enter Username";
    } else if (empty($password)) {
        $error['admin'] = "Enter Password";
    }

    if (count($error) == 0) {
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('You have logged in as an Admin!')</script>";
            $_SESSION['admin'] = $username;
            header("Location:admin/index.php");
            exit();
        } else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>

    <!-- css -->
    <style>
        .btn {
            background-color: #958f8f;
            margin-left: 42%;
        }

        .btn:hover {
            background-color: grey;
        }
    </style>
</head>

<body style="background-color: aliceblue;">
    <?php
    include("include/header.php");
    ?>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"
                    style="margin: 50px; background-color: rgb(235 234 233); border: dotted 2px black; border-radius:7px; padding:35px;">
                    <!-- form starts here -->
                    <form method="post">

                        <?php
                            if (isset($error['admin'])) {
                                $show = $error['admin'];

                                echo "
                                    <div class='alert alert-danger' id='toast' style='display:flex; justify-content:space-between;'>
                                        <div>$show</div>
                                        <div id='cancel' class='ml-5' onclick='close()'>
                                            <button style='background-color:#f8d7da; border:none; color:#842029;'>x</button>
                                        </div>
                                    </div>
                                    ";

                            }
                            ?>

                        <script>
                            const close = () => {
                                var closebtn = document.getElementById('cancel');
                            }
                        </script>

                        <div class="form-group" style="margin-left: 180px; ">
                            <img src="./img/person.png"
                                style="border-radius:50%; border: 1px solid black; width: 200px;" alt="">
                        </div>
                        <div class="form-group" style="padding: 20px;">
                            <label class="mb-3">Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off"
                                placeholder="Enter Username">
                        </div>
                        <div class="form-group" style="padding: 20px;">
                            <label class="mb-3">Password</label>
                            <div style='display:flex;'>
                                <input type="password" id="myInput" name="upass" class="form-control" autocomplete="off"
                                    placeholder="Enter Password">
                                <div id="eye" style="margin: 5px 0px 0px -30px; cursor:pointer;" onclick=show()>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <script>
                            function show(){
                                var text = document.getElementById('myInput');
                                if(text.type==="password"){
                                    text.type="text";
                                    document.getElementById('eye').innerHTML="<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-slash-fill' viewBox='0 0 16 16'><path d='m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z'/><path d='M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z'/></svg>";
                                }else{
                                    text.type="password";
                                    document.getElementById('eye').innerHTML="<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'><path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z' /><path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z' /></svg>";
                                }
                            }
                        </script>

                        <div class="btn">
                            <input type="submit"
                                style="background-color: grey; color: white; padding: 5px 15px 5px 15px; border-radius: 5px;"
                                name="login" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>