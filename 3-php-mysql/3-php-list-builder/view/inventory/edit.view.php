<?php require_once ViewDir . "/template/header.php"; ?>

<h1>Edit Item</h1>

 

<div class=" d-flex justify-content-between mb-3">
    <a href="<?= route('inventory') ?>" class=" btn btn-outline-primary">All Items</a>
</div>

<div class=" border rounded p-5">
    <form action="<?= route("inventory-update") ?>" method="post">
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="id" value="<?= $list["id"] ?>">
        <div class=" row align-items-end">
            <div class=" col">
                <label for="" class=" form-label">Item Name</label>
                <input type="text" class=" form-control" value="<?= $list["name"] ?>" name="name">
            </div>
            <div class=" col">
                <label for="" class=" form-label">Price</label>
                <input type="number" class=" form-control" value="<?= $list["price"] ?>" name="price">
            </div>
            <div class=" col">
                <label for="" class=" form-label">Stock</label>
                <input type="number" class=" form-control" value="<?= $list["stock"] ?>" name="stock">
            </div>
            <div class=" col">
                <button class=" btn btn-lg btn-primary w-100 ">Update Item</button>
            </div>
        </div>
    </form>
</div>




<?php require_once ViewDir . "/template/footer.php"; ?>