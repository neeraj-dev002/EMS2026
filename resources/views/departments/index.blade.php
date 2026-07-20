<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Departments</title>

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
                Departments
            </h1>


            <span class="font-semibold text-gray-700">
                Admin
            </span>


        </nav>






        <div class="p-6">



            <div class="bg-white shadow rounded-xl overflow-hidden">





                {{-- Header --}}

                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 px-6 py-4 border-b">


                    <h2 class="text-xl font-semibold">
                        Department List
                    </h2>





                    <a href="{{ route('departments.create') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">

                        + Add Department

                    </a>



                </div>







                {{-- Table --}}


                <div class="p-6 overflow-x-auto">


                    <table class="min-w-full text-left">



                        <thead class="bg-gray-100">


                        <tr>


                            <th class="px-5 py-3">
                                ID
                            </th>


                            <th class="px-5 py-3">
                                Department Name
                            </th>


                            <th class="px-5 py-3">
                                Department Head
                            </th>


                            <th class="px-5 py-3">
                                Total Employees
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



                        @foreach ($departments as $department)



                        <tr class="border-b hover:bg-gray-50">



                            <td class="px-5 py-4">
                                {{$department->id}}
                            </td>




                            <td class="px-5 py-4">
                                {{$department->dep_name}}
                            </td>




                            <td class="px-5 py-4">
                                {{$department->dep_head}}
                            </td>





                            <td class="px-5 py-4">
                                {{$department->total_employees}}
                            </td>






                            <td class="px-5 py-4">


                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                                    Active

                                </span>


                            </td>







                            <td class="px-5 py-4">


                                <div class="flex gap-2">





                                    <button
                                        class="bg-cyan-600 text-white px-3 py-1 rounded text-sm hover:bg-cyan-700">

                                        View

                                    </button>







                                    <a href="{{ route('departments.edit',$department->id) }}"
                                       class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">

                                        Edit

                                    </a>









                                    <form action="{{ route('departments.destroy',$department->id) }}"
                                          method="POST">


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



</body>

</html>
