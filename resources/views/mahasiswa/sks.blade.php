<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <main class="container-fluid my-0 p-0">
        <div>
            <p>Jadwal ID: {{ $jadwal->id_jadwal }}</p>
            <p>Kode MK: {{ $jadwal->kodemk }}</p>
            <p>Hari: {{ $jadwal->hari }}</p>
            <p>Jam Mulai: {{ $jadwal->jam_mulai }}</p>
            <p>Jam Selesai: {{ $jadwal->jam_selesai }}</p>
            <p>SKS: {{ $jadwal->sks }}</p>
            <p>id mahasiswa: {{ $jadwal->id_mahasiswa }}</p>
        </div>
    </main>    
</body>
</html>

