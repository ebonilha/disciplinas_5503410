<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>

<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Criar Turma</a>

<a href="/"> Voltar </a>