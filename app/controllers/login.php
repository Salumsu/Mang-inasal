<?php
    session_start();
    $DS = DIRECTORY_SEPARATOR;
    defined('APPLICATION_PATH') || define('APPLICATION_PATH', 'app');

    require "./../config/config.php";

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
        if (empty($username) || empty($password)) {
            header("Location: ../../index.php?error=User Name is required");
            exit();
        } else {
            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $username && $row['password'] === $password) {
                    echo "Logged in!";
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: ../../index.php");
                    exit();
                }else{
                    header("Location: ../../index.php?error=Incorect User name or password");
                    exit();
                }
            }else{
                header("Location: ../../index.php?error=Incorect User name or password");
            exit();
        }
        }
    } else {
        header("Location: ../../index.php");
        exit();
    }


    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }