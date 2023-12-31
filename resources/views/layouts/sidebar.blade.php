<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                        <svg class="h-12 w-12" >
                            <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                        </svg>

                    <a href="{{ route('admin.dashboard') }}">
                        <span style="color: white">Dashboard</span>
                    </a>
                </div>
            </div>

            <nav class="mt-10">
                <a  {{ Route::currentRouteNamed('admin.dashboard') ? 'active' : '' }} " href="{{ route('admin.dashboard')}}">
                    <svg class="h-6 w-6" style="color:white; "; fill="none" "
>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>

                    <span class="mx-3 " style="text-decoration: underline; color:aliceblue" >1.Dashboard</span>
                </a>

                @canany('Role access','Role add','Role edit','Role delete')
                <a  {{ Route::currentRouteNamed('admin.roles.index') ? 'active' : '' }}"
                    href="{{ route('admin.roles.index') }}">
                  <br>
                    <span class="mx-3 " style="text-decoration: underline; color:aliceblue">2.Role</span>
                </a>
                @endcanany
                @canany('Permission access','Permission add','Permission edit','Permission delete')
                 <a  {{ Route::currentRouteNamed('admin.permissions.index') ? 'active' : '' }}
                    href="{{ route('admin.permissions.index') }}">
                    <br>
                  <span class="mx-3 " style="text-decoration: underline; color:aliceblue">3.Permission</span>
                </a>
                @endcanany

                @canany('User access','User add','User edit','User delete')
                <a {{ Route::currentRouteNamed('admin.users.index') ? 'active' : '' }}
                    href="{{ route('admin.users.index')}}">

                     <br>
                    <span class="mx-3" style="text-decoration: underline;color:aliceblue">4.User</span>
                </a>
                @endcanany

                @canany('Post access','Post add','Post edit','Post delete')
                 <a  {{ Route::currentRouteNamed('admin.posts.index') ? 'active' : '' }}
                    href="{{ route('admin.posts.index')}}">
                    <br>
                 <span class="mx-3" style="text-decoration: underline;color:aliceblue" >5.Post</span>
                </a>
                @endcanany


                @canany('Mail access','Mail edit')
                 <a {{ Route::currentRouteNamed('admin.mail.index') ? 'active' : '' }}
                    href="{{ route('admin.mail.index')}}">
                    <br>
                   <span class="mx-3" style="text-decoration: underline; color:aliceblue">6.Setting</span>
                </a>
                @endcanany



            </nav>
        </div>
