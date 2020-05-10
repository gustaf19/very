@extends('layouts.layout')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">New Kartu Kartu Keluarga</h3>
                    </div>
                    <div class="box-body">
                        <form action="{!! route('admin::kk::store') !!}" autocomplete="on" method="post" role="form" class="form-horizontal row-border" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">N K K</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nkk" class="form-control" required="required" placeholder="Nomor Kartu Keluarga">
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label for="nik" class="col-sm-2 control-label">N I K</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label for="nama" class="col-sm-2 control-label">N A M A</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="N A M A">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label col-sm-2">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <label for="" class="checkbox-inline"><input type="radio" name="jk" id="" value="l"> Laki-Laki</label>
                                        <label for="" class="checkbox-inline"><input type="radio" name="jk" id="" value="p"> Perempuan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Tempat/ Tgl Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="tmp_lahir" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group date">
                                                <input type="text" id="datepicker1" name="tgl_lahir" placeholder="Tanggal" class="date-picker form-control" />
                                                <label for="date-picker" class="input-group-addon btn btn-info"><span class="fa fa-calendar"></span>
                                                </label>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Status Perkawinan</label>
                                    <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value="belum kawin"> Belum Kawin</label>
                                    <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value="kawin"> Kawin</label>
                                    <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value="cerai hidup"> Cerai Hidup</label>
                                    <label for="" class="checkbox-inline"><input type="radio" name="status" id="" value="cerai mati"> Cerai Mati</label>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="agama" class="col-sm-2 control-label">Agama</label>
                                        <div class="col-sm-8">
                                            <select name="agama">
                                                <option selected disabled> -- Pilih Agama -- </option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="kristen">Katolik</option>
                                                <option value="budha">budha</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2">Golongan Darah</label>
                                    <div class="col-sm-8">
                                        <label class="checkbox-inline"><input type="radio" name="golongan"  value="-"> Tidak Tahu</label>
                                        <label class="checkbox-inline"><input type="radio" name="golongan"  value="a"> A</label>
                                        <label class="checkbox-inline"><input type="radio" name="golongan"  value="b"> B</label>
                                        <label class="checkbox-inline"><input type="radio" name="golongan"  value="ab"> AB</label>
                                        <label class="checkbox-inline"><input type="radio" name="golongan"  value="o"> O</label>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> RT</label>
                                <div class="col-sm-10">

                                    <select name="dusun_id" >
                                        <option selected disabled> -- Pilih RT -- </option>
                                        @foreach( $dusuns as $d )
                                            <option value="{!! $d->id !!}">
                                                {!! $d->rt !!}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="alamat" rows="2" required="required"></textarea>
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