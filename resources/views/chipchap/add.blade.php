<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">
    {{-- judul utama pada web --}}
    <div class="text-center">
        <p class="h1 fw-bolder">PT X</p>
        <p class="h3 mb-4">Data Karyawan</p>
    </div>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg"  style="background-color: #8bc5ef; border-radius: 15px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{route('karyawan.main')}}">Home</a>
                    <a class="nav-link" href="{{route('karyawan.view')}}">View Data</a>
                    <a class="nav-link" href="{{route('karyawan.change')}}">Change Data</a>
                    <a class="nav-link active fw-medium" aria-current="page" href="{{route('karyawan.add')}}">Add New Data</a>
                </div>
          </div>
        </div>
    </nav>

    {{-- display error --}}
    <div class="mt-3">
        @if($errors->any())
        <div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:" style="height: 1.25rem; width: 1.25rem;">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <div class="ml-2">
                Data yang dimasukkan tidak sesuai, mohon input kembali ! 
            </div>
        </div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    
    {{-- input data karyawan --}}
    <form method="post" action="{{route('karyawan.store')}}">
        @csrf
        @method('post')
        <div class="mt-3 mb-3">
            <label class="form-label">Nama Karyawan</label>
            <input type="text" name="name" class="form-control" placeholder="5 - 20 karakter">
        </div>

        <div class="mb-3">
            <label class="form-label">Umur Karyawan</label>
            <input type="integer" name="umur" class="form-control" placeholder="> 20 tahun">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Karyawan</label>
            <input type ="text" name="alamat" class="form-control" placeholder="10 - 40 karakter">
        </div>

        <div class="mb-3">
            <label class="form-label">No telp. Karyawan</label>
            <input type="numeric" name="telp" class="form-control" placeholder="9 - 12 karakter">
        </div>

        <div class="d-flex justify-content-center">
            <button type ="submit" class="btn btn-success mt-2">Submit</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>