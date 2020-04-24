@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
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
          <a href="{{ url('siswa/add') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
        </div>
        <div class="box-body">
          <table class="table table-striped table-hover table-bordered">
                <tbody><tr>
                  <th>#</th>
                  <th>Foto</th>
                  <th>NIS</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
                @foreach($result as $row)
                <tr>
                  <td>{{ !empty($i) ? ++$i : $i = 1}}</td>
                  <td>
                    <img src="{{ asset('uploads/'.$row->foto)}}" width="80px" class="img" alt="">
                  </td>
                  <td>{{ $row->nis }}</td>
                  <td>{{ $row->nama_lengkap }}</td>
                  <td>{{ $row->jenis_kelamin }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>{{ $row->no_telp }}</td>
                  <td>{{ $row->kelas->nama_kelas }}</td>
                  <td>
                    <a href="{{ url("siswa/$row->nis/edit") }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{ url("siswa/$row->nis/delete") }}" method="post" style="display:inline">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>

                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection