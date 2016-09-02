@extends('layouts.welcome')
@section('content')


  @if(isset($id))
    <h1>Teste {{{$nome}}} - {{{$id}}}</h1>
  @endif
  <?php if (true) {
    echo "ok";
  } ?>
  asdsda
@stop
