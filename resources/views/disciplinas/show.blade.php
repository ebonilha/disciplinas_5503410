@extends('layouts.master')
<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>

<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Criar Turma</a>
<p>
@foreach ($disciplina->turmas as $turma)
	{{ $turma->ministrante }}<br>
	{{ $turma->inicio }}<br>
@endforeach
</p>
<a href="/"> Voltar </a>