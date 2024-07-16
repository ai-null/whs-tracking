<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="/css/halaman-tambah-data-customer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="halaman-tambah-data-customer">
        <header class="header4">
            <div class="image-9-parent2">
                <a href="{{ route('dashboardGudang') }}"><img class="image-9-icon4" loading="lazy" alt="" src="/images/image-91@2x.png" /></a>

                <div class="header-text-wrapper2">
                    <b class="header-text4">Detail Tracking</b>
                </div>
            </div>
            <div class="header-inner1">
                <div class="frame-parent14">
                    <div class="selamat-datang-admin-wrapper1">
                        <div type="submit" class="selamat-datang-admin4">selamat datang, {{ Auth::user()->email }}!
                        </div>
                    </div>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="tombol-logout" style="background: none; border: none; cursor: pointer;"
                            type="submit">
                            <img class="vector-icon6" loading="lazy" alt="" src="/images/vector.svg" />
                        </button>
                    </form>
                </div>
            </div>
        </header>
        <form action="{{ route('dataCustomer', ['id' => $id]) }}" method="POST" enctype="multipart/form-data"
            style="width: 100%;">
            @csrf
            <main class="halaman-tambah-data-customer-inner">
                <div class="header-description-parent">
                    <div class="header-description">
                        <div class="header-description-child"></div>
                        <div class="add-data-information">Add Data Information</div>
                    </div>
                    <div class="frame-wrapper">
                        <div class="bill-of-lading-frame">
                            <input class="bill-of-lading1" placeholder="Bill of Lading" type="text"
                                name="billOfLading" />
                        </div>
                    </div>
                    <div class="frame-wrapper1">
                        <div class="consignee-container">
                            <input class="consignee2" placeholder="Consignee" type="text" name="consignee" />
                        </div>
                    </div>
                    <div class="frame-wrapper2">
                        <div class="qty-container">
                            <input class="qty2" placeholder="Qty" type="number" name="qty" />
                        </div>
                    </div>
                    <div class="frame-wrapper3">
                        <div class="volume-container">
                            <input class="volume2" placeholder="Volume" type="number" name="volume" />
                        </div>
                    </div>
                    <div class="frame-wrapper4">
                        <div class="date-container">
                            <input class="date2" style="border: none; font-size: 20px; font-family: Inter; color: #8a8a8a;" placeholder="Date" id="datepicker" name="date" >
                        </div>
                    </div>
                    <div class="frame-parent15">
                        <div class="report-conditions-wrapper">
                            <input class="report-conditions" placeholder="Report Conditions" type="text"
                                name="reportCondition" />
                        </div>
                        {{-- <div class="upload-photo-button-wrapper">
              <button class="upload-photo-button">
                <div class="upload-photo">Upload Photo</div>
                <div class="vector-frame">
                  <img class="vector-icon7" alt="" src="/images/vector-12.svg" />
                </div>
              </button>
            </div> --}}


                        <div class="upload-photo-button-wrapper">
                            <label class="upload-photo-button">
                                <div class="upload-photo">Upload Photo</div>
                                <input type="file" name="photos[]" multiple="multiple" id="photos_upload"
                                    class="upload__inputfile"
                                    style=" width: .1px; height: .1px; opacity: 0; overflow: hidden; position: absolute; z-index: -1;">
                                <div class="vector-frame">
                                    <img class="vector-icon7" alt="" src="/images/vector-12.svg" />
                                </div>
                                </button>
                        </div>

                    </div>
                    <div class="gallery-parent">
                        <div class="gallery1" id="gallery">



                        </div>
                        <div class="frame-wrapper6">
                            <div class="cancel-button-parent">
                                <a style="text-decoration: none;" href="{{ route('dashboardGudang') }}"
                                    class="cancel-button">
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
        </form>
    </div>


    <script>
        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });

        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function() {
                $(this).on('change', function(e) {
                    imgWrap = document.getElementById('gallery');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var html =
                                        "<div class='photos-11' data-number='" + $(
                                            ".upload__img-close").length + "' data-file='" + f
                                        .name + "' ><div class='nama-file-gambar5'> " + f.name +
                                        " </div><img class='gambar-icon5' src='" +
                                        e.target.result +
                                        "'> <button type='button' class='delete-button2'><div class='delete2'>Delete</div><img class='vector-icon10' alt='' src='/images/vector2.svg' /></button></div>";

                                    //   <div class="photos-11">
                                    //   <div class="nama-file-gambar5">photos3.png</div>
                                    //   <img class="gambar-icon5" alt="" src="/images/gambar1@2x.png">

                                    //   <button type="button" class="delete-button2">
                                    //     <div class="delete2">Delete</div>
                                    //     <img class="vector-icon10" alt="" src="/images/vector2.svg">
                                    //   </button>
                                    // </div>


                                    // var html =
                                    //     "<div class='upload__img-box'><div style='background-image: url(" +e.target.result + ")' data-number='" + $(
                                    //         ".upload__img-close").length + "' data-file='" + f
                                    //     .name +
                                    //     "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.insertAdjacentHTML('beforeend', html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".delete-button2", function(e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().remove();
            });
        }
    </script>

</body>

</html>
