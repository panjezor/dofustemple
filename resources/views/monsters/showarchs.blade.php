@extends('layouts.app')
@section('content')
    <div class="col-md-9">
        <div class="card">
            <table id="archtable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Other name</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($monsters as $monster)
                        <tr>
                            <td>{{$monster->monster_name}}</td>
                            <td>{{$monster->assoc->monster_name}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td>Name</td>
                        <td>Other name</td>
                    </tr>
                </tfoot>
            </table>


        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $().ready(function () {
            $('#archtable').DataTable({
                @include('helpers.datatables.languagepack')
            });
        });
    </script>
@endpush
