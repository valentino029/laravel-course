@extends('layouts.master')


@section('title')
<title>Web Course | Arsip</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Profile
        <small>Arsip</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Arsip</li>
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
                      <h3 class="box-title">Data Arsip</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-3">
                          <p align="center">
                            <img src="/dist/img/avatar5.png" alt="User Image">
                            <a class="users-list-name" href="#">{{ $data->nama_arsip}}</a>
                          </p>
                        </div><!-- /.col -->
                        <div class="col-md-8">
                         <table id="#" class="table table-bordered table-hover">                    
                          <tbody>
                          
                            <tr>
                              <td>Nama Arsip</td> 
                              <td>{{ $data->nama_arsip}}</td>
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