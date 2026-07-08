<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edukate - Online Education Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    {{-- map --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>

    
</head>

<body>
    
console.log(Hls);
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar bg-white navbar-light">
            <a href="index.html">
                <h1 class="m-3"><img src="images/kota-ambon.png" alt="kotaambon" height="60"><img src="images/kominfo1.png" alt="kominfo" height="55"></h1>
            </a>
           
            
        </nav>
    </div>
    
    <!-- Navbar End -->
   
    <!-- Menu cctv-->

    <div class="container-fluid px-0">
        <div class="row justify-content-center bg-image mx-1 mb-5" >
            <div class="col-lg-11 py-5" id="map" >
                {{-- <div class="bg-white p-2 my-2" > --}}
                    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

                    <script>
                        // koordinat (contoh: Indonesia)
                        var map = L.map('map').setView([-3.690387, 128.186579], 13);

                        // tile map
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; OpenStreetMap'
                        }).addTo(map);
                        
                        //icon
                        const cctvIcon = L.icon({
                            iconUrl: '/images/cctv.png',
                            iconSize: [40, 40],      // ukuran ikon
                            iconAnchor: [20, 40],    // titik yang menempel ke koordinat
                            popupAnchor: [0, -40]    // posisi popup
                        });

                        // marker
                        const lokasi = [
                        {
                            nama: "CCTV Satpol PP",
                            lat: -3.690387,
                            lng: 128.186579,
                            stream: "http://174.1.1.50:8888/cctv01/index.m3u8"
                        },
                        {
                            nama: "CCTV Pelabuhan",
                            lat: -3.692000,
                            lng: 128.190000,
                            stream: "https://youtu.be/ThGYCL1zERU?si=XUtrOBqUlzkMxxDS"
                        },
                        {
                            nama: "CCTV Pasar",
                            lat: -3.688500,
                            lng: 128.184000,
                            stream: "http://174.1.1.50:8888/cctv02/index.m3u8"
                        }
                    ];

                    lokasi.forEach(function(item, index) {
                        L.marker([item.lat, item.lng], {
                            icon: cctvIcon
                        })
                        .addTo(map)
                        .bindPopup(`
                            <h5>${item.nama}</h5>
                            <video id="video${index}" width="300" controls autoplay muted></video>
                        `)
                        .on('popupopen', function () {

                        const video = document.getElementById(`video${index}`);

                        if (Hls.isSupported()) {
                            const hls = new Hls();
                            hls.loadSource(item.stream);
                            hls.attachMedia(video);
                        } else {
                            video.src = item.stream;
                        }
                        });
                    });
                        // jika mau pop up langsung kebuka aktifkan yang dibawa
                        // .openPopup();
                    </script>
                {{-- </div> --}}
            </div>
        </div>
    </div>

    <!-- Courses End -->
    
    <!-- Footer Start -->

    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-2" style="margin-top: 50px;" >
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-3 mb-7" style="margin-top: 0px;">
                    <h4 class="text-white">Command</h4>
                    <h4 class="text-white">Center</h4>
                    <h4 class="text-white">Kota Ambon</h4>
                </div>
                <div class="col-md-2 mb-3">
                    <h4 class="text-white mb-4">SOP</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2"><i class="fas fa-users mr-2"></i>Kunjungan</a>
                        <a class="text-white-50 mb-2"><i class="fas fa-clipboard-list mr-2"></i>Permintaan Data</a>
                    </div>
                </div>
                <div class="col-md-2.5 mb-3" style="margin-left: 50px;">
                    <h4 class="text-white mb-4">Contact</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <h7 class= "text-white-50 mb-2"><i class="fas fa-envelope mr-2"></i>diskominfosandi@gmail.com</h7>
                        <h8 class= "text-white-50 mb-2"><i class="fas fa-phone-alt mr-2"></i>+6280987654321</h8>
                        <h8 class= "text-white-50 mb-2" class="text-50 mb-2"><i class="fab fa-whatsapp mr-2"></i>+6281234567890</h8>
                    </div>
                </div>
                <div class="col-md-3 mb-4" style="margin-left: 50px;">
                    <h4 class="text-white mb-4">About Us</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <h8 class= "text-white-50 mb-2">Bidang <strong>e-Goverment</strong> <br> Dinas Komunikasi Informatika dan Persandian <br>Pemerintah Kota Ambon</h8>
                        <div class="row">
                            {{-- <div class="col-md-1 d-flex align-items-center justify-content-center">
                                <i style="color: rgb(86, 108, 220);" class="fas fa-map-marker-alt"></i>
                            </div> --}}
                            <div class="col-md-10">
                                <h8 class= "text-white-50"><strong>Gedung Balai Kota Ambon </strong><br>Jl. Sultan Hairun, Kel. Honipopu - Lantai 4</h8>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="col-md-15 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">DISKOMINFO KOTA AMBON</a>. All Rights Reserved.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https://www.facebook.com/share/16RG7ft8qw/?mibextid=wwXIfr">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.tiktok.com/@diskominfosandi_ambon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                      </svg>
                    </a>
                    <a class="text-white px-2" href="https://www.instagram.com/diskominfosandi_ambon/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="https://www.youtube.com/c/PEMERINTAHKOTAAMBON">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

{{-- rtsp://training:Training-2021@174.1.1.102:554/Streaming/Channels/101 --}}