<?php
// phpcs:disable
require('../resources/header.php');
require('update.php')
?>

<form class="row g-3" action="updateblog.php" method="POST">
    <input type="text" name="id" id="id" hidden value="<?= $data['id'] ?>">
    <div class="col-md-5">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="<?= $data['title'] ?>" id="title">

    </div>
    <div class="col-5">
        <label for="content" class="form-label">Content</label>
        <input type="text" name="content" class="form-control" value="<?= $data['content'] ?>" id="content">

    </div>

    <div class="col-md-6">
        <label for="url" class="form-label">Url</label>
        <input type="text" name="url" class="form-control" value="<?= $data['url'] ?>" id="url">
    </div>

    <div class="col-md-6">
        <label for="category" class="form-label">Category</label>
        <select id="category" value="<?= $data['category'] ?>" name="category" class="form-select" aria-label="Default select example">
            <option value="Music" selected>Music</option>
            <option value="Health">Health</option>
            <option value="Social">Social</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>


<?php require('../resources/footer.php') ?>