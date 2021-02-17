<?php
require('C:\xampp\htdocs\Project\resources\templates\header.php');
?>

<div class="d-flex justify-content-between align-items-center">
    <h3 class="display-5">Customer List</h3>
    <a class="btn btn-success" href="<?php echo $this->getUrl(null, 'form') ?>">Create Customer</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Password</th>
            <th scope="col">Status</th>
            <th scope="col">Created Date</th>
            <th scope="col">Updated Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) : ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <th scope="row"><?= $d['customerId'] ?></th>
                    <td><?= $d['firstName'] ?></td>
                    <td><?= $d['lastName'] ?></td>
                    <td><?= $d['email'] ?></td>
                    <td><?= $d['phone'] ?></td>
                    <td><?= $d['password'] ?></td>
                    <td><?= $d['status'] ?></td>
                    <td><?= $d['createdDate'] ?></td>
                    <td><?= $d['updatedDate'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo $this->getUrl(null, 'updateForm', ['id' => $d['customerId']]) ?>">Update</a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger that" data-bs-whatever="<?php echo htmlspecialchars($d['customerId']) ?>">Delete</button>
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

<?php
require_once('C:\xampp\htdocs\Project\resources\templates\footer.php');
?>
<script src="../../../Project/public/js/customer.js"></script>