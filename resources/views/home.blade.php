<!DOCTYPE html>
<html>
<head>
	<title>{{ $title ?? 'Title' }}</title>
</head>
<body>
	<h1>{{ $title ?? 'Title' | strtoupper }}</h1>
	<p>This is a blade template.</p>
</body>
</html>