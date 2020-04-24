@extends('templates/header')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ empty($result) ? 'Tambah' : 'Ubah' }} Data Siswa
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    @include('templates/feedback')
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Kembali</a>
      </div>
      <div class="box-body">
        <form action="{{ empty($result) ?  url('siswa/add') : url('siswa/'.$result->nis.'/edit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
          {{ csrf_field() }}
          
          @if(!empty($result))
            {{ method_field('patch') }}
          @endif

          <div class="box-body">
            <div class="form-group">
              <label for="nis" class="col-sm-2 control-label">NIS</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan NIS" value="{{ @$result->nis }}">
              </div>
            </div>
            <div class="form-group">
              <label for="nama_lengkap" class="col-sm-2 control-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" value="{{ @$result->nama_lengkap }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <div class="checkbox">
                  <label><input type="radio" name="jenis_kelamin" value="L"{{ (@$result->jenis_kelamin == 'L' ? 'checked' : '')}}> L</label>
                  <label><input type="radio" name="jenis_kelamin" value="P"{{ (@$result->jenis_kelamin == 'P' ? 'checked' : '')}}> P</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="alamat" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="alamat" id="alamat" cols="9" rows="3" class="form-control" placeholder="Masukan Alamat">{!! @$result->alamat !!}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="no_telp" class="col-sm-2 control-label">No Telepon</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukan Nama Lengkap" value="{{ @$result->no_telp }}">
              </div>
            </div>
            <div class="form-group">
              <label for="kelas" class="col-sm-2 control-label">Kelas</label>
              <div class="col-sm-10">
                <select name="id_kelas" id="kelas" class="form-control">
                  @foreach(\App\Kelas::all() as $kelas)
                  <option value="{{ $kelas->id_kelas }}" {{ @$result->id_kelas == $kelas->id_kelas ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-10">
                <input type="file" name="foto">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success pull-right">Simpan</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
@endsection