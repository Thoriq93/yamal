<?php
    @$nilai1 = $_POST['nilai1'];
    @$nama = $_POST['thoriq']; // Mengambil nilai input nama
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nilai Grade</title>
</head>
<body>
    <h3>MASUKKAN NILAI</h3>
    <form method="POST">
        <label for="thoriq">Nama:</label>
        <input name="thoriq" type="text" placeholder="Enter your name" value="<?php echo isset($nama) ? $nama : ''; ?>"/><br/>

        <label for="nilai1">Nilai :</label>
        <input name="nilai1" type="text"placeholder="Enter a number" value="<?php echo isset($nilai1) ? $nilai1 : ''; ?>"/><br/>

        <input type="submit" name="submit" value="SUBMIT"/><br/>
        <?php
        if (isset($nilai1)) {
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 0 && $nilai1 <= 69) {
                echo 'Nilai : ' . $nilai1 . ' <br> Predikat = E.  <br> Keterangan = ' . $nama . ' TIDAK LULUS. ';
            } else if ($nilai1 >= 70 && $nilai1 <= 79) {
                echo 'Nilai : ' . $nilai1 . ' <br> Predikat = D.  <br> Keterangan = ' . $nama . ' TIDAK LULUS. ';
            } else if ($nilai1 >= 80 && $nilai1 <= 89) {
                echo 'Nilai : ' . $nilai1 . ' <br> Predikat = C.  <br> Keterangan = ' . $nama . ' LULUS. ';
            } else if ($nilai1 >= 90 && $nilai1 <= 94) {
                echo 'Nilai : ' . $nilai1 . ' <br> Predikat = B.  <br> Keterangan = ' . $nama . ' LULUS. ';
            } else if ($nilai1 >= 95 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Predikat = A.  <br> Keterangan = ' . $nama . ' LULUS. ';
            } else {
                echo 'Nilai : ' . $nilai1 . ' Jangan Suka-Suka Kau Memasukkan Nilai TU.';
            }
        }
        ?>
    </form>
</body>
</html>
