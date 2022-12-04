<?php
        if ( isset($_GET["kodebarang"]) ){
            $kode_barang = $_GET["kodebarang"];
            
            $query = "
                DELETE FROM transaksi
                WHERE kodebarang = '$kode_barang';
                ";

            include ('./kwu.php');
            $delete = mysqli_query($mysqli, $query);

                if ($delete){
                    echo "
                    <script>
                    alert('Dati eliminati con successo');
                    window.location= 'kwu.php';
                    </script>
                    ";
                }else{
                    echo "
                    <script>
                    alert('i dati falliscono');
                    window.location= 'kwu.php';
                    </script>
                    ";
        }

        }
    ?>