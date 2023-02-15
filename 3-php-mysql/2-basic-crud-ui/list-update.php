<?php require_once "./template/header.php"; ?>

<div class=" container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class=" border rounded p-5 m-5">
                <h3>Update List</h3>
                <?php 
                
                $id = $_GET["id"];
                $sql = "SELECT * FROM my WHERE id = $id";
                $query = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($query);
                
                ?>
                <form action="./list-update-info.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="mb-3">
                        <label for="" class=" form-label">Name</label>
                        <input type="text" name="name" value="<?= $row['name'] ?>" class=" form-control" required>
                    </div>
                    <div class="">
                        <label for="" class=" form-label">Money</label>
                        <input type="number" name="money" value="<?= $row['money'] ?>" class=" form-control" required>
                    </div>

                    <button class=" btn btn-primary mt-5">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once "./template/footer.php"; ?>