<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <h1>Welcome</h1>
    <main>
        <div class="form1">
            <div class="sec1">
                <p>Log In</p>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>    
            </div>
            <form action="validation.php" method="post">
                <input type="text" name="user" id= "name" placeholder="Your Name" required>
                <br>
                <input type="password" name="password" id= "pass" placeholder="Your Password" required>
                <p>Forget <a href="#">Password ?</a></p>
                <br>
                <br>
                <br>
                <input type="submit" value="LOG IN">
                <p class="text">Don't have an accont? <a href="signup.php">Sign Up</a></p> 
                
            </form>
           
        
    </main> 
</body>

</html>