@extends('layouts.app')
@section('content')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Lists
                    </div>
                    <div class="p-2">
                        <table id="lists" class="table table-striped table-bordered table-bordered-dofus table-hover justify-content-center">
                            <thead>

                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Users</th>
                                    <th>Characters</th>
                                    <th>Delete</th>
                                </tr>

                            </thead>
                            <tbody>

                                @foreach($lists as $list)
                                    <tr>

                                        <td>{{$list->id}}</td>
                                        <td>
                                            <a href="/monsters/lists/{{$list->id}}">{{ucfirst(strtolower($list->list_name))}}</a>
                                        </td>

                                        <td>@foreach($list->users as $user)
                                                {{$user->name}}
                                                @if(!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach </td>
                                        <td>{{$list->characters_number}}</td>
                                        <td><a href="lists?deleteList={{$list->id}}" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Users</th>
                                    <th>Characters</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


            </div>
            <div class="col-md-4">
                <form method="get" action="">
                <div class="card ">
                    <div class="card-header">
                        Create a new list
                    </div>
                    <div class="form-group p-2">
                        <label for="inputListName">List name</label>
                        <input type="text" class="form-control" id="inputListName" name="inputListName" aria-describedby="listHelp"
                               placeholder="Enter new list name">
                        <small id="listHelp" class="form-text text-muted">Short name for you to call it.</small>
                    </div>
                    <div class="form-group p-2">
                        <label for="inputCharCount">Amount of characters</label>
                        <input type="number" class="form-control" id="inputCharCount" name="inputCharCount" aria-describedby="charCount"
                               placeholder="Enter amount of characters" min="1" max="24">
                        <small id="charCount" class="form-text text-muted">Specify the number of characters you collect
                            these souls for.</small>
                    </div>
                    <button type="submit" class="btn btn-success" >Create</button>
                </div>
                </form>
            </div>
@endsection
@push('scripts')
    <script>
        $().ready(function () {
            $('#lists').DataTable({"paging": false});
        });
    </script>
@endpush
