<?php require_once './function/get_ware.php'; ?>
<?php require_once "./function/connect.php"; ?>
<?php require_once "./elements/header.php"; ?>

<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-5 mx-auto card p-3">
                            <div class="mb-3">
                                <a href="admin_post_create.php" class="w-100 btn btn-primary">Добавить пост</a>
                                <a href="admin_tags.php" class="w-100 btn btn-primary">Теги</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once './elements/footer.php'; ?>