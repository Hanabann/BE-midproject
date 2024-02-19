<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .profile-image {
            width: 150px; /* Adjust the size as needed */
            height: 150px;
            border-radius: 70%; /* Make it a circle */
            overflow: hidden; /* Hide overflow content outside the circle */
            margin: 20px; /* Center the image */
        }

        .profile-text {
            max-width: 800px;
            margin-left: 20px; /* Adjust the margin as needed */
        }
    </style>

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
                    <a class="nav-link active fw-medium" aria-current="page" href="{{route('karyawan.main')}}">Home</a>
                    <a class="nav-link" href="{{route('karyawan.view')}}">View Data</a>
                    <a class="nav-link" href="{{route('karyawan.change')}}">Change Data</a>
                    <a class="nav-link" href="{{route('karyawan.add')}}">Add New Data</a>
                </div>
          </div>
        </div>
    </nav>

    <br>

    {{-- tampilan main page --}}
    <div class="text-center">
            <h2 class="mb-4">Welcome to PT X</h2>
            <h3 class="mb-5">Meet the CEO</h3>
    </div>
 
    {{-- display CEO --}}
    <div style="display: flex; align-items: center; justify-content: center;">
        <div class="profile-image">
            <img src="glenpowell (1).jpg" class="p" alt="Profile Image">
        </div>
        
        <div class="profile-text text-break">
            <h4 class="mb-3">Mr. X</h4>
            <h6>
                Lorem ipsum dolor sit amet, essent admodum qui ex, pro atomorum qualisque intellegam ut. Duo ne doming integre. Has ei wisi accusata, sed id ullum blandit. In detracto vivendum abhorreant per, est ei laudem noster definiebas. Te pri unum utinam habemus.
            </h6>
            <hr>
        </div>

    </div>

    {{-- display visi misi --}}
    <div class="text-center text-break mt-5 mx-auto" style="max-width: 800px;">
        <h4>Visi</h4>
        <h6>Lorem ipsum dolor sit amet, ridens elaboraret id vim. Cu his alia vivendum. Modo mazim eum an, at option disputationi duo. An esse vidisse platonem mel, scaevola facilisis mel ne, usu blandit eligendi ut. Et sed mazim invenire. Assum salutatus disputando ut ius, ne eam tantas nostrud, atqui lucilius intellegat an mei.</h6>

        <br>
        
        <h4>Misi</h4>
    </div>
    
    <div class="text-break d-flex justify-content-center mx-auto mb-5" style="max-width:800px;">
        <h6 class="text-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
            </svg>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            <br> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
            </svg>
            Autem incidunt dolorum nobis recusandae? 
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
            </svg>
            Dolor veniam sunt sequi consequuntur voluptas odit, dolorum accusantium architecto.
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10"/>
            </svg>
            Nihil repellat animi vero, dolorum explicabo voluptas in fugiat, aut corrupti.
        </h6>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>