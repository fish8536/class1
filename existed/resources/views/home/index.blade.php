<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lab</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.mobile-1.3.2.min.js"></script>
	<link rel="stylesheet" href="js/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head>

<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>Employee Details</h1>
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">

	@foreach ($employeeList as $emp)
		<li>
		<a href="/employee/{{ $emp->employeeId }}" data-ajax="false"> 
			<img src="images/{{ $emp->picture }}">
			<h4>{{ $emp->firstName }} {{ $emp->lastName }}</h4>
			<p>{{ $emp->title }}</p>
			<p>{{ $emp->department["departmentName"] }}</p>
		</a>
		</li>
	@endforeach


	</ul>
</div>

</div>
</body>

</html>
