<!DOCTYPE html>
<html>
<head>

<?php
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

<style>
    body {
        font-family: Montserrat;
    }
    .posting {
        width: 95%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    table {
        width: 100%;
    }
    table tr td {
        padding: 8px;
    }
    table tr td:first-child {
        width: 120px;
        font-weight: bold;
    }
    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 6px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        font-family: Montserrat;

        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <div class="posting">
        <form action="post_posting.php" method="post">
            <table border="0">
                <tr>
                    <td colspan="2"><h4>Input Data Posting</h4></td>
                </tr>
                <tr>
                    <td>Judul Posting</td>
                    <td><input type="text" name="judul_posting"/></td>
                </tr>
                <tr>
                    <td>Tanggal Posting</td>
                    <td><input type="date" name="tgl_posting"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>



