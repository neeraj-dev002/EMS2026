<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">

    <!-- Page Header -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">

                <h3 class="fw-bold mb-3 mb-md-0">
                    <i class="bi bi-calendar-check text-primary"></i>
                    Attendance Management
                </h3>

                <input type="date" class="form-control" style="max-width:220px;">
            </div>

        </div>
    </div>

    <!-- Attendance Table -->

    <div class="card shadow-sm border-0">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">
                Attendance List
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                    <tr>
                        <th>Employee Name</th>
                        <th>Present</th>
                        <th>In Time</th>
                        <th>Out Time</th>
                        <th width="120">Action</th>
                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td>Rahul Sharma</td>

                        <td>
                            <span class="badge bg-success">
                                Present
                            </span>
                        </td>

                        <td>09:02 AM</td>

                        <td>06:10 PM</td>

                        <td>

                            <button class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>Aman Kumar</td>

                        <td>
                            <span class="badge bg-success">
                                Present
                            </span>
                        </td>

                        <td>09:18 AM</td>

                        <td>06:05 PM</td>

                        <td>

                            <button class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>Priya Singh</td>

                        <td>
                            <span class="badge bg-danger">
                                Absent
                            </span>
                        </td>

                        <td>--</td>

                        <td>--</td>

                        <td>

                            <button class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>Mohit Verma</td>

                        <td>
                            <span class="badge bg-success">
                                Present
                            </span>
                        </td>

                        <td>09:08 AM</td>

                        <td>06:20 PM</td>

                        <td>

                            <button class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </button>

                        </td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>