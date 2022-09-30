<?php
$m1 = ['nim' => '0110220147', 'nama' => 'Eka Amelia Putri', 'nilai' => 90];
$m2 = ['nim' => '0110220148', 'nama' => 'Marini Dwi', 'nilai' => 80];
$m3 = ['nim' => '0110220149', 'nama' => 'Diandra Putri', 'nilai' => 95];
$m4 = ['nim' => '0110220150', 'nama' => 'Nikmawati', 'nilai' => 60];
$m5 = ['nim' => '0110220152', 'nama' => 'Lestari', 'nilai' => 50];
$m6 = ['nim' => '0110220153', 'nama' => 'Eka Amelia', 'nilai' => 75];
$m7 = ['nim' => '0110220154', 'nama' => 'Eka Putri', 'nilai' => 65];
$m8 = ['nim' => '0110220155', 'nama' => 'Syahril Hidayat', 'nilai' => 70];
$m9 = ['nim' => '0110220156', 'nama' => 'Dimas Dwi', 'nilai' => 50];
$m10 = ['nim' => '0110220157', 'nama' => 'Wildan', 'nilai' => 55];

$ar_judul = ['No', 'NIM', 'NAMA', 'NILAI', 'KETERANGAN', 'GRADE', 'PREDIKAT'];
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$jml_mhs = count($mahasiswa);
$jml_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata2 = $total_nilai / $jml_mhs;

$keterangan = [
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Nilai Rata-Rata' => $rata2,
    'Jumlah Mahasiswa' => $jml_mhs
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tugas 3 PHP</title>
</head>

<body>
    <h3 class="text-center">Data Mahasiswa</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead bgcolor="DarkCyan">
                    <tr class="text-center">
                        <?php
                        foreach ($ar_judul as $jdl) {
                        ?>
                            <th><?= $jdl ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody bgcolor="LightBlue">
                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) {
                        $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                        //tentukan grade nilai
                        if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
                        else if ($mhs['nilai'] >= 75 && $mhs['nilai'] < 85) $grade = 'B';
                        else if ($mhs['nilai'] >= 60 && $mhs['nilai'] < 75) $grade = 'C';
                        else if ($mhs['nilai'] >= 30 && $mhs['nilai'] < 60) $grade = 'D';
                        else if ($mhs['nilai'] >= 0 && $mhs['nilai'] < 30) $grade = 'E';
                        else $grade = '';
                        switch ($grade) {
                            case 'A':
                                $predikat = 'Memuaskan';
                                break;
                            case 'B':
                                $predikat = 'Bagus';
                                break;
                            case 'C':
                                $predikat = 'Cukup';
                                break;
                            case 'D':
                                $predikat = 'Kurang';
                                break;
                            case 'E':
                                $predikat = 'Buruk';
                                break;
                            default:
                                $predikat = '';
                        }
                    ?>
                        <tr class="text-center">
                            <td><?= $no ?></td>
                            <td><?= $mhs['nim'] ?></td>
                            <td><?= $mhs['nama'] ?></td>
                            <td><?= $mhs['nilai'] ?></td>
                            <td><?= $ket ?></td>
                            <td><?= $grade ?></td>
                            <td><?= $predikat ?></td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
                <tfoot bgcolor="darkcyan">
                    <?php
                    foreach ($keterangan as $ktrngn => $hasil) {
                    ?>
                        <tr class="text-center">
                            <th colspan="6"><?= $ktrngn ?></th>
                            <th><?= $hasil ?></th>
                        </tr>
                    <?php } ?>
                </tfoot>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>