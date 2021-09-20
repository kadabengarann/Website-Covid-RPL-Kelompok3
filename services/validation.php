<?php
require_once("./connection.php");
session_name("verification");
session_start();
$password = $_POST["passlog"];
$password_encrypted = sha1($password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin = $pdo_conn->prepare('SELECT * FROM admins WHERE admin_id = :username and password = :password');
    $admin->execute(array(
        ':username' => $_POST['userlog'],
        ':password' => $_POST["passlog"]
    ));

    $row = $admin->fetch(PDO::FETCH_ASSOC);
    if (empty($row['admin_id'])) {
        echo '<script>
    		alert(' . '"Incorect Username or Password");
    		window.location.href="../Login/login.php";
    		</script>';
    } else {
        $_SESSION['login_user'] = $_POST['userlog'];
        $_SESSION['level_user'] = 'admin';
        echo "hahahaah" . $_SESSION['login_user'];
        echo $_SESSION['level_user'];
        header("location:../index.php");
    }
}
