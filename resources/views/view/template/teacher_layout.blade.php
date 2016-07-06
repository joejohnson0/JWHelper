@extends('view.template.layout')

@section('sidebar')
	@parent
    <ul class="nav nav-sidebar">
      <li class="active" id="index"><a href="http://localhost/JWHelper/public/teacher/index">课程列表 <span class="sr-only">(current)</span></a></li>
    </ul>
    <ul class="nav nav-sidebar">
      <li id="resource"><a href="http://localhost/JWHelper/public/template/no-page">资源列表</a></li>
      <li id="tag"><a href="http://localhost/JWHelper/public/template/no-page">资源分类标签</a></li>
      <li id="homework"><a href="http://localhost/JWHelper/public/teacher/homework">作业列表</a></li>
      <li id="team"><a href="http://localhost/JWHelper/public/template/no-page">团队列表</a></li>
      <li id="chat"><a href="http://localhost/JWHelper/public/template/no-page">在线交流</a></li>
    </ul>
@endsection