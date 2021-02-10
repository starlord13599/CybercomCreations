<?php
// phpcs:disable
require('../resources/header.php');
require('../sql/sql.php');

$new_conn = new Sql;


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // $fetch_query = "SELECT * FROM blog INNER JOIN blogs.user_id = user.id";
    $fetch_query = "SELECT * FROM blog";

    $result = mysqli_query($new_conn->conn, $fetch_query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<a class="btn btn-primary" href="../category/category.php">Manage Category</a>
<a class="btn btn-primary" href="createblog.php">Create Blog</a>
<a class="btn btn-primary" href="logout.php">Logout</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Url</th>
            <th scope="col">Published at</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) : ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <th scope="row"><?= $d['id'] ?></th>
                    <td><?= $d['title'] ?></td>
                    <td><?= $d['content'] ?></td>
                    <td><?= $d['url'] ?></td>
                    <td><?= $d['c_date'] ?></td>
                    <td><?= $d['category'] ?></td>
                    <td><a href="updateblog.php?id=<?= $d['id'] ?>" class="btn btn-primary">Edit</a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger that" data-bs-whatever="<?php echo htmlspecialchars($d['id']) ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>
<!-- Modal -->

<?php require('../resources/footer.php') ?>