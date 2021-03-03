<?php
$shipments = $this->getShipments();
?>
<div class="d-flex justify-content-between align-items-center">
    <h3 class="display-5">Shipment List</h3>
    <a class="btn btn-success" onclick="mage.setUrl('<?php echo $this->getUrl()->getUrl('shipment', 'show') ?>').load()" href="javascript:void(0)">Create Shipment</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
            <th scope="col">Amount</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Created Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($shipments) : ?>
            <?php foreach ($shipments as $shipment) : ?>
                <tr>
                    <th scope="row"><?= $shipment->methodId ?></th>
                    <td><?= $shipment->name ?></td>
                    <td><?= $shipment->code ?></td>
                    <td><?= $shipment->amount ?></td>
                    <td><?= $shipment->description ?></td>
                    <td><?= $shipment->status ?></td>
                    <td><?= $shipment->createdDate ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo $this->getUrl()->getUrl(null, 'form', ['id' => $shipment->methodId]); ?>">Update</a>
                        <a type="button" class="btn btn-danger that" href="<?php echo $this->getUrl()->getUrl(null, 'delete', ['id' => $shipment->methodId]); ?>">Delete</a>
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
<!-- <script src="../../../Project/public/js/shipment.js"></script> -->