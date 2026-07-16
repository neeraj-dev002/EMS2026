<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employees</title>

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

        <a href="#">
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


        <!-- Navbar -->

        <nav class="navbar bg-white shadow-sm px-4">

            <h4>
                Employees
            </h4>


            <span>
                Admin
            </span>

        </nav>



        <div class="container-fluid mt-4">


            <div class="card shadow">


                <div class="card-header bg-white d-flex justify-content-between align-items-center">


                    <h5 class="mb-0">
                        Employee List
                    </h5>


                    <a  href="/employees/create" class="btn btn-primary">
                        + Add Employee
                    </a>


                </div>



                <div class="card-body">



                    <!-- Search -->


                    <div class="row mb-3">


                        <div class="col-md-4">

                            <input 
                                type="text" 
                                class="form-control"
                                placeholder="Search employee..."
                            >

                        </div>


                    </div>




                    <!-- Table -->


                    <div class="table-responsive">


                    <table class="table table-hover">


                        <thead class="table-light">

                        <tr>

                            <th>
                                ID
                            </th>

                            <th>
                                Name
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Department
                            </th>

                            <th>
                                Position
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Action
                            </th>

                        </tr>

                        </thead>



                        <tbody>

  @foreach ($employees as $employee)

                        <tr>

                            <td>
                                {{$employee->id}}
                            </td>

                            <td>
                                {{$employee->name}}
                            </td>

                            <td>
                                {{$employee->email}}
                            </td>

                            <td>
                                {{$employee->department}}
                            </td>

                            <td>
                                {{$employee->position}}
                            </td>

                            <td>

                              @if($employee->status==1)
                                <span class="badge bg-success">
                                    Active
                                </span>
                                @else 
                                <span class="badge bg-secondary">
                                    Inactive
                                </span>
                                @endif



                            </td>


                            <td>

                                <button class="btn btn-sm btn-info text-white">
                                    View
                                </button>

                                <button class="btn btn-sm btn-warning">
                                    Edit
                                </button>
<form action="{{route('employees.destroy',$employee->id)}}" method="POST">
 @csrf
 @method('DELETE')   

<button  class="btn btn-sm btn-danger">
        Delete
    </button>
</form>


                            </td>


                        </tr>

@endforeach

 


                        <!-- <tr>

                            <td>
                                EMP003
                            </td>

                            <td>
                                Amit Kumar
                            </td>

                            <td>
                                amit@gmail.com
                            </td>

                            <td>
                                Finance
                            </td>

                            <td>
                                Accountant
                            </td>


                            <td>

                                <span class="badge bg-secondary">
                                    Inactive
                                </span>

                            </td>


                            <td>

                                <button class="btn btn-sm btn-info text-white">
                                    View
                                </button>

                                <button class="btn btn-sm btn-warning">
                                    Edit
                                </button>

                                <button class="btn btn-sm btn-danger">
                                    Delete
                                </button>


                            </td>


                        </tr> -->


                        </tbody>


                    </table>


                    </div>



                </div>


            </div>



        </div>



    </div>


</div>

</div>


</body>

</html>