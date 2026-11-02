@extends('layout.base');

@section('title', 'Home')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold">Home</h1>
        <p class="text-lg">This is the home page!</p>
    </div>

    <!-- Example of using a Blade component 
    <div class="flex flex-col">
        @foreach($users as $user)
            @include('layout.user')
        @endforeach
    </div>
    -->
  
    <!-- Example of using a Blade component with conditional rendering and passing data
    <div class="flex flex-col">
        @foreach($users as $user)
            @includeWhen($user['user_id'] % 2 == 0, 'layout.user')
        @endforeach
    </div>
    -->

    <!-- Example of using a Blade component with conditional rendering and passing data 
    <div class="flex flex-col">
        @foreach($users as $user)
            @includeUnless($user['user_id'] % 2 == 0, 'layout.user')
        @endforeach
    </div>
    -->
    
    <!-- Example of using a Blade component with conditional rendering and passing data -->
    <div class="flex flex-col">
        @each('layout.user', $users, 'user')
    </div>

@endsection