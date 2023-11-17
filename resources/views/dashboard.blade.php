<x-app-layout>
   <div>
        <main >
            <div >


                <h3 >Welcome : {{ auth()->user()->name }}</h3>

                <p>Role : <b>
                    @foreach(auth()->user()->roles as $role)
                        {{ $role->name }}
                    @endforeach
                </b> </p>

            </div>
        </main>
    </div>
</div>
</x-app-layout>
