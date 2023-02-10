<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <section style="overflow-x: hidden;">
        <div class="row vh-100">
            <div class="col-5 bg-green py-5 px-5 text-center">
                <h1 class="header-login">Daftar disini dan jadilah <br> bagian dari kami</h1>
                <p class="caption-login">
                    meningkatkan keterampilan Anda di era digitalisasi ini <br> akan sangat membantu dalam berbagai hal.
                </p>

                <img src="{{ asset('frontend/images/register-image.svg') }}" alt="" width="800">
            </div>
            <div class="col-7 py-5 px-5 text-center">
                <img src="{{ asset('frontend/images/logo.svg') }}" alt="">
                <h3 class="mt-5 fw-bold">Daftar Untuk Akun Baru</h3>
                <p>Lengkapi form register dibawah dengan data yang benar</p>
                <div class="card mx-auto border-0 bg-card-register" style="width: 32rem;">

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
