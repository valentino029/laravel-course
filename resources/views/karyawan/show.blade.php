@extends('layouts.master')


@section('title')
<title>Web Course | Karyawan</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Profile
        <small>Karyawan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Karyawan</li>
        <li class="active">Profile</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
        <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Data Karyawan</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-3">
                          <p align="center">
                            <img src="/dist/img/avatar.png" alt="User Image">
                            <a class="users-list-name" href="#">{{ $data->nama_karyawan}}</a>
                            <span class="users-list-date">{{$data->jabatan}}</span>
                          </p>
                        </div><!-- /.col -->
                        <div class="col-md-8">
                         <table id="#" class="table table-bordered table-hover">                    
                          <tbody>
                          
                            <tr>
                              <td>Nama</td> 
                              <td>{{ $data->nama_karyawan}}</td>
                            </tr>
                            <tr>
                              <td>Alamat</td> 
                              <td>{{$data->alamat}}</td> 
                            </tr>
                            <tr>
                              <td>Telepon</td> 
                              <td>{{$data->telepon}}</td>                        
                            </tr>
                            <tr>
                                <td>Jabatan</td> 
                                <td>{{$data->jabatan}}</td>                        
                            </tr>
                        </tbody>
                        </table>
                        </div><!-- /.col -->
                      </div>
                    </div>
                  </div>
                </div>
        </div>
</section>

@endsection