<?php
@include 'config.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

             $_SESSION['admin_email'] = $row['email'];
             header('location:addproduct.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_email'] = $row['email'];
            header('location:product.php');
        }
    }else{
        $error[] = 'incorrect email or password!';
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head style="background-color: #024928;">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1"><!--device width-->
    <title>Login page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="loginStyle.css" rel="Stylesheet">

</head>

<body>

<header class="header">

<nav class="nav">
    <a href="homepage.php">Home</a>
    <a href="learnmore.php">About us</a>
</nav>

</header>

<div class="background"></div>
<section class="home">
    <div class="content">
        <a href="#" class="logo">AGRO PRO</a>
        <h2>Welcome!</h2>
        <h3>To Our Green World</h3>
        <pre>Cultivating Sustainability, Nurturing Growth in the Green World.</pre>
        <div class="icon">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-linkedin-ink"></i>
     </div>
    </div>
    <div class="login">
    <form action="" method="post">
        <h2>Sign In</h2>
        <?php  
        
        if(isset($error)){
           foreach($error as $error){
             echo '<span class="error-msg">'.$error.'</span>';
           };
        };
        
        ?>
        <div class="input">
            <input type="text" name="email" class="input1" placeholder="Email" required>
            <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="input">
            <input type="password" name="password" class="input1" placeholder="Password" required>
            <i class="fa-solid fa-lock"></i>
        </div>
        <div class="check">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot Password?</a>
        </div>
        <div class="button">
            <button type="submit" name="submit" class="btn">Sign In</button>
        </div>
        <div class="sign-up">
            <p>Don't have an Account?</p>
            <a href="register.php"> Sign Up</a>
        </div>
    </form>
</div>

</section>

</body>

</html>