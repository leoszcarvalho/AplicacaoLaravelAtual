@extends('layouts.welcome')
@section('content')


  @if(isset($id))
    <h1>Teste {{{$nome}}} - {{{$id}}}</h1>
  @endif
  <?php if (true) {
    echo "ok";
  } ?>
  asdsda

  <form  action="todos/store" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <label for="name">Nome</label>
    <input type="text" name="name" value="">
    <br>
    <label for="title">Title</label>
    <input type="text" name="title" value="">
    <br>
    <input type="submit"  value="Enviar">
  </form>

@stop
