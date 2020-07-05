@extends('master');
@section( 'konten')

<h2>Edit Pertanyaan </h2>

@foreach ($data as $key=>$value)

<form role="form" action="/pertanyaan/{{$value->id}}" method="POST">
        {{method_field('put')}}
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul Pertanyaan</label>
            <input type="text" name="judul"  class="form-control" id="judul" value="{{$value->judul}}">
            </div>
            <div class="form-group">
                <label>Isi</label>
                <input type="text" name="isi"  class="form-control" id="isi" value="{{$value->isi}}">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    
@endforeach


            

@endsection