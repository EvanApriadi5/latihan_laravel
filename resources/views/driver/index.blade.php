@extends('layouts.master')

@section('content')
<div class="container"> 
    <a href="{{ url('ad-driver')}}" class="btn btn-primary">add</a>

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
</table>
    </div>
@endsection