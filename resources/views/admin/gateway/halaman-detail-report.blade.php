<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/css/halaman-detail-report.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
    />
  </head>
  <body>
    <div class="halaman-detail-report">
      <section class="header">
        <div class="image-9-parent">
          <a href="{{ route('halaman-search-admin') }}">
            <img
              class="image-9-icon"
              loading="lazy"
              alt=""
              src="/images/image-9@2x.png"
            />
          </a>

          <div class="header-text-wrapper">
            <a class="header-text">Detail Tracking</a>
          </div>
        </div>
        <div class="header-inner">
          <div class="frame-parent">
            <div class="selamat-datang-admin-wrapper">
              <div class="selamat-datang-admin">Selamat datang, Admin!</div>
            </div>
            <a class="logout-button" href="{{ route('login') }}">
              <img
                class="vector-icon"
                loading="lazy"
                alt=""
                src="/images/vector.svg"
              />
            </a>
          </div>
        </div>
      </section>
      <section class="halaman-detail-report-inner">
        <div class="frame-group">
          <div class="frame-container">
            <button class="frame-button" id="tomboldetail">
              <div class="detail-icon-wrapper">
                <img
                  class="detail-icon"
                  loading="lazy"
                  alt=""
                  src="/images/vector-1.svg"
                />
              </div>
              <div class="detail">Detail</div>
            </button>
            <div class="tombol-report-condition">
              <img
                class="tablerreport-icon"
                alt=""
                src="/images/tablerreport.svg"
              />

              <b class="report-condition">Report Condition</b>
              <div class="tombol-report-condition-child"></div>
            </div>
            <button class="tombol-photos" id="tombolPhotos">
              <img
                class="material-symbols-lightadd-to-icon"
                loading="lazy"
                alt=""
                src="/images/materialsymbolslightaddtophotosrounded.svg"
              />

              <div class="photos">Photos</div>
            </button>
          </div>
          <div class="head">
            <div class="detail1">Detail</div>
          </div>
          <textarea
            class="deskripsi-barang"
            rows="15"
            readonly="true"
            cols="45"
          >{{ $report }}</textarea>
        </div>
      </section>
    </div>

    <script>
      var frameButton = document.getElementById("tomboldetail");
      if (tomboldetail) {
        tomboldetail.addEventListener("click", function (e) {
          window.location.href = " {{ route('customerDetail', [ 'id' => $id ]) }} ";
        });
      }
      
      var tombolPhotos = document.getElementById("tombolPhotos");
      if (tombolPhotos) {
        tombolPhotos.addEventListener("click", function (e) {
          window.location.href = " {{ route('detailPhoto', [ 'id' => $id ]) }} ";
        });
      }
      </script>
  </body>
</html>
