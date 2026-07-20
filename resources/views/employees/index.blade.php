<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employees</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-gray-100">


<div class="flex min-h-screen">


    {{-- Sidebar --}}
    @include('partials.sidebar')



    {{-- Main Content --}}

    <div class="flex-1">


        {{-- Navbar --}}

        <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-gray-800">
                Employees
            </h1>


            <span class="font-semibold text-gray-700">
                Admin
            </span>

        </nav>




        <div class="p-6">


            {{-- Employee Card --}}

            <div class="bg-white rounded-xl shadow">


                {{-- Header --}}

                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 px-6 py-4 border-b">


                    <h2 class="text-xl font-semibold">
                        Employee List
                    </h2>



                    <a href="/employees/create"
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">

                        + Add Employee

                    </a>


                </div>




                <div class="p-6">



                    {{-- Search --}}

                    <div class="mb-5">

                        <input 
                            type="text"
                            placeholder="Search employee..."
                            class="w-full md:w-96 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >

                    </div>





                    {{-- Table --}}

                    <div class="overflow-x-auto">


                        <table class="min-w-full text-left">


                            <thead class="bg-gray-100">


                            <tr>

                                <th class="px-5 py-3">
                                    ID
                                </th>

                                <th class="px-5 py-3">
                                    Name
                                </th>

                                <th class="px-5 py-3">
                                    Email
                                </th>

                                <th class="px-5 py-3">
                                    Department
                                </th>

                                <th class="px-5 py-3">
                                    Position
                                </th>

                                <th class="px-5 py-3">
                                    Status
                                </th>

                                <th class="px-5 py-3">
                                    Action
                                </th>

                            </tr>


                            </thead>



                            <tbody>


                            @foreach ($employees as $employee)


                            <tr class="border-b hover:bg-gray-50">


                                <td class="px-5 py-4">
                                    {{$employee->id}}
                                </td>


                                <td class="px-5 py-4">
                                    {{$employee->name}}
                                </td>


                                <td class="px-5 py-4">
                                    {{$employee->email}}
                                </td>


                                <td class="px-5 py-4">
                                    {{$employee->department->dep_name}}
                                </td>


                                <td class="px-5 py-4">
                                    {{$employee->position}}
                                </td>



                                <td class="px-5 py-4">


                                    @if($employee->status==1)

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                        Active
                                    </span>

                                    @else

                                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        Inactive
                                    </span>

                                    @endif


                                </td>




                                <td class="px-5 py-4">


                                    <div class="flex gap-2">


                                        <button
                                            class="bg-cyan-600 text-white px-3 py-1 rounded text-sm hover:bg-cyan-700">

                                            View

                                        </button>



                                        <a href="{{route('employees.edit',$employee->id)}}"
                                           class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">

                                            Edit

                                        </a>




                                        <form action="{{route('employees.destroy',$employee->id)}}" method="POST">

                                            @csrf

                                            @method('DELETE')


                                            <button
                                                class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">

                                                Delete

                                            </button>


                                        </form>


                                    </div>


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


</body>

</html>
