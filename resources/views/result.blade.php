@extends('layouts.master')

@section('content')

<div class="content">
    <h1 class="h1">VOICI VOTRE URL RACCOURCI</h1>
    <a  class ="link" href="{{ config('app.url').$shortened }}"> {{ config('app.url').$shortened }}</a><br>
</div>

@stop