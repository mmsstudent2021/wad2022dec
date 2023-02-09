
<?php


require_once "./1-connect.php";

$sql = "SELECT * FROM my";

$query = mysqli_query($conn,$sql);

// print_r($query->field_count);

// print_r(mysqli_fetch_all($query));
// print_r(mysqli_fetch_assoc($query));
// print_r(mysqli_fetch_assoc($query));
// print_r(mysqli_fetch_assoc($query));

while($row = mysqli_fetch_assoc($query)){
    print_r($row);
}

