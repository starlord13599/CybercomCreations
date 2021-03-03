<?php
$categories = $this->getCategories();
?>

<div class="d-flex justify-content-between align-items-center">
    <h3 class="display-5">Category List</h3>
    <a class="btn btn-success" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl(null, 'show') ?>').load()" href="javascript:void(0)">Create Category</a>
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
        <?php if ($categories) : ?>
            <?php foreach ($categories as $category) : ?>
                <tr>
                    <th scope="row"><?= $category->categoryId ?></th>
                    <td><?= $category->name ?></td>
                    <td><?= $category->status ?></td>
                    <td><?= $category->description ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo $this->getUrl()->getUrl(null, 'form', ['id' => $category->categoryId], false)  ?>">Update</a>
                        <a type="button" class="btn btn-danger that" href="<?php echo $this->getUrl()->getUrl(null, 'delete', ['id' => $category->categoryId], false)  ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>

    </tbody>

</table>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> -->
<!-- Modal -->

<?php
?>
<!-- <script src="../../../Project/public/js/category.js"></script> -->