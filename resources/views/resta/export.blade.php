<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Food Resta' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="mb-1 d-flex justify-content-between align-items-center">
                <h1>Data Resta</h1>
            </div>
            @if($data_resta->count())
            <table class="table">
                <thead>
                    <tr>
                        <th width="10" scope="col">No</th>
                        <th width="140" scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col" class="text-center">Stock</th>
                        <th width="100" scope="col" class="text-center">Price</th>
                        <th width="120" scope="col" class="text-center">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_resta as $data)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td> {{ Str::limit($data->name, 20)}} </td>
                        <td> {{$data->type}} </td>
                        <td class="text-center"> {{$data->stock}} </td>
                        <td> Rp. {{ number_format($data->price,2,',','.') }} </td>
                        <td class="text-center"> {{date('d F Y', strtotime($data->created_at))}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="row">
                <div class="col text-center">
                    <h4>No data here yet</h4>
                </div>
            </div>
            @endif
        </div>
    </div>
</body>
</html>