<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Attendance Management</title>

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
                Attendance Management
            </h1>


            <span class="font-semibold text-gray-700">
                Admin
            </span>

        </nav>





        <div class="p-6">



            {{-- Date Header --}}

            <div class="bg-white shadow rounded-xl p-6 mb-6">


                <div class="flex flex-col lg:flex-row justify-between items-center gap-5">



                    <div>


                        <h2 class="text-2xl font-bold text-gray-800">

                            📅 Attendance

                        </h2>


                        <p class="text-gray-500 mt-1">

                            Showing attendance for:

                            <span class="font-semibold text-blue-600">
                                20 July 2026
                            </span>

                        </p>


                    </div>







                    <div class="flex items-center gap-3">



                        <button
                            class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300">

                            ← Previous

                        </button>





                        <input
                            type="date"
                            value="2026-07-20"
                            class="border rounded-lg px-4 py-2">






                        <button
                            class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300">

                            Next →

                        </button>



                    </div>




                </div>



            </div>








            {{-- Summary Cards --}}


            <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-6">



                <div class="bg-white shadow rounded-xl p-5">

                    <p class="text-gray-500">
                        Total Employees
                    </p>

                    <h2 class="text-3xl font-bold">
                        250
                    </h2>

                </div>





                <div class="bg-white shadow rounded-xl p-5">

                    <p class="text-gray-500">
                        Present
                    </p>

                    <h2 class="text-3xl font-bold text-green-600">
                        220
                    </h2>

                </div>





                <div class="bg-white shadow rounded-xl p-5">

                    <p class="text-gray-500">
                        Absent
                    </p>

                    <h2 class="text-3xl font-bold text-red-600">
                        15
                    </h2>

                </div>





                <div class="bg-white shadow rounded-xl p-5">

                    <p class="text-gray-500">
                        Leave
                    </p>

                    <h2 class="text-3xl font-bold text-yellow-500">
                        15
                    </h2>

                </div>



            </div>









            {{-- Attendance Table --}}


            <div class="bg-white shadow rounded-xl overflow-hidden">


                <div class="bg-blue-600 text-white px-6 py-4">


                    <h3 class="text-lg font-semibold">

                        Attendance List - 20 July 2026

                    </h3>


                </div>






                <div class="p-6 overflow-x-auto">



                    <table class="min-w-full text-left">


                        <thead class="bg-gray-100">


                        <tr>


                            <th class="px-5 py-3">
                                Employee Name
                            </th>


                            <th class="px-5 py-3">
                                Status
                            </th>


                            <th class="px-5 py-3">
                                In Time
                            </th>


                            <th class="px-5 py-3">
                                Out Time
                            </th>


                            <th class="px-5 py-3">
                                Action
                            </th>


                        </tr>


                        </thead>





                        <tbody>


                        <tr class="border-b hover:bg-gray-50">


                            <td class="px-5 py-4">
                                Rahul Sharma
                            </td>


                            <td class="px-5 py-4">

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                                    Present

                                </span>

                            </td>


                            <td class="px-5 py-4">
                                09:02 AM
                            </td>


                            <td class="px-5 py-4">
                                06:10 PM
                            </td>


                            <td class="px-5 py-4">

                                <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg">

                                    ✏ Edit

                                </button>

                            </td>


                        </tr>





                        <tr class="border-b hover:bg-gray-50">


                            <td class="px-5 py-4">
                                Aman Kumar
                            </td>


                            <td class="px-5 py-4">

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">

                                    Present

                                </span>

                            </td>


                            <td class="px-5 py-4">
                                09:18 AM
                            </td>


                            <td class="px-5 py-4">
                                06:05 PM
                            </td>


                            <td class="px-5 py-4">

                                <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg">

                                    ✏ Edit

                                </button>

                            </td>


                        </tr>





                        <tr class="hover:bg-gray-50">


                            <td class="px-5 py-4">
                                Priya Singh
                            </td>


                            <td class="px-5 py-4">

                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">

                                    Absent

                                </span>

                            </td>


                            <td class="px-5 py-4">
                                --
                            </td>


                            <td class="px-5 py-4">
                                --
                            </td>


                           <td class="px-5 py-4">

    <button 
        onclick="openEditModal(
            'Rahul Sharma',
            'Present',
            '09:02',
            '18:10'
        )"
        class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">

        ✏ Edit

    </button>

</td>


                        </tr>


                        </tbody>


                    </table>


                </div>


            </div>



        </div>



    </div>



</div>

<!-- Edit Attendance Modal -->

<div id="editModal"
     class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">


    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6">


        <div class="flex justify-between items-center mb-5">


            <h2 class="text-xl font-bold text-gray-800">
                Edit Attendance
            </h2>


            <button 
                onclick="closeEditModal()"
                class="text-gray-500 text-xl">

                ✕

            </button>


        </div>





        <form>


            <div class="mb-4">


                <label class="block text-gray-700 mb-2">
                    Employee Name
                </label>


                <input 
                    id="employeeName"
                    type="text"
                    readonly
                    class="w-full border rounded-lg px-4 py-2 bg-gray-100">


            </div>





            <div class="mb-4">


                <label class="block text-gray-700 mb-2">
                    Status
                </label>


                <select 
                    id="status"
                    class="w-full border rounded-lg px-4 py-2">


                    <option value="Present">
                        Present
                    </option>


                    <option value="Absent">
                        Absent
                    </option>


                    <option value="Leave">
                        Leave
                    </option>


                </select>


            </div>






            <div class="grid grid-cols-2 gap-4">


                <div>


                    <label class="block text-gray-700 mb-2">
                        In Time
                    </label>


                    <input
                        id="inTime"
                        type="time"
                        class="w-full border rounded-lg px-4 py-2">


                </div>





                <div>


                    <label class="block text-gray-700 mb-2">
                        Out Time
                    </label>


                    <input
                        id="outTime"
                        type="time"
                        class="w-full border rounded-lg px-4 py-2">


                </div>


            </div>






            <div class="flex justify-end gap-3 mt-6">


                <button
                    type="button"
                    onclick="closeEditModal()"
                    class="bg-gray-300 px-4 py-2 rounded-lg">

                    Cancel

                </button>





                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg">

                    Update

                </button>


            </div>




        </form>



    </div>


</div>
<script>

function openEditModal(name,status,inTime,outTime)
{

    document.getElementById('employeeName').value = name;

    document.getElementById('status').value = status;

    document.getElementById('inTime').value = inTime;

    document.getElementById('outTime').value = outTime;


    document.getElementById('editModal')
    .classList
    .remove('hidden');

}



function closeEditModal()
{

    document.getElementById('editModal')
    .classList
    .add('hidden');

}


</script>


</body>

</html>
