<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Department</title>

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




    <!-- Content -->


    <div class="col-md-10">


        <nav class="navbar bg-white shadow-sm px-4">


            <h4>
                Add Employee
            </h4>


            <span>
                Admin
            </span>


        </nav>




        <div class="container mt-4">


            <div class="card shadow">


                <div class="card-header bg-white">

                    <h5>
                        Department Information
                    </h5>

                </div>



                <div class="card-body">


                    <form action="{{route('departments.store')}}" method="POST">

@csrf   
                        <!-- Department Details -->


                        <h6 class="text-primary mb-3">
                            Department Details
                        </h6>


                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Department Name
                                </label>

                                <input type="text" name="dep_name" class="form-control" placeholder="Enter department name">

                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Department Head
                                </label>

                                <input type="text" name="dep_head" class="form-control" placeholder="Enter department head">

                            </div>


                        </div>




                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                   Total Employees
                                </label>

                                <input type="text" name="total_employees" class="form-control" placeholder="Enter total employees">

                            </div>


 

                        </div>


  

<div class="text-end">


                            <a href="/departments" class="btn btn-secondary">
                                Cancel
                            </a>


                            <button type="submit" class="btn btn-primary">
                                Save Department
                            </button>


                        </div>


 
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