<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/css/halaman-detail-photo.css" />
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
    <div class="halaman-detail-photo">
      <header class="header3">
        <div class="image-9-parent1">
          <img
            class="image-9-icon3"
            loading="lazy"
            alt=""
            src="/images/image-9@2x.png"
          />

          <div class="header-text-wrapper1">
            <a class="header-text3">Detail Tracking</a>
          </div>
        </div>
        <div class="header-child">
          <div class="frame-parent11">
            <div class="selamat-datang-admin-frame">
              <div class="selamat-datang-admin3">Selamat datang, Admin!</div>
            </div>
            <a class="logout-button3">
              <img
                class="vector-icon4"
                loading="lazy"
                alt=""
                src="/images/vector.svg"
              />
            </a>
          </div>
        </div>
      </header>
      <section class="frame-section">
        <div class="frame-parent12">
          <button class="frame-parent13" id="tomboldetail">
            <div class="vector-container">
              <img class="vector-icon5" alt="" src="/images/vector-1.svg" />
            </div>
            <div class="detail4">Detail</div>
          </button>
          <button class="tombol-report-condition2" id="tombolReportCondition">
            <img
              class="tablerreport-icon2"
              loading="lazy"
              alt=""
              src="/images/tablerreport.svg"
            />

            <div class="report-condition2">Report Condition</div>
            <div class="tombol-report-condition-inner"></div>
          </button>
          <div class="tombol-photos2">
            <img
              class="material-symbols-lightadd-to-icon2"
              alt=""
              src="/images/materialsymbolslightaddtophotosrounded1.svg"
            />

            <b class="photos2">Photos</b>
          </div>
        </div>
        <div class="head2">
          <div class="detail5">Detail</div>
        </div>
        <div class="gallery">
          <button class="photos-1">
            <div class="nama-file-gambar">photos1.png</div>
            <img class="photos-1-child" alt="" src="/images/frame-22.svg" />

            <img
              class="gambar-icon"
              loading="lazy"
              alt=""
              src="/images/gambar@2x.png"
            />
          </button>
          <button class="photos-2">
            <div class="nama-file-gambar1">photos2.png</div>
            <img class="photos-2-child" alt="" src="/images/frame-22.svg" />

            <img class="gambar-icon1" alt="" src="/images/gambar@2x.png" />
          </button>
          <button class="photos-3">
            <div class="nama-file-gambar2">photos3.png</div>
            <img class="photos-3-child" alt="" src="/images/frame-22.svg" />

            <img class="gambar-icon2" alt="" src="/images/gambar@2x.png" />
          </button>
        </div>
      </section>
      <div class="halaman-detail-photo-inner">
        <img class="frame-child" alt="" src="/images/footer-icon.svg" />
      </div>
    </div>

    <script>
      var frameButton = document.getElementById("tomboldetail");
      if (tomboldetail) {
        tomboldetail.addEventListener("click", function (e) {
          window.location.href = "/halaman-detail";
        });
      }
      
      var tombolReportCondition = document.getElementById("tombolReportCondition");
      if (tombolReportCondition) {
        tombolReportCondition.addEventListener("click", function (e) {
          window.location.href = "/halaman-detail-report";
        });
      }
      </script>
  </body>
</html>
