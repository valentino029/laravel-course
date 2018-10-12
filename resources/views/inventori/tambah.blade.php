@extends('layouts.master')
@section('title')
<title>Web Course | Inventori</title>
@endsection
 @section('content-header')
<section class="content-header">
    <h1>
        Tambah
        <small>Inventori</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inventori</a></li>
        <li class="active">Tambah</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
        <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Tambah Data Inventori</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form role="form">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Nama Inventori</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
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