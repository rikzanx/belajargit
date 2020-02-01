<!DOCTYPE html>
<html>
<head>
<title>BIODATA SISWA</title>
</head>
<body>
    <h1>BIODATA</h1>
    <p>
        Nama : {{ $nama }}
    </p>
    <ul>
        @foreach($matkul as $m)
        <li>{{ $m }}</li>
        @endforeach
    </ul>
</body>
</html>