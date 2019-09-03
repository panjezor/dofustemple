@extends('layouts.app')
@section('content')

    <label for="boss">Boss</label>
    <input type="text" id="boss"><br>
    {{--    <label for="normal">Normalny mobek</label>--}}
    {{--    <input type="text" id="normal"><br>--}}
    <button>Submit</button>
    <script>
        $().ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            $('button').click(function () {
                $.post('/monsters/add', {
                        bossname: $('#boss').val()
                        // ,
                        // normalname: $('#normal').val()
                    },
                    function (response) {

                    });
            })
        })

    </script>
@endsection
