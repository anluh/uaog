{{--$ministries - масив зі служіннями--}}
{{--$ministries->title - заголовок--}}
{{--$ministries->body -текст--}}

@extends('layouts.app')

@section('content')
    <h1>Ministries</h1>
    @if(count($ministries) > 0)
        @foreach($ministries as $ministry)
            <div class="well">
                <h3>{{$ministry->title}}</h3>
            </div>
        @endforeach
    @else
        <p>Служінь не знайдено</p>
    @endif
@endsection
