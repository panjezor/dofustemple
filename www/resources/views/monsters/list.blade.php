@extends('layouts.app')
@section('content')
    <div class="col-md-9">
        <div class="card">
            <table id="soultable" class="table table-striped table-bordered table-bordered-dofus">
                <thead>
                    <tr>
                        <td>{{__('monster.name')}}</td>
                        <td>{{__('monster.type')}}</td>
                        <td>{{__('monster.amount')}}</td>
                    </tr>
                </thead>
                <tbody>
                    @php($monsters = App\Models\Monster::all())
                    @foreach($monsters as $monster)
                        <tr>
                            <td>{{$monster->monster_name}}</td>
                            <input type="hidden" id="monster_id" value="{{$monster->id}}">
                            <td>{{__('monster.'.$monster->type)}}</td>
                            <td>
                                <button type="button"
                                        onclick="subtractMonster({{$monster->id}})">
                                    <img
                                        src="{{ asset('img/minus1.png') }}">
                                </button>
                                <span id="{{$monster->id}}">{{$monster->amountOwnedBy($list->id)}}</span>
                                <button type="button"
                                        onclick="addMonster({{$monster->id}})">
                                    <img
                                        src="{{ asset('img/plus1.png') }}"></button>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td>{{__('monster.name')}}</td>
                        <td>{{__('monster.type')}}</td>
                        <td>{{__('monster.amount')}}</td>
                    </tr>
                </tfoot>
            </table>


        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <ol id="userstable">@foreach($list->users as $user)
                    <li>{{$user->name}}</li>
                @endforeach</ol>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $().ready(function () {
            $('#soultable').DataTable({
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

        function addMonster(monster_id) {
            let monster = $('#' + monster_id);
            $.ajax({
                url: window.location.pathname + '/add/' + monster_id
            })
                .done(function (data) {
                    if (console && console.log) {
                        console.log(data);
                        monster.text(parseInt(monster.text()) + 1);
                    }
                });
        }

        function subtractMonster(monster_id) {
            let monster = $('#' + monster_id);
            if (monster.text() == 0) {
            } else {
                $.ajax({
                    url: window.location.pathname + '/subtract/' + monster_id
                })
                    .done(function (data) {
                        if (console && console.log) {
                            console.log(data);
                            monster.text(parseInt(monster.text()) - 1);
                        }
                    });
            }
        }
    </script>
@endpush
