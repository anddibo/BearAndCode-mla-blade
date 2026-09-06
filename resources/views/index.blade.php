<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    {{ $user['name'] }}

    <script>
        const user = {{ Js::from($user) }};

        console.log(user);
    </script>
</body>
</html>