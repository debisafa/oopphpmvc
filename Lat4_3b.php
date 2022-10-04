<?php
require_once("lat4_3a.php");

$mhs1=new mahasiswa();
/* sebelum diubah
// $mhs1->nama="hendra";
// echo $mhs1->nama;
*/
//setelah diubah
$mhs1->setNama("Nama: Hendra<br/>");
echo $mhs1->getNama();

$mhs1->setNim("NIM: G.211.19.0001");
echo $mhs1->getNim();
?>