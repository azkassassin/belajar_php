<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <?php
    $jarak = "<br>"
    ?>

    <?php //BASIC PHP
    // belajar php
    /* 
    komen berbaris-baris
    */
        //variable pada php
        $nama = "Sekolah Koding";
        $n123 = "text"; //jangan pakai awalan angka
        $_123 = "text baru"; //boleh pakai underscore

        echo "<h1>$n123</h1> "; 
        echo "Halo ". $nama ."$jarak";  
        echo " $_123";

        echo " $jarak ";
    ?>

    <?php //TIPE DATA
        //tipe data string
        $nama = "Sekolah koding";
        $nama2 = 'Bermain koding';

        echo $nama2 . " untuk " . $nama;
        echo "selamat datang di \$nama $jarak";
    ?>

    <?php 
        //tipe data angka/number
        // 1. interger 2. float
        $angka = 1000;
        $angka2 = 100.123;

        echo "angkanya adalah $angka $jarak";
        echo $angka + $angka2;
        echo "$jarak";
    ?>

    <?php //operator aritmatik
    // + - * / % ++ --
    $angka = 10;
    $angka2 = 5;

    $angka--;

    echo $angka;
    echo "$jarak";
    echo $angka + $angka2 * $angka;
    echo "$jarak";
    ?>

    <?php 
    
    //----- Math Method -----
    //round rand(min,max)

    $angka = 1000;
    $angka2 = 3;
    $angka3 = 2.44;

    echo round($angka3). "$jarak"; //pembulatan
    echo "Angka hari ini adalah ". rand(5, 20). "$jarak"; //angka random
    echo max($angka3, $angka, $angka2); //angka terbesar
    echo "$jarak";
    ?>

    <?php
    //----- String Method -----
    //strlen && str_word_count
    //str_replace(find,replace,string)
    //str_repeat(text, times); str_shuffle(text)

    $text = "Hai Semuanya di sini";
    
    echo strlen($text). "$jarak";
    echo str_word_count($text). "$jarak";
    echo str_replace( "Hai", "Halo", $text). "$jarak";
    echo str_repeat("WOE ",10). "$jarak";
    echo str_repeat(str_replace("Hai ", "Halo ",$text ), 10 );
    echo "$jarak";

    ?>

    <?php
    //----- Tipe Data Array -----
    $kotak = array('anjing', 'kurakura', 'koala', 'anjing');
    $nama = ['Hilman', 'Endy', 'Tika'];

    print_r($kotak);
    echo $nama[2];
    echo "$jarak";
    
    //----- Metode Array
    //array_unique, _reverse, shuffle, count, sort
    print_r(array_unique($kotak) ). "$jarak";
    print_r(array_reverse($kotak) ). "$jarak";
    
    echo "$jarak";

    shuffle($kotak);
    print_r( $kotak );

    echo "$jarak";
    
    sort($kotak);
    print_r( $kotak );

    
    echo "$jarak";

    echo count($kotak);

    echo "$jarak";

    //----- Associative Array-----
    // key => isi

    $data = array( "nama"  => "Azka" ,
                   "umur"  => 21 ,
                   "kerja" => "Pengacara"          
            );

    $data2 = array( "istri"  => "Belum ada" ,
                   "laptop" => "ASUS"          
            );

    //print_r($data);
    //$data['nama'] = 'Azka Kurnia';
    //echo "Nama adalah " . $data['nama'];

    //----- Methode Associative Array -----
    // array_values, array_keys, array_merge

    print_r(array_values($data) ); //Menunjukan nomer index
    print_r(array_keys($data) ); //Menunjukan key
    print_r(array_merge($data,$data2) ); //Menggabungkan array

    echo "$jarak";

    //----- Multidimension Array-----

    $data = array(
                array("programmer", "21", "males"),
                array("designer", "24", "rajin"),
                array("manager", "34", "males banget")
            );
    // 00 01 02
    // 10 11 12 13 ..
    // 20 21 22
    
    print_r($data);
    echo $data[2][2];
    $data[2][0] = "proyek manager";

    echo "$jarak"

    ?>

    <?php
        //----- Loop -----
        //for(variableawal(mulai); batas(syarat); perubahan)

        $hewan = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];

        for($i = 0; $i < count($hewan); $i++)
        {
            echo "--------------";
            echo $hewan[$i];
            echo "--------------<br>";
        }

        foreach($hewan as $h){
            echo "--------------";
            echo $h;
            echo "--------------<br>";
        }

        $data = [ 'nama' => 'azka', 
                  'umur'=>24, 
                  'sifat'=>'malas'];

        foreach($data as $key => $value){
            echo $value . "<br>";
        }

        //----- While & Do While -----
        //while(syarat)

        // $i = 0;

        // while( $i < count($hewan) ){
        //     echo $hewan[$i]. "<br>";
        //     $i++;
        // }

        // do{
        //     echo '-----';
        //     echo $hewan[$i]. "<br>";
        //     $i++;
        // }while( $i < count($hewan));
    ?>

    <?php
    //----- Logika di PHP -----
    
    //----- Tipe Data booelan -----
    $hasil  = true;
    $hasil2 = false;

    //----- if dan else -----
    // Operator Logika == === > >= < <= != !== <>
    $password   = 1000;
    $password2  = 1000;    

    if( $password != $password2 ){ 
        echo ' password tidak sama'; //jika benar
    }else{
        echo ' password sama'; //jika salah
    }

    echo "$jarak";
    ?>

    <?php
    //----- else if
    $uang_programmer = 4000;
    $keyboard        = 2000;
    $uang_designer   = 4000;

    // && atau ||

    if( $uang_programmer > $keyboard
        && $uang_designer > $keyboard){
    
            echo "boleh beli keyboard";
    }else{
        echo 'engga bisa beli';
    }

    //---true atau false
    // $hasil  = true;
    // $hasil2 = false;

    // if( $hasil ){
    //     echo 'dibeli programmer';
    // }else if( $hasil2 ){
    //     echo 'dibeli oleh designer!';
    // }

    // if( $uang_programmer > $keyboard ){
    //     echo 'dibeli';
    // }else if( $uang_designer > $keyboard ){
    //     echo 'dibeli oleh designer!';
    // }

    // //--if bercabang
    //     if( $uang_designer >= $keyboard * 2 ){
    //         echo 'dibeli duakali oleh designer!';
    // }
    // else{
    //     echo 'ngga cukup';
    // }

    echo "$jarak";
    
    ?>

    <?php

    //----- Switch Case -----

    $nama = "Azka";

    switch ( $nama ) {
        case 'Raka':
            echo 'namanya Raka';
            break;
        case 'Tika':
            echo 'namanya Tika';
            break;
        case 'Dika':
            echo 'namanya Dika';
            break;
        default:
            echo 'tidak ada yang benar';
        }
        
        echo "$jarak";
    ?>

    <?php
    //----- Fungsi PHP -----

    // //parameter
    // function print_text( $text, $angka )
    // {
    //    $text = "gedung " . $text . " " .$angka;
    //     echo "-----";
    //     echo $text;
    //     echo "-----";
    // }

    // function jarak(){
    //     echo "<br>";
    // }

    // print_text("koding", 21);
    // jarak();
    // print_text("perawat", 21);
    // jarak();
    // print_text("mengemudi", 21);
    // jarak();

    // echo "<br>";    

    // //----- Return Fungsi -----

    // function menghitung($x, $y){
    //     $z = $x + $y;
    //     return $z;
    // }

    // $hasil = menghitung(2,5) * 10;
    // echo "hasil dari penjumlahan ". $hasil;


    // //----- Scope -----

    // $a = 20000;
    // $b = 3;

    // function menghitung(){
    //     global $a, $b;

    //     $c = $a + $b;
    //     return $c;
    // }

    // echo menghitung();

    //----- Anonymous Function -----

    $ngetik = function($text) {
        echo $text;
    };

    $greeting = $ngetik;

    $ngetik( 'selamat datang semuanya 123' . "<br>");


    //----- Callback Function -----

    function berteriak($callback) {
        echo 'HALOOOOOOOOOOO <br>';
        // $callback();

        if ( is_callable($callback) ){ //menguji apakah dia fungsi atau bukan
            call_user_func($callback, 'selamat datang');
        }else{
            echo ' dia bukan fungsi';
        }
    }

    // berteriak(function){
    //      echo 'saya anonymous, alias ngga ppunya nama';
    // });

    $panggil = function($text){ //ini adalah anonymous function
        echo $text;
    };

    berteriak( $panggil );
    ?>

    <?php echo 'halo'; ?>
    <? echo 'halo'; ?>
    <?= 'halo'; ?>

    <?php
        //echo print
        //print_r die var_dump

        $car = 'mobil';
        var_dump($car); //menunjukan detail
        die($car); //menghentikan cmd dibawah ini

        echo 'satu dua tiga';
    ?>


</body>
</html>