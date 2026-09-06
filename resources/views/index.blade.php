<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        .even {
            color: #34e313;
            font-weight: bold;
        }

        .odd {
            color: #e31313;
        }

        .text {
            font-weight: bold;
            font-size: 10px;
        }

    </style>
</head>
<body>
    @foreach ($users as $user)
        <span @class(['text', 'even' => $loop->even, 'odd' => $loop->odd])>{{ $user['name'] }}</span><br/>
    @endforeach

    <br/>

    @foreach ($users as $user)
        <label>
            <input name="checkbox" type="checkbox" @checked($loop->even)>
            {{ $user['name'] }}
        </label><br/>
    @endforeach

    <br/>

    <select>
        <option></option>
        @foreach ($users as $user)
            <option @selected($user['id'] == 5)>{{ $user['name'] }}</option>
        @endforeach    
    </select>

    <br/>
    <br/>

    <input @readonly(true) value="TESTE" />

</body>
</html>