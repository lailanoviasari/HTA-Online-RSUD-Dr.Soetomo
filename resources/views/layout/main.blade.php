<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') | Universitas Negeri Surabaya</title>
</head>

<body>
    <!--begin::Header
     untuk memasukkan file (layout adalah folder, header adalah nama file)-->
    @include('layout.header')
    <!--end::Header-->
    <br>

    <!--begin::Content
    untuk memasukkan atau menampilkan section dari suatu file-->
    @yield('content')
    <!--end::Content-->
    <br>
    <!--begin::Footer-->
    @include('layout.footer')
    <!--end::Footer-->
</body>

</html>
