@extends('layouts.app')
@section('content')
    <div class="col-4">
        <div class="card">
            <div class="card-body"><label for="arch">Arch</label>
                <input type="text" id="arch"><br>
                <label for="normal">Normalny mobek</label>
                <input type="text" id="normal"><br>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    <script>
        $().ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            $('button').click(function () {
                $.post('/monsters/add', {
                        normalname: $('#normal').val(),
                        archname: $('#arch').val(),

                    },
                    function (response) {

                    });
            })
        })

    </script>
@endsection
@push('scripts')
    <script>
        $().ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            $('button').click(function () {
                $.post('/monsters/add', {
                        normalname: $('#normal').val(),
                        archname: $('#arch').val(),

                    },
                    function (response) {

                    });
            })
        })

    </script>
@endpush
