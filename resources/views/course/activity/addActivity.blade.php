@extends('layouts.app')

@section('content')
    <h1>
        Form of insert a new Course-Activity </h1>  
        <form action="{{ url('/add/activity') }}" method="POST" >
            {{ csrf_field() }}
            <label>Title:</label>
            <p><input type="text" name="title" placeholder="Insira o título da atividade"></p>
            
            <label>Descrição:</label>
            <p><input type="text" name="description" placeholder="Insira a descrição do curso"></p>
            
            <label>Horas por inclusão:</label>
            <p><input type="number" name="hours" placeholder="Insira a quantidade de horas por inclusão"></p>
            
            <label>Horas Máximas:</label>
            <p><input type="number" name="hours_max" placeholder="Insira as horas mínimas do curso"></p>
            
            <label>Score:</label>
            <p><input name="score_id" placeholder="Selecione o tipo de contabilização" list="score"></p>
            <datalist id="score">
                
            </datalist>
            
            <label>Grupo Atividade:</label>
            <p><input name="activity_group_id" placeholder="Selecione o grupo pertencente a atividade" list="activity_group"></p>
            <datalist id="activity_group">
                
            </datalist>            
            
            <button type="submit">Cadastrar</button> 
        </form>
     
@endsection