<?php
require_once 'Database.php';
require_once 'User.php';

class Register {
    private $user;
    private $password;
    private $confirm_password;
    private $errors = ["username" => "", "password" => "", "confirm_password" => ""];

    public function __construct($user) {
        $this->user = $user;
    }

    public function handleRequest() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->validateInput();
            if (empty($this->errors["username"]) && empty($this->errors["password"]) && empty($this->errors["confirm_password"])) {
                $this->register();
            }
        }
        $this->displayForm();
    }

    private function validateInput() {
        if (empty(trim($_POST["username"]))) {
            $this->errors["username"] = "Please enter a username.";
        } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
            $this->errors["username"] = "Username can only contain letters, numbers, and underscores.";
        } else {
            $this->user->username = trim($_POST["username"]);
            if ($this->user->usernameExists()) {
                $this->errors["username"] = "This username is already taken.";
            }
        }

        if (empty(trim($_POST["password"]))) {
            $this->errors["password"] = "Please enter a password.";
        } elseif (strlen(trim($_POST["password"])) < 6) {
            $this->errors["password"] = "Password must have at least 6 characters.";
        } else {
            $this->password = trim($_POST["password"]);
        }

        if (empty(trim($_POST["confirm_password"]))) {
            $this->errors["confirm_password"] = "Please confirm password.";
        } else {
            $this->confirm_password = trim($_POST["confirm_password"]);
            if (empty($this->errors["password"]) && ($this->password != $this->confirm_password)) {
                $this->errors["confirm_password"] = "Password did not match.";
            }
        }
    }

    private function register() {
        $this->user->password = password_hash($this->password, PASSWORD_DEFAULT);
        if ($this->user->create()) {
            header("location: login.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    private function displayForm() {
        $username = $_POST["username"] ?? "";
        $password = $_POST["password"] ?? "";
        $confirm_password = $_POST["confirm_password"] ?? "";

        $username_err = $this->errors["username"];
        $password_err = $this->errors["password"];
        $confirm_password_err = $this->errors["confirm_password"];

    }
}

// Instantiate necessary objects and handle the request
$database = new Database();
$db = $database->connect();
$user = new User($db);
$register = new Register($user);
$register->handleRequest();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { font: 14px sans-serif; }
        .wrapper { width: 360px; padding: 20px; }
    </style>
    <script>
        function validateForm() {
            var password = document.getElementsByName("password")[0].value;
            var confirm_password = document.getElementsByName("confirm_password")[0].value;
            if (password !== confirm_password) {
                alert("Password did not match.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
        <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>
</html>
