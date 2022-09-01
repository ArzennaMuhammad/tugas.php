<?php
    //Materi percabangan (IF ELSE)
    $nilai = 74;
    echo "nilai kamu adalah $nilai <br>";
    echo "maka status kamu =";
    if ($nilai >= 78) {
        echo "lulus beneran";
    } else if ($nilai == 78) {
        echo "lulus kkm";
    }else {
        echo "tidak lulus";
    }
    echo"<hr>";

    $nilai_web = 80;
    $nilai_pbo = 82;
    echo "Nilai web kamu =$nilai_web <br>";
    echo "Nilai pbo kamu =$nilai_pbo <br>";
    echo "kelulusan kamu =";
    if ($nilai_web >= 80 AND $nilai_pbo >= 80){
        echo "Lulus 2 mapel produktif";
    }else if ($nilai_web  >= 80 OR $nilai_pbo >= 80){
        if ($nilai_web >= 80) {
            echo "lulus mapel web";
        }
        if ($nilai_pbo >= 80) {
            echo "lulus mapel pbo";
        }
    }else{
        echo "Tidak Lulus Mapel produktif";
    }
    echo "<hr>";
    //Materi perulangan (while,do while,for)
    $i = 1;
    while ($i <= 5) {
        echo "Hello world ! ke - $i <br>";
        $i++; //assigment =1
    }
    echo "<hr>";
    $j = 1;
    do{
        echo $j;
        $j++;
    }while ($j <= 5);
    echo "<hr>";

    $k = 1;
    for($k =1; $k <= 10; $k++) {
        echo $k . "<br>";
    }
    echo "<hr>";
    for($x = 9; $x >= 1; $x--) {
            for ($y = 1; $y <= $x; $y++) {
                echo"$y";
            }
            echo "<hr>";
    }
    echo "<hr>";
    for ($z = 1; $z <= 10; $z++) {
      if ($z %2 == 0) {
            echo $z . "-Genap <br>";
      }else{
            echo $z . "-Ganjil <br>";
      }
    }