<!--    
    O método filter() é usado para filtrar os atributos do componente com base em uma função de callback fornecida. 
-->
<!--
<button
    {{ $attributes->filter(fn ($value, $key) => $key === "data-customerid") }}
    
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
>
    Enviar
</button>
-->

<!--    
    O método whereStartsWith() também poderia ser usado para filtrar os atributos do componente e de mais fácil aplicação em relação ao filter().
    Resultado: somente o atributo data-customerid é renderizado no botão, o atributo type é removido do botão.
-->
<!--
<button
    {{ $attributes->whereStartsWith('data-customerid') }}
    
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
>
    Enviar
</button>
-->

<!-- 
    O método whereDoesntStartWith() também poderia ser usado para filtrar os atributos do componente e de mais fácil aplicação em relação ao filter().
    Resultado: somente o atributo type é renderizado no botão, o atributo data-customerid é removido do botão.
-->
<!--
<button
    {{ $attributes->whereDoesntStartWith('data-customerid') }}
    
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
>
    Enviar
</button>
-->

<!--    
    Podemos usar condições para renderizar o conteúdo do botão com base na presença de um atributo específico.
    No exemplo abaixo, se o atributo data-customerid estiver presente, o conteúdo do botão será "Customerid: 123", caso contrário, o conteúdo será "Enviar".
-->
<button
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
>
    @if($attributes->has('data-customerid'))
        Customerid: 123
    @else
        Enviar
    @endif
</button>