<?php /*phpcs:disable*/
require('../resources/header.php');
require('../database_queries/update.php');
?>

<h2>Update User #<?php echo htmlspecialchars($id) ?></h2>
<hr class="mb-4">

<form class="row g-3" action="update_contact.php" method="POST">
    <div class="col-md-12">
        <input name="id" type="text" hidden class="form-control" value="<?php echo htmlspecialchars($id) ?>">
    </div>
    <div class="col-md-12">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($name) ?>" name="name" id="name">
    </div>
    <div class="col-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" value="<?php echo htmlspecialchars($email) ?>" name="email" id="email">
    </div>
    <div class="col-6">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($phone) ?>" name="phone" id="phone">
    </div>
    <div class="col-md-6">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($title) ?>" name="title" id="title">
    </div>
    <div class="col-md-6">
        <label for="c_date" class="form-label">Created Date</label>
        <input type="text" disabled class="form-control" value="<?php echo htmlspecialchars($c_date) ?>" name="c_date" id="c_date">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-success">Create</button>
    </div>
</form>

<?php require('../resources/footer.php'); ?>