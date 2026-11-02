@extends('layout.base');

@section('title', 'Home')

@section('content')

    <div class="px-10 flex flex-col gap-4">

        @if (Session::has('success'))
            @include('layout.notification', ['message' => Session::get('success')])
        @endif

        <form action="{{ route('send-form') }}" method="POST">
            @csrf

            <div class="flex flex-col gap-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            @class([
                                'block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm',
                                'border-gray-300' => !$errors->has('email'),
                                'border-red-300' => $errors->has('email')
                            ])
                            value ="{{ old('email') }}"
                            placeholder="you@example.com">
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
                    @enderror

                    <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                    <div class="mt-1">
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            @class([
                                'block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm',
                                'border-gray-300' => !$errors->has('name'),
                                'border-red-300' => $errors->has('name')
                            ])
                            value ="{{ old('name') }}"
                            placeholder="your name here">
                    </div>

                    @error('name')
                        <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                    @enderror

                </div>
                <div>
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Enviar</button>
                </div>
            </div>
        </form>
    
    </div>

@endsection