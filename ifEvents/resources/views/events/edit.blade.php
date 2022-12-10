@extends('layouts.main')

@section('title', 'Editando {{$event-title}}')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Edite o seu evento</h1>
  <form action="/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input required type="file" id="image" name="image" class="from-control-file">
      <img src="img/event/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input required type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{$event->title}}">
    </div>
    <div class="form-group">
      <label for="date">Data do evento:</label>
      <input required type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input required type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
    </div>
    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea required name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione itens de infraestrutura:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="OpenBar"> OpenBar
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="OpenFood"> OpenFood
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Gifts"> Gifts
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection