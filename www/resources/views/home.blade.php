@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>

            <div class="row justify-content-right">

                 <div class="col-md-9" >
                    <div class="card">
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
            </div>
        </div>
    </div>
    @include('helperviews.datatables')
    <script>
        $().ready(function () {
            $('table').DataTable();
        });</script>

@endsection
