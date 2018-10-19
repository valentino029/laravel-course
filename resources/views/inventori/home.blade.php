@extends('layouts.master')


@section('title')
<title>Web Course | Inventori</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Inventori</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Inventori</li>
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
                    <h3 class="box-title">Tabel Inventori <a href="/inventori/tambah/" class="btn btn-success" title="Tambah Data"><i class="fa fa-fw fa-plus"></i></a></h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Inventori</th>
                              <th>Nama Arsip</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            
                              @foreach ($data as $inven)
                              <tr>
                                  <td>{{$inven->no}}</td>
                                  <td><a href="/inventori/{{ $inven->no }}">{{$inven->inventori_name}}</a></td>
                                  <td><a href="/arsip/{{ $inven->arsip->id }}">{{$inven->arsip->nama_arsip}}</a></td>
                                  <td>
                                      <a href="/inventori/edit/{{ $inven->no }}">
                                          <button class="btn-primary">Edit</button>
                                      </a>
                                      <a href="/inventori/edit/{{ $inven->no }}">
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

