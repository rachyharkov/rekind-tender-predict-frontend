<!-- create template bootstrap -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predict Tender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"crossorigin="anonymous">
    <!-- load newest jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
    <!-- create header -->

    <div class="loader">
        <img src="./assets/images/693e059f-2674-4676-ade4-39583b30e1f6.svg" alt="gambar loading" class="loader-gif">
    </div>

    <header class="header">
        <div class="container" style="display: flex;
    max-width: 970px;
    justify-content: space-between;
    padding: 27px 0 15px 0;
    height: 116px;">
            <div class="header-logo" style="display: flex;">
                <img src="./assets/images/rekind-logo-baru-rekayasa-industri-r-only.png" alt="logo" class="header-logo-img" style="height: 100%;padding: 10px;">
                <div style="display: flex; flex-direction: column; margin-top: 6px;">
                    <h1 style="margin: 0;padding: 0;font-size: 31px;">AI Tender</h1>
                    <p style="letter-spacing: 4px;font-size: 10px;text-align: center;margin-top: -4px;;">Predict System</p>
                </div>
            </div>
            <div class="header-menu-wrapper" style="display: flex;line-height: 4;">
                <div class="header-links">
                    <ul class="header-links-ul" style="list-style: none;display: flex;justify-content: space-around;">
                        <li><a href="#" class="header-links-ul-li-a">Beranda</a></li>
                        <li><a href="#" class="header-links-ul-li-a">Tentang</a></li>
                        <li><a href="#" class="header-links-ul-li-a">Cara Kerja</a></li>
                    </ul>
                </div>
                <div class="header-big-button">
                    <button class="btn btn-sm btn-primary">Predict</button>
                </div>
            </div>
        </div>
    </header>

    <!-- create content -->
    <section class="section-1">
        <div class="container" style="height: 77vh;">
            <div class="row">
                <div class="col-md-6" style="display: flex;">
                    <div class="landing-text-welcome-wrapper" style="margin: auto;">
                        <h2 class="landing-big-title-text">Selamat Datang</h2>
                        <p style="color: #464646;">Sistem Prediksi Kemenangan Tender Proyek PT Rekayasa Industri berbasis Machine Learning</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./assets/images/2517914.png" alt="gambar" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="section-2 text-center">
        <div class="container card-shadow-cool">
            <div class="section-2-wrapper" style="padding: 2rem;">
                <div class="section-2-text-title">
                    <h3>Upload Data</h3>
                </div>
                <div class="section-2-text-description">
                    <p>Algoritma yang sesuai anda pilih akan memproses data untuk bisa menghasilkan prediksi</p>
                </div>
                <div class="section-2-operation">
                    <input type="file" id="file_upload" name="file" class="form-control-file" style="display: none;">
                    <button class="btn btn-sm btn-primary" onclick=" document.getElementById('file_upload').click() ">Pilih File</button>
                </div>
                <div class="container">
                    <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="checkboxOne" value="1"><label for="checkboxOne">Random Forest</label></li>
                        <li><input type="checkbox" id="checkboxTwo" value="2" checked><label for="checkboxTwo">Decision Tree</label></li>
                        <li><input type="checkbox" id="checkboxThree" value="3"><label for="checkboxThree">Logistic Regression</label></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-4">
        <div>
            <div class="container" style="height: 450px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-4-card card-shadow-cool">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-4-card card-shadow-cool">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-4-card card-shadow-cool">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="./assets/js/script.js"></script>
</body>
</html>

