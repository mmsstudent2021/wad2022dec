<?php include_once "head.php"; ?>

<div class="p-3">
    <h1>Creat Friend Card</h1>
    <form action="./fri-logic.php" method="post" enctype="multipart/form-data">
        <div class=" mb-3">
            <label class=" form-label" for="">Friend Name</label>
            <input type="text" class=" form-control" name="fri_name" required>
        </div>

        <div class=" mb-3">
            <label class=" form-label" for="">Friend Phone</label>
            <input type="number" class=" form-control" name="fri_phone" required>
        </div>

        <div class=" mb-3">
            <label class=" form-label" for="">Friend Address</label>
            <textarea rows="5" class=" form-control" name="fri_address" required></textarea>
        </div>
        <div class=" mb-3">
            <label class=" form-label" for="">Friend Photo</label>
            <input type="file" accept="image/jpeg,image/png" class=" form-control" name="fri_photo">
        </div>

        <div class=" form-check mb-3">
            <input type="checkbox" name="isreal" value="yes" id="isreal" class=" form-check-input">
            <label for="isreal" class=" form-check-label">Real Friend</label>
        </div>

        <button class="btn btn-primary w-100">Create Friend List</button>
    </form>



    <div class="my-5">
        <?php
        $dataFileName = "friend-data.json";

        $friends = json_decode(file_get_contents($dataFileName), true);
        ?>
        <?php foreach ($friends as $key => $friend) : ?>

            <div class="card mb-3">
                <div class=" card-body text-center">
                    <img src="<?= $friend["photo"] ?>" class=" rounded-circle" width="100" height="100" alt="">
                    <h4><?= $friend["fri_name"] ?></h4>
                    <p><?= $friend["fri_phone"] ?></p>
                    <a href="./fri-detail.php?index=<?= $key ?>" class=" btn btn-primary w-100 d-block">Detial</a>
                    <a href="./fri-del.php?index=<?= $key ?>" class=" btn btn-danger w-100 d-block">delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php include_once "footer.php"; ?>