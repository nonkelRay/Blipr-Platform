@extends('layouts.app')

@section('content')
<div class="subscription main-content">
    <div class="container">
        <h1>Pricing</h1>
        <p>We like to offer different types of plans because we know that all of our users are unique. <br> Not convinced yet? <a href="{{ route('register') }}">Try our free trial today!</a></p>
        <div class="mobile-plans">
            <h2 class="free">Free Trial</h2>
            <div class="options">
                <ul>
                    <li>Amount of Blips</li>
                    <li>Amount of concerts</li>
                    <li>Access to Blipr wearable</li>
                    <li>Access to smartwatch app</li>
                    <li>Full access to Blipr app</li>
                </ul>
                <ul class="small-list">
                    <li>3</li>
                    <li>1</li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                </ul>
            </div>
            <a href="{{ route('register') }}" class="btn">Try for free</a>
            <h2>1 Month, 3 Months or 1 Year</h2>
            <div class="options">
                <ul>
                    <li>Amount of Blips</li>
                    <li>Amount of concerts</li>
                    <li>Access to Blipr wearable</li>
                    <li>Access to smartwatch app</li>
                    <li>Full access to Blipr app</li>
                </ul>
                <ul class="small-list">
                    <li>&#8734;</li>
                    <li>&#8734;</li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                </ul>
            </div>
            <span href="#" class="btn btn--disabled">Coming soon</span>
        </div>
        <div class="desktop-plans">
            <ul>
                <li>Amount of Blips</li>
                <li>Amount of concerts</li>
                <li>Access to Blipr wearable</li>
                <li>Access to smartwatch app</li>
                <li>Full access to Blipr app</li>
                <li>Connect with friends</li>
                <li>High quality video content</li>
                <li>Relive Blips at any time</li>
                <li>Share Blips on social media</li>
                <li>Fully enjoy concerts</li>
            </ul>
            <div class="option">
                <h2 class="free">Free Trial</h2>
                <ul class="small-list">
                    <li>3</li>
                    <li>1</li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                </ul>
                <a href="{{ route('register') }}" class="btn">Try for free</a>
            </div>
            <div class="option">
                <h2>1 Month</h2>
                <ul class="small-list">
                    <li>Unlimited</li>
                    <li>Unlimited</li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                </ul>
                <span href="#" class="btn btn--disabled">Coming soon</span>
            </div>
            <div class="option">
                <h2>3 Months</h2>
                <ul class="small-list">
                    <li>Unlimited</li>
                    <li>Unlimited</li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                </ul>
                <span href="#" class="btn btn--disabled">Coming soon</span>
            </div>
            <div class="option">
                <h2>1 Year</h2>
                <ul class="small-list">
                    <li>Unlimited</li>
                    <li>Unlimited</li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                    <li><img src="{{ @asset('images/check.png') }}" alt=""></li>
                </ul>
                <span href="#" class="btn btn--disabled">Coming soon</span>
            </div>
        </div>
    </div>
</div>
@endsection