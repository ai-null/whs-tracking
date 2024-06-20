<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="/css/login-page.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />
</head>

<body>
  <div class="login-page">
    <div class="login-page-inner">

      {{-- FORM LOGIN --}}
      <form class="frame-parent21" action="/register" method="POST">
        @csrf
        
        <div class="frame-parent22">
          <div class="image-10-wrapper">
            <img class="image-10-icon1" loading="lazy" alt="" src="/images/image-101@2x.png" />
          </div>

          <div class="welcome-back-please-login-to-wrapper">
            <div class="welcome-back-please">
              Welcome back! please register to your account
            </div>
          </div>

          <div class="username-or-email-parent">
            <div class="username-or-email">Username or Email</div>
            <input class="input-username-email" type="email" name="email"/>
            <div class="password">Password</div>
            <input class="input-password" type="password" name="password"/>
          </div>

        </div>

        <div class="tombol-sign-in-wrapper">
          <button class="tombol-sign-in" id="tombolSignIn" type="submit">
            <div class="sign-in">Register</div>
          </button>
        </div>

      </form>
    </div>
    <img class="background-icon" loading="lazy" alt="" src="/images/1484-1@2x.png" />
  </div>

  {{-- <script>
    var tombolSignIn = document.getElementById("tombolSignIn");
    tombolSignIn.addEventListener("click", function(e) {
      e.preventDefault();
      window.location.href = "/halaman-search-gudang";
    });
  </script> --}}
</body>

</html>