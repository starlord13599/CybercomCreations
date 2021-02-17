<?php
require('C:\xampp\htdocs\Project\resources\templates\header.php');
?>

<form class="row g-3" action="<?php echo $this->getUrl('customer', 'update'); ?>" method="POST">

    <div class="col-md-6">
        <label for="name" class="form-label">First Name</label>
        <input type="text" name="firstName" value="<?= $data['firstName'] ?? '' ?>" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="price" class="form-label">Last Name</label>
        <input type="text" name="lastName" value="<?= $data['lastName'] ?? '' ?>" class="form-control">
    </div>
    <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" value="<?= $data['email']  ?? ''  ?>" class="form-control" id="discount">
    </div>
    <div class="col-12">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" value="<?= $data['phone']  ?? '' ?>" class="form-control" id="quantity">
    </div>
    <div class="col-md-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" value="<?= $data['password'] ?? ''  ?>" class="form-control" id="description">
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
require_once('C:\xampp\htdocs\Project\resources\templates\footer.php');
?>