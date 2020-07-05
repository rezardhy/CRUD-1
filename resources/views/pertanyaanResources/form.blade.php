@extends('master');
@section( 'konten')

<form role="form" action="/pertanyaan" method="POST">
  @csrf
  <div class="card-body">
      <div class="form-group">
          <label for="judul">Judul Pertanyaan</label>
          <input type="text" name="judul"  class="form-control" id="judul" placeholder="Masukan Judul">
      </div>
      <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control"  name="isi" id="isi" rows="3" placeholder="Masukan Pertanyaan"></textarea>
      </div>
      <div class="card-footer">
          <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
  </div>
</form>

@endsection