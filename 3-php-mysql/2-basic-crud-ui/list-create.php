<?php require_once "./template/header.php"; ?>

<div class=" container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class=" border rounded p-5 m-5">
                <h3>Create List</h3>
                <?php 
                

                if($_SERVER["REQUEST_METHOD"] === "POST"){

                    $name = $_POST["name"];
                    $money = $_POST["money"];

                    $sql = "INSERT INTO my (name,money) VALUES ('$name',$money)";

                    if(mysqli_query($conn, $sql)){
                        echo alert("Data Inserted");
                    }


                }
                
                ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class=" form-label">Name</label>
                        <input type="text" name="name" class=" form-control" required>
                    </div>
                    <div class="">
                        <label for="" class=" form-label">Money</label>
                        <input type="number" name="money" class=" form-control" required>
                    </div>

                    <button class=" btn btn-primary mt-5">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

<?php require_once "./template/footer.php"; ?>