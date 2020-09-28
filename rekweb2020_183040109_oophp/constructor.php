<?php 

//Jual Produk, komik, game

class Produk{
	public 	$judul,
			$penulis,
			$penerbit,
			$harga; 


	 public function __construct($judul = "Judul belum dimasukkan",$penulis = "Penulis belum dimasukkan",$penerbit = "Penerbit belum dimasukkan",$harga = 0){ 
	 	$this->judul = $judul;
	 	$this->penulis = $penulis;
	 	$this->penerbit = $penerbit;
	 	$this->harga = $harga;
	 } 



	 public function getLabel(){
	 	return "$this->penulis, $this->penerbit";
	 }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonan Jump",30000);
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<br>";