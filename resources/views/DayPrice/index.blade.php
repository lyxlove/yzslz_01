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
                <td><a onclick="ViewChart({{$mlist->item_id}})">{{$mlist->item_name}}</a></td>
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
            area:['1000px','800px'],
            content:"{{url('dayprice/add')}}"
            
        });
}

function ViewChart(item_id) {
    layer.open({
        type:2,
        area:['1000px','800px'],
        content:"{{url('dayprice/chart')}}"+"/"+item_id
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