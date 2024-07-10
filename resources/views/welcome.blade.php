@extends('layouts.app')

@section('title', 'Home page')

@section('content')
<p>Welcome, {{ Auth::user()->name }}!</p>
<h1>Selamat Datang di Akademik Sederhana</h1>
@endsection
