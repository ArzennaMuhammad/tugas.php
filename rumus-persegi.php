<from action="rumus-persegi.php" method="POST">
    <h1> Rumus luas dan keliling persegi </h1>
    <p> Sisi :</p>
    <input type="number" name="Sisi" placehorder="Ex. 5" />
    <input type="submit" name="Proses" value="hitung luas & keliling" />
</form>

<?php
if ( isset[$_POST["Proses"]] ){
    echo "<hr>";
    $sisi = $_POST["Sisi"];
    $luas = $sisi * $sisi;
    $keliling = 4 * $sisi;

    echo "sisi : $sisi <br>";
    echo "Luas Persegi : $luas <br>";
    echo "keliling persegi : $keliling <br>";
}