<?php
    spl_autoload_register(function ($class) {
        require  "./classes/".$class.".php";
    });

    $dataBaseClass = new Database();

    $connection = $dataBaseClass->connect();

    $postClass = new Post($connection);

    $posts = $postClass->getAllPosts();
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
                        Posts
                        <a href="addpost.php" class="btn btn-primary" style="float: right;"> Add Post </a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $key => $post) : ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><img src="<?= $post['image_path'] ?>" height="50" /></td>
                                    <td><?= $post['name'] ?></td>
                                    <td><?= $post['description'] ?></td>
                                    <td>
                                        <a href="editpost.php?id=<?= $post['id'] ?>" class="btn btn-primary mx-2">
                                            <span class="fa fa-edit"></span>
                                        </a>

                                        <a href="deletepost.php?id=<?= $post['id'] ?>" class="btn btn-danger" onclick="deletePost(event)">
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