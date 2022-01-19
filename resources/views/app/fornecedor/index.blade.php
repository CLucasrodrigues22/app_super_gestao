<h3>Fornecedores</h3>

{{-- Exemplo de comentário no Blade --}}

@isset($fornecedores)
    @forelse ($fornecedores as $fornecedor)
        Iteração Atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor ['nome'] }}
        <br>
        Status: {{ $fornecedor ['status'] }}
        <br>
        CNPJ: {{ $fornecedor ['cnpj'] ?? 'CNPJ Vázio' }}
        <br>
        Telefone: ({{ $fornecedor ['ddd'] ?? 'DDD Vázio' }}) {{ $fornecedor['telefone'] ?? 'Telefone Vázio'}}
        @if ($loop->first)
            <br>
            Primeira iteração do Loop.
        @endif
        @if ($loop->last)
            <br>
            Última iteração do Loop.
            
            <br>
            Total de registros : {{ $loop->count }}
        @endif
        <hr>
        @empty
            Não existem fornecedores cadastrados
    @endforelse
@endisset 

<br>


