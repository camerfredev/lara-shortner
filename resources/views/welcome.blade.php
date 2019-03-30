@extends('layouts.master')

@section('content')


<div class="content">

    <h1 class="h1">Le meilleur raccourcisseur d’url !!!!</h1>
<form action="" method="post">
    @csrf 
  {{-- {{ dd($errors) }} --}}
  @if($errors->has('url'))
  <small style="color:red; font-size:20px;">{{ $errors->first('url') }}</small>
  @endif
    <input type="text" name="url" value="{{ old('url') }}" placeholder="entrer votre url original" class="urlentrer">
    <input type="submit" value="raccourcir" class="btn-submit"><br>

  
</form>
    
</div>
@stop