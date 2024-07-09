<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/css/halaman-tambah-data-container.css" />
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
    <div class="halaman-tambah-data-container">
      <header class="header6">
        <div class="image-9-parent4">
          <img
            class="image-9-icon6"
            loading="lazy"
            alt=""
            src="/images/image-9@2x.png"
          />

          <div class="header-text-wrapper4">
            <a class="header-text6">Detail Tracking</a>
          </div>
        </div>
        <div class="header-inner3">
          <div class="frame-parent19">
            <div class="selamat-datang-admin-wrapper3">
              <div class="selamat-datang-admin6">Selamat datang, Admin!</div>
            </div>
            <button class="tombol-logout1">
              <img
                class="logout-icon2"
                loading="lazy"
                alt=""
                src="/images/vector.svg"
              />
            </button>
          </div>
        </div>
      </header>
      <section class="halaman-tambah-data-container-inner">

        {{-- FORM SAVE DATA CONTAINER --}}
        {{-- route('dataContainer') == http://127.0.0.1:8000/admin/halaman-tambah-data-container --}}
        <form class="frame-form" action="{{ route('dataContainer', [ 'id' => $id ]) }}" method="POST">
          @csrf
          <div class="frame-parent20">
            <div class="header-description-group"></div>
              <div class="header-description1">
                <div class="header-description-item"></div>
                <div class="submit-your-information">
                  Submit your information using the form provided
                </div>
              </div>
              <div class="vessel-wrapper">
                <input class="vessel" placeholder="Vessel" type="text" name="vessel" />
              </div>
            </div>
            <div class="voyage-wrapper">
              <input class="voyage" placeholder="Voyage" type="text" name="voyage" />
            </div>
            <div class="container-wrapper">
              <input class="container2" placeholder="Container" type="text" name="container" />
            </div>
            <div class="ata-wrapper">
              <input class="ata" placeholder="ETA" type="text" name="eta" />
            </div>
            <div class="total-pos-wrapper">
              <input class="total-pos" placeholder="Total Pos" type="text" name="totalPos" />
            </div>
          </div>
          <div class="frame-wrapper7">
            <div class="cancel-button-group">
              <button class="cancel-button1">
                <div class="cancel-button-item"></div>
                <div class="cancel1">Cancel</div>
              </button>
              <button class="save-button1" type="submit">
                <div class="save-button-item"></div>
                <b class="save1">Save</b>
              </button>
            </div>
          </div>
        </form>
        {{-- FORM SAVE DATA CONTAINER :: END --}}

      </section>
    </div>
  </body>
</html>
