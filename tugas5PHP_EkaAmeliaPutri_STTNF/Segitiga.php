<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D
{
    public $alas;
    public $tinggi;
    public $sisi;

    public function __construct($alas, $tinggi, $sisi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }

    public function namaBidang()
    {

        echo 'Segitiga';
    }

    public function luasBidang()
    {
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = $this->alas + $this->tinggi + $this->sisi;
        return $keliling;
    }

    public function keterangan()
    {
        echo 'Alas = ' . $this->alas . '<br> Tinggi = ' . $this->tinggi . '<br> Sisi = ' . $this->sisi;
    }
}
