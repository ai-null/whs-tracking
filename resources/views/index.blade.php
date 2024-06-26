<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/css/index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />
</head>

<body>
    <div class="landing-page">
        <header class="industrial-park-factory-buildi-parent">
            <img class="industrial-park-factory-buildi-icon" alt=""
                src="/images/industrialparkfactorybuildingwarehouse-1@2x.png" />

            <img class="image-10-icon" loading="lazy" alt="" src="/images/image-10@2x.png" />
        </header>
        <div class="welcome-parent">
            <h1 class="welcome">Welcome</h1>
            <div class="admin-login-button-parent">
                <button class="admin-login-button" id="adminLoginButton">
                    <div class="login-as-admin">Login as admin</div>
                </button>
                <button class="staff-login-button" id="staffLoginButton">
                    <div class="login-as-staff">Login as staff</div>
                </button>
            </div>
        </div>
    </div>

    <script>
        var adminLoginButton = document.getElementById("adminLoginButton");
        if (adminLoginButton) {
            adminLoginButton.addEventListener("click", function(e) {
                window.location.href = " {{ route('login') }} ";
            });
        }

        var staffLoginButton = document.getElementById("staffLoginButton");
        if (staffLoginButton) {
            staffLoginButton.addEventListener("click", function(e) {
                window.location.href = "{{ route('halaman-search-admin') }}";
            });
        }
    </script>
</body>

</html>
