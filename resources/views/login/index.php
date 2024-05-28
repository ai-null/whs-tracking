<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/gateway-app/style.css" />
    <link rel="stylesheet" href="/gateway-app/login-page.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap"
    />
  </head>
  <body>
    <div class="login-page">
      <div class="content1">
        <div class="frame-header1">
          <img
            class="image-10-icon1"
            id="1"
            alt=""
            src="./public/image-101@1x.png"
          />

          <h2 class="welcome-back-please1">
            Welcome back! please login to your account
          </h2>
        </div>
        <div class="frame-inputsign-in1">
          <div class="input-form1">
            <label class="username-or-email1" htmlfor="username"
              >Username or Email</label
            >
            <input
              class="input-username-email1"
              name="username"
              type="text"
              required
            />

            <label class="username-or-email1" htmlfor="password"
              >Password</label
            >
            <input
              class="input-username-email1"
              name="password"
              id="password"
              type="text"
              required
            />
          </div>
          <button class="tombol-sign-in1" type="submit" id="tombolSignIn">
            <div class="sign-in1">Sign in</div>
          </button>
        </div>
      </div>
      <img class="icon1" alt="" src="./public/1484-1@2x.png" />
    </div>

    <script>
      var tombolSignIn = document.getElementById("tombolSignIn");
      if (tombolSignIn) {
        tombolSignIn.addEventListener("click", function (e) {
          // Please sync "halaman search 1" to the project
        });
      }
      </script>
  </body>
</html>
