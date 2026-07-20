<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('partials.sidebar')

    {{-- Main Content --}}
    <div class="flex-1">

        {{-- Navbar --}}
        <nav class="bg-white shadow flex items-center justify-between px-6 py-4">
            <h1 class="text-2xl font-bold text-gray-800">
                Dashboard
            </h1>

            <div class="font-semibold text-gray-700">
                Admin
            </div>
        </nav>

        <div class="p-6">

            {{-- Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

                <div class="bg-white rounded-xl shadow p-5">
                    <h6 class="text-gray-500 text-sm">
                        Total Employees
                    </h6>

                    <h2 class="text-3xl font-bold mt-2">
                        250
                    </h2>
                </div>

                <div class="bg-white rounded-xl shadow p-5">
                    <h6 class="text-gray-500 text-sm">
                        Departments
                    </h6>

                    <h2 class="text-3xl font-bold mt-2">
                        12
                    </h2>
                </div>

                <div class="bg-white rounded-xl shadow p-5">
                    <h6 class="text-gray-500 text-sm">
                        Present Today
                    </h6>

                    <h2 class="text-3xl font-bold mt-2">
                        220
                    </h2>
                </div>

                <div class="bg-white rounded-xl shadow p-5">
                    <h6 class="text-gray-500 text-sm">
                        Pending Leaves
                    </h6>

                    <h2 class="text-3xl font-bold mt-2">
                        15
                    </h2>
                </div>

            </div>

            {{-- Employee Table --}}
            <div class="bg-white rounded-xl shadow mt-8 overflow-hidden">

                <div class="border-b px-6 py-4">
                    <h2 class="text-lg font-semibold">
                        Recent Employees
                    </h2>
                </div>

                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <thead class="bg-gray-100">

                        <tr>
                            <th class="text-left px-6 py-3">ID</th>
                            <th class="text-left px-6 py-3">Name</th>
                            <th class="text-left px-6 py-3">Department</th>
                            <th class="text-left px-6 py-3">Status</th>
                        </tr>

                        </thead>

                        <tbody>
@foreach ($employees as $employee )


                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{$employee->id}}</td>
                            <td class="px-6 py-4">{{$employee->name}}</td>
                            <td class="px-6 py-4">{{$employee->department->dep_name}}</td>

                            <td class="px-6 py-4">
                             @if($employee->status ==1)   
                             <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                    Active
                                </span>
                                @else
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                    Inactive
                                </span>
                                @endif  

                                
                            </td>
                        </tr>

                        @endforeach

                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">EMP002</td>
                            <td class="px-6 py-4">Priya Singh</td>
                            <td class="px-6 py-4">HR</td>

                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                    Active
                                </span>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">EMP003</td>
                            <td class="px-6 py-4">Amit Kumar</td>
                            <td class="px-6 py-4">Finance</td>

                            <td class="px-6 py-4">
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                    Leave
                                </span>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            {{-- Recent Activity --}}
            <div class="bg-white rounded-xl shadow mt-8 mb-6">

                <div class="border-b px-6 py-4">
                    <h2 class="text-lg font-semibold">
                        Recent Activities
                    </h2>
                </div>

                <div class="p-6 space-y-3 text-gray-700">

                    <p>✔ New employee Rahul Sharma added</p>

                    <p>✔ Salary generated for March</p>

                    <p>✔ Leave request approved</p>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
