<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-xl font-bold mb-4 text-gray-700">Enter Your Email</h2>

        @if (session()->has('error'))
            <div class="text-red-600 mb-4">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                <input type="email" id="email" wire:model="email" class="w-full p-2 border border-gray-300 rounded mt-1"
                    required>
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                Dashboard</button>
        </form>
    </div>
</div>