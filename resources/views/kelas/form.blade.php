@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Ubah' }} Data Kelas
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
          <form action="{{ empty($result) ?  url('kelas/add') : url('kelas/'.$result->id_kelas.'/edit') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            
            @if(!empty($result))
              {{ method_field('patch') }}
            @endif
  
            <div class="box-body">
              <div class="form-group">
                <label for="nama_kelas" class="col-sm-2 control-label">Nama Kelas</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Masukan Nama Kelas" value="{{ @$result->nama_kelas }}">
                </div>
              </div>
              <div class="form-group">
                <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan Jurusan" value="{{ @$result->jurusan }}">
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