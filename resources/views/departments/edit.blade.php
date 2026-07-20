<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Department</title>

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
                Edit Department
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
                        Department Information
                    </h2>


                </div>







                <div class="p-6">



                    <form action="{{route('departments.update',$department->id)}}" method="POST">


                        @csrf

                        @method('PUT')






                        {{-- Department Details --}}


                        <h3 class="text-blue-600 font-semibold mb-4">
                            Department Details
                        </h3>







                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">





                            <div>


                                <label class="block font-medium mb-2">
                                    Department Name
                                </label>



                                <input
                                    type="text"
                                    name="dep_name"
                                    value="{{ $department->dep_name }}"
                                    placeholder="Enter department name"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">


                            </div>







                            <div>


                                <label class="block font-medium mb-2">
                                    Department Head
                                </label>




                                <input
                                    type="text"
                                    name="dep_head"
                                    value="{{ $department->dep_head }}"
                                    placeholder="Enter department head"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">


                            </div>





                        </div>









                        <div class="mt-5 md:w-1/2">



                            <label class="block font-medium mb-2">
                                Total Employees
                            </label>




                            <input
                                type="text"
                                name="total_employees"
                                value="{{ $department->total_employees }}"
                                placeholder="Enter total employees"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">


                        </div>









                        {{-- Buttons --}}


                        <div class="flex justify-end gap-3 mt-6">



                            <a href="/departments"
                               class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600">

                                Cancel

                            </a>







                            <button
                                type="submit"
                                class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">


                                Update Department


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
