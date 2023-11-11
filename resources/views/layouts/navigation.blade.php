<div class="navbar bg-base-100 mx-auto rounded-lg">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                @if (request()->route()->getPrefix() === '/student')
                    <li><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('student.checkin-log') }}">Check In Log</a></li>
                @else
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('checkin-log.index') }}">Check In Log</a></li>
                    <li><a href="{{ route('student.index') }}">Student List</a></li>
                    <li><a href="{{ route('ipad.index') }}">iPad List</a></li>
                @endif
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost normal-case text-xl">totpad</a>
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost normal-case">
                <h2>{{ auth()->user()->name }} </h2>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                    <span class="justify-between">
                        {{ auth()->user()->email }}
                    </span>
                <li>
                <li>
                    <a href="{{ route('profile.edit') }}" class="justify-between">
                        Profile
                    </a>
                </li>
                @if (request()->route()->getPrefix() === '/student')
                    <li><a href="{{ route('student.ipad') }}">iPad</a></li>
                @endif
                <li>
                    <button onclick="my_modal_1.showModal()">About</button>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-wide w-full mt-2">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        Logout</button>
                </form>
            </ul>
        </div>
    </div>
</div>
