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