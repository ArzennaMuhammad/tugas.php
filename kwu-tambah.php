<h1>Tambah Data</h1>
<form action="kwu-tambah.php" method="POST"> 
    <label for="kode_barang">Kode Barang :</label><br>
    <input type="text" name="kode_barang" placeholder="Ex. K001"/><br>

    <label for="tanggal">Tanggal :</label><br>
    <input type="date" name="tanggal" placeholder="Ex. 22-06-2005"/><br>

    <label for="pembeli">Pembeli :</label><br>
    <input type="text" name="pembeli" placeholder="Ex. ArzennaHaqi"/> <br>

    <label for="nama_barang" >Nama Barang :</label><br>
    <input type="text" name= "nama_barang" placeholder="Ex. minuman"/><br><br>

    <label for="qty" >QTY :</label><br>
    <input type="number" name= "qty" placeholder="Ex. 2"/><br><br>
     
    <label for="harga_beli" >Harga Beli :</label><br>
    <input type="number" name= "harga_beli" placeholder="Ex. 5000"/><br><br>

    
    <label for="harga-jual" >Harga Jual:</label><br>
    <input type="number" name= "harga_jual" placeholder="Ex. 7500"/><br><br>
    

    <input type="submit" name= "simpan" value="Simpan Data"/>
    <a href="kwu.php"> Kembali </a>
</form>

<?php
    if( isset($_POST["simpan"])){
        $kode_barang= $_POST["kode_barang"];
        $pembeli= $_POST["pembeli"];
        $tanggal= $_POST["tanggal"];
        $nama_barang= $_POST["nama_barang"];
        $qty= $_POST["qty"];
        $harga_beli= $_POST["harga_beli"];
        $harga_jual= $_POST["harga_jual"];

        echo $kode_barang . "<br>";
        echo $tanggal . "<br>";
        echo $pembeli . "<br>";
        echo $nama_barang . "<br>";        
        echo $qty . "<br>";        
        echo $harga_beli . "<br>";        
        echo $harga_jual . "<br>";        


        //CREATE - Menambahkan Data ke Database
        $query = "
        INSERT INTO transaksi VALUES
        ('$kode_barang', '$tanggal', '$pembeli', '$nama_barang','$qty','$harga_beli','$harga_jual');
        ";

      
        include ('./kwu-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
            <script>
            alert('Dati aggiunti correttamente');
            window.location= 'kwu.php';
            </script>
            ";
      }
      }
    
?>