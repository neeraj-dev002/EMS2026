<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee Dashboard</title>

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

        .card-box {
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


        <a href="#">
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
                Dashboard
            </h4>


            <div>
                <strong>
                    Admin
                </strong>
            </div>

        </nav>



        <div class="container-fluid mt-4">


            <!-- Cards -->

            <div class="row g-4">


                <div class="col-md-3">

                    <div class="card card-box shadow p-3">

                        <h6 class="text-muted">
                            Total Employees
                        </h6>

                        <h2>
                            250
                        </h2>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="card card-box shadow p-3">

                        <h6 class="text-muted">
                            Departments
                        </h6>

                        <h2>
                            12
                        </h2>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="card card-box shadow p-3">

                        <h6 class="text-muted">
                            Present Today
                        </h6>

                        <h2>
                            220
                        </h2>

                    </div>

                </div>



                <div class="col-md-3">

                    <div class="card card-box shadow p-3">

                        <h6 class="text-muted">
                            Pending Leaves
                        </h6>

                        <h2>
                            15
                        </h2>

                    </div>

                </div>


            </div>




            <!-- Employee Table -->


            <div class="card shadow mt-5">

                <div class="card-header bg-white">

                    <h5>
                        Recent Employees
                    </h5>

                </div>


                <div class="card-body">


                    <table class="table table-hover">


                        <thead>

                        <tr>

                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Status</th>

                        </tr>

                        </thead>


                        <tbody>


                        <tr>

                            <td>EMP001</td>
                            <td>Rahul Sharma</td>
                            <td>IT</td>

                            <td>
                                <span class="badge bg-success">
                                    Active
                                </span>
                            </td>

                        </tr>


                        <tr>

                            <td>EMP002</td>
                            <td>Priya Singh</td>
                            <td>HR</td>

                            <td>
                                <span class="badge bg-success">
                                    Active
                                </span>
                            </td>

                        </tr>


                        <tr>

                            <td>EMP003</td>
                            <td>Amit Kumar</td>
                            <td>Finance</td>

                            <td>
                                <span class="badge bg-warning">
                                    Leave
                                </span>
                            </td>

                        </tr>


                        </tbody>


                    </table>


                </div>

            </div>



            <!-- Activity -->

            <div class="card shadow mt-4 mb-5">

                <div class="card-header bg-white">

                    <h5>
                        Recent Activities
                    </h5>

                </div>


                <div class="card-body">

                    <p>
                        ✔ New employee Rahul Sharma added
                    </p>

                    <p>
                        ✔ Salary generated for March
                    </p>

                    <p>
                        ✔ Leave request approved
                    </p>

                </div>


            </div>



        </div>


    </div>


</div>

</div>


</body>

</html>