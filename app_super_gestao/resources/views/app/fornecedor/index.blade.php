<h1>Teste</h1>

{{-- Aqui fica os comentarios descartados pelo interpretador do Blade --}}

@php
    /*
    if(!<condicao>) {} //enquanto o ! do if executa se o retorno for true
    }*/
@endphp 
{{--@dd($fornecedores)--}}

{{-- @unless executa se o retorno for false --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>

{{--@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif--}}

@unless($fornecedores[0]['status'] == 'S') <!-- Se o retorno da condição for false -->
    Fornecedor inativo
@endunless