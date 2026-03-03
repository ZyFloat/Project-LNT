@extends('layouts.app')

@section('title', 'Add New Employee')

@section('content')
<div class="mb-10 flex items-center space-x-4">
    <a href="{{ route('employees.index') }}" class="p-2.5 bg-white border border-slate-200 rounded-xl text-slate-500 hover:text-slate-900 hover:border-slate-300 transition-all shadow-sm">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
    </a>
    <div>
        <h1 class="text-3xl font-bold tracking-tight text-slate-900">Add New Employee</h1>
        <p class="text-slate-500">Enter details for the new member of PT ECOAS.</p>
    </div>
</div>

<div class="max-w-3xl mx-auto">
    <div class="glass rounded-3xl p-8 shadow-xl border border-slate-200/50">
        <form action="{{ route('employees.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div class="md:col-span-2">
                    <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all @error('name') border-rose-500 @enderror"
                        placeholder="e.g. John Doe">
                    <p class="mt-1.5 text-xs text-slate-400">Must be 5-20 characters long.</p>
                    @error('name')
                        <p class="mt-1 text-sm text-rose-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Age -->
                <div>
                    <label for="age" class="block text-sm font-semibold text-slate-700 mb-2">Age</label>
                    <input type="number" name="age" id="age" value="{{ old('age') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all @error('age') border-rose-500 @enderror"
                        placeholder="e.g. 25">
                    <p class="mt-1.5 text-xs text-slate-400">Must be more than 20 years old.</p>
                    @error('age')
                        <p class="mt-1 text-sm text-rose-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-semibold text-slate-700 mb-2">Phone Number</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all @error('phone') border-rose-500 @enderror"
                        placeholder="e.g. 08123456789">
                    <p class="mt-1.5 text-xs text-slate-400">9-12 characters, starts with 08.</p>
                    @error('phone')
                        <p class="mt-1 text-sm text-rose-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Address -->
                <div class="md:col-span-2">
                    <label for="address" class="block text-sm font-semibold text-slate-700 mb-2">Address</label>
                    <textarea name="address" id="address" rows="3" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all @error('address') border-rose-500 @enderror"
                        placeholder="Enter full organizational address...">{{ old('address') }}</textarea>
                    <p class="mt-1.5 text-xs text-slate-400">Must be 10-40 characters long.</p>
                    @error('address')
                        <p class="mt-1 text-sm text-rose-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-6 flex items-center justify-end space-x-4">
                <a href="{{ route('employees.index') }}" class="px-6 py-3 text-sm font-semibold text-slate-600 hover:text-slate-900 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-semibold rounded-xl shadow-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 transform hover:-translate-y-0.5">
                    Save Employee
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
