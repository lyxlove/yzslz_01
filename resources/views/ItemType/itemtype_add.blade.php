<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="{{url('itemtype/save')}}" method="post">
        {!!csrf_field()!!}
        名称：<input type="text" name="item_type">
        <input type="submit" value="保存">
        
        </form>
</body>
</html>