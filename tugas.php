<?php

$pesertaDidik = [
    [
        "nama" => "Cempaka", 
        "kelas" => "X DKV", 
        "alamat" => "Jl. Jatuh Cinta No. 08", 
        "nisn" => "999203492083",
        "no_wa" => "+6823984012393",
        "hobi" => "Menggambar",
        "cita_cita" => "Seniman"
    ],
    [
        "nama" => "Kemuning", 
        "kelas" => "X RPL", 
        "alamat" => "Jl. Jatuh Cinta No. 09", 
        "nisn" => "993284230823",
        "no_wa" => "+68328742020",
        "hobi" => "Menulis Karangan",
        "cita_cita" => "Penulis"
    ],
    [
        "nama" => "Domanic", 
        "kelas" => "X AKL", 
        "alamat" => "Jl. Patah Hati No. 06", 
        "nisn" => "924852093940",
        "no_wa" => "+68328742020",
        "hobi" => "Bermain Game",
        "cita_cita" => "Artis"
    ],
    [
        "nama" => "Candra", 
        "kelas" => "X RPL", 
        "alamat" => "Jl. Patah Hati No. 01", 
        "nisn" => "993284230823",
        "no_wa" => "+68328742020",
        "hobi" => "Bermain Bola",
        "cita_cita" => "Pemain Sepak Bola"
    ],
    [
        "nama" => "Jonshy", 
        "kelas" => "X DKV", 
        "alamat" => "Jl. Jatuh Cinta No. 30", 
        "nisn" => "993284230823",
        "no_wa" => "+68328742020",
        "hobi" => "Bernyanyi",
        "cita_cita" => "Idol"
    ],
    [
        "nama" => "Carlla", 
        "kelas" => "X MP", 
        "alamat" => "Jl. Jatuh Cinta No. 100", 
        "nisn" => "993284230823",
        "no_wa" => "+68328742020",
        "hobi" => "Dance",
        "cita_cita" => "Idol KPOP"
    ],
    [
        "nama" => "Sky", 
        "kelas" => "X AKL", 
        "alamat" => "Jl. Patah Hati No. 90", 
        "nisn" => "993284230823",
        "no_wa" => "+68328742020",
        "hobi" => "Bermain Gitar",
        "cita_cita" => "Pencipta Lagu"
    ],
    [
        "nama" => "Jasmine", 
        "kelas" => "X AKL", 
        "alamat" => "Jl. Jatuh Cinta No. 87", 
        "nisn" => "993284230823",
        "no_wa" => "+68328742020",
        "hobi" => "Berolahraga",
        "cita_cita" => "Atlet"
    ],
    [
        "nama" => "Jonshy", 
        "kelas" => "X MP", 
        "alamat" => "Jl. Jatuh Cinta No. 76", 
        "nisn" => "993284230823",
        "no_wa" => "+68328742020",
        "hobi" => "Mendengarkan Lagu",
        "cita_cita" => "Jadi Direktur"
    ],
    [
        "nama" => "Ryuga", 
        "kelas" => "XI RPL", 
        "alamat" => "Jl. Patah Hati No. 01", 
        "nisn" => "9992308492397",
        "no_wa" => "+685395870247",
        "hobi" => "Bermain Game",
        "cita_cita" => "Vtuber"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta Didik</title>
</head>
<body>
    <h1>Daftar Peserta Didik SMKS JAKARTA PUSAT 1</h1>

    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>NISN</th>
            <th>Nomor WhatsApp</th>
            <th>Hobi</th>
            <th>Cita-cita</th>
        </tr>
        <tr>
        <?php foreach($pesertaDidik as $siswa) : ?>
            <td><?= $siswa["nama"]; ?></td>
            <td><?= $siswa["kelas"]; ?></td>
            <td><?= $siswa["alamat"]; ?></td>
            <td><?= $siswa["nisn"]; ?></td>
            <td><?= $siswa["no_wa"]; ?></td>
            <td><?= $siswa["hobi"]; ?></td>
            <td><?= $siswa["cita_cita"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>