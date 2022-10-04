<?php
//class mobil
Class Mobil{
     public $nama;
     public $merk;
     public $a;
     
     function getInfo(){
          echo "Nama mobil: ".$this->nama."<br/>";
          echo "Merk: ".$this->merk."<br/>";
     }

}

//bagian main
$ferari=new Mobil();
$ferari->nama="xxx";
$ferari->merk="aaa";
$ferari->tahun="a";

$ferari->getInfo();
?>