@extends('master');

@section('konten')
<div class="callout callout-info">
    <a href="{{url('/pertanyaan')}}  ">
        <button class="btn btn-primary">Lihat Pertanyaan Lainnya</button>
    </a>
</div>
<br>
<h2 >Pertanyaan</h2>
<br>
@foreach ($data as $key=>$value)
    <div class="callout callout-info">
    <h2>Judul: {{$value->judul}} </h2>
    <p> {{$value->isi}} </p>
    </div>
@endforeach

<br>

<h2>Jawaban</h2>

<br>




@foreach ($datas as $key=>$value)

<div class="callout callout-info">
    <h3>{{$value->isi}}</h3>
    <p>Waktu postingan : {{$value->tanggal_diperbaharui}} </p>

</div>

@endforeach

    
@endsection