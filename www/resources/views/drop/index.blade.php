@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card shadow mb-5 rounded">
            <div class="card-header">{{__('drop.calculator')}}</div>
            <div class="card-body">
                <div class="form-group" style="display: flex;">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class=" card shadow mb-1 rounded">
                            <div class="card-header">
                                <label for="character-count">{{__('drop.characters')}}</label>
                                <select name="character-count" id="character-count" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                            <div id="character-pp" class="card-body">
                                @foreach(range(1,8) as $value)
                                    <span id="char-span{{$value}}" style="display: none">
                                        <label for="character{{$value}}">{{__('drop.character')}}</label>
                                            <input
                                                id="character{{$value}}"
                                                class="form-control">
                                        </span>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card shadow mb-1 rounded">
                            <div class="card-header">
                                {{__('drop.monsters')}}
                            </div>
                            <div id="monster-pp" class="card-body form-group">
                                <label for="monster-drop">Item drop rate</label>
                                <input id="monster-drop" class="form-control" type="number" min="0" max="100"
                                       value="0">
                                <label for="monster-lock">Prospecting lock</label>
                                <input id="monster-lock" class="form-control" type="number" min="0" max="400"
                                       value="100">
                                <label for="monster-count">Monster count</label>
                                <input id="monster-count" class="form-control" type="number" min="1" max="8"
                                       value="1">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card shadow mb-1 rounded">
                            hello
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('js/drop-index.js')}}"></script>
@endpush
