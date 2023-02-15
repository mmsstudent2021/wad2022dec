<?php require_once "./template/header.php"; ?>

<div class=" container">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class=" border rounded p-5 m-5">
                <h3 class=" mb-3">အကြွေး ပေးရမည့်လူများ</h3>
                <?php



                $sql = "SELECT * FROM my";
                $query = mysqli_query($conn, $sql);

                $totalSql = "SELECT sum(money) AS total from my";
                $totalQuery = mysqli_query($conn, $totalSql);


                ?>

                <div class="mb-3">
                    Total : <?= $query->num_rows ?>
                </div>

                <table class=" table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th class=" text-end">Money</th>
                            <th>Controls</th>
                            <th>Create At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <tr class=" align-middle">
                                <td><?= $row["id"] ?></td>
                                <td><?= $row["name"] ?></td>
                                <td class=" text-end"><?= $row["money"] ?></td>
                                <td>

                                    <a href="./list-update.php?id=<?= $row['id']; ?>" class=" btn btn-primary">Update</a>
                                    <form class=" d-inline-block" action="./list-delete.php" method="post">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <button onclick="return confirm('Are U sure to Delete?')" class=" btn btn-danger">Delete</button>
                                    </form>


                                </td>
                                <td>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-calendar"></i>
                                        <?= showDateTime($row['created_at']) ?>
                                    </p>
                                    <p class=" mb-0 small">
                                        <i class=" bi bi-clock"></i>
                                        <?= showDateTime($row['created_at'], " H:i:s") ?>
                                    </p>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">Total</td>
                            <td colspan="" class=" text-end">
                                <?= mysqli_fetch_assoc($totalQuery)['total'] ?>
                            </td>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>

<?php require_once "./template/footer.php"; ?>