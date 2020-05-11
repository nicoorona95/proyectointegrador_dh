@extends('layouts.app')

@section('titulo')
contacto
@endsection

@section('content')
  <section class="container-fluid p-5">
  <p class="h2 text-center text-uppercase"><strong>escribinos</strong></p>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Dirección de correo electrónico</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput2">Asunto</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea3">Tu mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
      </div>
    </form>
    </section>
@endsection
