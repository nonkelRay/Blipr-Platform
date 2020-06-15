@extends('layouts.venue')

@section('content')
<div class="venue-home main-content">
    <div class="container">
        <h1>Welcome {{Auth::guard('venue')->user()->name}}</h1>
    </div>
</div>
@endsection
