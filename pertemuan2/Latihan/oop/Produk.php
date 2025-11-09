<?php
class Produk
{
    private $judul,
        $penulis,
        $penerbit,
        $harga;

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
    public function getJudul()
    {
        return $this->judul;
    }
    public function setJudul($judulBaru)
    {
        $this->judul = $judulBaru;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenulis($penulisBaru)
    {
        $this->penulis = $penulisBaru;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setPenerbit($penerbitBaru)
    {
        $this->penerbit = $penerbitBaru;
    }
}
