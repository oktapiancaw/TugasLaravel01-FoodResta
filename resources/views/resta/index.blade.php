@extends('layouts.app')
@section('title', 'Food Resta | Data')

@section('content')
<div class="container">
    @if($data_info['type'])
    @include('resta.partials.chart', ['dataset' => $data_info['type']])
    @endif
    <hr>
    <div class="row mt-2">
        <div class="col-md-8">
            <div class="mb-1 d-flex justify-content-between align-items-center">
                <h1>Data Resta</h1>
                <a href="{{ route('resta.export') }}" class="btn btn-lg btn-outline-success"><i class='bx bx-export'></i> Export to Pdf</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="my-0">Data List</h5>
                </div>
                <div class="card-body">
                    @if($data_resta->count())
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Stock</th>
                                <th scope="col" class="text-center">Price</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_resta as $data)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td> {{ Str::limit($data->name, 20)}} </td>
                                <td> {{$data->type}} </td>
                                <td> {{$data->stock}} </td>
                                <td width="140"> Rp. {{ number_format($data->price,2,',','.') }} </td>
                                <td width="160" class="text-center">
                                    <a href="" class="btn btn-sm btn-outline-success mx-1"><i class='bx bx-cart'></i></a>
                                    @if(auth()->user()->is_admin == 1)
                                    <a href="{{ route('resta.edit', $data->id)}}" class="btn btn-sm btn-warning mx-1"><i class='bx bx-edit-alt'></i></a>
                                    <form class="d-inline" action="{{ route('resta.delete', $data->id)}}" method="post">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="btn btn-sm btn-danger mx-1" onclick="return confirm('Apakah anda yakin?')"><i class='bx bx-trash'></i></button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data_resta->links() }}
                    @else
                    <div class="row">
                        <div class="col text-center">
                            <h4>No data here yet</h4>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @if(auth()->user()->is_admin == 1)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="my-0">Data Information</h5>
                </div>
                <div class="card-body row">
                    <p class="col-5 text-primary font-weight-bold">Data Name</p>
                    <p class="col-7 text-info">: {{ $data_info['name']}}</p>
                    @if($data_resta->count())
                    <p class="col-5 text-primary font-weight-bold">Total Data</p>
                    <p class="col-7 text-info">: {{ $data_info['total']}}</p>
                    <p class="col-5 text-primary font-weight-bold">Highest Price</p>
                    <p class="col-7 text-info">: Rp. {{ number_format($data_info['max'],2,',','.')}}</p>
                    <p class="col-5 text-primary font-weight-bold">Lowest Price</p>
                    <p class="col-7 text-info">: Rp. {{ number_format($data_info['min'],2,',','.')}}</p>
                    <p class="col-5 text-primary font-weight-bold">Avarage Price</p>
                    <p class="col-7 text-info">: Rp. {{ number_format($data_info['avg'],2,',','.')}}</p>
                    @endif
                    <div class="col">
                        <a href="{{ route('resta.create')}}" class="btn btn-lg btn-primary btn-block">Add Data</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection