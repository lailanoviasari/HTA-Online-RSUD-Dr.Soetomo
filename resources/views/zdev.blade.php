@extends('layout.main')
@section('title', $title)
@section('content')
    <div style="border:2px solid #000000;border-radius: 20px">
        <div style="padding: 20px;">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $name }}</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: {{ $NIM }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>: {{ $job }}</td>
                    </tr>
                    <tr>
                        <td>Instansi</td>
                        <td>: {{ $company }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ $address }}</td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>: {{ $hobi }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
