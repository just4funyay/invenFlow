<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | InvenFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-semibold text-center mb-6">
            Register InvenFlow
        </h2>

        @if ($errors->any())
            <div class="mb-4 rounded-md bg-red-100 px-4 py-2 text-sm text-red-700">
                {{ $errors }}
            </div>
        @endif

        <form method="POST" action="/register" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Nama
                </label>
                <input
                    type="text"
                    name="name"
                    required
                    class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2
                           focus:border-green-500 focus:ring-2 focus:ring-green-200"
                >
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    required
                    class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2
                           focus:border-green-500 focus:ring-2 focus:ring-green-200"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    required
                    class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2
                           focus:border-green-500 focus:ring-2 focus:ring-green-200"
                >
            </div>

            <!-- Role -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Role
                </label>
                <select
                    name="role"
                    required
                    class="mt-1 w-full rounded-md border border-gray-300 px-3 py-2
                           focus:border-green-500 focus:ring-2 focus:ring-green-200"
                >
                    <option value="">Pilih Role</option>
                    <option value="inputter">Inputter</option>
                    <option value="monitor">Monitor</option>
                </select>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full rounded-md bg-green-600 py-2 text-white
                       hover:bg-green-700 transition font-medium"
            >
                Register
            </button>
        </form>

        <p class="mt-4 text-center text-sm text-gray-600">
            Sudah punya akun?
            <a href="#" class="text-blue-600 hover:underline">
                Login
            </a>
        </p>
    </div>

</body>
</html>
