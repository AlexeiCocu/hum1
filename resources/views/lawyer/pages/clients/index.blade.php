@extends('layouts.lawyer_layout')

@section('content')

    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Clients List</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell">Email</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 15%;">DocuSign</th>
                    <th class="text-center" style="width: 15%;">Profile</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td class="text-center">{{$loop->index + 1}}</td>
                        <td class="font-w600">{{$client->first_name}} {{$client->last_name}}</td>
                        <td class="d-none d-sm-table-cell">{{$client->email}}</td>
                        <td class="d-none d-sm-table-cell text-center">

                            <a href="" class="btn btn-rounded btn-alt-danger min-width-125" data-toggle="modal" data-target="#modal-fadein_{{$client->id}}">Sign</a>

                        </td>
                        <td class="text-center">
                            <a href="{{route('lawyer-clients.show', $client->id)}}" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Client">
                                <i class="fa fa-user"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Fade In Modal -->
                    <div class="modal fade" id="modal-fadein_{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
                        <div class="modal-dialog mt-100" role="document">
                            <div class="modal-content">
                                <form action="{{route('lawyer-clients.update', $client->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="block block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Docusign link URl</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <div class="form-material floating">
                                                        <input type="text" class="form-control" id="docusign_url" name="docusign_url">
                                                        <label for="docusign_url">Link URL</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-alt-success">
                                            <i class="fa fa-check"></i>Perfect
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END Fade In Modal -->
                @endforeach

                @if($errors->any())
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="aler alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->



@endsection
