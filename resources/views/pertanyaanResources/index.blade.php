@extends('master');

@section('konten')

<div class="callout callout-info">
    <a href="{{url('/pertanyaan/create')}}  ">
        <button class="btn btn-primary">Tambahkan Pertanyaan</button>
    </a>
</div>

@foreach($data as $key => $value)
<div class="callout callout-info">
    <h4><i class="fa fa-question-circle"></i> {{$value->judul}}</h4>
    <p>{{$value->isi}}</p>
   
    
       
    
    

    <form action="/jawaban/{{$value->id}}" method="POST">
        @csrf
        <label>Tambahkan Jawaban</label>
        <textarea class="form-control"  name="isi" id="isi" rows="3" placeholder="Tambahkan Jawaban" required="required"></textarea><br><br>    
        <input hidden name="pertanyaan_id" value="{{$value->id}} ">
        <button type="submit" class="btn btn-success float-left" style="margin-right: 5px;">
            <i class="fa fa-plus"></i> Tambah Jawaban
        </button>
    </form>


    <form action="/pertanyaan/{{$value->id}}" method="post">
        @csrf
        {{method_field('delete')}}
        <button type="submit" class="btn btn-danger float-right" style="margin-right: 5px;">
            <i class="fa fa-minus"></i> Hapus Pertanyaan
        </button>
    </form>

    <form action="/jawaban/{{$value->id}}" method="GET">
        <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
            <i class="fa fa-search"></i> Lihat Jawaban
        </button>
    </form>

    <form action="/pertanyaan/{{$value->id}}/edit" method="GET">
        <button type="submit" class="btn btn-warning float-right" style="margin-right: 5px;">
            <i class="fa fa-paint-brush"></i> Edit Pertanyaan
        </button>
    </form>

    <form action="/pertanyaan/{{$value->id}}" method="GET">
        <button type="submit" class="btn btn-info float-right" style="margin-right: 5px;">
            <i class="fa fa-eye"></i> Lihat Detail
        </button>
    </form>

    


    
    <br>
    <br>

</div>

@endforeach
    
@endsection