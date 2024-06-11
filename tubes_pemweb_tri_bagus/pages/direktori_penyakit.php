<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direktori Penyakit</title>
    <link rel="stylesheet" href="../styles/style_penyakit.css">
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            margin-bottom: 20px;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card a {
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Direktori Penyakit</h1>
    </header>
    <main>
        <div class="card">
            <a href="artikel_diabetes.php">
                <img src="../image/diabetes.jpg" alt="diabetes melitus image">
                <h2>Diabates Mellitus</h2>
                <p>Diabetes mellitus adalah kondisi kronis di mana kadar gula darah (glukosa) terlalu tinggi. 
                    Ada dua tipe utama: Tipe 1 (ketika tubuh tidak memproduksi insulin) dan 
                    Tipe 2 (ketika tubuh tidak menggunakan insulin dengan baik atau tidak cukup memproduksinya).</p>
                <footer>Diabetes Mellitus</footer>
            </a>
        </div>
        <div class="card">
            <a href="artikel_hipertensi.php">
                <img src="../image/hipertensi.jpg" alt="hipertensi image">
                <h2>Hipertensi</h2>
                <p>Hipertensi adalah kondisi di mana tekanan darah dalam arteri meningkat secara kronis, 
                    yang dapat menyebabkan masalah serius seperti penyakit jantung dan stroke.</p>
                <footer>Hipertensi</footer>
            </a>
        </div>
        <div class="card">
            <a href="artikel_kanker.php">
                <img src="../image/kanker.jpg" alt="Kanker Image">
                <h2>Kanker</h2>
                <p>Kanker adalah kondisi medis berupa tumbuhnya sel abnormal dan ganas di dalam tubuh. 
                  Pertumbuhan sel kanker ini bisa terjadi di seluruh bagian tubuh, mulai dari kulit, mata, 
                  paru-paru, hingga organ intim. </p>
                <footer>Kanker</footer>
            </a>
        </div>
        <div class="card">
            <a href="artikel_jantung.php">
                <img src="../image/jantung.jpg" alt="Jantung Image">
                <h2>Penyakit Jantung</h2>
                <p>Penyakit jantung adalah kondisi ketika bagian jantung yang meliputi pembuluh darah jantung, 
                    selaput jantung, katup jantung, dan otot jantung mengalami gangguan. Penyakit jantung bisa 
                    disebabkan oleh berbagai hal, seperti sumbatan pada pembuluh darah jantung, peradangan, infeksi, 
                    atau kelainan bawaan. </p>
                <footer>Penyakit Jantung</footer>
            </a>
        </div>
        <div class="card">
            <a href="artikel_asma.php">
                <img src="../image/asma.jpg" alt="Aboulia Image">
                <h2>Penyakit Asma</h2>
                <p>Asma adalah penyakit kronis yang mempengaruhi saluran udara di paru-paru, 
                    menyebabkan kesulitan bernapas, batuk, dan mengi.</p>
                <footer>Penyakit Asma</footer>
            </a>
        </div>
    </main>
    <script src="scripts.js"></script>
</body>
</html>