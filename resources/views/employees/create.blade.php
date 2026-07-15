<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Employee</title>

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
                        Employee Information
                    </h5>

                </div>



                <div class="card-body">


                    <form>


                        <!-- Personal Details -->


                        <h6 class="text-primary mb-3">
                            Personal Details
                        </h6>


                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Full Name
                                </label>

                                <input type="text" class="form-control" placeholder="Enter name">

                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Email
                                </label>

                                <input type="email" class="form-control" placeholder="Enter email">

                            </div>


                        </div>




                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Phone Number
                                </label>

                                <input type="text" class="form-control" placeholder="Enter phone">

                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Gender
                                </label>


                                <select class="form-select">

                                    <option>
                                        Select Gender
                                    </option>

                                    <option>
                                        Male
                                    </option>

                                    <option>
                                        Female
                                    </option>

                                </select>


                            </div>


                        </div>





                        <!-- Job Details -->


                        <h6 class="text-primary mt-4 mb-3">
                            Job Details
                        </h6>



                        <div class="row">


                            <div class="col-md-6 mb-3">


                                <label class="form-label">
                                    Department
                                </label>


                                <select class="form-select">

                                    <option>
                                        Select Department
                                    </option>

                                    <option>
                                        IT
                                    </option>

                                    <option>
                                        HR
                                    </option>

                                    <option>
                                        Finance
                                    </option>


                                </select>


                            </div>




                            <div class="col-md-6 mb-3">


                                <label class="form-label">
                                    Designation
                                </label>


                                <input 
                                type="text" 
                                class="form-control"
                                placeholder="Example: Developer">


                            </div>


                        </div>





                        <div class="row">


                            <div class="col-md-6 mb-3">


                                <label class="form-label">
                                    Joining Date
                                </label>


                                <input 
                                type="date"
                                class="form-control">


                            </div>




                            <div class="col-md-6 mb-3">


                                <label class="form-label">
                                    Employee Status
                                </label>


                                <select class="form-select">


                                    <option>
                                        Active
                                    </option>


                                    <option>
                                        Inactive
                                    </option>


                                </select>


                            </div>


                        </div>





                        <!-- Address -->


                        <h6 class="text-primary mt-4 mb-3">
                            Address
                        </h6>



                        <div class="mb-3">


                            <textarea 
                            class="form-control"
                            rows="3"
                            placeholder="Enter address"></textarea>


                        </div>





                        <div class="text-end">


                            <a href="/employees" class="btn btn-secondary">
                                Cancel
                            </a>


                            <button class="btn btn-primary">
                                Save Employee
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