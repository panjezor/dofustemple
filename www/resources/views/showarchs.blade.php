@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
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
                                {{--                @php(var_dump($monster))--}}
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


                    <script>
                        $().ready(function () {
                            $('#archtable').DataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

@endsection