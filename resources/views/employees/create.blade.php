<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Employee</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>


<body class="bg-gray-100">


<div class="flex min-h-screen">


    {{-- Sidebar --}}
    @include('partials.sidebar')



    {{-- Content --}}

    <div class="flex-1">


        {{-- Navbar --}}

        <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-gray-800">
                Add Employee
            </h1>


            <span class="font-semibold text-gray-700">
                Admin
            </span>

        </nav>





        <div class="p-6">


            <div class="bg-white rounded-xl shadow">


                {{-- Card Header --}}

                <div class="border-b px-6 py-4">

                    <h2 class="text-xl font-semibold">
                        Employee Information
                    </h2>

                </div>





                <div class="p-6">


                    <form action="{{route('employees.store')}}" method="POST">

                        @csrf



                        {{-- Personal Details --}}

                        <h3 class="text-blue-600 font-semibold mb-4">
                            Personal Details
                        </h3>



                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">



                            <div>

                                <label class="block mb-2 font-medium">
                                    Full Name
                                </label>


                                <input 
                                    type="text"
                                    name="name"
                                    placeholder="Enter name"
                                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none">

                            </div>




                            <div>

                                <label class="block mb-2 font-medium">
                                    Email
                                </label>


                                <input 
                                    type="email"
                                    name="email"
                                    placeholder="Enter email"
                                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 outline-none">

                            </div>



                            <div>

                                <label class="block mb-2 font-medium">
                                    Phone Number
                                </label>


                                <input 
                                    type="text"
                                    name="phone"
                                    placeholder="Enter phone"
                                    class="w-full border rounded-lg px-4 py-2">

                            </div>





                            <div>

                                <label class="block mb-2 font-medium">
                                    Gender
                                </label>


                                <select 
                                    name="gender"
                                    class="w-full border rounded-lg px-4 py-2">

                                    <option>
                                        Select Gender
                                    </option>

                                    <option value="Male">
                                        Male
                                    </option>

                                    <option value="Female">
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

                                <label class="block mb-2 font-medium">
                                    Department
                                </label>


                                <select 
                                    name="department_id"
                                    class="w-full border rounded-lg px-4 py-2">


                                    <option value="">
                                        Select Department
                                    </option>



                                    @foreach ($departments as $department)

                                    <option value="{{ $department->id }}">
                                        {{ $department->dep_name }}
                                    </option>

                                    @endforeach


                                </select>


                            </div>






                            <div>

                                <label class="block mb-2 font-medium">
                                    Designation
                                </label>


                                <input 
                                    type="text"
                                    name="position"
                                    placeholder="Example: Developer"
                                    class="w-full border rounded-lg px-4 py-2">


                            </div>







                            <div>

                                <label class="block mb-2 font-medium">
                                    Joining Date
                                </label>


                                <input 
                                    type="date"
                                    name="joining_date"
                                    class="w-full border rounded-lg px-4 py-2">


                            </div>







                            <div>

                                <label class="block mb-2 font-medium">
                                    Employee Status
                                </label>


                                <select 
                                    name="status"
                                    class="w-full border rounded-lg px-4 py-2">


                                    <option value="1">
                                        Active
                                    </option>


                                    <option value="0">
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
                            placeholder="Enter address"
                            class="w-full border rounded-lg px-4 py-3">
                        </textarea>








                        {{-- Buttons --}}


                        <div class="flex justify-end gap-3 mt-6">


                            <a href="/employees"
                               class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600">

                                Cancel

                            </a>




                            <button 
                                type="submit"
                                class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">

                                Save Employee

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
