@extends('layouts.app')

@section('content')
    <h1>
        Form of insert a new Course
    </h1>
    <form action="{{ url('/new/course') }}" method="POST" >
        {{ csrf_field() }}
        <label>Nome:</label>
        <p><input type="text" name="name" placeholder="Insira o nome do curso"></p>
        
        <label>Descrição:</label>
        <p><input type="text" name="description" placeholder="Insira a descrição do curso"></p>
        
        <label>Horas Minimas:</label>
        <p><input type="text" name="hours_min" placeholder="Insira as horas mínimas do curso"></p>
        
        <label>Coordenador:</label>
        <p><input name="user_id" placeholder="Selecione o coordenador" list="coordenador"></p>
        <datalist id="coordenador">
            
        </datalist>
        
        <button type="submit">Cadastrar</button> 
    </form>    
@endsection