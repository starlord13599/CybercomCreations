<?php
//phpcs:disable
session_start();
$success = $_SESSION['success'] ?? "";
$danger = $_SESSION['danger'] ?? "";
?>

<?php if ($success) : ?>
    <p class="alert alert-success"> <?php echo htmlspecialchars($success) ?> </p>
    <?php session_unset() ?>
<?php endif ?>
<?php if ($danger) : ?>
    <p class="alert alert-danger"> <?php echo htmlspecialchars($danger) ?> </p>
    <?php session_unset() ?>
<?php endif ?>