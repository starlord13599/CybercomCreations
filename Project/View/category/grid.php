<?php
require('C:\xampp\htdocs\Project\resources\templates\header.php');
?>

<div class="d-flex justify-content-between align-items-center">
    <h3 class="display-5">Category List</h3>
    <a class="btn btn-success" href="<?php echo $this->getUrl(null, 'form') ?>">Create Category</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) : ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <th scope="row"><?= $d['categoryId'] ?></th>
                    <td><?= $d['name'] ?></td>
                    <td><?= $d['status'] ?></td>
                    <td><?= $d['description'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo $this->getUrl(null, 'updateForm', ['id' => $d['categoryId']], false)  ?>">Update</a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger that" data-bs-whatever="<?php echo htmlspecialchars($d['categoryId']) ?>">Delete</button>
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
                <button type="button" id=deleteBtnc data-bs-dismiss="modal" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<?php
require_once('C:\xampp\htdocs\Project\resources\templates\footer.php');
?>
<script src="../../../Project/public/js/category.js"></script>