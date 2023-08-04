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

$query = $conn->query("SELECT * FROM table_komentar");
?>

<!DOCTYPE html>
<html>
<head>
<style>
    .komentar {
    width: 95%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
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

    input[type="number"],
    textarea {
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
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <div class="komentar">
            <form action="post_komen.php" method="post">
                <table border="0">
                    <tr>
                        <td colspan="2"><h4>Input Komentar pada Postingan</h4></td>
                    </tr>
                    <tr>
                        <td>ID Posting</td>
                        <td><input type="number" name="id_posting">
                        </td>
                    </tr>
                    <tr>
                        <td>Komentar</td>
                        <td><textarea name="komen" id="komen" cols="22" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Submit" ></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

<!-- HUMAIDI FIKRI WAS HERE -->
