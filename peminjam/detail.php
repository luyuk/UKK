<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #B32423;
        }

        .book-container {
            display: flex;
            margin: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        
        .bookimage {
            width: auto;
            height: 100%;
            border-radius: 10px 0 0 10px;
        }

        .book-description {
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .action-buttons button {
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 14px;
            background-color: #007BFF;
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .review-form {
            margin-top: 20px;
        }

        .review-form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .review-form textarea {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .review-form input[type="text"],
        .review-form input[type="number"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .review-form input[type="submit"] {
            padding: 10px 20px;
            font-size: 14px;
            background-color: #4CAF50;
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
    </style>
</head>

<body>


<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "select * from buku where Id_Buku='$id'") or die(mysqli_error($koneksi));
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)) {
?>


    <div class="book-container">
        <div class="bookimage">
        <?php
        $blobData = $data['Cover'];
        $base64Data = base64_encode($blobData);
        $imageUrl = 'data:image/jpeg;base64,' . $base64Data;
        echo '<img src="' . $imageUrl . '" alt="Gambar">';
        ?>
        </div>

        <div class="book-description">
            <h2><?php echo $data['Judul']; ?></h2>
            <p>Penulis: <?php echo $data['Penulis']; ?></p>
            <p>Penerbit: <?php echo $data['Penerbit']; ?></p>
            <p>Tahun Terbit: <?php echo $data['Tahun_Terbit']; ?></p>
            <p>Deskripsi: <?php echo $data['Deskripsi']; ?></p>
        
        <?php } ?>

            <div class="action-buttons">
                <button onclick="pinjam()">Pinjam</button>
                <button onclick="simpan()">Simpan</button>
            </div>

            <div class="review-form">
                <h3>Beri Ulasan</h3>
                <form action="review.php" method="post">
                    <label for="ulasanid">Ulasan ID:</label>
                    <input type="text" id="ulasanid" name="ulasanid" value="<?php echo $data['Ulasan_ID']; ?>" required>

                    <label for="userid">User ID:</label>
                    <input type="text" id="userid" name="userid" value="<?php echo $data['User_ID']; ?>" required>

                    <label for="bukuid">Buku ID:</label>
                    <input type="text" id="bukuid" name="bukuid" value="<?php echo $data['Buku_ID']; ?>" required>

                    <label for="ulasan">Ulasan:</label>
                    <textarea id="ulasan" name="ulasan" rows="4" cols="50" required><?php echo $data['Ulasan']; ?></textarea>

                    <label for="rating">Rating:</label>
                    <input type="number" id="rating" name="rating" min="1" max="5" value="<?php echo $data['Rating']; ?>" required>

                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $data['Username']; ?>" required>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>



</body>

</html>