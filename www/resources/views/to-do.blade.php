@extends('layouts.app')

@section('content')
    <div class="col-4">
        <div class="card">
            <div class="card-header">{{__('future-features')}}</div>
            <div class="card-body">
                <ol>
                    @php($todos = Todo::all())
                    @foreach()
                </ol>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
