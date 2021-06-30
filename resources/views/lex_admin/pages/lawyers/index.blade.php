@extends('layouts.admin_layout')

@section('content')

    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Lawyers List</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell">Email</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Picture</th>
                    <th class="text-center" style="width: 15%;">Profile</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lawyers as $lawyer)
                    <tr>
                        <td class="text-center index_table_column">{{$loop->index + 1}}</td>
                        <td class="font-w600">{{$lawyer->first_name}} {{$lawyer->last_name}}</td>
                        <td class="d-none d-sm-table-cell">{{$lawyer->email}}</td>
                        <td class="d-none d-sm-table-cell text-center">
                            @if($lawyer->avatar)
                            <img src="{{asset('storage/avatar/'.$lawyer->avatar)}}" alt="user avatar" style="width: 70px; height: 70px; object-fit: cover; border-radius: 50%;">
                            @else
                                <img src="{{asset('lex_admin/assets/img/user_avatar.svg')}}" alt="user placeholder" style="width: 60px; height: 60px; object-fit: contain">
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{route('admin-lawyers.show', $lawyer->id)}}" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Lawyer">
                                <i class="fa fa-user"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->

@endsection

@push('script')
    @push('script')
        <!-- Page JS Plugins -->
        <script src="{{asset('lex_admin/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('lex_admin/assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('lex_admin/assets/js/pages/be_tables_datatables.min.js')}}"></script>
    @endpush
@endpush
