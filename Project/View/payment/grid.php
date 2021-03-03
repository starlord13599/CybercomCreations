<?php
$payments = $this->getPayments();
?>
<div class="d-flex justify-content-between align-items-center">
    <h3 class="display-5">Payment List</h3>
    <a class="btn btn-success" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('payment', 'show') ?>').load()" href="javascript:void(0)">Create Payment</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Created Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($payments) : ?>
            <?php foreach ($payments as $payment) : ?>
                <tr>
                    <th scope="row"><?= $payment->methodId ?></th>
                    <td><?= $payment->name ?></td>
                    <td><?= $payment->code ?></td>
                    <td><?= $payment->description ?></td>
                    <td><?= $payment->status ?></td>
                    <td><?= $payment->createdDate ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo $this->getUrl()->getUrl(null, 'form', ['id' => $payment->methodId]); ?>">Update</a>
                        <a type="button" class="btn btn-danger that" href="<?php echo $this->getUrl()->getUrl(null, 'delete', ['id' => $payment->methodId]); ?>">Delete</a>
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

<!-- <script src="../../../Project/public/js/payment.js"></script> -->