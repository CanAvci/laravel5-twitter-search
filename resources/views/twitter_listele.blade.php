@extends('layout.master')

@section('content')



@foreach($statuses as $value)
@foreach ($value as $twit)
{!! print_r($twit) !!}
{{"<hr/><br/><br/><br/>"}}
@endforeach
@endforeach

@stop