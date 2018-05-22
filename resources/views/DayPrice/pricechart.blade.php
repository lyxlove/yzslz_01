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
    <script src="/js/HighChart/highcharts.js"></script>
    <script src="/js/HighChart/modules/exporting.js"></script>
    <script src="/js/HighChart/modules/oldie.js"></script>
</head>
<body>

    <div id="container" style="max-width:800px;height:400px"></div>
    
    
</body>
</html>
<script>

window.onload=function()
{
    LoadChart();
}
    
    function GetArr()
    {
        var arr = new Array();
        var arr1 = new Array();
        @foreach($list as $mlist)        
            arr1.push('{{$mlist->created_at}}');
            arr1.push({{$mlist->price}});
            arr.push(arr1);
            arr1 = new Array();
        @endforeach
        return arr;
    }

    function LoadChart()
    {
        var chart = Highcharts.chart('container',{
            chart: {
        type: 'spline'
    },
    title: {
        text: '价格走势'
    },
    subtitle: {
        text: '非规律性时间内的变化'
    },
    xAxis: {
        type: 'datetime',
        title: {
            text: null
        }
    },
    yAxis: {
        title: {
            text: ' 价格(金)'
        },
        min: 0
    },
    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.x:%e. %b}: {point.y:.2f} 金'
    },
    plotOptions: {
        spline: {
            marker: {
                enabled: true
            }
        }
    },
    series: [{
        name:'111',
        data:GetArr()
    }]
        });
    }

</script>