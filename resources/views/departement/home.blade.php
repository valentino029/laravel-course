@extends('layouts.master')


@section('title')
<title>Web Course | Departement</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Departement</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Departement</li>
    </ol>
</section>
@endsection

@section('content')
     <!-- Main row -->
     <div class="row">
       <div class="col-md-12">
        <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Tabel Departement <a href="/departement/tambah/" class="btn btn-success" title="Tambah Data"><i class="fa fa-fw fa-plus"></i></a></h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Departement</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      
                        @foreach ($data as $dept)
                        <tr>
                            <td>{{$dept->id}}</td>
                            <td><a href="/departement/show/{{ $dept->id }}">{{$dept->nama_departement}}</a></td>
                            <td>
                                <a href="/departement/edit/{{ $dept->id }}">
                                    <button class="btn-primary">Edit</button>
                                </a>
                                <a href="/departement/edit/{{ $dept->id }}">
                                    <button class="btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>  
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
       </div>                 
     </div>
     <!-- /.row (main row) -->
@endsection

