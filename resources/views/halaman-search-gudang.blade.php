<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="/css/halaman-search-gudang.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />
</head>

<body>
  <div class="halaman-search-gudang">
    <header class="header5">
      <div class="image-9-parent3">
        <img class="image-9-icon5" alt="" src="/images/image-9@2x.png" />

        <div class="header-text-wrapper3">
          <b class="header-text5">Detail Tracking</b>
        </div>
      </div>
      <div class="header-inner2">
        <div class="frame-parent16">
          <div class="selamat-datang-admin-wrapper2">
            <div class="selamat-datang-admin5">Selamat datang, Admin!</div>
          </div>
          <a class="logout-button4">
            <img class="vector-icon11" alt="" src="/images/vector.svg" />
          </a>
        </div>
      </div>
    </header>
    <section class="content1">
      <div class="result-list">
        <div class="result-item">
          <input class="search-bar1" type="text" />

          <div class="search-button-wrapper">
            <button class="search-button1">
              <div class="search-button-background1"></div>
              <img class="search-icon1" alt="" src="/images/vector-11.svg" />
            </button>
          </div>
          <button class="new-item-button" id="newItemButton">
            <img class="new-icon" alt="" src="/images/new-icon.svg" />

            <b class="new">New</b>
          </button>
        </div>
        <div class="button-detail-parent" id="addNewCustomer">
          <button class="button-detail">
            <div class="detail-button-labels">
              <div class="sinar-siantar-031s">SINAR SIANTAR 031S</div>
            </div>
            <div class="detail-button-icons">
              <div class="detail-button-content">
                <div class="item-codes">
                  <div class="eghu4862452">EGHU486245</div>
                  <div class="pos">10 POS</div>
                </div>
                <div class="estimated-arrival">
                  <div class="eta-12">ETA : 12 March 2024</div>
                </div>
              </div>
              <img class="vector-icon12" alt="" src="/images/vector-2.svg" />
            </div>
          </button>
          <button class="button-detail">
            <div class="kmtc-chennai-025n-parent">
              <div class="kmtc-chennai-025n">KMTC CHENNAI 025N</div>
            </div>
            <div class="frame-parent17">
              <div class="frame-parent18">
                <div class="tcku943790-parent">
                  <div class="tcku943790">TCKU943790</div>
                  <div class="pos1">10 POS</div>
                </div>
                <div class="eta-1-february-2024-wrapper">
                  <div class="eta-1">ETA : 1 February 2024</div>
                </div>
              </div>
              <img class="vector-icon13" alt="" src="/images/vector-2.svg" />
            </div>
          </button>
        </div>
      </div>
    </section>
  </div>

  <script>
    var newItemButton = document.getElementById("newItemButton");
    if (newItemButton) {
      newItemButton.addEventListener("click", function(e) {
        window.location.href = "";
      });
    }

    var buttons = document.getElementsByClassName('button-detail')
    for (let index = 0; index < buttons.length; index++) {
      const element = buttons[index];
      element.addEventListener("click", function(e) {
        window.location.href = "/halaman-tambah-data-customer"
      })
    }

    var newItemButton = document.getElementById("newItemButton");
    if (newItemButton) {
      newItemButton.addEventListener("click", function(e) {
        window.location.href = "/halaman-tambah-data-container";
      });
    }
  </script>
</body>

</html>