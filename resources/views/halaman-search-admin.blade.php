<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/css/halaman-search-admin.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />
</head>

<body>
    <div class="halaman-search-admin">
        <header class="header1">
            <div class="image-9-group">
                <img class="image-9-icon1" loading="lazy" alt="" src="/images/image-9@2x.png" />

                <div class="header-text-container">
                    <a class="header-text1">Detail Tracking</a>
                </div>
            </div>
            <div class="content">
                <div class="frame-div">
                    <div class="selamat-datang-admin-container">
                        <div class="selamat-datang-admin1">Selamat datang, Admin!</div>
                    </div>
                    <a class="logout-button1" id="logoutButton">
                        <img class="logout-icon" loading="lazy" alt="" src="/images/vector.svg" />
                    </a>
                </div>
            </div>
        </header>
        <section class="search-and-info-wrapper">
            <div class="search-and-info">
                <div class="search-area-parent">
                    <div class="search-area">
                        <div class="search-bar-parent">
                            <input class="search-bar" type="text" />

                            <button class="search-button">
                                <div class="search-button-background"></div>
                                <img class="search-icon" alt="" src="/images/vector-11.svg" />
                            </button>
                        </div>
                        <div class="customer-info">
                            <div class="total-customer">Total Customer : 10</div>
                        </div>
                    </div>
                    <button class="button-detail">
                        <div class="frame-parent1">
                            <div class="pt-balinusa-mitra-perkasa-wrapper">
                                <div class="pt-balinusa-mitra">PT BALINUSA MITRA PERKASA</div>
                            </div>
                            <div class="status-pickup">
                                <b class="picked-up">PICKED UP</b>
                            </div>
                        </div>
                        <div class="button-detail-inner">
                            <div class="frame-parent2">
                                <div class="frame-parent3">
                                    <div class="eghu486245-parent">
                                        <div class="eghu486245">EGHU486245</div>
                                        <div class="pcs">102 Pcs</div>
                                    </div>
                                    <div class="csssub23110088102-parent">
                                        <div class="csssub23110088102">CSSSUB231100881/02</div>
                                        <div class="m">2.452 m³</div>
                                    </div>
                                </div>
                                <img class="vector-icon1" alt="" src="/images/vector-2.svg" />
                            </div>
                        </div>
                    </button>
                </div>
                <button class="button-detail-2" id="detailButton">
                    <div class="frame-parent4">
                        <div class="pt-tjiwi-kimia-wrapper">
                            <div class="pt-tjiwi-kimia">PT TJIWI KIMIA</div>
                        </div>
                        <div class="status-pickup1">
                            <b class="picked-up1">PICKED UP</b>
                        </div>
                    </div>
                    <div class="button-detail-2-inner">
                        <div class="frame-parent5">
                            <div class="frame-parent6">
                                <div class="eghu486245-group">
                                    <div class="eghu4862451">EGHU486245</div>
                                    <div class="pcs1">80 Pcs</div>
                                </div>
                                <div class="csssub23110088102-group">
                                    <div class="csssub231100881021">CSSSUB231100881/02</div>
                                    <div class="m1">3000 m³</div>
                                </div>
                            </div>
                            <img class="vector-icon2" alt="" src="/images/vector-2.svg" />
                        </div>
                    </div>
                </button>
            </div>
        </section>
    </div>

    <script>
        var detailButton = document.getElementById("detailButton");
        if (detailButton) {
            detailButton.addEventListener("click", function(e) {
                window.location.href = "";
            });
        }

        var buttons = document.getElementsByClassName('button-detail')
        for (let index = 0; index < buttons.length; index++) {
            const element = buttons[index];
            element.addEventListener("click", function(e) {
                window.location.href ="/halaman-detail"
            })
            
        }
    </script>

</body>

</html>
