@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>  

Selamat datang {{ Auth::user()->name }} 
<br><br>

@endsection