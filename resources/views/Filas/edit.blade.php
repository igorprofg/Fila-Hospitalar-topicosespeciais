<x-settings.layout>
    <x-slot name="heading">Editar Fila</x-slot>
    <x-slot name="subheading">Atualize os dados da fila</x-slot>

    <form method="POST" action="{{ route('filas.update', $fila->id) }}">
        @csrf
        @method('PUT')

        <x-form.input name="paciente_id" label="ID do Paciente" :value="$fila->paciente_id" />
        <x-form.input name="unidade_de_saude_id" label="ID da Unidade de Saúde" :value="$fila->unidade_de_saude_id" />
        <x-form.input name="medico_id" label="ID do Médico" :value="$fila->medico_id" />
        <x-form.input name="status" label="Status" :value="$fila->status" />
        <x-form.input name="prioridade" label="Prioridade" :value="$fila->prioridade" />

        <div class="mt-4">
            <x-primary-button>Atualizar</x-primary-button>
        </div>
    </form>
</x-settings.layout>