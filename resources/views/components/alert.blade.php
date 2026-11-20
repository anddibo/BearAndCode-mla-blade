<!-- 
   faz uma concatenação do atributo class do componente (class="mt-4") 
   com o atributo class do elemento ("rounded-md p-4", $getBgClass),
   gerando o valor "rounded-md p-4 my-4 bg-green-50" (no caso do alert-success). 

   o slot é usado para ser possível passar html dinâmico para dentro do componente, como por exemplo um link ou um botão.
   No exemplo abaixo, o slot é usado para passar um botão para dentro do componente de alerta.
 -->

 <div {{ $attributes->class(["rounded-md p-4", $getBgClass]) }}>
    <div class="flex">
        <div>
            <h3 @class(["text-sm font-medium", $getTitleClass])>{{ $title }}</h3>
            <div @class(["mt-2 text-sm", $getMessageClass])>
                <span>{{ $message }}</span>
            </div>

            {{ $slot }}
        </div>
    </div>    
</div>