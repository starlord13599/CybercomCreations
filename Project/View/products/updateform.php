<?php
require('C:\xampp\htdocs\Project\resources\templates\header.php');
?>
<p><?= $errors['empty'] ?? '' ?></p>
<form class="row g-3" action="<?php echo $this->getUrl('products', 'update'); ?>" method="POST">

    <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" value="<?= $data['name'] ?? '' ?>" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" value="<?= $data['price'] ?? '' ?>" class="form-control">
    </div>
    <div class="col-12">
        <label for="discount" class="form-label">Discount</label>
        <input type="number" name="discount" value="<?= $data['discount']  ?? ''  ?>" class="form-control" id="discount">
    </div>
    <div class="col-12">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" name="quantity" value="<?= $data['quantity']  ?? '' ?>" class="form-control" id="quantity">
    </div>
    <div class="col-md-6">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" value="<?= $data['description'] ?? ''  ?>" class="form-control" id="description">
    </div>
    <div class="col-md-4">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" value="<?= $data['status'] ?? ''  ?>" class="form-select">
            <option selected value="enabled">Enabled</option>
            <option value="disabled">Disabled</option>
        </select>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
<?php
require('C:\xampp\htdocs\Project\resources\templates\footer.php');
?>