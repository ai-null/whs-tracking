<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="/css/halaman-tambah-data-customer.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />
</head>

<body>
  <form action="{{ route('dataCustomer') }}" method="POST">
    @csrf
    <div class="halaman-tambah-data-customer">
      <header class="header4">
        <div class="image-9-parent2">
          <img class="image-9-icon4" loading="lazy" alt="" src="/images/image-91@2x.png" />

          <div class="header-text-wrapper2">
            <b class="header-text4">Detail Tracking</b>
          </div>
        </div>
        <div class="header-inner1">
          <div class="frame-parent14">
            <div class="selamat-datang-admin-wrapper1">
              <div class="selamat-datang-admin4">Selamat datang, Admin!</div>
            </div>
            <a class="tombol-logout">
              <img class="vector-icon6" loading="lazy" alt="" src="/images/vector.svg" />
            </a>
          </div>
        </div>
      </header>
      <main class="halaman-tambah-data-customer-inner">
        <div class="header-description-parent">
          <div class="header-description">
            <div class="header-description-child"></div>
            <div class="add-data-information">Add Data Information</div>
          </div>
          <div class="frame-wrapper">
            <div class="bill-of-lading-frame">
              <input class="bill-of-lading1" placeholder="Bill of Lading" type="text" name="billOfLading" />
            </div>
          </div>
          <div class="frame-wrapper1">
            <div class="consignee-container">
              <input class="consignee2" placeholder="Consignee" type="text" name="consignee" />
            </div>
          </div>
          <div class="frame-wrapper2">
            <div class="qty-container">
              <input class="qty2" placeholder="Qty" type="text" name="qty" />
            </div>
          </div>
          <div class="frame-wrapper3">
            <div class="volume-container">
              <input class="volume2" placeholder="Volume" type="text" name="volume" />
            </div>
          </div>
          <div class="frame-wrapper4">
            <div class="date-container">
              <input class="date2" placeholder="Date" type="text" name="date" />
            </div>
          </div>
          <div class="frame-parent15">
            <div class="report-conditions-wrapper">
              <input class="report-conditions" placeholder="Report Conditions" type="text" name="reportCondition" />
            </div>
            <div class="upload-photo-button-wrapper">
              <button class="upload-photo-button">
                <div class="upload-photo">Upload Photo</div>
                <div class="vector-frame">
                  <img class="vector-icon7" alt="" src="/images/vector-12.svg" />
                </div>
              </button>
            </div>
          </div>
          <div class="gallery-parent">
            <div class="gallery1">
              <div class="photos-11">
                <div class="nama-file-gambar3">photos1.png</div>
                <img class="gambar-icon3" loading="lazy" alt="" src="/images/gambar1@2x.png" />

                <button type="button" class="delete-button">
                  <div class="delete">Delete</div>
                  <img class="vector-icon8" alt="" src="/images/vector2.svg" />
                </button>
              </div>
              <div class="photos-21">
                <div class="nama-file-gambar4">photos2.png</div>
                <img class="gambar-icon4" alt="" src="/images/gambar1@2x.png" />

                <button type="button" class="delete-button1">
                  <div class="delete1">Delete</div>
                  <img class="vector-icon9" alt="" src="/images/vector2.svg" />
                </button>
              </div>
              <div class="photos-31">
                <div class="nama-file-gambar5">photos3.png</div>
                <img class="gambar-icon5" alt="" src="/images/gambar1@2x.png" />

                <button type="button" class="delete-button2">
                  <div class="delete2">Delete</div>
                  <img class="vector-icon10" alt="" src="/images/vector2.svg" />
                </button>
              </div>
            </div>
            <div class="frame-wrapper6">
              <div class="cancel-button-parent">
                <a href="{{route('dashboardGudang')}}" class="cancel-button">
                  <div class="cancel-button-child"></div>
                  <b class="cancel">Cancel</b>
                </a>
                <button class="save-button" type="submit">
                  <div class="save-button-child"></div>
                  <b class="save">Save</b>
                </button>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </form>
</body>

</html>