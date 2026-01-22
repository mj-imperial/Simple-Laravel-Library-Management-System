<x-layout>
    @if (session('logout'))
        <x-flashMsg msg="{{ session('logout') }}" />
    @endif

    <p>This is the index.</p>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="px-4 py-2 bg-emerald-800 text-slate-100">Logout</button>
    </form>
</x-layout>