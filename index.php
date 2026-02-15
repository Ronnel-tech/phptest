<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <!-- <input type="text" name="username" placeholder="Enter your username">  -->
        <br>
        <br>
        <input type="password" name= "password" placeholder="Enter your password">
        <br>
        <input type="submit" value="Submit" name="Submit">
    </form>
</body>
</html>

    <?php
    // if (isset($_POST["Submit"]))
    // {

    //     if(!empty($_POST['username']) && !empty($_POST['password']))
    //     {
    //         $_SESSION['username'] = $_POST['username'];
    //         $_SESSION['password'] = $_POST['password'];

    //         header("Location: home.php");
    //     }
        
    // }
    // foreach($_SERVER as $key => $value)
    //     {
    //         echo "$key => $value <br>";
    //     }

    $password = "12345";
    $ngek = password_hash($password, PASSWORD_DEFAULT);
    // echo $ngek;

    if(isset($_POST["Submit"]))
        {
            if(!empty($_POST["password"]))
                {
                    if(password_verify($_POST["password"], $ngek))
                    {
                        $_SESSION["password"] = $_POST["password"];
                        header("Location: home.php");
                    }
                    else
                    {
                        echo "Password is incorrect!";
                    }
                }
                else
                {
                    echo "Please enter your password!";
                }
        }
    ?>