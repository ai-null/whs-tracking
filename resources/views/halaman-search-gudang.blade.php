<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="/css/halaman-search-gudang.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />

  <style>
    a {
      text-decoration: none;
    }
  </style>
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
          {{-- LIST CONTAINER --}}
          @foreach ($containers as $container)
          <a href="{{ route('dataReport', [ 'id' =>  $container->id]) }}" class="button-detail">
            <div class="detail-button-labels">
              <div class="sinar-siantar-031s"> {{ $container->vessel }} </div>
            </div>
            <div class="detail-button-icons">
              <div class="detail-button-content">
                <div class="item-codes">
                  <div class="eghu4862452">{{ $container->voyage }}</div>
                  <div class="pos">{{ $container->Total_Pos }} POS</div>
                </div>
                <div class="estimated-arrival">
                  <div class="eta-12">ETA : {{ $container->ATA }}</div>
                </div>
              </div>
              <img class="vector-icon12" alt="" src="/images/vector-2.svg" />
            </div>
          </a>
          @endforeach
          {{-- LIST CONTAINER :: END --}}
        </div>
      </div>
    </section>
  </div>

  <script>
    var newItemButton = document.getElementById("newItemButton");
    if (newItemButton) {
      newItemButton.addEventListener("click", function(e) {
        window.location.href = "{{ route('dataContainer', [ 'id' => '1' ]) }}";
      });
    }
  </script>
</body>

</html>