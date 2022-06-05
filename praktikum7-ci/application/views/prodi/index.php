<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        Daftar Prodi
    </h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Prodi</th>
                <th>Ketua Prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_prodi as $prodi) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $prodi->kode ?></td>
                    <td><?= $prodi->nama ?></td>
                    <td><?= $prodi->kaprodi ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>