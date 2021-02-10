<?php
// phpcs:disable
require('../resources/header.php');
require('create.php');
?>

<form class="row g-3" action="createblog.php" method="POST">

    <div class="col-md-5">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
        <!-- <span class="error"><?= $r['name'] ?? '' ?></span> -->
    </div>
    <div class="col-5">
        <label for="content" class="form-label">Content</label>
        <input type="text" name="content" class="form-control" id="content">
        <!-- <span class="error"></span> -->
    </div>

    <div class="col-md-6">
        <label for="url" class="form-label">Url</label>
        <input type="text" name="url" class="form-control" id="url">
        <!-- <span class="error"><?= $r['phone'] ?? '' ?></span> -->
    </div>
    <div class="col-md-6">
        <label for="meta_title" class="form-label">Published at</label>
        <input type="date" name="c_date" class="form-control" id="c_date">
        <!-- <span class="error"><?= $r['email'] ?? '' ?></span> -->
    </div>

    <div class="col-md-6">
        <label for="category" class="form-label">Category</label>
        <select id="category" name="category" class="form-select" aria-label="Default select example">
            <option value="Music" selected>Music</option>
            <option value="Health">Health</option>
            <option value="Social">Social</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>


<?php require('../resources/footer.php') ?>