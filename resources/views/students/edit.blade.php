<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="container">
    <form class="mt-5" action="{{ route('students.update',$student->id) }}" method="POST">
    @method('PUT')
    @csrf
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control" name="firstname" value="{{ $student->first_name }}" placeholder="Enter First Name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lastname" value="{{ $student->last_name }}" placeholder="Enter Last Name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contact No</label>
    <input type="number" class="form-control"  name="contactno" value="{{ $student->contact_no }}" placeholder="Enter Contact Number">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="{{ $student->address }}" placeholder="Enter Address">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth Day</label>
    <input type="date" class="form-control" name="birthday" value="{{ $student->birthday }}" placeholder="Enter Birthday">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>