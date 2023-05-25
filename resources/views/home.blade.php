<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="pt-5">
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($trains as $train)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>{{ $train['azienda'] }}</h4>
                                <div>Stazione di partenza: {{ $train['stazione_di_partenza'] }}</div>
                                <div>Stazione di arrivo: {{ $train['stazione_di_arrivo'] }}</div>
                                <div>Data di partenza: {{ $train['data_di_partenza'] }}</div>
                                <div>Orario di partenza: {{ $train['orario_di_partenza'] }}</div>
                                <div>Orario di arrivo: {{ $train['orario_di_arrivo'] }}</div>
                                <div>Codice treno: {{ $train['codice_treno'] }}</div>
                                <div>Numero di carrozze: {{ $train['numero_carrozze'] }}</div>
                                <div>In orario: {{ $train['in_orario'] ? 'Si' : 'No' }}</div>
                                <div>Cancellato: {{ $train['cancellato'] ? 'Si' : 'No' }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
