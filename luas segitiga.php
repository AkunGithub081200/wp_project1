< html >
< kepala >
    < title >Tutorial Cara Menghitung Luas Segitiga Menggunakan PHP</ title >
</ kepala >
< tubuh >
    < h1 >Form Hitung Luas Segitiga Dengan PHP</ h1 >
    < h2 >Data Isi:</ h2 >
    < form  action = "./"  method = "POST"  enctype = "multipart/form-data" >
        < tabel >
            < tr >
                < td >Alas Segitiga</ td >
                < td >:</ td >
                < td >< tipe input  = "teks" nama = "sayangnya" diperlukan></ td >
 
            </ tr >
            < tr >
                < td >Tinggi Segitiga</ td >
                < td >:</ td >
                < td >< tipe input  = "teks" nama = "tinggi" diperlukan ></ td >
 
            </ tr >
            < tr >
                < td ></ td >
                < td ></ td >
                < td >< tipe input  = "kirim" nama = "kirim" nilai = "Hitung" ></ td >
  
            </ tr >
        </ tabel >
    </ bentuk >
    <?php
        if(isset($_POST['kirim'])){
            $sayang =$_POST['sayang'];
            $tinggi =$_POST['tinggi'];
            
            // menghitung luas segitiga
            $luas_segitiga = 1/2 * $sayang * $tinggi;
            
            echo "Hasil hitung luas segitiga adalah sebagai berikut:< br />";
            echo "Diketahui;< br />";
            echo "Alas Segitiga = $sayang< br />";
            echo "Tinggi Segitiga = $tinggi< br />";
            echo "Maka luas segitiga sama dengan 1/2 ($alas x $tinggi) = $luas_segitiga";
        }
    ?>
</ tubuh >
</ html >