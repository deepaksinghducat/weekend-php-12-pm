
<?php require_once 'layouts/head.php'; ?>


<?php
    spl_autoload_register(function ($class) {
        require  "./classes/" . $class . ".php";
    });

    $dataBaseClass = new Database();

    $connection = $dataBaseClass->connect();

    $userClass = new User($connection);

    if (! isset($_GET['id']) && $_GET['id'] == '') {
        header("Location: users.php");
    }

    $id =  (int) ($_GET['id']);

    $user = $userClass->getUserById($id);

    if (!$user) {
        header("Location: users.php");
    }
?>

<?php require_once 'layouts/navigation.php'; ?>

<?php require_once 'layouts/aside.php'; ?>

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="width: 100%">
                        Edit User
                        <a href="users.php" class="btn btn-primary btn-sm" style="float: right;"> Back </a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="updateuser.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?=$user->id?>">
                        <input type="hidden" name="previous_image_path" value="<?=$user->image_path?>">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value="<?=$user->first_name?>">
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value="<?=$user->last_name?>">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?=$user->email?>">
                            </div>
                           
                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                <img src="<?= $user->image_path ?>" height="50" />
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'layouts/footer.php'; ?>

<?php require_once 'layouts/foot.php'; ?>