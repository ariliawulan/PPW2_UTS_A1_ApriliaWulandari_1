@extends('layout.master')

@section('content')

<h4 class="text-center">DAFTAR PEMAIN SEPAK BOLA U-19</h4>

<br>

<div>
    <table class="table table-bordered table-striped-columns"> 
        <thead>
            <tr class="table table-secondary">
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">ID PEMAIN</th>
                <th scope="col" class="text-center">NAMA PEMAIN</th>
                <th scope="col" class="text-center">NO PUNGGUNG</th>
                <th scope="col" class="text-center">POSISI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection