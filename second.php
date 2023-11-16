<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Nusacodes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'welcome.php' ?>
    <div class="welcome">
        <h1>Masukkan Nama & Tanggal Lahir</h1>
        <form action="" method="post">
            <div class="input-section">
                <label for="name">Nama: </label>
                <input type="text" name="name" id="name" autocomplete="off">
                <label for="date">Tanggal Lahir: </label>
                <input type="date" name="date" id="date">
                <input type="submit" value="Kirim" class="submit">
            </div>
            <div class="output-section">
                <h1 id="output">
                    <?php echo "Selamat Datang $name, saat ini usia Anda adalah $year tahun" ?>
                </h1>
            </div>
        </form>
    </div>
</body>

</html>