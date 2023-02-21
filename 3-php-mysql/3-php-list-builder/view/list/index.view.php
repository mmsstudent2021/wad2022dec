<?php require_once ViewDir . "/template/header.php"; ?>

<h1>My Lists</h1>

<div class=" d-flex justify-content-between mb-3">
    <a href="<?= route('list-create') ?>" class=" btn btn-outline-primary">Create New</a>
</div>

<table class=" table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Money</th>
            <th>Control</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($lists as $list) : ?>
            <tr>
                <td>
                    <?= $list['id'] ?>
                </td>
                <td>
                    <?= $list['name'] ?>
                </td>
                <td>
                    <?= $list['money'] ?>
                </td>
                <td>
                    <a href="<?= route("list-edit", ["id" => $list['id']]) ?>" class=" btn btn-sm btn-outline-info">
                        Edit
                    </a>
                    <a href="<?= route("list-delete", ["id" => $list['id']]) ?>" class=" btn btn-sm btn-outline-danger">
                        Delete
                    </a>
                </td>
                <td>
                    <?= $list['created_at'] ?>
                </td>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>


<?php require_once ViewDir . "/template/footer.php"; ?>