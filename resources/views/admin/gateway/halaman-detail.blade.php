<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/css/halaman-detail.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />
</head>

<body>
    <div class="halaman-detail">
        <header class="header2">
            <div class="image-9-container">
                <img class="image-9-icon2" loading="lazy" alt="" src="/images/image-9@2x.png" />

                <div class="header-text-frame">
                    <b class="header-text2">Detail Tracking</b>
                </div>
            </div>
            <div class="greeting">
                <div class="header-image">
                    <div class="header-title">
                        <div class="selamat-datang-admin2">Selamat datang, Admin!</div>
                    </div>
                    <a class="logout-button2" href="{{ route('login') }}">
                        <img class="logout-icon1" loading="lazy" alt="" src="/images/vector.svg" />
                    </a>
                </div>
            </div>
        </header>
        <div class="footer">
            <div class="frame-parent7">
                <div class="frame-parent8">
                    <div class="frame-parent9">
                        <div class="frame-parent10">
                            <div class="vector-wrapper">
                                <img class="vector-icon3" alt="" src="/images/vector1.svg" />
                            </div>
                            <b class="detail2">Detail</b>
                        </div>
                        <button class="tombol-report-condition1" id="tombolReportCondition">
                            <img class="tablerreport-icon1" loading="lazy" alt=""
                                src="/images/tablerreport.svg" />

                            <div class="report-condition1">Report Condition</div>
                            <div class="tombol-report-condition-item"></div>
                        </button>
                        <button class="tombol-photos1" id="tombolPhotos">
                            <img class="material-symbols-lightadd-to-icon1" loading="lazy" alt=""
                                src="/images/materialsymbolslightaddtophotosrounded.svg" />

                            <div class="photos1">Photos</div>
                        </button>
                    </div>
                    <div class="head1">
                        <div class="detail3">Detail</div>
                    </div>
                    <div class="data-list">
                        <div class="data-1">
                            <div class="data-rows">
                                <div class="container">
                                    <ol class="container1">
                                        <li>Container :</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row-data">
                                <div class="nando">{{ $detail_customer->Container }}a</div>
                            </div>
                        </div>
                        <div class="data-2">
                            <div class="bill-of-lading-wrapper">
                                <div class="bill-of-lading-container">
                                    <ol class="bill-of-lading">
                                        <li>Bill of Lading :</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="andri-wrapper">
                                <div class="andri">{{ $detail_customer->Bill_of_lading }}</div>
                            </div>
                        </div>
                        <div class="data-3">
                            <div class="consignee-wrapper">
                                <div class="consignee">
                                    <ol class="consignee1">
                                        <li>Consignee :</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="fahri-wrapper">
                                <div class="fahri">{{ $detail_customer->Consignee }}</div>
                            </div>
                        </div>
                        <div class="data-4">
                            <div class="qty-wrapper">
                                <div class="qty"> 
                                    <ol class="qty1">
                                        <li>Qty :</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="wrapper">
                                <div class="div">{{ $detail_customer->Quantity }}</div>
                            </div>
                        </div>
                        <div class="data-5">
                            <div class="volume-wrapper">
                                <div class="volume">
                                    <ol class="volume1">
                                        <li>Volume :</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="frame">
                                <div class="div1">{{ $detail_customer->Volume }}</div>
                            </div>
                        </div>
                        <div class="data-6">
                            <div class="date-wrapper">
                                <div class="date">
                                    <ol class="date1">
                                        <li>Date :</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="wrapper1">
                                <div class="div2">{{ $detail_customer->date }}</div>
                            </div>
                        </div>
                        <div class="data-7">
                            <div class="status-wrapper">
                                <div class="status">
                                    <ol class="status1">
                                        <li>Status :</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="picked-up-wrapper">
                                <div class="picked-up2">{{ $detail_customer->Status }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-icon-wrapper">
                    <img class="footer-icon" alt="" src="/images/footer-icon.svg" />
                </div>
            </div>
        </div>
    </div>

    <script>
        var tombolReportCondition = document.getElementById("tombolReportCondition");
        if (tombolReportCondition) {
            tombolReportCondition.addEventListener("click", function(e) {
                window.location.href = "/halaman-detail-report";    
            });
        }

        var tombolPhotos = document.getElementById("tombolPhotos");
        if (tombolPhotos) {
            tombolPhotos.addEventListener("click", function(e) {
                window.location.href = "/halaman-detail-photo";
            });
        }
    </script>
</body>

</html>
