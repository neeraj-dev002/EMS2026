<div x-data="{ open: false }">

    {{-- Mobile Navbar --}}
    <nav class="md:hidden bg-gray-900 text-white flex items-center justify-between px-5 py-4">

        <button 
            @click="open = true"
            class="text-white text-3xl">
            ☰
        </button>

        <h2 class="text-xl font-bold">
            EMS
        </h2>

    </nav>


    {{-- Desktop Sidebar --}}
    <aside class="hidden md:block w-64 bg-gray-900 min-h-screen text-white">

        <h2 class="text-3xl font-bold text-center py-6">
            EMS
        </h2>


        <nav class="flex flex-col">

            <a href="{{ route('dashboard') }}"
               class="px-6 py-3 hover:bg-blue-600 transition">
                Dashboard
            </a>

            <a href="{{ url('/employees') }}"
               class="px-6 py-3 hover:bg-blue-600 transition">
                Employees
            </a>

            <a href="{{url('/departments') }}"
               class="px-6 py-3 hover:bg-blue-600 transition">
                Departments
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600 transition">
                Attendance
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600 transition">
                Leaves
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600 transition">
                Payroll
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600 transition">
                Reports
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600 transition">
                Settings
            </a>

        </nav>

    </aside>



    {{-- Mobile Sidebar Overlay --}}
    <div 
        x-show="open"
        class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"
        @click="open = false">
    </div>



    {{-- Mobile Sidebar --}}
    <aside
        x-show="open"
        x-transition
        class="fixed top-0 left-0 w-72 h-full bg-gray-900 text-white z-50 md:hidden">


        <div class="flex items-center justify-between px-5 py-5 border-b border-gray-700">

            <h2 class="text-2xl font-bold">
                EMS
            </h2>

            <button 
                @click="open = false"
                class="text-2xl">
                ✕
            </button>

        </div>


        <nav class="flex flex-col">

            <a href="{{ route('dashboard') }}"
               class="px-6 py-3 hover:bg-blue-600">
                Dashboard
            </a>

            <a href="{{ url('/employees') }}"
               class="px-6 py-3 hover:bg-blue-600">
                Employees
            </a>

            <a href="{{ url('/departments') }}"
               class="px-6 py-3 hover:bg-blue-600">
                Departments
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600">
                Attendance
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600">
                Leaves
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600">
                Payroll
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600">
                Reports
            </a>

            <a href="#"
               class="px-6 py-3 hover:bg-blue-600">
                Settings
            </a>

        </nav>

    </aside>

</div>
