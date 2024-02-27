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
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .book-image {
            max-width: 300px;
            max-height: 400px;
            padding: 20px;
            border-radius: 10px 0 0 10px;
        }

        .book-description {
            max-width: 500px;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-top: 0;
        }

        p {
            color: #555;
            margin-bottom: 10px;
        }

        .action-buttons {
            margin-top: 15px;
        }

        .action-buttons button {
            padding: 10px 15px;
            margin-right: 10px;
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .review-form {
            max-width: 300px;
            margin-top: 20px;
        }

        .review-form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .review-form input[type="number"] {
            width: 50px;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .review-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .review-form button {
            padding: 10px 15px;
            cursor: pointer;
            background-color: #27ae60;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .reviews {
            flex-grow: 1;
            margin-left: 20px;
        }

        .review-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
            border-radius: 5px;
        }

        .review-container strong {
            color: #333;
        }

        .reviews h3 {
            color: #333;
            margin-top: 0;
        }
    </style>
</head>

<body>

    <div class="book-container">
        <img class="book-image" src="/img/asign.jpg" alt="Cover Buku">
        <div class="book-description">
            <h2>A Sign Of Affection</h2>
            <p>Penulis: suu Morishita</p>
            <p>Penerbit: Kodansha</p>
            <p>Tahun Terbit: 2019</p>
            <p>Deskripsi: mahasiswi bernama Yuki yang memiliki kebutuhan khusus tiba-tiba merasa kebingungan ketika bertemu orang asing yang
            menanyakan arah jalan. Yuki merupakan gadis tuli tiba-tiba bertemu dengan Itsuomi yang membantunya ketika ditanyai oleh
            orang lain. Menariknya, dia langsung menyadari bahwa Yuki sebenarnya adalah gadis tuli. Kisah cinta mereka baru saja
            dimulai, A Sign of Affection adalah anime romantis yang akan menceritakan kisah cinta murni antara Yuki, seorang gadis
            tuli, dan Itsuomi, seorang mahasiswa yang berkeliling dunia.</p>

            <div class="action-buttons">
                <button onclick="pinjam()">Pinjam</button>
                <button onclick="simpan()">Simpan</button>
            </div>

            <div class="review-form">
                <h3>Beri Ulasan</h3>
                <label for="rating">Rating (1-10):</label>
                <input type="number" id="rating" name="rating" min="1" max="10">
                <br>
                <label for="review">Ulasan:</label>
                <textarea id="review" placeholder="Tulis ulasan Anda"></textarea>
                <br>
                <button onclick="submitReview()">Kirim Ulasan</button>
            </div>
        </div>
    </div>

    <script>
        function pinjam() {
            alert("Anda telah meminjam buku ini.");
        }

        function simpan() {
            alert("Anda telah menyimpan buku ini.");
        }

        function submitReview() {
            var rating = document.getElementById('rating').value;
            var ulasan = document.getElementById('review').value;

            if (rating.trim() !== "" && ulasan.trim() !== "") {
                var reviewContainer = document.getElementById('reviewContainer');
                var reviewDiv = document.createElement("div");
                reviewDiv.className = "review-container";
                reviewDiv.innerHTML = "<strong>Rating:</strong> " + rating + "<br><strong>Ulasan:</strong> " + ulasan;
                reviewContainer.appendChild(reviewDiv);

                alert("Ulasan dan rating Anda telah terkirim.");
            } else {
                alert("Harap isi rating dan ulasan Anda terlebih dahulu.");
            }
        }
    </script>

</body>

</html>