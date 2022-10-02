<?php
require('Pegawai.php');

$p1 = new Pegawai('0110220147', 'Eka Amelia', 'Manager', 'Muslim', 'Belum Menikah');
$p2 = new Pegawai('0110220148', 'Eka', 'Asisten Manager', 'Muslim', 'Menikah');
$p3 = new Pegawai('0110220149', 'Amelia', 'Staff', 'Non Muaslim', 'Belum Menikah');
$p4 = new Pegawai('0110220150', 'Eka Putri', 'Kabag', 'Muslim', 'Belum Menikah');
$p5 = new Pegawai('0110220151', 'Amelia Putri', 'Manager', 'Non Muslim', 'Menikah');

echo '<h3 align="center">' . Pegawai::PEGAWAI . '</h3>';
$p1->mencetak();
$p2->mencetak();
$p3->mencetak();
$p4->mencetak();
$p5->mencetak();

echo 'Jumlah Pegawai: ' . Pegawai::$jml;
