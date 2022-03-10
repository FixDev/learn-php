<?php
require_once './libfungsi.php';

// Define from form
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$kkm = 55;
$total_nilai = ($nilai_uts * (30 / 100)) + ($nilai_uas * (35 / 100)) + ($nilai_tugas * (35 / 100));

$is_lulus = '';
$grade = '';
$predikat = '';

$is_lulus = kelulusan($total_nilai, $kkm);
$grade = grade($total_nilai);
$predikat = predikat($grade);

$arr_form = [
    'Proses' => $proses,
    'Nama'   => $nama,
    'Mata Kuliah' => $matkul,
    'Nilai UTS' => $nilai_uts,
    'Nilai UAS' => $nilai_uas,
    'Nilai Tugas' => $nilai_tugas,
    'Total Nilai Kumulatif' => $total_nilai,
    'Lulus/Tidak Lulus' => $is_lulus,
    'Grade' => $grade,
    'Predikat' => $predikat
];

if (!empty($proses)) {
    foreach ($arr_form as $form_key => $form_value) {
        echo "$form_key : $form_value <br />";
    }
}
