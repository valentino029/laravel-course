@extends('layouts.master')
@section('title')
<title>Web Course | Jabatan</title>
@endsection
 @section('content-header')
<section class="content-header">
    <h1>
        Edit
        <small>Jabatan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Jabatan</li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
        <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Edit Data Jabatan</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <form role="form" action="/jabatan/update" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" class="form-control" name="no" value="{{ $data->no}}" />
                                <input type="hidden" name="_method" value="PUT"/>
                            </div>
                          <!-- text input -->
                          
                          <div class="form-group">
                            <label>Nama Jabatan</label>
                            <input type="text" class="form-control" name="nama_jabatan" value="{{ $data->nama_jabatan}}" placeholder="Nama Jabatan">
                        </div>
                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          
                        </form>
                      </div>
                  </div>
                </div>
        </div>
</section>

@endsection