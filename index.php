<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .header-container {
            background: linear-gradient(90deg, #343a40 0%, #4b5257 100%);
            color: #ffffff;
            text-align: center;
            padding: 3rem 0;
            margin-bottom: 1rem;
        }

        .header-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .sub-title {
            font-size: 1.5rem;
            opacity: 0.8;
            margin-bottom: 0;
        }

        .card-container {
            margin-top: 2rem;
        }
    </style>
   
    <title>Over The Air</title>
    <link rel="shortcut icon" href="image/logo1.ico" type="image/x-icon">
</head>
<body>
<div class="container-fluid header-container">
        <h1 class="header-title">APLIKASI MANAJEMEN PEMBARUAN FIRMWARE</h1>
        <p class="sub-title">OVER-THE-AIR WEB UPDATER</p>
    </div>

    <div class="container card-container">
        <!-- Registration Form -->
        <form action="URL_ACTION" method="post">
        <div class="mb-3">
            <label for="mac_address" class="form-label">MAC Address Perangkat</label>
            <input type="text" class="form-control" id="mac_address" name="mac_address" required>
        </div>
        <div class="mb-3">
            <label for="label" class="form-label">Label Perangkat</label>
            <input type="text" class="form-control" id="label" name="label">
        </div>            
        <div class="d-flex justify-content-between">
        <a href="list_devices.php" class="btn btn-primary">DAFTAR PERANGKAT</a>
        <button type="submit" class="btn btn-success float-end">TAMBAH PERANGKAT</button>
    </div>
</form>

    </div>
    
</div>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
