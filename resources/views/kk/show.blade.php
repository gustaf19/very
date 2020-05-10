@extends('layouts.layout')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-success">
                    <div class="box-header">
                        <div class="col-md-12">
                            <div class="pull-right">
                                <a href="#" data-toggle="modal" data-target="#pendAdd" data-backdrop="static" data-keyboard="false" class="btn btn-warning btn-sm">
                                    <i class="fa fa-user-plus"></i> Tambah
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <h2 class="box-title">Data Kartu Keluarga</h2>
                        </div>
                    </div>

                   <div class="box-body">
                       @foreach($kks as $k)

                           <p class="text-center">Nomor Kartu Keluarga : {!! $k->nkk !!}</p>
                           <h5 class="text-center">Alamat : {!! $k->alamat !!}, @if(count($k->dusun) != 0) Dusun {!! $k->dusun->dusun !!}/ Rw {!! $k->dusun->rw !!}/ Rt {!! $k->dusun->rt !!}@endif</h5>

                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Status</th>
                                <th>Pekerjaan</th>
                                <th>Golongan Darah</th>
                                <th width="150px">Action</th>
                            </tr>
                                @foreach($k->penduduks as $p)
                                <tr>
                                    <td>{!! $p->nik !!}</td>
                                    <td>{!! $p->name !!}</td>
                                    <td>{!! $p->jk == 'l' ? 'Laki-laki' : 'Perempuan' !!}</td>
                                    <td>{!! $p->tmp_lahir !!} , {!! $p->tgl_lahir !!}</td>
                                    <td>{!! $p->agama !!}</td>
                                    <td>{!! $p->status !!}</td>
                                    <td>{!! $p->pekerjaan !!}</td>
                                    <td>{!! $p->golongan !!}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="" title="Detail" class="btn btn-default btn-flat btn-sm"><i class="fa fa-user"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-flat btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a type="button" class="btn btn-default btn-flat btn-sm" title="Delete" data-toggle="modal" data-target="#deleteModal5" role="dialog"><i class="fa fa-trash"></i></a>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                       @endforeach
                   </div>

                </div>
            </div>
        </div>

        <!-- Modal Add-->
        <div class="modal fade" id="pendAdd" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-gray-light">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="pendAdd" action="{!! route('admin::kk::storePend') !!}" autocomplete="on" method="post" role="form" class="form-horizontal row-border" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">N K K</label>
                                    <div class="col-sm-8">
                                        @foreach($kks as $k)

                                            <select id="disabledSelect" class="form-control" value="{{$k->id}}" name="kks" disabled>
                                                <option>{{$k->nkk}}</option>
                                            </select>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="nik" class="col-sm-2 control-label">N I K</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="N I K">
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
                                        <select name="agama" required>
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
                                    <label  class="checkbox-inline"><input type="radio" name="golongan" id="" value="-"> Tidak Tahu</label>
                                    <label  class="checkbox-inline"><input type="radio" name="golongan" id="" value="a"> A</label>
                                    <label  class="checkbox-inline"><input type="radio" name="golongan" id="" value="b"> B</label>
                                    <label  class="checkbox-inline"><input type="radio" name="golongan" id="" value="ab"> AB</label>
                                    <label  class="checkbox-inline"><input type="radio" name="golongan" id="" value="o"> O</label>
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