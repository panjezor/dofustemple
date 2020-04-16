@extends('layouts.app')
@section('content')
    <div id="holder"></div>


@endsection
@push('scripts')
    <script>
        $().ready(function () {
                for (var i = 0; i < 365; i++) {
                    var date = new Date();
                    date.setDate(date.getDate() + i);
                    var mon = date.getMonth() + 1;
                    var futDate = date.getFullYear() + "-";
                    if (mon < 10) {
                        futDate += "0" + mon + "-";
                    } else {
                        futDate += mon + "-";
                    }
                    if (date.getDate() < 10) {
                        futDate += "0" + date.getDate();
                    } else {
                        futDate += +date.getDate();
                    }
                    var link = "/almanax/" + futDate;
                    $('#holder').append('<a href="' + link + '">click</a><br>');

                }
            }
        );
    </script>
@endpush
