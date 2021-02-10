<?php
// phpcs:disable
require('../resources/header.php');
require('./createuser.php')
?>

<form class="row g-3" action="register.php" method="POST">

    <div class="col-md-2">
        <label for="prefix" class="form-label">Prefix</label>
        <select id="prefix" name="prefix" class="form-select" aria-label="Default select example">
            <option value="Mr" selected>Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Master">Master</option>
            <option value="Miss">Miss</option>
            <option value="Dr">Dr</option>
        </select>
    </div>
    <div class="col-md-5">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" name="fname" class="form-control" value="<?= $_POST['fname'] ?? '' ?>" id="f_name">
        <span class="error"><?= $r['name'] ?? '' ?></span>
    </div>
    <div class="col-5">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" name="lname" value="<?= $_POST['lname'] ?? '' ?>" class="form-control" id="l_name">
        <span class="error"></span>
    </div>

    <div class="col-md-6">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" name="phone" value="<?= $_POST['phone'] ?? '' ?>" class="form-control" id="phone">
        <span class="error"><?= $r['phone'] ?? '' ?></span>
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" value="<?= $_POST['email'] ?? '' ?>" class="form-control" id="email">
        <span class="error"><?= $r['email'] ?? '' ?></span>
    </div>


    <div class="col-md-6">
        <label for="password1" class="form-label">Password</label>
        <input type="password" name="password1" value="<?= $_POST['password1'] ?? '' ?>" class="form-control" id="password1">
        <span class="error"><?= $r['password'] ?? '' ?></span>
    </div>
    <div class="col-md-6">
        <label for="password2" class="form-label">Confirm Password</label>
        <input type="password" name="password2" value="<?= $_POST['password2'] ?? '' ?>" class="form-control" id="password2">
        <span class="error"><?= $r['password'] ?? '' ?></span>
    </div>

    <div class="col-md-12">
        <label for="info">Additional Info</label>
        <textarea name="info" class="form-control" id="info"></textarea>
    </div>


    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="terms">
            <label class="form-check-label" for="terms">
                I hereby accept the terms and conditions
            </label>
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Register</button>
</form>


<?php require('../resources/footer.php') ?>