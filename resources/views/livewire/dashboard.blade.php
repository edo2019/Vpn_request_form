<div class="p-8 bg-gray-100 gray:bg-zinc-800 min-h-screen">
    <div class="max-w-6xl mx-auto bg-white gray:bg-zinc-900 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-700 gray:text-white">My VPN Request Status</h2>

        @if ($requests->isEmpty())
            <p class="text-gray-500 gray:text-gray-300">You have not made any VPN requests yet.</p>
        @else
            <div class="space-y-4">
                @foreach ($requests as $request)
                    <div class="border p-4 rounded-md shadow-sm bg-gray-50 gray:bg-zinc-700">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div>
                                <h4 class="font-semibold text-gray-800 gray:text-gray-200">Your Details</h4>
                                <p><strong>Name:</strong> {{ $request->full_name }}</p>
                                <p><strong>Department:</strong> {{ $request->department }}</p>
                                <p><strong>Job Title:</strong> {{ $request->job_title }}</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 gray:text-gray-200">Contact & Reason</h4>
                                <p><strong>Email:</strong> {{ $request->email }}</p>
                                <p><strong>Telephone:</strong> {{ $request->telephone }}</p>
                                <p><strong>Reason:</strong> {{ $request->vpn_reason }}</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <span class="inline-block px-3 py-1 text-sm font-medium rounded
                                                                @class([
                                                                    'bg-yellow-100 text-yellow-800' => $request->status === 'pending',
                                                                    'bg-green-100 text-green-800' => $request->status === 'approved',
                                                                    'bg-red-100 text-red-800' => $request->status === 'rejected',
                                                                ])">
                                Status: {{ ucfirst($request->status) }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>