@extends('layouts.master')


@section('title')
<title>Web Course | Departement</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Profile
        <small>Departement</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Departement</li>
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
                      <h3 class="box-title">Data Departement</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-3">
                          <p align="center">
                            <img src="/dist/img/avatar5.png" alt="User Image">
                            <a class="users-list-name" href="#">{{ $data->nama_departement}}</a>
                          </p>
                        </div><!-- /.col -->
                        <div class="col-md-8">
                         <table id="#" class="table table-bordered table-hover">                    
                          <tbody>
                          
                            <tr>
                              <td>Nama Departement</td> 
                              <td>{{ $data->nama_departement}}</td>
                            </tr>

                            @foreach ($data->jabatan as $item)

                            <li class="list-group-item">
                              <strong><i class="fa fa-map-marker margin-r-5"></i> {{$item->nama_jabatan}}</strong>

                            </li>
                                
                            @endforeach
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