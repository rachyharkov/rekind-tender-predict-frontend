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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
            <div class="header-logo" style="position: relative;
    min-width: 145px;">
                <img src="./assets/images/rekind-logo-baru-rekayasa-industri-r-only.png" alt="logo" class="header-logo-img animate-logo-pic" style="height: 100%;
    padding: 10px;
    margin-top: -6px;
    position: absolute;
    z-index: 5;">
                <div style="display: flex;
        flex-direction: column;
    margin-top: 6px;
    position: absolute;
    width: 100%;
    overflow: hidden;
    left: 65px;">
                    <h1 class="animate-text-reveal-logo" style="margin: 0;padding: 0;color: #747474; font-size: 31px;width: 150px;
    position: relative;">AI Tender</h1>
                    <p class="animate-text-reveal-logo" style="letter-spacing: 4px;font-size: 10px;text-align: center;margin-top: -4px;width: 150px;
    position: relative;">Predict System</p>
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
                    <button class="btn btn-sm btn-primary" style="border-radius: 38px;background: rgb(222,85,255);background: linear-gradient(132deg, rgba(222,85,255,1) 0%, rgba(131,79,245,1) 100%);border: none;padding: 10px 30px 10px 30px;">Predict</button>
                </div>
            </div>
        </div>
    </header>

    <!-- create content -->
    <section class="section-1">
        <div class="section">

            <div class="container" style="height: 77vh;">
                <div class="row">
                    <div class="col-md-6" style="display: flex;">
                        <div class="landing-text-welcome-wrapper" style="margin: auto; position: relative;">
                            <div class="animated-title">
                                <div class="text-top">
                                    <div>
                                        <span>Buat data</span>
                                        <span>Untuk mudah</span>
                                    </div>
                                </div>
                                <div class="text-bottom">
                                    <div>Diprediksi!</div>
                                </div>
                            </div>
                            <p class="should-be-animated" style="color: #464646;margin-top: 23rem;margin-left: -4px;">Sistem Prediksi Kemenangan Tender Proyek PT Rekayasa Industri berbasis Machine Learning dengan multi-algorithm use!</p>
                        </div>
                    </div>
                    <div class="col-md-6" style="position: relative;">
                        <img src="./assets/images/2517914.png" alt="gambar" class="img-fluid should-be-animated">
                        <span class="should-be-animated" style="position: absolute;
                            left: 177px;
                            font-size: 1.4rem;
                            bottom: 17.3rem;
                            color: white;
                            z-index: 1;"><i class="fas fa-cog fa-spin"></i></span>
                        <div class="box-landing-pic-1 should-be-animated">
                            <i class="fas fa-file-excel" style="color: white;"></i>
                        </div>
                        <div class="box-landing-pic-2 should-be-animated">
                            <i class="fas fa-medal"></i>
                            <span style="font-size: 9px;" class="typewriter">67.33%</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2 text-center" style="height: 50vh;background: #fff;">
        <div class="section" style="position: relative;">
            <div class="container card-shadow-cool" style="position: absolute;
    top: -67px;
    background: #fff;display: flex;">
                <div class="section-2-wrapper" style="padding: 2rem; width:100%; transition:ease-in-out 0.5s;">
                    <form id="form-upload-data">
                        <div class="section-2-text-title">
                            <h3>Upload Data</h3>
                        </div>
                        <div class="section-2-text-description">
                            <p>Pilih file berisi data yang selanjutnya akan diproses dengan algoritma yang anda pilih</p>
                        </div>
                        <div class="section-2-operation">
                            <input type="file" id="file_upload" name="input_file" class="form-control-file" style="display: none;">
                            <button class="btn btn-sm" id="btn_file_upload"><i class="fas fa-file-upload"></i> Pilih File</button>
                        </div>
                        <div class="accordion-menu">
                            <ul>
                                <li>
                                    <input type="checkbox" name="inputfillcheckbox" value="0" checked>
                                    <i class="arrow"></i>
                                    <h2 id="title-input-x">Input Behavior (Default)</h2>
                                    <div class="isi-konten">
                                        <table style="margin: auto;">
                                            <tr>
                                                <td>
                                                    <i class="fas fa-hand-holding-usd"></i>
                                                </td>
                                                <td>
                                                    <!-- create slide input from 0 to 2 -->
                                                    <div class="range-slider">
                                                        <span id="rs-bullet" class="rs-label">Low</span>
                                                        <input id="rs-range-line-harga" name="harga" class="rs-range" type="range" value="0" min="0" max="2">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fas fa-user-friends"></i>
                                                </td>
                                                <td>
                                                    <div class="range-slider">
                                                        <span id="rs-bullet" class="rs-label">Low</span>
                                                        <input id="rs-range-line-partner" name="partner" class="rs-range" type="range" value="0" min="0" max="2">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fas fa-chess-knight"></i>
                                                </td>
                                                <td>
                                                    <div class="range-slider">
                                                        <span id="rs-bullet" class="rs-label">Low</span>
                                                        <input id="rs-range-line-competitor" name="competitor" class="rs-range" type="range" value="0" min="0" max="2">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <ul class="ks-cboxtags">
                                <li><input type="checkbox" name="checkboxalgorithm[]" class="checkboxalgorithm" id="checkboxOne" value="0"><label for="checkboxOne">Logistic Regression</label></li>
                                <li><input type="checkbox" name="checkboxalgorithm[]" class="checkboxalgorithm" id="checkboxTwo" value="1" checked><label for="checkboxTwo">Decision Tree</label></li>
                                <li><input type="checkbox" name="checkboxalgorithm[]" class="checkboxalgorithm" id="checkboxThree" value="2"><label for="checkboxThree">Naive Bayes</label></li>
                                <li><input type="checkbox" name="checkboxalgorithm[]" class="checkboxalgorithm" id="checkboxFour" value="3"><label for="checkboxFour">Random Forest</label></li>
                            </ul>
                        </div>
                        <button class="btn btn-sm btn-primary" type="submit" id="btn-fetch-data" style="border-radius: 38px;background: rgb(222,85,255);background: linear-gradient(132deg, rgba(222,85,255,1) 0%, rgba(131,79,245,1) 100%);border: none;padding: 10px 30px 10px 30px;">Submit</button>
                    </form>
                </div>
                <div class="section-2-info-detail-side" style="width: 0; transition:ease-in-out 0.5s;">

                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modalInfo" tabindex="-1" aria-labelledby="modalInfoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInfoLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="picWrapper" src="" class="img-fluid" alt="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="./assets/js/script.js"></script>
</body>

</html>