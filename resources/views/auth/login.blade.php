<x-auth-layout>
    <div class="relative flex h-full w-full">
        <div class="h-screen w-1/2 bg-black">
          <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
            <div>
              <p class="text-2xl w-full">Login</p>
              <p>Por favor Inicie Sesión para continuar</p>
            </div>
            <x-toast-component class="mb-4" :errors="$errors" />
            <div class="mt-10">
              <form method="POST" action="{{ route('login.store') }}">
                @csrf
                <div>
                  <label class="mb-2.5 block font-extrabold" for="email">Email</label>
                  <input type="email" name="email" id="email" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" placeholder="mail@user.com" />
                </div>
                <div class="mt-4">
                  <label class="mb-2.5 block font-extrabold" for="email">Contraseña</label>
                  <input type="password" name="password" id="password" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
                </div>
                <div class="mt-4 flex w-full flex-col justify-between sm:flex-row">
                  <div>
                    <a href="{{ route('register.index') }}" class="text-sm hover:text-gray-200">Registrarme</a>
                  </div>
                </div>
                <div class="my-10">
                  <button class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Iniciar Sesión</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="h-screen w-1/2 bg-blue-600">
          <img src="https://images.pexels.com/photos/2523959/pexels-photo-2523959.jpeg" class="h-full w-full" />
        </div>
      </div>
</x-auth-layout>
