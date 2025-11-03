<?php
class Produk
{
    public $judul,
        $penulis,
        $penerbit;
    protected $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }

    public function getHarga()
    {
        return $this->harga;
    }
    public function setHarga($hargaBaru)
    {
        $this->harga = $hargaBaru;
    }
}
