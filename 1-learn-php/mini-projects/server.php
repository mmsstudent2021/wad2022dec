<?php 

    $folderName = "area-records";


    if (isset($_POST["area_calc_form"])) : 

    $width = $_POST["width"];
    $breadth = $_POST["breadth"];
    $area = area($width, $breadth);

?>

    <table class=" table table-bordered">
        <thead>
            <tr>
                <th>Width</th>
                <th>Breadth</th>
                <th>Area</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $width ?> ft</td>
                <td><?= $breadth ?> ft</td>
                <td><?= $area ?> sqft</td>

            </tr>
        </tbody>
    </table>
    <?php 


    $json = json_encode(["width"=>$width,"breadth"=>$breadth,"area"=>$area]);

    if(!is_dir($folderName)){
        mkdir($folderName);
    }

    $fileName = "record". uniqid().".json";
    $fileStream = fopen($folderName."/".$fileName,"w");
    fwrite($fileStream,$json);
    fclose($fileStream);
    
    
    
    ?>


<?php endif; ?>