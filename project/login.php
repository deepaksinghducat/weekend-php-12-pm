<?php require_once './layouts/header.php' ?>
<?php require_once './layouts/navigation.php' ?>

<?php
    spl_autoload_register(function ($class) {
        require  "./admin/classes/" . $class . ".php";
    });

    $dataBaseClass = new Database();

    $connection = $dataBaseClass->connect();

    $userClass = new User($connection);

    if (isset($_POST['login'])) {

        $result = $userClass->login($_POST);

        if($result) {

            $_SESSION['current_user'] = $result;
            
            header("Location: ./admin/index.php");
        }
    }
?>

<style>
    .login {
        height: auto;
        width: 50%;
        border: 2px solid #0d6efd;
        padding: 20px;
        margin: 10% auto;
    }
</style>

<div class="container">
    <form action="" method="POST" class="login">
        <h2 class="text-center">Login</h2>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
</div>

<?php require_once './layouts/footer.php' ?>