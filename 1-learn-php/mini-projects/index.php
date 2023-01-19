<?php include_once "head.php"; ?>

<h1>Home Page</h1>

<?= run() ?>

<form action="./test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <button>submit</button>
</form>


<?php include_once "footer.php"; ?>