<h1>Teste</h1>

{{-- Aqui fica os comentarios descartados pelo interpretador do Blade --}}

@php
    /*
    
    if(empty($variavel)) {} //retorna true se a variavel estiver vazia
    ex.:
    - '' string vazia
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var variavel sem valor

    }*/
@endphp 

@isset($fornecedores)
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{$fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset