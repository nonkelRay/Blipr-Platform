@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subscription plans:</div>

                <p>Hallo, {{ Auth::user()->name }}</p>
                <a href="{{ route('home') }}">Free</a>
            </div>
        </div>
    </div>
</div>
@endsection