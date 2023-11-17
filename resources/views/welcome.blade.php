<x-front-guest-layout>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

    <main >
        <header >
            <div >
                <div >
                    <span></span>
                </div>
                <div c>
                    <nav class="text-black text-lg hidden lg:flex items-center">

                        @if(Route::has('admin.login'))
                                <a href="{{ route('admin.login') }}">Admin</a>

                        @endif

                        @if (Route::has('login'))
                            @auth('front')
                                <a href="{{ url('/dashboard') }}" class="py-2 px-6 flex hover:text-blue-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="py-2 px-6 flex hover:text-blue-500">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 py-2 px-6 flex hover:text-blue-500">Register</a>
                                @endif
                            @endauth
                        @endif
                    </nav>
                    <button >
                        <span ></span>
                        <span ></span>
                        <span ></span>
                    </button>
                </div>
            </div>
        </header>
        <div >
            <div >
               <center> <h1 class="text-4xl lg:text-6xl leading-none mb-4"><strong class="font-black">Laravel Roles & Permissions</strong> </h1></center>

            </div>

        </div>
    </main>







</x-front-guest-layout>
