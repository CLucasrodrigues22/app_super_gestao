<h3>Teste Forncecedor</h3>


{{--Escrevendo PHP puro em um arquivo laravel (Exemplo de comentário)--}}

{{ 'Tag de impressão Laravel' }} <br>
<?= 'Texto de teste' ?> 

@php 

echo 'Teste';

@endphp

{{-- Fica o comentário á ser descartado --}}
{{-- 
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existe alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existe vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existe fornecedores cadastrados</h3>
@endif --}}

Forncecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['Status'] }}