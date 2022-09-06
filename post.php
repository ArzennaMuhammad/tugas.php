<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Indra El" /><br>
    <input type="text" name="kelas" placeholder="Ex. RPL 1" /><br>
    <input type="number" name="nis" placeholder="Ex. 120 29162" /><br>
    <input type="submit" name="simpan" value="simpan data" />
</form>

<?php
if( isset($_POST["simpan"]) ) {
    echo "<hr>";

    $namalengkap = $_POST["namalengkap"];
    $kelas = $_POST["kelas"];
    $nis = $_POST["nis"];

    echo "Nama Lengkap : " . $namalengkap . "<br>";
    echo "Kelas : " . $kelas . "<br>";
    echo "nis : ". $nis;
}

?>
