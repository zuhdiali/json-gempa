<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width" />

    <title>Data Gempa</title>

    <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css" />
</head>

<body onload="loadXML()">
    <div class="container-fluid bg-danger p-2">
        <h1 class="text-white text-center">15 Data Gempa Terakhir yang Dirasakan</h1>
    </div>
    <div class="container-fluid">
        <div class="alert alert-danger mt-2">Catatan:  Halaman web ini akan dapat dimuat dengan baik jika dibuka menggunakan aplikasi XAMPP atau sejenisnya serta menggunakan <a href="https://www.youtube.com/watch?v=KruSUqLdxQA&ab_channel=eccoremproject" target="_blank">ekstensi CORS</a> pada browser.</div>
        <div class="table-responsive">
            <table class="table table-striped table-active">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">DateTime</th>
                        <th scope="col">Koordinat</th>
                        <th scope="col">Lintang</th>
                        <th scope="col">Bujur</th>
                        <th scope="col">Magnitude</th>
                        <th scope="col">Kedalaman</th>
                        <th scope="col">Wilayah</th>
                        <th scope="col">Dirasakan</th>
                    </tr>
                </thead>
                <tbody id="content">
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="bg-danger mt-3 p-3">
        <h6 class="text-center text-white">Halaman web ini dibuat oleh Zuhdi Ali Hisyam</h6>
    </div>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="script-gempa.js" type="text/javascript"></script>
</body>
</html>