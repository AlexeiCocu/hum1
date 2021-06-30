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
                        <td class="text-center index_table_column">{{$loop->index + 1}}</td>
                        <td class="font-w600">{{$client->first_name}} {{$client->last_name}}</td>
                        <td class="d-none d-sm-table-cell">{{$client->email}}</td>
                        <td class="d-none d-sm-table-cell text-center">

                            @if(!isset($client->docusign_url))
                                <a href="#." class="btn btn-rounded btn-alt-danger min-width-125" data-toggle="modal" data-target="#modal-fadein_{{$client->id}}">Sign</a>
                            @else
                                <a href="#." class="min-width-125" data-toggle="modal" data-target="#modal2-fadein_{{$client->id}}">
                                    <img src="{{asset('lex_client/images/docsign.svg')}}" alt="doc sign img">
                                </a>
                            @endif

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
                                <form action="{{route('lawyer.docusign', $client->id)}}" method="POST">
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

                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-12" for="docusign_url">Link URL</label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" id="docusign_url" name="docusign_url" placeholder="Link URL..">
                                                        </div>
                                                    </div>
{{--                                                    <div class="form-material floating">--}}
{{--                                                        <input type="text" class="form-control" id="docusign_url" name="docusign_url">--}}
{{--                                                        <label for="docusign_url">Link URL</label>--}}
{{--                                                    </div>--}}
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

                    <!-- Fade In Modal 2 -->
                    <div class="modal fade" id="modal2-fadein_{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="modal2-fadein" aria-hidden="true">
                        <div class="modal-dialog mt-100" role="document">
                            <div class="modal-content">
                                <form action="{{route('lawyer.docusign', $client->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="block block-themed block-transparent mb-0">
                                        <input type="hidden" name="docusign_url" value="{{null}}">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Docusign link URl</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 100%; text-align: center; padding-top: 20px">
                                        <img src="{{asset('lex_client/images/docsign.svg')}}" alt="doc sign img" style="min-width: 150px; max-width: 200px">
                                    </div>

                                    <div class="modal-footer d-flex justify-content-center" style="padding-top: 30px; padding-bottom: 20px">
                                        <button type="submit" class="btn btn-alt-danger">
                                            Delete URL?
                                        </button>
                                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
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

@push('script')
    <!-- Page JS Plugins -->
    <script src="{{asset('lex_admin/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('lex_admin/assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('lex_admin/assets/js/pages/be_tables_datatables.min.js')}}"></script>
@endpush
