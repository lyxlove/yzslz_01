<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{url('dayprice/save')}}" method="POST">

        <select name="item_id">
            @foreach($list as $mlist)
            <option value="{{$mlist['item_id']}}">{{$mlist['item_name']}}</option>
            @endforeach
        </select>
        {!!csrf_field()!!} 价格:
        <input type="text" name="price"> 日期:
        <input type="date" name="record_day">
        <input type="submit" value="提交">
    </form>
</body>

</html>
<script>
    function GetItem() {
        .ajax({
            type: 'POST',
            url: '',
            dataType: 'json',
            data: {
                o: ''
            },
            async: true,
            success: function (data) {

            },
            complete: function () {

            }
        });
    }
</script>