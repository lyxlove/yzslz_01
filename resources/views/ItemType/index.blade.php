<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="/css/y.css">
    <script src="/js/layer/layer.js"></script>
</head>
<body>
<a href="{{url('/')}}">首页</a>
    <button onclick="OpenAddPage()">添加</button>
    <table>
    <tr>
        <td>名称</td>
        <td></td>
    </tr>
    <thead>
    </thead>
    <tbody>
        @foreach($data as $mdata)
        <tr>
            <td>{{$mdata['item_type']}}</td>
            <td><span onclick="DeleteItemType({{$mdata['item_type_id']}})">删除</span></td>
        </tr>
    </tbody>
    @endforeach
    </table>


</body>
</html>

<script>
    function OpenAddPage()
    {
        layer.open({
            type:2,
            skin:'layui-layer-demo',
            area:['1000px','80  0px'],
            content:"{{url('itemtype/add')}}"
        });
    }
    
    function DeleteItemType(id)
    {
        $.ajax({
            type:'GET',
            url:"{{url('itemtype/delete')}}"+'/'+id
        });

    }
        

</script>