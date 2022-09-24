<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nama_driver" class="form-label">Nama Driver</label>
                    <input type="text" class="form-control" id="nama_driver" name="nama_driver" placeholder="masukan nama driver" value="<?= @$_POST['nama_driver'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="kota_driver" class="form-label">Kota Driver</label>
                    <input type="text" class="form-control" id="kota_driver" name="kota_driver" placeholder="masukan kota driver" value="<?= @$_POST['kota_driver'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_order" class="form-label">Jumlah Order</label>
                    <input type="number" class="form-control" id="jumlah_order" name="jumlah_order" placeholder="masukan jumlah order" value="<?= @$_POST['jumlah_order'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="pendapatan_driver" class="form-label">Pendapatan Driver</label>
                    <input type="number" class="form-control" id="pendapatan_driver" name="pendapatan_driver" placeholder="masukan pendapatan driver" value="<?= @$_POST['pendapatan_driver'] ?>" required>
                </div>


                <button name="proses" class="btn btn-primary"> SUBMIT </button>
            </form>
        </div>
    </div>
</body>

</html>