<?php
session_start();
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="bg-[#030712] ">
    <!-- <form action="index.php" method="post"> -->
        <!-- <input type="text" name="username" placeholder="Enter your username">  -->
        <!-- <br>
        <br>
        <input type="password" name= "password" placeholder="Enter your password">
        <br>
        <input type="submit" value="Submit" name="Submit">
    </form> -->


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "post">


    <div class = "w-1/2 h-screen mx-auto flex justify-center items-center flex-col gap-5">



        <div class="bg-[#1c2029]  mx-auto flex justify-center   items-center p-10  rounded-lg   gap-5 outline outline-1 outline-gray-200">
            <input type="text"     name = "username" placeholder = "Enter your username" class= " bg-gray-300 px-4 py-2 rounded-lg mt-5 ">
            <input type="password" name = "password" placeholder = "Enter your password" class= " bg-gray-300 px-4 py-2 rounded-lg mt-5 ">
            <input type="submit"   name="Submit"value="Submit"                           class="bg-gray-300 px-4 py-2 rounded-lg mt-5">


        </div>


    <div class="text-white">
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

            if(empty($username))
                {
                    echo "Please enter your username!";
                }
            else if(empty($password))
                {
                    echo "Please enter your password!";
                }
            else
                {
                    $hash = password_hash($password, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO users(username, password) VALUES ('$username', '$hash')";

                    mysqli_query($conn, $sql);

                    echo "Registration successful!";
                }
        }

    ?>
    </div>

    </div>

    
</form>



</body>
</html>










































    <!-- // if (isset($_POST["Submit"]))
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

    // $password = "12345";
    // $ngek = password_hash($password, PASSWORD_DEFAULT);
    // // echo $ngek;

    // if(isset($_POST["Submit"]))
    //     {
    //         if(!empty($_POST["password"]))
    //             {
    //                 if(password_verify($_POST["password"], $ngek))
    //                 {
    //                     $_SESSION["password"] = $_POST["password"];
    //                     header("Location: home.php");
    //                 }
    //                 else
    //                 {
    //                     echo "Password is incorrect!";
    //                 }
    //             }
    //             else
    //             {
    //                 echo "Please enter your password!";
    //             }
    //     }

// $sql = "INSERT INTO users (username, password) VALUES ('deds', 'admin123')";
// mysqli_query($conn, $sql);

// $sql = "SELECT * FROM users WHERE username = 'deds' ";
// $result = mysqli_query($conn, $sql);

// if(mysqli_num_rows($result) > 0)
//     {
//         $row = mysqli_fetch_assoc($result);
//         echo "Username: " . $row["username"] . "<br>";
//         echo "Password: " . $row["password"] . "<br>";
//         echo "Registration Date: {$row['reg_date']} <br>";
//     }

// mysqli_close($conn); -->