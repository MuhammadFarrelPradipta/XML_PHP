<?php 
$notedata = simplexml_load_file('ktp.xml');
$title = $notedata->getName();
echo "<h2>".$title."</h2>";

echo $notedata->attributes()['lokasi_pembuatan']."<br>";
foreach ($notedata->children() as $data) {
    echo $data->getName();
    if ($data->getName() == 'alamat') {
        echo "<br>";
        foreach ($data->children() as $alamatData) {
            echo "&emsp;&emsp;" . $alamatData->getName(). " : ". $alamatData. "<br>";
        }
    } else {
        echo " : ". $data. "<br>";
    }
}
?>
