<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Home Sekolah</title>
</head>

<body style="background:#e2e8f0">

    @include('inc.navbar')

    @yield('content')

    <footer>
        <div class="container-fluid" style="background: white;">
            <div class="row p-4">
                <div class="col-md-4">
                    <h5>TENTANG</h5>
                    <hr>
                    <p>
                        This example is a quick exercise to illustrate
                        how the top-aligned navbar works. As you scroll, this navbar remains in
                        its original position.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>TAGS</h5>
                    <hr>
                    <button class="btn btn-sm btn-outline-secondary
        mb-2">ISLAM</button>
                    <button class="btn btn-sm btn-outline-secondary
        mb-2">BUDAYA</button>
                    <button class="btn btn-sm btn-outline-secondary
        mb-2">OSIS</button>
                    <button class="btn btn-sm btn-outline-secondary
        mb-2">KEGIATAN</button>
                    <button class="btn btn-sm btn-outline-secondary
        mb-2">KERJA BAKTI</button>
                    <button class="btn btn-sm btn-outline-secondary
        mb-2">PENGUMUMAN</button>
                    <button class="btn btn-sm btn-outline-secondary
        mb-2">INFO</button>
                    <button class="btn btn-sm btn-outline-secondary
        mb-2">PRAMUKA</button>
                </div>
                <div class="col-md-4">
                    <h5>KONTAK</h5>
                    <hr>
                    <p>
                        <i class="fa fa-map-marker" ariahidden="true"></i> This example is a quick exercise to
                        illustrate how
                        the top-aligned navbar works
                        <i class="fas fa-phone"></i> +657-8585-2224
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark">
            <div class="row p-3">
                <div class="text-center text-white font-weight-bold">
                    Copyright © 2020 SMK INDONESIA. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>