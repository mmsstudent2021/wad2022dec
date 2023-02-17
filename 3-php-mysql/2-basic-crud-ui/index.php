<?php require_once "./template/header.php"; ?>

<div class=" container">
    <div class="row">
        <div class="col-12">
            <button class=" btn btn-primary">Testing</button>

            <?php

            dd($_SERVER);

            echo url("list/index.php");

            ?>
        </div>
    </div>
</div>

<?php require_once "./template/footer.php"; ?>