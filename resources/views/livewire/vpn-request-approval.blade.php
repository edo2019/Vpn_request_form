<div class="p-8 bg-gray-100">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-700">Pending VPN Requests</h2>

        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

        @if ($requests->isEmpty())
            <p class="text-gray-500">No pending VPN requests at this time.</p>
        @else
            <div class="space-y-4">
                @foreach ($requests as $request)
                    <div class="border p-4 rounded-md shadow-sm bg-gray-50">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <h4 class="font-semibold text-gray-800">User Details</h4>
                                <p><strong>Name:</strong> {{ $request->full_name }}</p>
                                <p><strong>Department:</strong> {{ $request->department }}</p>
                                <p><strong>Job Title:</strong> {{ $request->job_title }}</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Contact & Reason</h4>
                                <p><strong>Email:</strong> {{ $request->email }}</p>
                                <p><strong>Telephone:</strong> {{ $request->telephone }}</p>
                                <p><strong>Reason:</strong> {{ $request->vpn_reason }}</p>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-end gap-2">
                            <button wire:click="approve({{ $request->id }})"
                                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                                Approve
                            </button>
                            <button wire:click="reject({{ $request->id }})"
                                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                Reject
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>