<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="card p-5">
        <div class="card-header">
            <h2>Add Employee Information</h2>
        </div>

        @if(request()->has('id'))
            <form method="POST" action="{{route('updateEmployeeInfo', request()->has('id'))}}">
                @method('put')
                @csrf
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>NAME :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->name}}" name="name" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>EMAIL :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" value="{{request()->email}}" name="email" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>ADDRESS :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->address}}" name="address" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Mobile :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->mobile}}" name="mobile" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Date of Birth :</h5></label>
                    <div class="col-sm-10">
                        <input type="date" value="{{request()->dob}}" name="dob" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Designation :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" value="{{request()->designation}}" name="designation" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Salary :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" value="{{request()->salary}}" name="salary" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <button type="submit" name="update" class="btn btn-warning">Update</button>
            </form>
        @else
            <form method="POST" action="{{route('addEmployeeInfo')}}">
                @csrf
                <div class="row mb-3 mt-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>NAME :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>EMAIL :</h5></label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>ADDRESS :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Mobile :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" name="mobile" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Date of Birth :</h5></label>
                    <div class="col-sm-10">
                        <input type="date" name="dob" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Designation :</h5></label>
                    <div class="col-sm-10">
                        <input type="text" name="designation" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Salary :</h5></label>
                    <div class="col-sm-10">
                        <input type="number" name="salary" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <button type="submit" name="add" class="btn btn-warning">ADD</button>
            </form>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success mt-3">{!! \Session::get('success') !!} </div>
        @endif
    </div>
</div>

<div class="container mt-5">
    <div class="card p-5">
        <div class="card-header">
            <h2>Employee List</h2>
        </div>

        <div class="row mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach($employeeInfoData as $employeeInfo)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td><div class="ms-2 me-auto">{{$employeeInfo->name}}</div></td>
                            <td><div class="ms-2 me-auto">{{$employeeInfo->email}}</div></td>
                            <td><div class="ms-2 me-auto">{{$employeeInfo->address}}</div></td>
                            <td><div class="ms-2 me-auto">{{$employeeInfo->mobile}}</div></td>
                            <td><div class="ms-2 me-auto">{{$employeeInfo->dob}}</div></td>
                            <td><div class="ms-2 me-auto">{{$employeeInfo->designation}}</div></td>
                            <td><div class="ms-2 me-auto">{{$employeeInfo->salary}}</div></td>
                            <td>
                                <span class="badge rounded-pill">
                                    <a
                                        href="
                                        {{
                                            route('index',
                                                [
                                                    'id' => $employeeInfo -> id,
                                                    'name' => $employeeInfo -> name,
                                                    'email' => $employeeInfo -> email,
                                                    'address' => $employeeInfo -> address,
                                                    'mobile' => $employeeInfo -> mobile,
                                                    'dob' => $employeeInfo -> dob,
                                                    'designation' => $employeeInfo -> designation,
                                                    'salary' => $employeeInfo -> salary,
                                                ])
                                        }}"
                                        class="btn btn btn-secondary btn-sm"
                                    >Edit
                                    </a>
                                    <a
                                        href="#"
                                        onclick="event.preventDefault();document.getElementById('delete-to').submit();"
                                        class="btn btn btn-danger btn-sm"
                                    >Delete
                                    </a>
                                    <form id="delete-to" action="{{route('deleteEmployeeInfo', $employeeInfo->id)}}" method="POST" class="d-none">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
