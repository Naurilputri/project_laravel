<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Nauril Putri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #ffbdf0, #fff7e4);
        }
        .profile-card {
            border-radius: 20px;
        }
        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border: 5px solid white;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">MyLaravelApp</a>
        <div>
            <a href="/" class="btn btn-outline-light btn-sm">Home</a>
        </div>
    </div>
</nav>

<div class="container mt-5 mb-5">

    <div class="card profile-card shadow-lg p-4">

        <div class="row">

            <!-- Left Side -->
            <div class="col-md-4 text-center border-end">
                <img src="{{ asset('images/naur.jpeg') }}"
                     class="rounded-circle profile-img mb-3"
                     alt="Profile">

                <h4 class="fw-bold">Nauril Putri</h4>
                <p class="text-muted">Mahasiswa Teknik Informatika</p>

                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-primary">Follow</a>
                    <a href="#" class="btn btn-outline-secondary">Message</a>
                </div>

                <hr>

                <p><strong>Email:</strong><br> naurilputriit@gmail.com</p>
                <p><strong>Location:</strong><br> Indonesia</p>
            </div>

            <!-- Right Side -->
            <div class="col-md-8">

                <h5 class="section-title">About Me</h5>
                <p>
                    Saya adalah mahasiswa yang sedang mempelajari framework Laravel.
                    Saya tertarik dalam pengembangan aplikasi web modern dan ingin menjadi
                    full-stack developer profesional.
                </p>

                <hr>

                <h5 class="section-title">Skills</h5>

                <p>HTML & CSS</p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" style="width: 90%">90%</div>
                </div>

                <p>PHP & Laravel</p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-info" style="width: 80%">80%</div>
                </div>

                <p>JavaScript</p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-warning" style="width: 75%">75%</div>
                </div>

                <hr>

                <h5 class="section-title">Education</h5>
                <ul>
                    <li>Workshop Pemrograman Framework</li>
                    <li>Belajar Laravel & Git</li>
                    <li>Dasar HTML, CSS, PHP</li>
                </ul>

                <hr>

                <h5 class="section-title">Social Media</h5>
                <a href="#" class="btn btn-dark btn-sm">GitHub</a>
                <a href="#" class="btn btn-primary btn-sm">LinkedIn</a>
                <a href="#" class="btn btn-danger btn-sm">Instagram</a>

            </div>

        </div>

    </div>

</div>

</body>
</html>
