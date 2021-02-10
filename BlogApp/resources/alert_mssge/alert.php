<?php
//phpcs:disable
session_start();
$success = $_SESSION['success'] ?? "";
$danger = $_SESSION['danger'] ?? "";
?>

<?php if ($success) : ?>
    <div class="alert alert-success alert-dismissible fade show"> <?php echo htmlspecialchars($success) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset() ?>
<?php endif ?>
<?php if ($danger) : ?>
    <div class="alert alert-danger alert-dismissible fade show"> <?php echo htmlspecialchars($danger) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset() ?>
<?php endif ?>