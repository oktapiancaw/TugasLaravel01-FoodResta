@extends('layouts.app', ['title' => 'Food Resta | Add Data'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    Create Data Resta
                </div>
                <div class="card-body">
                    <form action="{{ route('resta.store') }}" method="post">
                        @csrf
                        @include('resta.partials.form-control', ['submit' => 'Create'])
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