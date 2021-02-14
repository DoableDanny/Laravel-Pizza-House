@extends('layouts.layout')

@section('content')    
<div class="pizza-index">
  @if (Route::has('login'))
  <div class="auth-nav">
    @auth
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endif
    @endauth
  </div>
  @endif

  <div class="content mt-3">
    <div class="flex-col">
      <img src="/img/pizza-house.png" alt="pizza house logo">
      <h2 class="title">The North's Best Pizzas</h2>
      <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
    </div>
    <p class="msg">{{ session('msg') }}</p>
  </div>
</div>
@endsection
