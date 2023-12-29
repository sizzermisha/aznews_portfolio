<?php require_once './function/get_ware.php'; ?>
<?php require_once "./function/connect.php"; ?>
<?php require_once "./function/tags/get_tags.php"; ?>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Добавить
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="function/tags/tag_create.php" method="POST">
                                        <div class="mb-3">
                                            <label for="#" class="form-label">Введите название тега</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="#" class="form-label">Укажите цвет тега</label>
                                            <input type="color" name="color">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Отправить</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- START TABLE -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Название тега</th>
                                        <th scope="col">Цвет</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (all_tag() as $value): ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $value['id']; ?>
                                            </th>
                                            <td>
                                                <?php echo $value['name']; ?>
                                            </td>
                                            <td>
                                            <?php echo $value['color']; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- END TABLE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once './elements/footer.php'; ?>