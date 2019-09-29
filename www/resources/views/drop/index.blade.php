@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <div class="card shadow mb-5 rounded">
                    <div class="card-header">{{__('drop.calc')}}</div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="character-count" id="character-count" class="form-control col-1">
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
                </div>
            </div>
        </div>
    </div>
@endsection
