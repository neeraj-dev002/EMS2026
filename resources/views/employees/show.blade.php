<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee Details</title>

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
                Employee Details
            </h1>


            <strong class="text-gray-700">
                Admin
            </strong>


        </nav>






        <div class="p-6">



            {{-- Profile Card --}}

            <div class="bg-white shadow rounded-xl overflow-hidden">



                {{-- Header --}}

                <div class="bg-blue-600 text-white px-6 py-4">

                    <h2 class="text-xl font-semibold">
                        Employee Profile
                    </h2>

                </div>






                <div class="p-6">


                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">



                        {{-- Profile Left --}}


                        <div class="text-center">


                            <img 
                                src="https://via.placeholder.com/150"
                                class="w-36 h-36 rounded-full mx-auto object-cover mb-4">





                            <h2 class="text-2xl font-bold">
                                {{ $employee->name }}
                            </h2>






                            @if($employee->status == 1)

                                <span class="inline-block mt-3 bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm">
                                    Active
                                </span>


                            @else


                                <span class="inline-block mt-3 bg-red-100 text-red-700 px-4 py-1 rounded-full text-sm">
                                    Inactive
                                </span>


                            @endif



                        </div>








                        {{-- Details Right --}}


                        <div class="md:col-span-2 overflow-x-auto">


                            <table class="min-w-full border border-gray-200">


                                <tbody>


                                <tr class="border-b">

                                    <th class="text-left px-5 py-3 bg-gray-50">
                                        Employee ID
                                    </th>

                                    <td class="px-5 py-3">
                                        EMP{{ $employee->id }}
                                    </td>

                                </tr>





                                <tr class="border-b">

                                    <th class="text-left px-5 py-3 bg-gray-50">
                                        Name
                                    </th>

                                    <td class="px-5 py-3">
                                        {{ $employee->name }}
                                    </td>

                                </tr>






                                <tr class="border-b">

                                    <th class="text-left px-5 py-3 bg-gray-50">
                                        Email
                                    </th>

                                    <td class="px-5 py-3">
                                        {{ $employee->email }}
                                    </td>

                                </tr>






                                <tr class="border-b">

                                    <th class="text-left px-5 py-3 bg-gray-50">
                                        Phone
                                    </th>

                                    <td class="px-5 py-3">
                                        {{ $employee->phone }}
                                    </td>

                                </tr>






                                <tr class="border-b">

                                    <th class="text-left px-5 py-3 bg-gray-50">
                                        Gender
                                    </th>

                                    <td class="px-5 py-3">
                                        {{ $employee->gender }}
                                    </td>

                                </tr>






                                <tr class="border-b">

                                    <th class="text-left px-5 py-3 bg-gray-50">
                                        Department
                                    </th>

                                    <td class="px-5 py-3">
                                        {{ $employee->department }}
                                    </td>

                                </tr>






                                <tr>

                                    <th class="text-left px-5 py-3 bg-gray-50">
                                        Created Date
                                    </th>

                                    <td class="px-5 py-3">
                                        {{ $employee->created_at->format('d M Y') }}
                                    </td>

                                </tr>



                                </tbody>


                            </table>


                        </div>



                    </div>



                </div>


            </div>






            <a href="/employees"
               class="inline-block mt-5 bg-gray-600 text-white px-5 py-2 rounded-lg hover:bg-gray-700">

                Back

            </a>




        </div>



    </div>



</div>



</body>

</html>
