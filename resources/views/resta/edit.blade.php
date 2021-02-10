@extends('layouts.app', ['title' => 'Food Resta | Update Data'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    Update Data Resta
                </div>
                <div class="card-body">
                    <form action="/resta/{{ $resta->id }}/update" method="post">
                        @method('patch')
                        @csrf
                        @include('resta.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('resta.partials.guide')
        </div>
    </div>
</div>
@endsection