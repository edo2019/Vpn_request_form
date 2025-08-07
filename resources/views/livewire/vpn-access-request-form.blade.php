<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-700">VPN Access Request Form</h2>

        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="submit" class="space-y-8">

            {{-- Section 1: User Details --}}
            <div>
                <h3 class="text-lg font-semibold mb-2 border-b pb-1 text-gray-700 ">User Details</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- <div>
                        <label class="block text-sm font-medium text-gray-700 ">Full Name</label>
                        <input type="text" wire:model="full_name"
                            class="mt-1 block w-full border rounded px-3 py-2 bg-white **text-gray-900**" />
                        @error('full_name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div> --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 ">Full Name</label>
                        <input type="text" wire:model="full_name"
                            class="mt-1 block w-full border rounded px-3 py-2 bg-white text-black" />
                        @error('full_name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Department/Ward</label>
                        <input type="text" wire:model="department"
                            class="mt-1 block w-full border rounded px-3 py-2 bg-white text-black" />
                        @error('department') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Personal File Number</label>
                        <input type="text" wire:model="personal_file_number"
                            class="mt-1 block w-full border rounded px-3 py-2 bg-white text-black" />
                        @error('personal_file_number') <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Job Title</label>
                        <input type="text" wire:model="job_title"
                            class="mt-1 block w-full border rounded px-3 py-2 bg-white text-black" />
                        @error('job_title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            {{-- Section 2: Contact Details --}}
            <div>
                <h3 class="text-lg font-semibold mb-2 border-b pb-1 text-gray-700">Contact Details</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" wire:model="email"
                            class="mt-1 block w-full border rounded px-3 py-2 bg-white text-black" />
                        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Telephone Number</label>
                        <input type="text" wire:model="telephone"
                            class="mt-1 block w-full border rounded px-3 py-2 bg-white text-black" />
                        @error('telephone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Address (P.O. Box, Ward and
                            Street)</label>
                        <textarea wire:model="address" rows="3"
                            class="mt-1 block w-full border rounded px-3 py-2 bg-white text-black"></textarea>
                        @error('address') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            {{-- Section 3: Employee Type --}}
            <div>
                <h3 class="text-lg font-semibold mb-2 border-b pb-1 text-gray-700">Employee Type</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach (['Employee', 'Contract', 'Temp', 'Resident', 'Intern'] as $type)
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model="employee_type" value="{{ $type }}"
                                class="form-radio text-blue-600" />
                            <span class="ml-2 text-gray-700">{{ $type }}</span>
                        </label>
                    @endforeach
                </div>
                @error('employee_type') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Section 4: VPN Reason --}}
            <div>
                <h3 class="text-lg font-semibold mb-2 border-b pb-1 text-gray-700">Reason for VPN Access</h3>
                <textarea wire:model="vpn_reason" rows="4"
                    class="w-full border rounded px-3 py-2 bg-white text-black"></textarea>
                @error('vpn_reason') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Section 5: Actions --}}
            <div class="flex justify-end gap-4">
                <button type="button" wire:click="$reset" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                    Reset
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Submit Request
                </button>
            </div>
        </form>
    </div>
</div>