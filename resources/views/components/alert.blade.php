<!-- 
   faz uma concatenação do atributo class do componente (class="mt-4") 
   com o atributo class do elemento ("rounded-md p-4", $getBgClass),
   gerando o valor "rounded-md p-4 my-4 bg-green-50" (no caso do alert-success). 
 -->
<div {{ $attributes->class(["rounded-md p-4", $getBgClass]) }}>
    <div class="flex">
        <div>
            <h3 @class(["text-sm font-medium", $getTitleClass])>{{ $title }}</h3>
            <div @class(["mt-2 text-sm", $getMessageClass])>
                <span>{{ $message }}</span>
            </div>
        </div>
    </div>    
</div>