<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Tabel Driver</h1>
    <a href="{{ url('add-driver') }}" class="btn btn-primary">Tambah</a>
    
    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kota</th>
                <th>Jumlah Order</th>
                <th>Pendapatan</th>

            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Evan</td>
                <td>Palembang</td>
                <td>20</td>
                <td>1.000.000</td>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <td>2</td>
                <td>Juminten</td>
                <td>Jogja</td>
                <td>30</td>
                <td>2.000.000</td>
            </tr>
        </tbody>




</body>

</html>