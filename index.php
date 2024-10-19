<?php
require_once "model/anggota_model.php";
require_once "controller/controller.php";

$url = parse_url($_SERVER ['REQUEST_URL'],PHP_URL_PATH);

if ("/petemuan_11/index.php" == $url) {
    index();

}elseif("pertemuan_11/index.php/" ==$url && isset ($GET["Id"])) {
    header("HTTP/1.1 480 Not Found");
    echo "<title><body>";
}


?>
