<?php
    spl_autoload_register(function ($class) {
        require  "./classes/".$class.".php";
    });

    $dataBaseClass = new Database();

    $connection = $dataBaseClass->connect();

    $userClass = new User($connection);

    $users = $userClass->getAllUsers();
?>

<?php require_once 'layouts/head.php'; ?>

<?php require_once 'layouts/navigation.php'; ?>

<?php require_once 'layouts/aside.php'; ?>

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="width: 100%">
                        User
                        <a href="adduser.php" class="btn btn-primary" style="float: right;"> Add User </a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $key => $user) : ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><img src="<?= $user['image_path'] ?>" height="50" /></td>
                                    <td><?= $user['first_name'] ?></td>
                                    <td><?= $user['last_name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td>
                                        <a href="edituser.php?id=<?= $user['id'] ?>" class="btn btn-primary mx-2">
                                            <span class="fa fa-edit"></span>
                                        </a>

                                        <a href="deleteuser.php?id=<?= $user['id'] ?>" class="btn btn-danger" onclick="deletePost(event)">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'layouts/footer.php'; ?>

<?php require_once 'layouts/foot.php'; ?>