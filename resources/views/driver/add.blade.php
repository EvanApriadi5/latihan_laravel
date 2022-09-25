@extends('layouts.master')

@section('content')
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

@endsection
