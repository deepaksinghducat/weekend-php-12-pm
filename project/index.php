<?php require_once './layouts/header.php' ?>
<?php require_once './layouts/navigation.php' ?>

<?php

$users = [
    [
        "id" => 1,
        "name" => "fdsafasf",
        "image" =>  "https://via.placeholder.com/150",
        "description" => "fasdfasfasfasfasfasf"
    ]
];


?>

<div class="container">
    <div class="row mb-4">
        <?php foreach ($users as $user) : ?>
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <img src="<?= $user['image'] ?>" class="card-img-top" alt="<?= $user['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['name'] ?></h5>
                        <p class="card-text"><?= $user['description'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once './layouts/footer.php' ?>