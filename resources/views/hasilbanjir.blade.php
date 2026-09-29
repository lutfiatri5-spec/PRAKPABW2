<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hasil Laporan - LaporBanjir</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #eef6f1;
            min-height: 100vh;
            color: #26352b;
        }

        .navbar {
            height: 70px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            border-bottom: 1px solid #dde8df;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #286f73;
        }

        .brand-mark {
            width: 35px;
            height: 35px;
            background: #286f73;
            color: white;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-label {
            font-size: 13px;
            color: #829088;
        }

        .container {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 25px;
        }

        .result-card {
            background: white;
            border-radius: 22px;
            border: 1px solid #e1ebe3;
            overflow: hidden;
        }

        .result-header {
            background: #286f73;
            padding: 38px;
            color: white;
        }

        .result-header .icon {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .result-header h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .result-header p {
            font-size: 14px;
            color: #dcefe0;
            line-height: 1.6;
        }

        .result-body {
            padding: 35px 38px;
        }

        .title {
            font-size: 14px;
            font-weight: bold;
            color: #87938a;
            margin-bottom: 20px;
        }

        .data-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .data-item {
            background: #f7faf7;
            border: 1px solid #e3ebe5;
            border-radius: 12px;
            padding: 17px 20px;
        }

        .data-label {
            display: block;
            font-size: 12px;
            color: #829088;
            margin-bottom: 6px;
        }

        .data-value {
            font-size: 15px;
            font-weight: bold;
            color: #26352b;
        }

        .button-area {
            margin-top: 28px;
            display: flex;
            justify-content: flex-end;
        }

        .back-button {
            text-decoration: none;
            background: #286f73;
            color: white;
            padding: 13px 22px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: bold;
            transition: .2s;
        }

        .back-button:hover {
            background: #286f73;
            transform: translateY(-1px);
        }

        .note {
            text-align: center;
            margin-top: 18px;
            font-size: 11px;
            color: #9aa49d;
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 0 20px;
            }

            .nav-label {
                display: none;
            }

            .container {
                margin: 30px auto;
            }

            .result-header,
            .result-body {
                padding: 28px 24px;
            }

            .result-header h1 {
                font-size: 25px;
            }

            .button-area {
                justify-content: stretch;
            }

            .back-button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="brand">
            <div class="brand-mark">🚨</div>
            LaporBanjir
        </div>

        <div class="nav-label">
            🙋NamaPelapor
        </div>
    </nav>

    <main class="container">

        <section class="result-card">

            <div class="result-header">
                <div class="icon">✓</div>

                <h1>Laporan Berhasil Dikirim</h1>

                <p>
                    Data laporan banjir yang Anda masukkan telah diterima
                    dan ditampilkan sebagai hasil pengiriman.
                </p>
            </div>

            <div class="result-body">

                <div class="title">
                    Detail Laporan
                </div>

                <div class="data-list">

                    <div class="data-item">
                        <span class="data-label">
                            Nama Pelapor
                        </span>

                        <span class="data-value">
                            {{ $nama }}
                        </span>
                    </div>

                    <div class="data-item">
                        <span class="data-label">
                            Lokasi Kejadian
                        </span>

                        <span class="data-value">
                            {{ $lokasi }}
                        </span>
                    </div>

                    <div class="data-item">
                        <span class="data-label">
                            Tinggi Genangan Air
                        </span>

                        <span class="data-value">
                            {{ $tinggi }} cm
                        </span>
                    </div>

                </div>

                <div class="button-area">
                    <a href="/laporbanjir" class="back-button">
                        Buat Laporan Baru
                    </a>
                </div>

                <div class="note">
                    Data hanya ditampilkan sebagai hasil proses tanpa disimpan ke database.
                </div>

            </div>

        </section>

    </main>

    <script>
        // Efek sederhana saat halaman hasil dibuka
        const card = document.querySelector(".result-card");

        card.style.opacity = "0";
        card.style.transform = "translateY(15px)";

        setTimeout(() => {
            card.style.transition = "0.4s ease";
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }, 100);
    </script>

</body>
</html>