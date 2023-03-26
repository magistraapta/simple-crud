@extends('layouts.main')

@section('container')
<h1>Nama: {{ $mhs["nama"] }}</h1>
<h3>NIM: {{ $mhs["NIM"] }}</h3>
<p>Password: {{ $mhs["password"] }}</p>

<a href="/">Back to Home</a>
@endsection