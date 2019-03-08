@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('master')

@section('header')
  <nav>
    <ul class="nav nav-pills pull-right">
      <li role="presentation"><a href="#"></a></li>
      <li role="presentation"><a href="#"></a></li>
    </ul>
  </nav>
  <h3 class="text-muted"><a href="#"></a></h3>
@stop

@section('sidebar-up')
  <h1>Hallo, Selamat Datang!</h1>
@stop

@section('sidebar-left')
  <h4>Tugas Laravel</h4>
  <p>Tugas Laravel Sintia Rahayu Kelas XI RPL 1</p>

  <h4>Laravel</h4>
  <p>Laravel adalah kerangka kerja aplikasi web berbasis PHP yang open source, menggunakan konsep model–view–controller (MVC). Laravel berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai tempat berbagi kode</p>

@stop

@section('footer')
  <p>&copy; 2017 www.sintiarhy.blogspot.co.id, Inc.</p>
@stop
