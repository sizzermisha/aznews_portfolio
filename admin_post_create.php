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
                        <div class="col-10 mx-auto card p-3">
                           <form enctype="multipart/form-data" action="function/posts/create.php" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Введите название</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Введите описание</label>
                                    <textarea type="text" name="description" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
									<label for="" class="form-label">Выберите тэг для новости</label>
                                    <select class="form-select" name="tag_id" aria-label="Default select example">
                                        <?php foreach (connect()->query('SELECT * FROM tags;') as $tag): ?>
                                            <option value="<?php echo $tag['id']; ?>"><?php echo $tag['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
								<div class="mb-3">
									<label for="" class="form-label">Выберите где разместить блок</label>
									<select class="form-select" name="area_select" aria-label="Default select example">
										<option value="1">Главная большая новость</option>
										<option value="2">Под главной новостью</option>
										<option value="3">Правый блок с новостями</option>
									</select>
								</div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Укажите изображение</label>
                                    <input type="file" name="userfile" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Отправить</button>
                           </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once './elements/footer.php'; ?>