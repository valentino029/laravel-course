@extends('layouts.master')


@section('title')
<title>Web Course | Karyawan</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Karyawan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Karyawan</li>
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
                     <h3 class="box-title">Tabel Karyawan <a href="/karyawan/tambah/" class="btn btn-success" title="Tambah Data"><i class="fa fa-fw fa-plus"></i></a></h3>
                   </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                     <table id="example1" class="table table-bordered table-hover">
                       <thead>
                       <tr>
                         <th>No</th>
                         <th>Nama Karyawan</th>
                         <th>Alamat</th>
                         <th>No Telepon</th>
                         <th>Jabatan</th>
                         <th>Inventori</th>
                         <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>
                           @foreach ($data as $kar)
                           <tr>
                                <td>{{$kar->id}}</td>
                                <td><a href="/karyawan/{{ $kar->id }}">{{$kar->nama_karyawan}}</a></td>
                                <td>{{$kar->alamat}}</td>
                                <td>{{$kar->telepon}}</td>
                                <td>{{$kar->jabatan->nama_jabatan}}</td>
                                <td>@foreach ($kar->inventori as $item)
                                    {{$item->inventori_name}},
                                @endforeach
                                <td>
                                <a href="/karyawan/edit/{{ $kar->id }}">
                                    <button class="btn-primary">Edit</button>
                                </a>
                                <a href="/karyawan/delete/{{ $kar->id }}">
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

