<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
</head>
<body>
    <h1>About Page</h1>
    <p>
        <ul>
            <!-- ใช้ Blade directive @foreach เพื่อวนลูปข้อมูลในตัวแปร $info -->
            @foreach($info as $value)
            <!-- แสดงข้อมูลแต่ละรายการในรูปแบบ list item (li) -->
            <li>{{ $value }}</li>
            @endforeach
        </ul>
    </p>
</body>
</html>