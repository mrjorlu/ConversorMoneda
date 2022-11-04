<x-auth-layout>
    <div class="relative flex h-full w-full">
        <div class="h-screen w-1/2 bg-black">
          <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
            <div>
              <p class="text-2xl w-full">Registarse</p>
              <p>Por favor llene el siguiente formulario</p>
            </div>
            <x-toast-component class="mb-4" :errors="$errors" />
            <div class="mt-10">
              <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div>
                  <label class="mb-2.5 block font-extrabold" for="Nombres">Nombre Completo</label>
                  <input type="text" id="name" name="name" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30"/>
                </div>
                <div class="mt-4">
                    <label class="mb-2.5 block font-extrabold" for="email">Email</label>
                    <input type="email" id="email" name="email" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" placeholder="mail@user.com" />
                </div>
                <div class="mt-4">
                  <label class="mb-2.5 block font-extrabold" for="password">Contraseña</label>
                  <input type="password" id="password" name="password" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
                </div>
                <div class="mt-4">
                    <label class="mb-2.5 block font-extrabold" for="password">Confirma contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
                  </div>
                <div class="my-10 grid grid-cols-2">
                    <div>
                        <button class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800 mr-1">Registrarme</button>
                    </div>
                    <div>
                        <a href="/">
                            <button type="button" class="w-full rounded-full bg-red-600 p-5 hover:bg-red-800 ml-1 text-center">Cancelar</button>
                        </a>
                    </div>
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
