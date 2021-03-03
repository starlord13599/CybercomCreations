<div class="d-flex justify-content-between align-items-center">
    <h3 class="display-5">Product List</h3>
    <a class="btn btn-success" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('product', 'show') ?>').load()" href="javascript:void(0)">Create Product</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Discount</th>
            <th scope="col">Qunatity</th>
            <th scope="col">Description</th>
            <th scope="col">Created Date</th>
            <th scope="col">Updated Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($this->getProducts()) : ?>
            <?php foreach ($this->getProducts() as $product) : ?>
                <tr>

                    <th scope="row"><?= $product->productId ?></th>
                    <td><?= $product->name ?></td>
                    <td><?= $product->price ?></td>
                    <td><?= $product->discount ?></td>
                    <td><?= $product->quantity ?></td>
                    <td><?= $product->description ?></td>
                    <td><?= $product->createdDate ?></td>
                    <td><?= $product->updatedDate ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo $this->getUrl()->getUrl(null, 'form', ['id' => $product->productId]); ?>"><i class="bi bi-pencil"></i></a>
                        <a type="button" class="btn btn-danger" href="<?php echo $this->getUrl()->getUrl(null, 'delete', ['id' => $product->productId]); ?>"><i class="bi bi-trash-fill"></i></a>
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
<!-- <script src="../../../Project/public/js/product.js"></script> -->