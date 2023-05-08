<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h1 class="text-center p-3">Treni</h1>
            <div class="row g-2">
                @foreach ($trains as $train)
                <ul class="list-group col-2 h-100">
                    <li class="list-group-item"><b>numero:</b> {{$train->train_code}}</li>
                    <li class="list-group-item"><b>In partenza da: </b>{{$train->departure_station}}<b> alle ore: </b>{{$train->departure_time}}</li>
                    <li class="list-group-item"><b>In arrivo a: </b>{{$train->arrival_station}}<b> alle ore: </b>{{$train->arrival_time}} </li>
                    <li class="list-group-item">{{$train->on_time == 0 ? 'In ritardo' : 'In orario' }}</li>
                    <li class="list-group-item">{{$train->cancelled == 0 ? '-' : 'Cancellato' }}</li>
                </ul>
                @endforeach
            </div>
            <h1 class="text-center p-3">Treni in arrivo oggi</h1>
            <div class="row g-2">
                @foreach ($todayTrains as $train)
                <ul class="list-group col-2 h-100">
                    <li class="list-group-item"><b>numero:</b> {{$train->train_code}}</li>
                    <li class="list-group-item"><b>In partenza da: </b>{{$train->departure_station}}<b> alle ore: </b>{{$train->departure_time}}</li>
                    <li class="list-group-item"><b>In arrivo a: </b>{{$train->arrival_station}}<b> alle ore: </b>{{$train->arrival_time}} </li>
                    <li class="list-group-item">{{$train->on_time == 0 ? 'In ritardo' : 'In orario' }}</li>
                    <li class="list-group-item">{{$train->cancelled == 0 ? '-' : 'Cancellato' }}</li>
                </ul>
                @endforeach
            </div>
        </div>
    </body>
</html>
