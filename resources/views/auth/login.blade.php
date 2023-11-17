<x-guest-layout>
    <div >
        <div >
          <center><strong><h1 >Admin Login</h1></strong></center>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <center>
          <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div>
              <h1 ><strong>Sign in to your account</strong></h1>
                <br>
              <div >
                <label>Email:</label>
                <input type="email" name="email" id="email"  placeholder="Email" :value="old('email')" required autofocus />
              </div>
               <br>
              <div >
                <label >Password:</label>
                <input type="password" name="password" id="password"  placeholder="Password" required autocomplete="current-password"/>
              </div>



              <div>
                <br>

                <button type="submit" >Log In</button>
              </div>
            </div>
          </form>
            </center>

        </div>
    </div>

</x-guest-layout>
