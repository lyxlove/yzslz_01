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
    <button  onclick="OpenAddPage()">添加</button>
    <select id="TypeSelect">
    @foreach($typeList as $mTypeList)
        <option value="">{{$mTypeList['item_type']}}</option>
    @endforeach
    </select>
    <table>
        <thead>
            <tr>
                <td>名称</td>
                <td>价格</td>
                <td>更新日期</td>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $mlist)
            <tr>
                <td>{{$mlist->item_name}}</td>
                <td>{{$mlist->price}}</td>
                <td>{{$mlist->record_day}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
<script>
function OpenAddPage() {
    layer.open({
            type:2,
            skin:'layui-layer-demo',
            area:['1000px','80  0px'],
            content:"{{url('dayprice/add')}}"
        });
}

function ChangePrice(price)
{
    var gold =  parseInt(price);
    price = (price - gold) * 100;
    var silver =parseInt(price);
    price = (price - silver) * 100;
    var copper = parseInt(price);
    return gold+"金"+silver+"银"+copper+"铜";
}

</script>