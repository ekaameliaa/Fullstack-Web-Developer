<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tugas2PHP</title>
</head>

<body>
    <div class="container px-3 my-5">
        <h3 align="center">Form Data Pegawai</h3>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label" for="newField6">Nama</label>
                <input class="form-control" id="newField6" type="text" name="nama" placeholder="Nama Lengkap" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="newField6:required">New Field 6 is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="newField">Agama</label>
                <select class="form-select" id="newField" name="agama" aria-label="agama">
                    <option value="#">-- Pilih Agama --</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Kristen Protestan</option>
                    <option value="Katolik">Kristen Katholik</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="optionA" type="radio" value="Manager" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="optionA">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="optionB" type="radio" value="Asisten Manager" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="optionB">Asisten Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="optionC" type="radio" value="Kabag" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="optionC">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="optionC" type="radio" value="Staff" name="jabatan" data-sb-validations="" />
                    <label class="form-check-label" for="optionC">Staff</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="optionA" type="radio" name="status" value="Menikah" data-sb-validations="" />
                    <label class="form-check-label" for="optionA">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="optionB" type="radio" name="status" value="Belum Menikah" data-sb-validations="" />
                    <label class="form-check-label" for="optionB">Belum Menikah</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="newField5">Jumlah Anak</label>
                <input class="form-control" id="newField5" type="number" placeholder="Jumlah Anak" name="jml_anak" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="newField5:required">New Field 5 is required.</div>
            </div>
            <!-- div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div -->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" name="proses" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <?php
    //tangkap request
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jml_anak = $_POST['jml_anak'];
    switch ($jabatan) {
        case 'Manager':
            $gapok = 20000000;
            break;
        case 'Asisten Manager':
            $gapok = 15000000;
            break;
        case 'Kabag':
            $gapok = 10000000;
            break;
        case 'Staff':
            $gapok = 4000000;
            break;
        default:
            $gapok = 0;
    }
    $tunjab = 0.2 * $gapok;
    if ($status == 'Menikah' && $jml_anak <= 2) $tunkel = 0.05 * $gapok;
    else if ($status == 'Menikah' && $jml_anak >= 3 && $jml_anak <= 5) $tunkel = 0.1 * $gapok;
    else if ($status == 'Menikah' && $jml_anak >= 5) $tunkel = 0.15 * $gapok;
    else $tunkel = 0;
    $gaji_kotor = $gapok + $tunjab + $tunkel;
    $zakat = ($agama == 'Islam' && $gaji_kotor >= 6000000) ? 0.025 * $gaji_kotor : 0;
    $home_pay = $gaji_kotor - $zakat;
    $tombol = $_POST['proses'];

    if (isset($tombol)) { ?>
        <h3 align="center">Data Pegawai</h3>
        <table align="center" cellpadding="10">
            <thead>
                <tr bgcolor="tomato" align="center">
                    <th>NAMA</th>
                    <th>AGAMA</th>
                    <th>JABATAN</th>
                    <th>STATUS</th>
                    <th>JUMLAH ANAK</th>
                    <th>GAJI POKOK</th>
                    <th>TUNJANGAN JABATAN</th>
                    <th>TUNJANGAN KELUARGA</th>
                    <th>GAJI KOTOR</th>
                    <th>ZAKAT PROFESI</th>
                    <th>TAKE HOME PAY</th>
                </tr>
            </thead>
            <tbody>
                <tr align="center">
                    <td><?= $nama ?></td>
                    <td><?= $agama ?></td>
                    <td><?= $jabatan ?></td>
                    <td><?= $status ?></td>
                    <td><?= $jml_anak ?></td>
                    <td>Rp <?= number_format($gapok, 2, ',', '.') ?></td>
                    <td>Rp <?= number_format($tunjab, 2, ',', '.') ?></td>
                    <td>Rp <?= number_format($tunkel, 2, ',', '.') ?></td>
                    <td>Rp <?= number_format($gaji_kotor, 2, ',', '.') ?></td>
                    <td>Rp <?= number_format($zakat, 2, ',', '.') ?></td>
                    <td>Rp <?= number_format($home_pay, 2, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
    <?php } ?>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>