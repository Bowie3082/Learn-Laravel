<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>welcome {{ $name or 'no name' }}</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.
    </p>
    {{ '<script>
        alert("Hello, World!");
    </script> '}}

</body>

</html>