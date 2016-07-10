@extends('view.template.student_layout')

@section('main_panel')
    @parent
    <h1 class="page-header">{{$lessonName}}</h1>
    <h2 class="sub-header"><small>课程资源下载列表</small></h2>
    <table class="table">
        <thead>
            <tr>
                <th style="color:#55595c;background-color:#eceeef">文件名称</th>
                <th style="color:#55595c;background-color:#eceeef">文件类别</th>
                <th style="color:#55595c;background-color:#eceeef">创建者</th>
                <th style="color:#55595c;background-color:#eceeef">下载</th>
            </tr>
        </thead>
        <tbody>
        @foreach($resourcesList as $resource)
            <tr>
                <th>{{$resource['name']}}</th>
                <th>{{$resource['catogoryName']}}</th>
                <td>{{$resource['teacherName']}}</td>
                <td><a href="{{$resource['path']}}"><button class="btn btn-success">下载</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('bodyJS')
    @parent
    <script>
        $(function () {
            // 更改sidebar的样式, 使当前页面显示为active
            $("#resource").addClass("active");
        });
    </script>
@endsection