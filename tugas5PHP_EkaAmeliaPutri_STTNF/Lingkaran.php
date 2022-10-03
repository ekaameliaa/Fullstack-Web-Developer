<?php
require_once 'Bentuk2D.php';

class Lingkaran extends Bentuk2D
{
    public $jari2;

    const PHI = 3.14;


    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }

    public function namaBidang()
    {
        echo 'Lingkaran';
    }

    public function luasBidang()
    {
        $luas =  self::PHI * $this->jari2 * $this->jari2;
        return $luas;
    }

    public function kelilingBidang()
    {
        $keliling = self::PHI * 2 * $this->jari2;
        return $keliling;
    }

    public function Keterangan()
    {
        echo 'Jari-Jari = ' . $this->jari2;
    }
}
