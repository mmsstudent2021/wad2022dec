<?php require_once ViewDir . "/template/header.php"; ?>

<h1>Inventory Lists</h1>

<div class=" d-flex justify-content-between mb-3">
    <a href="<?= route('inventory-create') ?>" class=" btn btn-outline-primary">Create New</a>
    <form action="" method="get">
        <div class=" input-group">
            <input type="text" name="q" value="<?php if (isset($_GET['q'])) : ?> <?= $_GET["q"] ?> <?php endif; ?>" class=" form-control">
            <?php if (isset($_GET['q'])) : ?>
                <a href="<?= route("inventory") ?>" class=" btn btn-danger">
                    Del
                </a>
            <?php endif; ?>
            <button class=" btn btn-primary">Search</button>
        </div>
    </form>
</div>

<table class=" table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Control</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($lists["data"] as $list) : ?>
            <tr>
                <td>
                    <?= $list['id'] ?>
                </td>
                <td>
                    <?= $list['name'] ?>
                </td>
                <td>
                    <?= $list['price'] ?>
                </td>
                <td>
                    <?= $list['stock'] ?>
                </td>
                <td>
                    <a href="<?= route("inventory-edit", ["id" => $list['id']]) ?>" class=" btn btn-sm btn-outline-info">
                        Edit
                    </a>
                    <form class=" d-inline-block" action="<?= route("inventory-delete") ?>" method="post">
                        <input type="hidden" name="id" value="<?= $list['id'] ?>">
                        <input type="hidden" name="_method" value="delete">
                        <button class=" btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <?= $list['created_at'] ?>
                </td>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>
<?= paginator($lists) ?>




<?php require_once ViewDir . "/template/footer.php"; ?>