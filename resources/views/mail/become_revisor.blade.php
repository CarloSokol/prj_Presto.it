<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richiesta di collaborazione</title>
    <style>
        /* Stili per il contenitore principale */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        /* Stili per il logo */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Stili per il contenuto */
        .content {
            font-family: Arial, sans-serif;
        }

        /* Stili per il pulsante */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="logo">
            <img src="/img/prestoit_logo.png" alt="Logo Presto.it" width="30%">
        </div>
        <div class="content">
            <p>Un utente ha richiesto di lavorare con noi:</p>
            <p>Ecco i suoi dati:</p>
            <ul>
                <li><strong>Nome:</strong> {{ $user->name }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
            </ul>
            <p><strong>Presentazione:</strong></p>
            <p>{{ $description }}</p>
            <p>Se vuoi renderlo revisore, clicca qui:</p>
            <a class="btn" href="{{ route('revisor.make', compact('user')) }}">Rendi revisore</a>
        </div>
    </div>
</body>
</html>
