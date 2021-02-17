<?php
require('C:\xampp\htdocs\Project\resources\templates\header.php');
?>

<form class="row g-3" action="<?php echo $this->getUrl(null, 'saveForm') ?>" method="POST">
    <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="description">
    </div>
    <div class="col-md-4">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select">
            <option selected value="enabled">Enabled</option>
            <option value="disabled">Disabled</option>
        </select>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>

<?php
require('C:\xampp\htdocs\Project\resources\templates\footer.php');
?>