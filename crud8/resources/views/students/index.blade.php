<html>
<body>
@foreach ($students as $student)
    <p>Name: {{ $student->name }}</p>
@endforeach
</body>
</html>

