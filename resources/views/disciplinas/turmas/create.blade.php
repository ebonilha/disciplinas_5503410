<form method="POST" action="/disciplinas/{{ $disciplina_id }}/turmas">
	{{ csrf_field() }}

	Ministrante: <input name="ministrante">

	Data inicio: <input name="inicio">

	Data fim: <input name="fim">

	Bbbliografia: <textarea name="bibliografia"></textarea>

	<button type="submit" class="btn btn-success"> Salvar </button>

</form>