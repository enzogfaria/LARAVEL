<h1>Teste</h1>

{{-- Aqui fica os comentarios descartados pelo interpretador do Blade --}}

@php
    /*
    if(isset($variavel)) {} //retorna true se a variavel estiver definida
    }*/
@endphp 

@isset($fornecedores)
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@endisset