<?php
function index() {
    $anggota=getAnggota();
    require "view/anggota.php";
}
function detail(Id) {
    $anggota =getAnggota($Id);
    require "view/anggota/detail.php";
}
?>