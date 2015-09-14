@extends('app')

@section('content')
    <div class="content">
        <div class="title">About {{ $first }} {{ $last }}!</div>
    </div>
    <div class="work_list">
        <h3>Things We Do</h3>
        @if(count($work_list))
            <ul>
                @foreach($work_list as $work)
                    <li>{{ $work }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@stop

@section('footer')
    <div class="footer">
        <script src="http://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </div>
@stop