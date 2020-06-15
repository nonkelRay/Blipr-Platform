@extends('layouts.venue')

@section('content')
<<<<<<< HEAD
<div class="venue-home main-content">
    <div class="container">
        <h1>Welcome {{Auth::guard('venue')->user()->name}}</h1>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
>>>>>>> parent of 7fcf52d... Merge pull request #5 from nonkelRay/revert-4-feature/venue-can-login
    </div>
</div>
@endsection
