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

                            @foreach($monsters as $monster)
                                <tr>
                                    <td>{{$monster->monster_name}}</td>
                                    <input type="hidden" id="monster_id" value="{{$monster->id}}">
                                    <td>{{$monster->getType()}}</td>
                                    <td>
                                        <button type="button"
                                                onclick="subtractdb('{{$monster->id}}','{{\Illuminate\Support\Facades\Auth::user()->id}}')">
                                            <img
                                                    src="{{ asset('img/minus1.png') }}">
                                        </button>
                                        <span id="{{$monster->id}}">{{$monster->amountOwnedBy()}}</span>
                                        <button type="button"
                                                onclick="adddb('{{$monster->id}}','{{\Illuminate\Support\Facades\Auth::user()->id}}')">
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
        </div>
    </div>
    <script>
        $().ready(function () {
            $('#soultable').DataTable();
        });

        function adddb(monster_id, user_id) {
            $.get('/monsters/collection/add', {
                    monster_id: monster_id,
                    user_id: user_id
                }, function () {
                    $('#' + monster_id).text(parseInt($('#' + monster_id).text()) + 1);
                }
            );
        }

        function subtractdb(monster_id, user_id) {
            if ($('#' + monster_id).text() == 0) {
            } else {
                $.get('/monsters/collection/subtract', {
                        monster_id: monster_id,
                        user_id: user_id
                    }, function () {
                        $('#' + monster_id).text(parseInt($('#' + monster_id).text()) - 1);
                    }
                );
            }
        }
    </script>
@endsection