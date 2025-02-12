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
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'CNPJ não inserido' }}
    <br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    @switch($fornecedores[0]['ddd'])
        @case('11')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @case('64')
            Caldas Novas - GO
            @break
        @default
            Estado não identificado
    @endswitch
@endisset