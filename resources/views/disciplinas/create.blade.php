@extends('layouts.master')
<form method="POST" action="/disciplinas">
    {{ csrf_field() }}
    Nome: <input name="titulo">
    <p>Ementa: <textarea name="ementa"> </textarea></p>
    <button type="submit"> Salvar </button>
</form>