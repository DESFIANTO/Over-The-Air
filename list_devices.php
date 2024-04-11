<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Perangkat</title>
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #495057;
            margin: 0;
            padding: 0;
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

        h1 {
            font-size: 2rem;
        }

        main {
            padding: 2rem;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        label {
            margin-bottom: 0.5rem;
            display: block;
            width: 100%;
        }

        input {
            margin-bottom: 1rem;
            padding: 0.5rem;
            border: 1px solid #ced4da;
            border-radius: 3px;
            flex: 1; 
            margin-right: 10px; 
        }

        button {
            padding: 0.5rem 1rem;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button.delete-button {
            background-color: #dc3545;
        }

        button:hover {
            background-color: #218838;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: 1rem;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
    <script>
        function confirmDeletion() {
            return confirm("Apakah Anda yakin ingin menghapus perangkat ini?");
        }
    </script>
</head>
<body>
    <header class="container-fluid header-container">
        <h1 class="header-title">Daftar Perangkat Terhubung</h1>
    </header>
    <main>
        <table class="table">
            <thead>
                <tr>
                  
                    <th>MAC Address</th>
                    <th>Nama Perangkat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        
                        <td> </td>
                        <td> </td>
                        <td>
                        <!-- Tombol Riwayat Pembaruan -->
                    
                        <form style="display: inline;">
                            <input type="hidden" name="mac_address" value="<?php echo isset($_POST['mac_address']) ? $_POST['mac_address'] : ''; ?>">
                            <a href="riwayat_pembaruan.php<?php echo isset($_POST['mac_address']) ? $_POST['mac_address'] : ''; ?>" class="btn btn-primary">Riwayat Pembaruan</a>
                        </form>

                        <!-- Tombol Hapus -->
                        <form onsubmit="return false;" style="display: inline;">
                        <input type="hidden" name="mac_address" value="MAC_ADDRESS_DEVICE">
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapus()">Hapus</button>
                    </form>

                    <script>

                        
                        function hapus() {
                            var konfirmasi = confirm('Apakah Anda yakin ingin menghapus?');
                            if (konfirmasi) {
                                // Tambahkan logika penghapusan di sini jika diperlukan
                                alert('Item telah dihapus.'); // Hanya untuk contoh
                            }
                        }
                    </script>

                    </td>

                    </tr>
            </tbody>
        </table>        

        <form action="/upload" method="post" enctype="multipart/form-data">
            <label for="mac_address_upload" class="form-label">Perangkat yang akan Diperbarui</label>
            <input type="text" id="mac_address_upload" name="mac_address" required><br>
        
            <label for="firmware_upload" class="form-label">Unggah Berkas</label>
            <input type="file" id="firmware_upload" name="firmware" accept=".bin" required><br>
        
            <button type="submit" class="btn btn-success">PERBARUI FIRMWARE</button>
        </form>
    </main>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
