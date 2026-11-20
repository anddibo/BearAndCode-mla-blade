<!-- 
    Como os métodos do $attributes são fluentes, podemos encadear vários métodos para manipular os atributos do componente.
    
    No exemplo abaixo, estamos usando o método merge() para adicionar atributos (type e data-customerid) ao botão.
    Em seguida, usamos o método class() para adicionar classes CSS ao botão, garantindo que ele tenha a aparência desejada.
   
-->

<button
    {{ $attributes->merge(['type' => 'button', 'data-customerid' => 1])->class=(["cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"]) }}
>
    Enviar
</button>