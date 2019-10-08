@extends('layouts.app')
@section('content')
    <div class="col-md-9">
        <div class="card">
            <table id="soultable" class="table table-striped table-bordered table-bordered-dofus">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Type</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach(App\Models\Monster::all() as $monster)
                        <tr>
                            <td>{{$monster->monster_name}}</td>
                            <input type="hidden" id="monster_id" value="{{$monster->id}}">
                            <td>{{$monster->getType()}}</td>
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
                        <td>Name</td>
                        <td>Type</td>
                        <td>Amount</td>
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
            $('#soultable').DataTable();
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
