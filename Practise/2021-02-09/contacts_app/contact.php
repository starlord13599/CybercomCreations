<?php /*phpcs:disable*/
require('../resources/header.php');
require('../database_queries/fetch.php');
require('../resources/alert_mssge/alert.php')
?>

<h2>Read contacts</h2>
<hr>
<a class="btn btn-primary" href="create_contact.php">Create Contact</a>

<table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Created Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) : ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <th scope="row"><?php echo htmlspecialchars($d['id']) ?></th>
                    <td><?php echo htmlspecialchars($d['name']) ?></td>
                    <td><?php echo htmlspecialchars($d['email']) ?></td>
                    <td><?php echo htmlspecialchars($d['phone']) ?></td>
                    <td><?php echo htmlspecialchars($d['c_date']) ?></td>
                    <td><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger that" data-bs-whatever="<?php echo htmlspecialchars($d['id']) ?>">Delete</button>
                        <a class="btn btn-primary" href="<?php echo 'update_contact.php?id=' . htmlspecialchars($d['id']) ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this particular contact?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id=deleteBtn data-bs-dismiss="modal" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<?php require('../resources/footer.php'); ?>