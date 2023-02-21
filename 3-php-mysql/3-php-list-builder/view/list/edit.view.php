<?php require_once ViewDir . "/template/header.php"; ?>

<h1>Edit List</h1>

 

<div class=" d-flex justify-content-between mb-3">
    <a href="<?= route('list') ?>" class=" btn btn-outline-primary">All List</a>
</div>

<div class=" border rounded p-5">
    <form action="<?= route("list-update") ?>" method="post">
        <input type="hidden" name="id" value="<?= $list["id"] ?>">
        <div class=" row align-items-end">
            <div class=" col">
                <label for="" class=" form-label">Your Name</label>
                <input type="text" class=" form-control" value="<?= $list["name"] ?>" name="name">
            </div>
            <div class=" col">
                <label for="" class=" form-label">Money Amount</label>
                <input type="number" class=" form-control" value="<?= $list["money"] ?>" name="money">
            </div>
            <div class=" col">
                <button class=" btn btn-lg btn-primary w-100 ">Update List</button>
            </div>
        </div>
    </form>
</div>




<?php require_once ViewDir . "/template/footer.php"; ?>