<!--    
    A diretiva aware é usada para tornar a propriedade type disponível para o componente filho (button) 
    sem precisar passá-la explicitamente como um atributo.
-->

@aware(['type' => 'error'])

<button
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
>
    @if($type === 'success')
        Sucesso
    @endif

    @if($type === 'error')
        Erro
    @endif

</button>