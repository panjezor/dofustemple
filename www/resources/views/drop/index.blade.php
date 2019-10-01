@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <div class="card shadow mb-5 rounded">
                    <div class="card-header">{{__('drop.calc')}}</div>
                    <div class="card-body">
                        <div class="form-group" style="display: flex;">
                            <div class="col-2">
                                <div class=" card">
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
                                </div>
                                <div id="character-pp" class="card-body"></div>
                            </div>
                            <div class="col-2">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="monster-count">{{__('drop.monsters')}}</label>
                                        <select name="monster-count" id="monster-count" class="form-control">
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
                                    <div id="monster-pp" class="card-body"></div>
                                </div>
                            </div>
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
