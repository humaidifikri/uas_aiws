<?php

require_once __DIR__ . '/autoload.php';
$sentiment = new \PHPInsight\Sentiment();


error_reporting(0);
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'uas';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Error connecting to database: " . mysqli_error_string($conn));
}



$query = $conn->query("SELECT * FROM table_posting");
?>
<!-- // $jumlah = $positif + $negatif + $netral;
// $rata_rata =  $jumlah / $jumlah_kat; -->

<table border="1" cellspacing="1.5" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Posting</th>
            <th>Banyak Komentar</th>
            <th>Negatif</th>
            <th>Positif</th>
            <th>Netral</th>
            <th>Rata-rata</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=1;

        while ($row=$query->fetch_assoc()){
            // hitung banyak komen
            $id_posting = $row['id_posting'];
            $count_comment = $conn->query("SELECT count(id_posting) as banyak FROM table_komentar")->fetch_row();
            $komentar = $conn->query("SELECT komentar FROM table_komentar where id_posting=$id_posting;");
		    $class = $sentiment->categorise($string);
            $positif = 0;
            $negatif = 0;
            $netral = 0;
           
            // $jumlah_kat = 3;
            while($komen = $komentar->fetch_assoc()){
                $kategori = $sentiment->categorise($komen['komentar']);
                if($kategori=='positif'){
                    $positif++;
                }
                elseif($kategori=='negatif'){
                    $negatif++;
                }
                elseif($kategori=='netral'){
                    $netral++;
                }
            }

            if($positif>$negatif && $positif>$netral){
                $rata_rata_kategori = "Positif";
            }
            elseif($negatif>$positif && $negatif>$netral){
                $rata_rata_kategori = "Negatif";
            }
            else{
                $rata_rata_kategori = "Netral";
            }
                ?>
            <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $row['judul_posting'];?></td>
                <td><?php echo $count_comment[0];?></td>
                <td><?php echo $negatif;?></td>
                <td><?php echo $positif;?></td>
                <td><?php echo $netral;?></td>
                <td><?php echo $rata_rata_kategori;?></td>
            </tr>
        <?php } ?>
</tbody>
</table>










