<!-- Responsive Settings Options -->
<div class="pt-4 pb-1 border-t border-gray-200">
    <div class="px-4">
        {{-- Verificamos si el usuario está autenticado antes de mostrar su información --}}
        @if (Auth::check())
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        @else
            <div class="font-medium text-base text-gray-800">Invitado</div>
            <div class="font-medium text-sm text-gray-500">Sin sesión activa</div>
        @endif
    </div>

    <div class="mt-3 space-y-1">
        {{-- Mostrar enlace de perfil solo si está autenticado --}}
        @if (Auth::check())
            <x-responsive-nav-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-responsive-nav-link>
        @endif

        <!-- Enlace de cierre de sesión -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>
</div>