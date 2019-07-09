@extends('employees.master')

@section('content')
<h2>Employee List <a href="/employees/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>E-Mail</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>

      @foreach ($employeeList as $emp)
      <tr>
          <td>{{$emp->firstName}}</td>
          <td>{{$emp->lastName}}</td>
          <td>{{$emp->email}}</td>
          <td>
              <span class="pull-right">
                  <form method="post" action="/employees/{{$emp->id}}"> 
                      <a href="/employees/{{$emp->id}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-eye-open"></span> 檢視</a> | 
                      <a href="/employees/{{$emp->id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                  </form>
              </span>
          </td>
      </tr>
      @endforeach
  
  </tbody>
</table>
@endsection
