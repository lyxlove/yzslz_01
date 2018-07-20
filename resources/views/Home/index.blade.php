<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <script src="/js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/y.css">

    <style>
        [class*="col-"]{
            padding-top:15px;
            padding-buttom:15px;
            background-color:#eeeeee;
            border:1px solid #dddddd;
        }
    </style>
</head>
<body>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">col-md-1</div>
            <div class="col-md-4">col-md-1</div>
            <div class="col-md-4">col-md-1</div>
            
        </div>
    </div>

    <ul>
        <li><a href="{{url('itemtype/index')}}">物品分类</a></li>
        <li><a href="{{url('items/index')}}">物品管理</a></li>
        <li><a href="{{url('dayprice/index')}}">价格</a></li>
    </ul>
</div>    

</body>
</html>

<script>



</script>