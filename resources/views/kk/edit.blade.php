@extends('layouts.layout')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-8 ">
                <div class="box box-success center">
                    <div class="box-header text-center">
                        <h3 class="box-title">Edit Kartu Keluarga</h3>
                    </div>
                    <div class="box-body">

                        <form action="{!! route('admin::kk::update', [$kks->id]) !!}"  method="post" role="form" class="form-horizontal row-border" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">N K K</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nkk" value="{!! $kks->nkk!!}" class="form-control" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label"> RT</label>
                                <div class="col-sm-10">

                                    <select name="dusun_id" >
                                        <option selected disabled> -- Pilih R T -- </option>
                                        @foreach( $dusuns as $d )
                                            <option value="{!! $d->id !!}" @if($d->id == $kks->dusun_id) selected="selected" @endif>
                                                {!! $d->rt !!}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="alamat" rows="2" required="required">{!! $kks->alamat !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-7">
                                    <button type="submit" class="btn btn-success"> <span class="fa fa-save"></span> Simpan</button>
                                    <a href="{!! route('admin::kk::index') !!}" class="btn btn-warning" > <span class="fa fa-reply"></span>  Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection