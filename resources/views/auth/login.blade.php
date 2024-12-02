<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungimas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Prisijungimas</h1>

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">El. paštas</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Įveskite el. pašto adresą" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Slaptažodis</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Įveskite slaptažodį" required>
            </div>

            <button type="submit" class="btn btn-primary">Prisijungti</button>
        </form>
    </div>
</body>
</html>
