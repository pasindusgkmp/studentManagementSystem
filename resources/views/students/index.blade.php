<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="container">
<a href="{{ route('students.create') }}" class="btn btn-outline-primary mt-5">Create</a>

    <table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th scope="col">Birth Day</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student )
      <tr>
        <th scope="row">{{ $student->id }}</th>
        <td>{{ $student->first_name }}</td>
        <td>{{ $student->last_name }}</td>
        <td>{{ $student->contact_no }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->birthday }}</td>
        <td><a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a></td>
      </tr> 
  @endforeach
  </tbody>
</table>
</body>
</html>