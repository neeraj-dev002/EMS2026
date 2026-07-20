<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Employee</title>

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
                Edit Employee
            </h1>


            <span class="font-semibold text-gray-700">
                Admin
            </span>

        </nav>





        <div class="p-6">


            <div class="bg-white rounded-xl shadow">


                {{-- Header --}}

                <div class="border-b px-6 py-4">

                    <h2 class="text-xl font-semibold">
                        Update Employee Information
                    </h2>

                </div>




                <div class="p-6">


                    <form action="{{route('employees.update', $employee->id)}}" method="POST">

                        @csrf
                        @method('PUT')



                        {{-- Personal Details --}}

                        <h3 class="text-blue-600 font-semibold mb-4">
                            Personal Details
                        </h3>




                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">


                            <div>

                                <label class="block font-medium mb-2">
                                    Full Name
                                </label>


                                <input
                                    type="text"
                                    name="name"
                                    value="{{$employee->name}}"
                                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none">


                            </div>




                            <div>

                                <label class="block font-medium mb-2">
                                    Email
                                </label>


                                <input
                                    type="email"
                                    name="email"
                                    value="{{$employee->email}}"
                                    class="w-full border rounded-lg px-4 py-2">


                            </div>





                            <div>

                                <label class="block font-medium mb-2">
                                    Phone
                                </label>


                                <input
                                    type="text"
                                    name="phone"
                                    value="{{$employee->phone}}"
                                    class="w-full border rounded-lg px-4 py-2">


                            </div>





                            <div>

                                <label class="block font-medium mb-2">
                                    Gender
                                </label>


                                <select
                                    name="gender"
                                    class="w-full border rounded-lg px-4 py-2">


                                    <option value="Male"
                                    {{$employee->gender == 'Male' ? 'selected' : ''}}>
                                        Male
                                    </option>


                                    <option value="Female"
                                    {{$employee->gender == 'Female' ? 'selected' : ''}}>
                                        Female
                                    </option>


                                </select>


                            </div>


                        </div>








                        {{-- Job Details --}}


                        <h3 class="text-blue-600 font-semibold mt-8 mb-4">
                            Job Details
                        </h3>





                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">



                            <div>


                                <label class="block font-medium mb-2">
                                    Department
                                </label>


                                <select
                                    name="department"
                                    class="w-full border rounded-lg px-4 py-2">


                                    <option value="IT"
                                    {{$employee->department == 'IT' ? 'selected' : ''}}>
                                        IT
                                    </option>


                                    <option value="HR"
                                    {{$employee->department == 'HR' ? 'selected' : ''}}>
                                        HR
                                    </option>


                                    <option value="Finance"
                                    {{$employee->department == 'Finance' ? 'selected' : ''}}>
                                        Finance
                                    </option>


                                </select>


                            </div>







                            <div>

                                <label class="block font-medium mb-2">
                                    Designation
                                </label>


                                <input
                                    type="text"
                                    name="position"
                                    value="{{$employee->position}}"
                                    class="w-full border rounded-lg px-4 py-2">


                            </div>








                            <div>

                                <label class="block font-medium mb-2">
                                    Joining Date
                                </label>


                                <input
                                    type="date"
                                    name="joining_date"
                                    value="{{$employee->joining_date}}"
                                    class="w-full border rounded-lg px-4 py-2">


                            </div>








                            <div>

                                <label class="block font-medium mb-2">
                                    Status
                                </label>


                                <select
                                    name="status"
                                    class="w-full border rounded-lg px-4 py-2">


                                    <option value="1"
                                    {{$employee->status == 1 ? 'selected' : ''}}>
                                        Active
                                    </option>


                                    <option value="0"
                                    {{$employee->status == 0 ? 'selected' : ''}}>
                                        Inactive
                                    </option>


                                </select>


                            </div>



                        </div>







                        {{-- Address --}}


                        <h3 class="text-blue-600 font-semibold mt-8 mb-4">
                            Address
                        </h3>



                        <textarea
                            name="address"
                            rows="4"
                            class="w-full border rounded-lg px-4 py-3">{{$employee->address}}</textarea>








                        {{-- Buttons --}}


                        <div class="flex justify-end gap-3 mt-6">


                            <a href="/employees"
                               class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600">

                                Cancel

                            </a>





                            <button
                                type="submit"
                                class="bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700">

                                Update Employee

                            </button>


                        </div>




                    </form>


                </div>


            </div>


        </div>



    </div>


</div>


</body>

</html>
