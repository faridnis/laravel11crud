<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Add New User</div>
            <div class="card-body">
                <form action="{{ route('AddUser')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Password">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Your Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>