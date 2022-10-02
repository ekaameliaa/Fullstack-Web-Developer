<?php
class Pegawai
{
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    static $jml = 0;
    const PEGAWAI = 'Data Pegawai Nurul Fikri';

    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;

        self::$jml++;
    }

    public function setGajiPokok()

    {

        if ($this->jabatan == 'Manager') $gapok = 15000000;
        else if ($this->jabatan == 'Asisten Manager') $gapok = 10000000;
        else if ($this->jabatan == 'Kabag') $gapok = 7000000;
        else if ($this->jabatan == 'Staff') $gapok = 4000000;
        else $gapok = 0;

        return $gapok;
    }

    public function setTunjab()
    {

        $tunjab = 0.2 * $this->setGajiPokok();
        return $tunjab;
    }

    public function setTunkel()
    {
        $tunkel = ($this->status == 'Menikah') ? 0.1 * $this->setGajiPokok() : 0;
        return $tunkel;
    }

    public function setGajiKotor()
    {
        $gaji_kotor = $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel();
        return $gaji_kotor;
    }

    public function setZakat()
    {
        $zakat = ($this->agama == 'Muslim' && $this->setGajiKotor() >= 6000000) ? 0.025 * $this->setGajiKotor() : 0;
        return $zakat;
    }

    public function setGajiBersih()
    {
        $gaji_bersih = $this->setGajiKotor() - $this->setZakat();
        return $gaji_bersih;
    }

    public function mencetak()
    {
        echo '<b><u>' . Self::PEGAWAI . '</u></b>';
        echo '<br>NIP: ' . $this->nip;
        echo '<br>Nama: ' . $this->nama;
        echo '<br>Jabatan: ' . $this->jabatan;
        echo '<br>Agama: ' . $this->agama;
        echo '<br>Status: ' . $this->status;
        echo '<br>Gaji Pokok: Rp ' . number_format($this->setGajiPokok(), 0, ',', '.');
        echo '<br>Tunjangan Jabatan: Rp ' . number_format($this->setTunjab(), 0, ',', '.');
        echo '<br>Tunjangan Keluarga: Rp ' . number_format($this->setTunkel(), 0, ',', '.');
        echo '<br>Zakat Profesi: Rp ' . number_format($this->setZakat(), 0, ',', '.');
        echo '<br>Take Home Pay: Rp ' . number_format($this->setGajiBersih(), 0, ',', '.');
        echo '<hr>';
    }
}
