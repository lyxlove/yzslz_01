<!DOCTYPE HTML>
<html>

<head>
    <title>云在水流斋</title>
   
 
    <script src="/js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="/css/y.css">
    <script src="/js/layer/layer.js"></script>
    <script>
        window.onload = function () {

        }
    </script>
</head>

<<<<<<< HEAD
        </script>
    </head>
    <body>
        <pre>
        @foreach($data as $mdata)
        {{$mdata.item_name}}
        @endforeach
        </pre>
    </body>
=======
<body>
<a href="{{url('/')}}">首页</a>
        <button onclick="OpenAddPage()" >添加</button>
    <table>
        <thead>
            <tr>
                <td>名称</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $mdata)
            <tr>
                <td>
                 {{$mdata['item_name']}} 
                 </td> 
                 <td>
                 <span>修改</span> || 
                 <span onclick="DeleteItem({{$mdata['item_id']}})">删除</span>
                 </td>                           
            </tr>
             @endforeach
        </tbody>
    </table>
</body>
>>>>>>> 37dfc276b0b9d8726055959874277cb97ea094b9

</html>

<script>
    function OpenAddPage()
    {
        layer.open({
            type:2,
            skin:'layui-layer-demo',
            area:['420px','420px'],
            content:"{{url('items/detail')}}"
        });
    }

    function DeleteItem(id)
    {
        $.ajax({
            type:'GET',
            url:"{{url('items/delete')}}"+'/'+id
        });

    }
        

</script>