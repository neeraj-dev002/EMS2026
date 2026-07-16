<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee Details</title>

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
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }


        .sidebar a:hover {
            background: #0d6efd;
        }


        .profile-card {
            border-radius: 15px;
            border: none;
        }


        .profile-img {

            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;

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


        <a href="#">
            Reports
        </a>


        <a href="#">
            Settings
        </a>


    </div>





    <!-- Main Content -->


    <div class="col-md-10">


        <!-- Navbar -->


        <nav class="navbar bg-white shadow-sm px-4">


            <h4>
                Employee Details
            </h4>


            <strong>
                Admin
            </strong>


        </nav>





        <div class="container mt-4">


            <div class="card shadow profile-card">


                <div class="card-header bg-primary text-white">


                    <h5 class="mb-0">
                        Employee Profile
                    </h5>


                </div>




                <div class="card-body">


                    <div class="row">


                        <!-- Left Profile -->


                        <div class="col-md-4 text-center">


                            <img src="https://via.placeholder.com/150"
                            class="profile-img mb-3">


                            <h3>
                                {{ $employee->name }}
                            </h3>


                            @if($employee->status == 1)

                                <span class="badge bg-success">
                                    Active
                                </span>

                            @else

                                <span class="badge bg-danger">
                                    Inactive
                                </span>

                            @endif


                        </div>





                        <!-- Right Details -->


                        <div class="col-md-8">


                            <table class="table table-bordered">


                                <tr>

                                    <th>
                                        Employee ID
                                    </th>

                                    <td>
                                        EMP{{ $employee->id }}
                                    </td>

                                </tr>



                                <tr>

                                    <th>
                                        Name
                                    </th>

                                    <td>
                                        {{ $employee->name }}
                                    </td>

                                </tr>



                                <tr>

                                    <th>
                                        Email
                                    </th>

                                    <td>
                                        {{ $employee->email }}
                                    </td>

                                </tr>




                                <tr>

                                    <th>
                                        Phone
                                    </th>

                                    <td>
                                        {{ $employee->phone }}
                                    </td>

                                </tr>




                                <tr>

                                    <th>
                                        Gender
                                    </th>

                                    <td>
                                        {{ $employee->gender }}
                                    </td>

                                </tr>




                                <tr>

                                    <th>
                                        Department
                                    </th>

                                    <td>
                                        {{ $employee->department }}
                                    </td>

                                </tr>




                                <tr>

                                    <th>
                                        Created Date
                                    </th>

                                    <td>
                                        {{ $employee->created_at->format('d M Y') }}
                                    </td>

                                </tr>


                            </table>


                        </div>


                    </div>


                </div>


            </div>



            <a href="/employees" class="btn btn-secondary mt-3">
                Back
            </a>



        </div>


    </div>


</div>


</div>


</body>

</html>