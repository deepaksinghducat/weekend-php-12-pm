<?php require_once 'layouts/database.php'; ?>

<?php
    if (!isset($_GET['id'])) {
        header("Location: posts.php");
    }

    $id =  (int) ($_GET['id']);

    $post = [];

    $stmt =  $connection->prepare("select * from posts where id =:id");
    $stmt->bindParam(":id", $id);
    $query = $stmt->execute();

    if ($query) {

        $post = $stmt->fetchObject();

        if ($post == false) {
            header("Location: posts.php");
        }
    }
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
                        Add Post
                        <a href="posts.php" class="btn btn-primary btn-sm" style="float: right;"> Back </a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="storepost.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?=$post->name?>" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control"><?=$post->description?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
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