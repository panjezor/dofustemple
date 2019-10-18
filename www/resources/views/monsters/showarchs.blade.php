@extends('layouts.app')
@section('content')
    <div class="col-md-9">
        <div class="card">
            <table id="archtable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Other name</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($monsters as $monster)
                        <tr>
                            <td>{{$monster->monster_name}}</td>
                            <td>{{$monster->otherName()}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td>Name</td>
                        <td>Other name</td>
                    </tr>
                </tfoot>
            </table>


        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $().ready(function () {
            $('#archtable').DataTable({
                "language": {
                    "decimal": "{{__('datatables.decimal')}}",
                    "emptyTable": "{{__('datatables.emptyTable')}}",
                    "info": "{{__('datatables.info',['start'=>'_START_','end'=>'_END_','total'=>'_TOTAL_'])}}",
                    "infoEmpty": "{{__('datatables.infoEmpty')}}",
                    "infoFiltered": "{{__('datatables.infoFiltered',['max'=>'_MAX_'])}}",
                    "infoPostFix": "{{__('datatables.infoPostFix')}}",
                    "thousands": "{{__('datatables.thousands')}}",
                    "lengthMenu": "{{__('datatables.lengthMenu',['menu'=>'_MENU_'])}}",
                    "loadingRecords": "{{__('datatables.loadingRecords')}}",
                    "processing": "{{__('datatables.processing')}}",
                    "search": "{{__('datatables.search')}}",
                    "zeroRecords": "{{__('datatables.zeroRecords')}}",
                    "paginate": {
                        "first": "{{__('datatables.first')}}",
                        "last": "{{__('datatables.last')}}",
                        "next": "{{__('datatables.next')}}",
                        "previous": "{{__('datatables.previous')}}"
                    },
                    "aria": {
                        "sortAscending": "{{__('datatables.sortAscending')}}",
                        "sortDescending": "{{__('datatables.sortDescending')}}",
                    }
                },
            });
        });
    </script>
@endpush
