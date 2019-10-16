@extends('layouts.app')

@section('content')
    <div class="col-lg-6 col-sm-8">
        <div class="card">
            <div class="card-header">
                {{__('main.future-features')}}
            </div>
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
    <div class="col-xl-2 col-lg-3 col-sm-4">
        <form method="get" action="">
            <div class="card ">
                <div class="card-header">
                    {{__('todo.suggest-new-feature')}}
                </div>
                <div class="form-group p-2">
                    <label for="inputFeatureTitle">{{__('todo.feature-title')}}</label>
                    <input class="form-control" id="inputFeatureTitle" name="title">
                </div>
                <div class="form-group p-2">
                    <label for="inputFeatureDescription">{{__('todo.feature-desc')}}</label>
                    <input class="form-control" id="inputFeatureDescription" name="description">
                </div>
                <button type="submit" class="btn btn-success">{{__('main.submit')}}</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')

@endpush
