@extends('templates/header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelas
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
          <a href="{{ url('kelas/add') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
        </div>
        <div class="box-body">
          <table class="table table-striped table-hover table-bordered">
                <tbody><tr>
                  <th>#</th>
                  <th>Nama Kelas</th>
                  <th>Jurusan</th>
                  <th>Aksi</th>
                </tr>
                @foreach($result as $row)
                <tr>
                  <td>{{ !empty($i) ? ++$i : $i = 1}}</td>
                  <td>{{ $row->nama_kelas }}</td>
                  <td>{{ $row->jurusan }}</td>
                  <td>
                    <a href="{{ url("kelas/$row->id_kelas/edit") }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                    <form action="{{ url("kelas/$row->id_kelas/delete") }}" method="post" style="display:inline">
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