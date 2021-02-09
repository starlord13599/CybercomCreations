<?php /*phpcs:disable*/
require('../resources/header.php');
require('../database_queries/create.php');
?>

<h2>Create Contact</h2>
<hr class="mb-5">
<form class="row g-3" id="createform" name="createform" method="POST" action="create_contact.php">
    <div class="col-md-12">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name">
        <span id="nameErr"></span>
    </div>
    <div class="col-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
        <span id="emailErr"></span>

    </div>
    <div class="col-6">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone">
        <span id="phoneErr"></span>
    </div>
    <div class="col-md-6">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-success">Create</button>
    </div>
</form>
<script type="module" src="../public/contactformval.js"></script>
<?php require('../resources/footer.php'); ?>