<?php
// phpcs:disable
require('../resources/header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo $title = $_POST['title'];
    echo  $content = $_POST['content'];
    echo $url = $_POST['url'];
    echo $meta_title = $_POST['meta_title'];
    echo $p_category = $_POST['p_category'];
}


?>

<form class="row g-3" action="addcategory.php" method="POST">


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
        <label for="meta_title" class="form-label">Meta Title</label>
        <input type="text" name="meta_title" class="form-control" id="meta_title">
        <!-- <span class="error"><?= $r['email'] ?? '' ?></span> -->
    </div>

    <div class="col-md-6">
        <label for="p_category" class="form-label">Parent Category</label>
        <select id="p_category" name="p_category" class="form-select" aria-label="Default select example">
            <option value="Music" selected>Music</option>
            <option value="Health">Health</option>
            <option value="Social">Social</option>
        </select>
    </div>



    <button type="submit" class="btn btn-primary">Add</button>

    <?php require('../resources/footer.php') ?>