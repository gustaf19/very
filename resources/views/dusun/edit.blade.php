@extends('layouts.layout')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">New Wilayah</h3>
                    </div>
                    <div class="box-body">
                       @foreach($dusun as $d)
                            <form action="{{ route('admin::dusun::update', [$d->id]) }}" autocomplete="on" method="post" role="form" class="form-horizontal row-border" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Dusun</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="dusun" class="form-control" value="{!! $d->dusun !!}" required="required" placeholder="Dusun">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">RW</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="rw" class="form-control" value="{!! $d->rw !!}"  required="required" placeholder="R w">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Rt</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="rt" class="form-control" value="{!! $d->rt !!}"  required="required" placeholder="R t">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-7">
                                        <button type="submit" class="btn btn-success"> <span class="fa fa-save"></span> Simpan</button>
                                        <a href="{{ route('admin::dusun::index') }}" class="btn btn-warning" > <span class="fa fa-reply"></span>  Kembali</a>
                                    </div>
                                </div>
                            </form>
                           @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
