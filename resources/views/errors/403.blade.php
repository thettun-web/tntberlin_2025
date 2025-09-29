<x-site-layout>
    <div class="text-center py-24">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Access Denied</h1>
        <p class="text-lg text-gray-600 mb-8">You do not have permission to perform this action.</p>
        <a href="{{ url()->previous() }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg">
            Go Back
        </a>
    </div>
</x-site-layout>
