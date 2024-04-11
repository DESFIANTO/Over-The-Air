<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pembaruan Firmware</title>
    

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
            margin-bottom: 1.5rem;
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
            align-items: center;
        }

        button {
            padding: 0.5rem 1rem;
            background-color: #dc3545;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c82333;
        }
        
        main {
            padding: 2rem;
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
            return confirm("Apakah Anda yakin ingin menghapus firmware ini?");
        }
    </script>
</head>
<body>
    <header class="container-fluid header-container">
        <h1 class="header-title">Riwayat Pembaruan Perangkat: </h1>
    </header>
    <main>
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Berkas</th>
                    <th>Versi Firmware</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>
                            <form method="POST" action="/delete_history" style="display: inline;">
                                <input type="hidden" name="entry_id" value="{{ entry.id }}">
                                <input type="hidden" name="mac_address" value="{{ device.mac_address }}">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDeletion();">Hapus</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        </table>
    </main>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
