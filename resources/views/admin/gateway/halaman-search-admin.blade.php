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
                <a href="{{ route('halaman-search-admin') }}">
                    <img class="image-9-icon1" loading="lazy" alt="" src="/images/image-9@2x.png" />
                </a>
                
                <div class="header-text-container">
                    <a class="header-text1">Detail Tracking</a>
                </div>
            </div>
            <div class="content">
                <div class="frame-div">
                    <div class="selamat-datang-admin-container">
                        <div class="selamat-datang-admin1">Selamat datang, Admin!</div>
                    </div>
                    <a class="logout-button1" id="logoutButton" href="{{ route('login') }}">
                        <img class="logout-icon" loading="lazy" alt="" src="/images/vector.svg" />
                    </a>
                </div>
            </div>
        </header>
        <section class="search-and-info-wrapper">
            <div class="search-and-info">
                <div class="search-area-parent">
                    <div class="search-area">
                        <form action="{{ route('halaman-search-admin') }}" method="GET">
                            <div class="search-bar-parent">
                                <input style="padding: 4px 16px" class="search-bar" type="text" name="keyword" />

                                <button type="submit" class="search-button">
                                    <div class="search-button-background"></div>
                                    <img class="search-icon" alt="" src="/images/vector-11.svg" />
                                </button>
                            </div>
                        </form>
                        <div class="customer-info">
                            <div class="total-customer">Total Customer : {{ $detailCustomers->count() }}</div>
                        </div>
                    </div>

                </div>

                @foreach ($detailCustomers as $detailCustomer)
                    <a class="button-detail-2" style="text-decoration: none;"
                        href=" {{ route('customerDetail', ['id' => $detailCustomer->id]) }} ">
                        <div class="frame-parent4">
                            <div class="pt-tjiwi-kimia-wrapper">
                                <div class="pt-tjiwi-kimia">{{ $detailCustomer->Consignee }}</div>
                            </div>
                            <div class="status-pickup1">
                                <b class="picked-up1">PICKED UP</b>
                            </div>
                        </div>
                        <div class="button-detail-2-inner">
                            <div class="frame-parent5">
                                <div class="frame-parent6">
                                    <div class="eghu486245-group">
                                        <div class="eghu4862451">{{ $detailCustomer->Bill_of_lading }}</div>
                                        <div class="pcs1">{{ $detailCustomer->Quantity }} Pcs</div>
                                    </div>
                                    <div class="csssub23110088102-group">
                                        <div class="csssub231100881021">{{ $detailCustomer->voyage }}</div>
                                        <div class="m1">{{ $detailCustomer->Volume }} m³</div>
                                    </div>
                                </div>
                                <img class="vector-icon2" alt="" src="/images/vector-2.svg" />
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
        </section>
    </div>

</body>

</html>
