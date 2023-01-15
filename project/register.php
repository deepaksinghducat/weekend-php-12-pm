<?php require_once './layouts/header.php' ?>
<?php require_once './layouts/navigation.php' ?>

<?php
    spl_autoload_register(function ($class) {
        require  "./admin/classes/" . $class . ".php";
    });

    $dataBaseClass = new Database();

    $connection = $dataBaseClass->connect();

    $userClass = new User($connection);

    if (isset($_POST['register'])) {

        $result = $userClass->store($_POST);

        header("Location: login.php");
    }
?>

<style>
    .register {
        height: auto;
        width: 50%;
        border: 2px solid #0d6efd;
        padding: 20px;
        margin: 5% auto;
    }
</style>

<div class="container">
    <form action="" method="POST" class="register">
        <h2 class="text-center">Register</h2>

        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Jhon">
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Doe">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" name="register" class="btn btn-primary">Register</button>
    </form>
</div>

<?php require_once './layouts/footer.php' ?>