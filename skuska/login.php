<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location:/SJSlovensko/SJprojektS/index.php");
    exit();
}

require_once 'Database.php';
require_once 'User.php';

class Login {
    private $user;
    private $password;
    private $errors = ["username" => "", "password" => "", "login" => ""];

    public function __construct($user) {
        $this->user = $user;
    }

    public function handleRequest() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->validateInput();
            if (empty($this->errors["username"]) && empty($this->errors["password"])) {
                $this->login();
            }
        }
        $this->displayForm();
    }

    private function validateInput() {
        if (empty(trim($_POST["username"]))) {
            $this->errors["username"] = "Please enter username.";
        } else {
            $this->user->username = trim($_POST["username"]);
        }

        if (empty(trim($_POST["password"]))) {
            $this->errors["password"] = "Please enter your password.";
        } else {
            $this->password = trim($_POST["password"]);
        }
    }

    private function login() {
        if ($this->user->usernameExists()) {
            if (password_verify($this->password, $this->user->password)) {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $this->user->id;
                $_SESSION["username"] = $this->user->username;
                header("Location:/SJSlovensko/SJprojektS/index.php");
                exit();
            } else {
                $this->errors["login"] = "Invalid username or password.";
            }
        } else {
            $this->errors["login"] = "Invalid username or password.";
        }
    }

    private function displayForm() {
        $username = $this->user->username ?? "";
        $username_err = $this->errors["username"];
        $password_err = $this->errors["password"];
        $login_err = $this->errors["login"];
    }
}

$database = new Database();
$db = $database->connect();
$user = new User($db);
$login = new Login($user);
$login->handleRequest();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>
