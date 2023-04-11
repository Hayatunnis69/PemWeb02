<!-- <?php

    class Tes{

    }

    $a = new Tes();
    var_dump($a);

?> -->

<?php
class Mobil{
    public  $nama,
            $merk,
            $warna;

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }
}


class produk {
    public  $nama = 'ini nama',
            $jenis = 'ini jenis',
            $harga = 9999;
            const PHI = 3.14;


    public function __construct($nama, $jenis, $harga ){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function Harga(){
        return self::PHI ;
    }

    
}

// $produk1 = new Produk();
// $produk1->nama = "KAOS";
// $produk1->jenis = "BAJU";
// $produk1->tambahProperti = "ini properti baru";
// var_dump($produk1);


$produk2 = new Produk("BAJU HITAM POLOS", "KAOS", 15000);
echo "Produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga : " . $produk2->Harga();


$produk3 = new Produk("HOODIE HITAM POLOS", "JAKET", 18500);
echo "<br>";
echo "<br>";
echo "Produk 3 : $produk3->nama, $produk3->jenis";
echo "<br>";
echo "Harga : " . $produk3->Harga();


?>