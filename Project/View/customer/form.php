<?php
require('C:\xampp\htdocs\Project\resources\templates\header.php');
?>

<form class="row g-3" action="<?php echo $this->getUrl(null, 'saveForm'); ?>" method="POST">
    <div class="col-md-6">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" name="firstName" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" name="lastName" class="form-control">
    </div>
    <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="">
    </div>
    <div class="col-12">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" id="">
    </div>
    <div class="col-md-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="">
    </div>
    <div class="col-md-4">
        <label for="status" class="form-label">Status</label>
        <select id="" name="status" class="form-select">
            <option selected value="Enabled">Enabled</option>
            <option value="Active">Active</option>
        </select>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>


<?php
require('C:\xampp\htdocs\Project\resources\templates\footer.php');
?>