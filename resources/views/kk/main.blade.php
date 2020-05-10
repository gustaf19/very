@extends('layouts.layout')
@section('content')
    <section class="content-header">
        <h1>
            Kartu Keluarga
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin::kk::create')}}" type="button" class="btn btn-success btn-flat margin">New KK</a>
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title"><b>Kartu Keluarga List</b></h3>
                        <div class="box-tools">
                            <form action="{{ route('admin::kk::search') }}" method="post">
                                <div class="input-group input-group-sm" style="width: 150px">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control pull-right" placeholder="Search" name="keyword">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>No Kartu Keluarga</th>
                                <th>dusun</th>
                                <th>alamat</th>
                                <th width="150px">Action</th>
                            </tr>
                            @foreach($kks as $k)
                                <tr>
                                    <td>{!! $k->id !!}</td>
                                    <td>{!! $k->nkk !!}</td>
                                    <td>@if(count($k->dusun) != 0) {!! $k->dusun->dusun !!} @endif</td>
                                    <td>{!! $k->alamat !!}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin::kk::show',[$k->id])}}" title="Detail" class="btn btn-default btn-flat btn-sm"><i class="fa fa-user"></i></a>
                                            <a href="{{route('admin::kk::edit',[$k->id])}}" title="Edit" class="btn btn-default btn-flat btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a type="button" class="btn btn-default btn-flat btn-sm" title="Delete" data-toggle="modal" data-target="#deleteModal5" role="dialog"><i class="fa fa-trash"></i></a>
                                            <div id="deleteModal5" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title">Confirm Delete</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this item?</p>
                                                        </div>
                                                        <div class="modal-footer" role="dialog">
                                                            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button>
                                                            <a href="{{route('admin::kk::destroy',[$k->id])}}">
                                                                <input class="btn btn-danger btn-flat" type="submit" value="Yes">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <div class="row">
                            <div class="col-xs-12">
                                Showing <?php echo $kks->firstItem();?> to
                                <?php echo $kks->lastitem();?> of
                                <?php echo $kks->total();?> entries

                                <div class="pull-right">
                                    <?php echo $kks->render();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
