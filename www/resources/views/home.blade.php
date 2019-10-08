@extends('layouts.app')

@section('content')
    <div class="col-xl-2 col-lg-3 col-md-4 col-12">
                <div class="card shadow mb-5 rounded">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Have a nice day!</p>
                        <p>You are one of {{app\Models\User::all()->count()}} users registered on our website.</p>
                        <p>Feel free to share this tool with your friends</p>
                    </div>
                </div>
            </div>

    <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                <div class="card shadow mb-5 rounded">
                    <div class="card-header">Almanax</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered table-bordered-dofus">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Offering</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Models\Almanax::pickNext() as $almanax)
                                    <tr>
                                        <td>{{$almanax->needed_by}}</td>
                                        <td>{{$almanax->offering}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Offering</th>
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
            $('table').DataTable();
        });</script>
@endpush
