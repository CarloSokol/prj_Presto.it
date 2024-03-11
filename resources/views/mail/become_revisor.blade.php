<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        Un utente ha richiesto di lavorare con noi:<br>
        Ecco i tuoi dati:
        Nome: {{$user->name }}<br>
        Email: {{$user->email}}<br>
        <p>Se vuoi renderlo revisore clicca qui:</p>
        <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>
    </div>
</body>
</html>