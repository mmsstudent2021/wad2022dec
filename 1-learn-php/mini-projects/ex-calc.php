<?php include_once "head.php"; ?>

<div class="p-3">
    <h1>Exchange Calculator</h1>

    <?php

    include "./ex-logic.php";

    ?>

    <form method="post" id="exForm"></form>

    <div class="row g-3">
        <div class="col-12">
            <label class=" form-label" for="">Amount</label>
            <input class=" form-control" form="exForm" type="number" name="amount" required>
        </div>
        <div class="col-6">
            <label class=" form-label" for="">From Currency</label>
            <select id="" name="from" form="exForm" class=" form-select" required>
                <option value="">ရွေးချယ်ပါ</option>
                <?php foreach ($rates as $key => $value) : ?>
                    <option value="<?= $key ?>">
                        <?= $key ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6">
            <label class=" form-label" for="">To Currency</label>
            <select id="" name="to" form="exForm" class=" form-select" required>
                <option value="">ရွေးချယ်ပါ</option>
                <?php foreach ($rates as $key => $value) : ?>
                    <option value="<?= $key ?>">
                        <?= $key ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-12">
            <button name="calc" form="exForm" class=" btn btn-primary w-100 btn-lg">Calculate</button>
        </div>

        <div class="col-12">

            <h4>History</h4>
            <ul class=" list-group">

                <?php foreach (file("data") as $l) : ?>
                    <li class=" list-group-item">
                        <?= $l ?>
                    </li>

                <?php endforeach; ?>
            </ul>

        </div>
    </div>



</div>


<?php include_once "footer.php"; ?>