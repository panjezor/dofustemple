@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-9">
                <div class="card">
                    <table id="soultable">
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
                                                onclick="subtractMonster('{{$monster->id}}'')">
                                            <img
                                                src="{{ asset('img/minus1.png') }}">
                                        </button>
                                        <span id="{{$monster->id}}">{{$monster->amountOwnedBy($list->id)}}</span>
                                        <button type="button"
                                                onclick="addMonster('{{$monster->id}}')">
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
        </div>
    </div>
    <script>
        $().ready(function () {
            $('#soultable').DataTable();
        });

        function addMonster(monster_id, monster_list_id) {
            $.get('/monsters/collection/add', {
                    monster_id: monster_id,
                    monster_list_id: monster_list_id
                }, function () {
                    $('#' + monster_id).text(parseInt($('#' + monster_id).text()) + 1);
                }
            );
        }

        function subtractMonster(monster_id, monster_list_id) {
            if ($('#' + monster_id).text() == 0) {
            } else {
                $.get('/monsters/collection/subtract', {
                        monster_id: monster_id,
                        monster_list_id: monster_list_id
                    }, function () {
                        $('#' + monster_id).text(parseInt($('#' + monster_id).text()) - 1);
                    }
                );
            }
        }
    </script>
@endsection
