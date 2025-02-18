<div class="min-h-screen bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-blue-500 p-4">
        <div class="flex items-center justify-between">
            <div class="text-white font-bold text-xl">Your App</div>
            <div class="space-x-4">
                <a href="/" class="text-white">Home</a>
                <a href="/about" class="text-white">About</a>
                <a href="/contact" class="text-white">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto p-4">
        {{ $slot }}
    </div>
</div>