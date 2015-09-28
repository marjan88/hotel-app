@extends('app')

@section('content')
<div class="row">
    <h2>Hello {{\Auth::user()->name}}</h2>
</div>
@stop

