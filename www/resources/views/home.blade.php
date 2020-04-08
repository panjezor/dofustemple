@extends('layouts.app')

@section('content')
    <div class="col-xl-2 col-lg-3 col-md-4 col-12">
        <div class="card shadow mb-5 rounded">
            <div class="card-header">{{__('main.dashboard-title')}}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p>
                    @guest
                        {!! __('main.dashboard-guest') !!}
                    @else
                        {!! __('main.dashboard-user', ['users'=>App\Models\User::all()->count(), 'name'=>Illuminate\Support\Facades\Auth::user()->name])!!}
                    @endguest
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-8 col-12">
        <div class="card shadow mb-5 rounded">
            <div class="card-header">Almanax</div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-bordered-dofus" id="almanaxtable">
                    <thead>
                        <tr>
                            <th>{{__('main.date')}}</th>
                            <th>{{__('main.offering')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach((new \App\Repositories\AlmanaxRepository())->pickNext() as $almanax)
                            <tr>
                                <td>{{$almanax->needed_by}}</td>
                                <td>{{$almanax->offering}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>{{__('main.date')}}</th>
                            <th>{{__('main.offering')}}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script>
        $().ready(function () {
            $('#almanaxtable').DataTable(
                {
                    "lengthMenu": [7, 14, 28],
                    @include('helpers.datatables.languagepack')

                }
            );
        });</script>
@endpush
