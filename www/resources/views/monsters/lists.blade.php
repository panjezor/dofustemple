@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-9">
                <div class="card">
                    <table id="lists">
                        <thead>
                            <tr>
                                <td>Number</td>
                                <td>Name</td>
                                <td>Users</td>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($lists as $list)
                                <tr>

                                    <td>{{$list->id}}</td>
                                    <td><a href="/monsters/list/{{$list->id}}">{{ucfirst(strtolower($list->name))}}</a>
                                    </td>

                                    <td>@foreach($list->users as $user)
                                            {{$user->name}}
                                            @if($loop->last)
                                            @else
                                                ,
                                            @endif
                                        @endforeach</td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Number</td>
                                <td>Name</td>
                                <td>Users</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $().ready(function () {
            $('#lists').DataTable();
        });
    </script>
@endpush
