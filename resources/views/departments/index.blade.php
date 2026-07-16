<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Departments</title>

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


        <a href="#">
            Reports
        </a>


    </div>



    <!-- Main Content -->


    <div class="col-md-10">


        <!-- Navbar -->


        <nav class="navbar bg-white shadow-sm px-4">


            <h4>
                Departments
            </h4>


            <span>
                Admin
            </span>


        </nav>



        <div class="container-fluid mt-4">


            <div class="card shadow">



                <div class="card-header bg-white d-flex justify-content-between align-items-center">


                    <h5 class="mb-0">
                        Department List
                    </h5>


                    <a href="{{ route('departments.create') }}" class="btn btn-primary">
                        + Add Department
                    </a>


                </div>




                <div class="card-body">


                    <div class="table-responsive">


                    <table class="table table-hover">


                        <thead class="table-light">


                        <tr>

                            <th>
                                ID
                            </th>

                            <th>
                                Department Name
                            </th>

                            <th>
                                Department Head
                            </th>

                            <th>
                                Total Employees
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


@foreach ($departments as $department )


                        <tr>


                            <td>
                             {{$department->id}}
                            </td>


                            <td>
                                {{$department->dep_name}}
                            </td>


                            <td>
                                {{$department->dep_head}}
                            </td>


                            <td>
                               {{$department->total_employees}}
                            </td>


                            <td>

                                <span class="badge bg-success">
                                    Active
                                </span>

                            </td>


                            <td>

                                <button class="btn btn-sm btn-info text-white">
                                    View
                                </button>


                                <a href="{{ route('departments.edit',$department->id) }}" class="btn btn-sm btn-warning">
                                    Edit
</a>


<form action="{{ route('departments.destroy',$department->id) }}" method="post">

@csrf
@method('DELETE ')

                                <button class="btn btn-sm btn-danger">
                                    Delete
                                </button>

</form>
                            </td>


                        </tr>

@endforeach



 


 


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