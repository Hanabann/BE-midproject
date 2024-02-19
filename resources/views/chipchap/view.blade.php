<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Chipi Chapa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">
    {{-- judul utama pada web --}}
    <div class="text-center">
        <p class="h1 fw-bolder">PT X</p>
        <p class="h3 mb-4">Data Karyawan</p>
    </div>

    {{-- navbar --}}
    <nav class="navbar sticky-top navbar-expand-lg"  style="background-color: #8bc5ef; border-radius: 15px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{route('karyawan.main')}}">Home</a>
                    <a class="nav-link active fw-medium" aria-current="page" href="{{route('karyawan.view')}}">View Data</a>
                    <a class="nav-link" href="{{route('karyawan.change')}}">Change Data</a>
                    <a class="nav-link" href="{{route('karyawan.add')}}">Add New Data</a>
                </div>
          </div>
        </div>
    </nav>

    <br>

    {{-- pesan berhasil tambah --}}
    <div>
        @if(session()->has('success'))
            <div class="alert alert-info">
                {{-- merujuk pada message sukses pada karyawanController --}}
                {{session('success')}} 
                <button type="button" class="btn-close position-absolute top-0 end-0" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    {{-- tabel data karyawan --}}
    <div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">Nama Karyawan</th>
                <th class="text-center" style="width: 140px;">Umur Karyawan</th>
                <th class="text-center">Alamat Karyawan</th>
                <th class="text-center" style="width: 170px;">No telp. Karyawan</th>
            </tr>
        </thead>

        {{-- data dari table --}}
        @foreach($karyawans as $karyawan)
        
            <tr>
                <td>{{ $karyawan->name}}</td>
                <td class="text-center">{{ $karyawan->umur}}</td>
                <td>{{ $karyawan->alamat}}</td>
                <td class="text-center">{{ $karyawan->telp}}</td>
            </tr>

        @endforeach

        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>