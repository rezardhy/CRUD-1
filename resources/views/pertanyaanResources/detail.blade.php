@extends('master')
@section('konten')
<div class="callout callout-info">
    <a href="{{url('/pertanyaan')}}  ">
        <button class="btn btn-default">Lihat Pertanyaan Lainnya</button>
    </a>
</div>


   @foreach ($data as $key=>$value)
   <div class="callout callout-info">
       <h1>Judul : {{$value->judul}} </h1>
       <p>ID : {{$value->id}}  </p>
       <p>Tanggal dibuat : {{$value->tanggal_dibuat}} &nbsp|| &nbsp  Tanggal diperbarui : {{$value->tanggal_diperbaharui}}  </p>
       <h4>Pertanyaan : {{$value->isi}} </h4>
    </div>
   @endforeach


    
@endsection