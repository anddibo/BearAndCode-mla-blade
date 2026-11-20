<!-- 
    Aqui nós temos dois atributos diferentes para o componente button: type e class.

    O merge está parametrizado para:
    1. considerar o valor default 'button' para o atributo type, caso não seja passado nenhum valor para ele.
    2. considerar o valor default 1 para o atributo data-customerid, caso não seja passado nenhum valor para ele.
-->

<button
    {{ $attributes->merge(['type' => 'button', 'data-customerid' => 1]) }}
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
>
    Enviar
</button>