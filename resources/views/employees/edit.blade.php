<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Employee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        body {
            background: #f5f6fa;
        }

        .sidebar {
            min-height: 100vh;
            background: #212529;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }

        .sidebar a:hover {
            background: #0d6efd;
        }

        .card {
            border-radius: 15px;
            border: none;
        }
    </style>

</head>


<body>


    <div class="container-fluid">


        <div class="row">


            <!-- Sidebar -->


            <div class="col-md-2 sidebar p-0">


                <h3 class="text-white text-center py-4">
                    EMS
                </h3>


                <a href="/dashboard">
                    Dashboard
                </a>


                <a href="/employees">
                    Employees
                </a>


                <a href="/departments">
                    Departments
                </a>


                <a href="#">
                    Attendance
                </a>


                <a href="#">
                    Leaves
                </a>


                <a href="#">
                    Payroll
                </a>


            </div>




            <!-- Main Content -->


            <div class="col-md-10">


                <nav class="navbar bg-white shadow-sm px-4">

                    <h4>
                        Edit Employee
                    </h4>


                    <span>
                        Admin
                    </span>

                </nav>





                <div class="container mt-4">


                    <div class="card shadow">


                        <div class="card-header bg-white">

                            <h5>
                                Update Employee Information
                            </h5>

                        </div>



                        <div class="card-body">


                            <form action="{{route('employees.update', $employee->id)}}" method="POST">
                                @csrf
                                @method('PUT')

                                <h6 class="text-primary mb-3">
                                    Personal Details
                                </h6>


                                <div class="row">


                                    <div class="col-md-6 mb-3">


                                        <label class="form-label">
                                            Full Name
                                        </label>


                                        <input type="text" 
                                        name="name"
                                        class="form-control" value="{{$employee->name}}"
                                            value="Rahul Sharma">


                                    </div>



                                    <div class="col-md-6 mb-3">


                                        <label class="form-label">
                                            Email
                                        </label>


                                        <input type="email" 
                                        name="email"
                                        class="form-control" value="{{$employee->email}}"
                                            value="rahul@gmail.com">


                                    </div>


                                </div>





                                <div class="row">


                                    <div class="col-md-6 mb-3">


                                        <label class="form-label">
                                            Phone
                                        </label>


                                        <input type="text"
                                        name="phone"
                                        class="form-control" value="{{$employee->phone}}"
                                            value="9876543210">


                                    </div>



                                    <div class="col-md-6 mb-3">


                                        <label class="form-label">
                                            Gender
                                        </label>


                                        <select name="gender" class="form-select">


                                            <option  value="Male" {{$employee->gender == 'Male' ? 'selected' : '' }}>
                                                Male
                                            </option>


                                            <option value="Female" {{$employee->gender == 'Female' ? 'selected' : '' }}>
                                                Female
                                            </option>


                                        </select>


                                    </div>


                                </div>







                                <h6 class="text-primary mt-4 mb-3">
                                    Job Details
                                </h6>





                                <div class="row">


                                    <div class="col-md-6 mb-3">


                                        <label class="form-label">
                                            Department
                                        </label>


                                        <select name="department" class="form-select">


                                            <option value="IT" {{$employee->department == 'IT' ? 'selected' : '' }}>
                                                IT
                                            </option>


                                            <option value="HR" {{$employee->department == 'HR' ? 'selected' : '' }}>
                                                HR
                                            </option>


                                            <option value="Finance" {{$employee->department == 'Finance' ? 'selected' : '' }}>
                                                Finance
                                            </option>


                                        </select>


                                    </div>




                                    <div class="col-md-6 mb-3">


                                        <label class="form-label">
                                            Designation
                                        </label>


                                        <input type="text" 
                                        name="position"
                                        value="{{$employee->position}}" class="form-control"
                                            value="Software Developer">


                                    </div>


                                </div>







                                <div class="row">


                                    <div class="col-md-6 mb-3">


                                        <label class="form-label">
                                            Joining Date
                                        </label>


                                        <input type="date" 
                                        name="joining_date"
                                        value="{{$employee->
    joining_date}}" class="form-control" value="2025-01-15">


                                    </div>




                                    <div class="col-md-6 mb-3">


                                        <label class="form-label">
                                            Status
                                        </label>


                                        <select name="status" class="form-select">


                                            <option value="1" {{$employee->status == 1 ? 'selected' : ''}}>
                                                Active
                                            </option>


                                            <option value="0" {{$employee->status == 0 ? 'selected' : ''}}>
                                                Inactive
                                            </option>

                                        </select>


                                    </div>


                                </div>


                                </select>


                        </div>


                    </div>







                    <h6 class="text-primary mt-4 mb-3">
                        Address
                    </h6>



                    <textarea name="address" class="form-control mb-4" value="{{$employee->address}}"
                        rows="3">Dehradun, Uttarakhand</textarea>






                    <div class="text-end">


                        <a href="/employees" class="btn btn-secondary">
                            Cancel
                        </a>


                        <button type="submit" class="btn btn-success">
                            Update Employee
                        </button>

                    </div>



                    </form>



                </div>


            </div>


        </div>




    </div>


    </div>


    </div>


</body>

</html>