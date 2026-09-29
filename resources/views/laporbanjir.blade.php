<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaporBanjir</title>

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
            color: #263435;
        }

        /* NAVBAR */
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
            background: #286e73;
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


        /* MAIN */
        .main {
            max-width: 1050px;
            margin: 55px auto;
            padding: 0 25px;

            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 35px;
            align-items: stretch;
        }


        /* LEFT */
        .intro {
            background: #287373;
            border-radius: 22px;
            padding: 42px;
            color: white;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            position: relative;
            overflow: hidden;
        }

        .intro::after {
            content: "";
            position: absolute;
            width: 230px;
            height: 230px;
            border: 35px solid rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            right: -90px;
            bottom: -80px;
        }

        .intro-top {
            position: relative;
            z-index: 1;
        }

        .small-title {
            font-size: 13px;
            letter-spacing: 1px;
            opacity: 0.8;
            margin-bottom: 18px;
            text-transform: uppercase;
        }

        .intro h1 {
            font-size: 42px;
            line-height: 1.12;
            margin-bottom: 18px;
        }

        .intro p {
            color: #dcefe0;
            line-height: 1.7;
            font-size: 14px;
        }

        .tips {
            position: relative;
            z-index: 1;
            margin-top: 35px;
        }

        .tip {
            display: flex;
            gap: 12px;
            margin-top: 15px;
            align-items: center;
            font-size: 13px;
            color: #e6f3e9;
        }

        .tip-number {
            width: 25px;
            height: 25px;
            border: 1px solid rgba(255,255,255,0.4);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }


        /* FORM */
        .form-area {
            background: white;
            border-radius: 22px;
            padding: 42px;
            border: 1px solid #e1ebe3;
        }

        .form-heading {
            margin-bottom: 30px;
        }

        .form-heading h2 {
            font-size: 25px;
            color: #26352b;
            margin-bottom: 7px;
        }

        .form-heading p {
            color: #87938a;
            font-size: 13px;
        }


        .field {
            margin-bottom: 23px;
        }

        .field label {
            display: block;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #34443a;
        }

        .required {
            color: #d84c4c;
        }


        input {
            width: 100%;
            height: 48px;
            border: none;
            border-bottom: 2px solid #dce5de;
            background: #f8faf8;
            padding: 0 14px;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        input:focus {
            border-bottom-color: #286d73;
            background: #f4f8f4;
        }


        .height-box {
            position: relative;
        }

        .height-box input {
            padding-right: 50px;
        }

        .cm {
            position: absolute;
            right: 15px;
            top: 15px;
            color: #849087;
            font-size: 13px;
        }


        .submit {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 10px;
            background: #286c73;
            color: white;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 8px;
        }

        .submit:hover {
            background: #20475e;
            transform: translateY(-1px);
        }

        .submit:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }


        .note {
            margin-top: 18px;
            text-align: center;
            font-size: 11px;
            color: #9aa49d;
        }


        /* RESPONSIVE */
        @media (max-width: 750px) {

            .navbar {
                padding: 0 20px;
            }

            .nav-label {
                display: none;
            }

            .main {
                grid-template-columns: 1fr;
                margin: 25px auto;
            }

            .intro {
                padding: 30px;
            }

            .intro h1 {
                font-size: 32px;
            }

            .form-area {
                padding: 30px 25px;
            }
        }
    </style>
</head>


<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="brand">

            <div class="brand-mark">
                🚨
            </div>

            LaporBanjir

        </div>

        <div class="nav-label">
            🙋NamaPelapor
        </div>

    </nav>


    <!-- MAIN -->
    <main class="main">


        <!-- INTRO -->
        <section class="intro">

            <div class="intro-top">

                <div class="small-title">
                    Layanan Pelaporan
                </div>

                <h1>
                    Bantu laporkan
                    kondisi banjir.
                </h1>

                <p>
                    Informasi dari masyarakat membantu
                    memberikan gambaran kondisi banjir
                    yang terjadi di suatu wilayah.
                </p>

            </div>


            <div class="tips">

                <div class="tip">

                    <div class="tip-number">
                        1
                    </div>

                    Isi nama pelapor

                </div>

                <div class="tip">

                    <div class="tip-number">
                        2
                    </div>

                    Masukkan lokasi kejadian

                </div>

                <div class="tip">

                    <div class="tip-number">
                        3
                    </div>

                    Isi tinggi genangan air

                </div>

            </div>

        </section>


        <!-- FORM -->
        <section class="form-area">

            <div class="form-heading">

                <h2>
                    Form Laporan
                </h2>

                <p>
                    Silakan isi informasi kejadian banjir di bawah ini.
                </p>

            </div>


            <form
                id="laporForm"
                action="/laporbanjir/proses"
                method="POST"
            >

                @csrf


                <!-- NAMA -->
                <div class="field">

                    <label for="nama">
                        Nama Pelapor
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama pelapor"
                        required
                    >

                </div>


                <!-- LOKASI -->
                <div class="field">

                    <label for="lokasi">
                        Lokasi Kejadian
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="lokasi"
                        name="lokasi"
                        placeholder="Kecamatan / Desa"
                        required
                    >

                </div>


                <!-- TINGGI -->
                <div class="field">

                    <label for="tinggi">
                        Tinggi Genangan Air
                        <span class="required">*</span>
                    </label>

                    <div class="height-box">

                        <input
                            type="number"
                            id="tinggi"
                            name="tinggi"
                            min="1"
                            placeholder="Masukkan tinggi genangan"
                            required
                        >

                        <span class="cm">
                            cm
                        </span>

                    </div>

                </div>


                <button
                    type="submit"
                    class="submit"
                    id="submitButton"
                >
                    Kirim Laporan
                </button>

            </form>


            <div class="note">
                * Pastikan data yang dimasukkan sudah sesuai.
            </div>

        </section>

    </main>


    <!-- JAVASCRIPT -->
    <script>

        const form = document.getElementById("laporForm");
        const tinggi = document.getElementById("tinggi");
        const button = document.getElementById("submitButton");


        // Validasi tinggi genangan
        tinggi.addEventListener("input", function () {

            if (this.value < 1 && this.value !== "") {

                this.setCustomValidity(
                    "Tinggi genangan harus lebih dari 0 cm."
                );

            } else {

                this.setCustomValidity("");

            }

        });


        // Efek saat submit
        form.addEventListener("submit", function () {

            button.innerText = "Mengirim laporan...";
            button.disabled = true;

        });

    </script>

</body>

</html>