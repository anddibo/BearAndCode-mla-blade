<span>{{ $user['name'] }}</span>

@pushOnce('scripts')
    <script>
        console.log('Ola Mundo 2');
    </script>
@endPushOnce

@prependOnce('scripts')
    <script>
        console.log('Ola Mundo');
    </script>
@endPrependOnce