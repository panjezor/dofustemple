@extends('layouts.app')

@section('content')
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">{{__('main.future-features')}}</div>
            <div class="card-body">
                <ol>
                    @php($todos = App\Models\Todo::all())
                    @foreach($todos as $todo)
                        <li>
                            <h4>{{$todo->title}}</h4>
                            <p>{{$todo->description}}</p>
                            <p>{{__('main.added-by')}}: {{$todo->user->name}}</p>
                        </li>
                    @endforeach
                </ol>
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
                    <input type="text" class="form-control" id="inputListName" name="inputListName"
                           aria-describedby="listHelp"
                           placeholder="Enter new list name">
                    <small id="listHelp" class="form-text text-muted">Short name for you to call it.</small>
                </div>
                <div class="form-group p-2">
                    <label for="inputCharCount">Amount of characters</label>
                    <input type="number" class="form-control" id="inputCharCount" name="inputCharCount"
                           aria-describedby="charCount"
                           placeholder="Enter amount of characters" min="1" max="24">
                    <small id="charCount" class="form-text text-muted">Specify the number of characters you collect
                        these souls for.</small>
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')

@endpush
