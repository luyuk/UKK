<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Navigation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            padding: 0;
            font-size: 16px;
            text-decoration: underline;
            margin-right: 10px;
        }

        nav button:hover {
            color: #ddd;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <button onclick="goTo('/jurusan')">JURUSAN</button>
            <button onclick="goTo('/novel')">NOVEL</button>
            <button onclick="goTo('/resepi-masak')">RESEPI MASAK</button>
            <button onclick="goTo('/teknik-jaringan-akses')">TEKNIK JARINGAN AKSES</button>
            <button onclick="goTo('/rekayasa-perangkat-lunak')">REKAYASA PERANGKAT LUNAK</button>
            <button onclick="goTo('/bahasa')">BAHASA</button>
            <button onclick="goTo('/komik')">ΚΟΜΙΚ</button>
            <button onclick="goTo('/fiksi')">FIKSI</button>
            <button onclick="goTo('/matimatika')">MATIMATIKA</button>
            <button onclick="goTo('/edukasi')">EDUKASI</button>
            <button onclick="goTo('/teknik-komputer-dan-jaringan')">TEKNIK KOMPUTER DAN JARINGAN</button>
            <button onclick="goTo('/english-grammer')">ENGLISH / GRAMMER</button>
        </ul>
    </nav>

    <script>
        function goTo(url) {
            window.location.href = url;
        }
    </script>
</body>

</html>