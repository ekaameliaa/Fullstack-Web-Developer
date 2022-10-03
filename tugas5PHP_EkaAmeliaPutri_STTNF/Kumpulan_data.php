<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$l1 = new Lingkaran(5);
$l2 = new Lingkaran(10);
$p1 = new PersegiPanjang(4, 5);
$p2 = new PersegiPanjang(7, 10);
$s1 = new Segitiga(4, 8, 12);
$s2 = new Segitiga(6, 3, 9);

$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
$data = [$l1, $l2, $p1, $p2, $s1, $s2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tugas 5 PHP</title>
</head>

<body>
    <h3 class="text-center">Kumpulan Data Bidang</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead bgcolor="DarkCyan">
                    <tr class="text-center">
                        <?php
                        foreach ($judul as $jdl) {
                        ?>
                            <th><?= $jdl ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody bgcolor="LightBlue">
                    <?php
                    $no = 1;
                    foreach ($data as $dt) { ?>
                        <tr class="text-center">
                            <td><?= $no ?></td>
                            <td><?= $dt->namaBidang(); ?></td>
                            <td><?= $dt->Keterangan(); ?></td>
                            <td><?= $dt->luasBidang(); ?></td>
                            <td><?= $dt->kelilingBidang(); ?></td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>