<x-layout>
    <h1 class="text-center title">Create a new account</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="post">
            @csrf

            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" value="{{ old('username') }}"
                class="@error('username') ring-red-500 @enderror">

                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            
            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email') }}"
                class="@error('email') ring-red-500 @enderror">

                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password"
                class="@error('password') ring-red-500 @enderror">

                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div class="mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation"
                class="@error('password') ring-red-500 @enderror">

                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <button class="btn">Create Account</button>
        </form>
    </div>
</x-layout>