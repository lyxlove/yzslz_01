<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="{{url('items/saveitems')}}" method="post">
    {!!csrf_field()!!}
    名称：<input type="text" name="item_name">
    种类：
    <select name="item_type_id" >
        @foreach($list as $mlist)
        <option value="{{$mlist['item_type_id']}}">{{$mlist['item_type']}}</option>
        @endforeach
    </select>
    <input type="submit" value="保存">
</form>
</body>
</html>