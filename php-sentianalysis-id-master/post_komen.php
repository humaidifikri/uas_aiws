<?php
if (isset($_POST['id_posting']) && isset($_POST['komen'])){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'uas';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error connecting to database: " . mysqli_error_string($conn));
    }

    $id_posting = $_POST['id_posting'];
    $komentar = $_POST['komen'];
    $sql = "INSERT INTO table_komentar (id_posting, komentar) VALUES ('$id_posting', '$komentar')";
    
    if ($conn->query($sql) === TRUE) {
        ?>
            <script language="JavaScript">
                alert('Input Data Komentar Berhasil');
            </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

include 'view.php';

?>

<!-- HUMAIDI FIKRI WAS HERE -->
