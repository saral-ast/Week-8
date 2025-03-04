<x-layout>
    <x-slot:heading>
       Login
    </x-slot:heading>

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-8 border border-gray-100">
        <!-- Form Header -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Login User</h2>
        </div>

        <!-- Form -->
        <form method="POST" action="/login" class="space-y-6">
            @csrf

           
            <!-- Email -->
            <x-form-field>
               <x-form-label for="email">Email</x-form-label>
                <x-form-input 
                name="email"
                id="email"
                placeholder="example@exmaple.com"
                type="email"
                :value="old('email')" 
                />
                <x-form-error name="email" />
            </x-form-field>

            <!-- Password-->
            <x-form-field>
               <x-form-label for="password">Password</x-form-label>
                <x-form-input 
                name="password"
                id="password"
                placeholder="Password" 
                type="password"
                />
                <x-form-error name="password" />
            </x-form-field>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-4 mt-8">
                <a href="/"
                   class="flex items-center justify-center px-6 py-3 bg-gray-50 text-gray-700 font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-200">
                    Cancel
                </a>
                <x-form-button><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5v5.586l-1.293-1.293z" />
                    </svg>login
                </x-form-button>
            </div>
        </form>
    </div>
</x-layout>