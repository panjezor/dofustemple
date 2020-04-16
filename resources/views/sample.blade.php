@extends('layouts.app')

@section('content')
    This is how typical site should look like
@endsection

@push('scripts')
    <script>

    </script>
    or
    <script type="text/javascript" src="{{asset('js/((yourname)).js')}}"></script>
@endpush

//@push('styles')
    css should go into css files and then pushed to main app.php blade file, please dont put custom css here
    //@endpush
