@extends('layouts.app')

@section('content')
<h2>News List <a href="/news/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Post Time</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>

      @foreach ($newsList as $news)
      <tr>
          <td>{{$news->title}}</td>
          <td>{{$news->users->name}}</td>
          <td>{{$news->updated_at}}</td>
          <td>
              @if (!empty(Request::session()->get('userid')))
              <span class="pull-right">
                    <form method="post" action="/news/{{$news->id}}">
                        <a href="/news/{{$news->id}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-eye-open"></span> 檢視</a> |
                        <a href="/news/{{$news->id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> |
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                    </form>
                </span>
              @endif
          </td>
      </tr>
      @endforeach

  </tbody>
</table>
@endsection
