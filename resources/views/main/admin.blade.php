<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK Lapor!</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-top-lapor" id="report"></div>

    
  <h3 class="subtittle text-center mt-5 process-subtittle">DAFTAR ASPIRASI & PENGADUAN SMK</h3>
  <p class="process-content text-center mt-3">Data - Data Aspirasi & Pengaduan Siswa</p>


  {{-- FILTER PENCARIAN TGL,HARI,KATEGORI --}}

  {{-- TABLE DATA --}}
  @include('tables.tableAdmin')
  <div class="container">

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="button-solid">Logout</button>
    </form>

  </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>