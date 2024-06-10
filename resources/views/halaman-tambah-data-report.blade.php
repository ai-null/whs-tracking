<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/css/halaman-tambah-data-report.css" />
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
    <div class="halaman-tambah-data-report">
      <header class="header7">
        <div class="image-9-parent5">
          <img
            class="image-9-icon7"
            loading="lazy"
            alt=""
            src="/images/image-91@2x.png"
          />

          <div class="header-text-wrapper5">
            <b class="header-text7">Detail Tracking</b>
          </div>
        </div>
        <div class="top-navigation">
          <div class="user-actions">
            <div class="selamat-datang-admin-wrapper4">
              <div class="selamat-datang-admin7">Selamat datang, Admin!</div>
            </div>
            <a class="tombol-logout2">
              <img
                class="logout-icon3"
                loading="lazy"
                alt=""
                src="/images/vector.svg"
              />
            </a>
          </div>
        </div>
      </header>
      <section class="content2">
        <div class="content-header">
          <div class="header-description2">
            <div class="header-description-inner"></div>
            <div class="detail-customer">Detail Customer</div>
          </div>
          <img
            class="tombol-tambah-data"
            loading="lazy"
            alt=""
            src="/images/tombol-tambah-data@2x.png"
            id="tombolTambahData"
          />

          <div class="customer-detail">
            <div class="pt-balinusa-mitra-perkasa-parent">
              <div class="pt-balinusa-mitra-container">
                <ol class="pt-balinusa-mitra-perkasa">
                  <li>PT BALINUSA MITRA PERKASA</li>
                </ol>
              </div>
              <div class="buttons">
                <button class="edit-button" id="editButton">
                  <div class="edit-background-parent">
                    <div class="edit-background"></div>
                    <img
                      class="edit-icon"
                      alt=""
                      src="/images/vector-13.svg"
                    />
                  </div>
                </button>
                <button class="delete-button3">
                  <div class="delete-background-parent">
                    <div class="delete-background"></div>
                    <img
                      class="delete-icon"
                      alt=""
                      src="/images/vector-21.svg"
                    />
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="data-grid">
        <div class="data-row">
          <div class="data-cell">
            <div class="div3">7</div>
          </div>
          <img class="sort-icon" alt="" src="/images/footer-icon.svg" />
        </div>
      </div>
    </div>

    <script>
      var tombolTambahData = document.getElementById("tombolTambahData");
      if (tombolTambahData) {
        tombolTambahData.addEventListener("click", function (e) {
          window.location.href = "";
        });
      }
      
      var editButton = document.getElementById("editButton");
      if (editButton) {
        editButton.addEventListener("click", function (e) {
          window.location.href = "";
        });
      }
      </script>
  </body>
</html>
