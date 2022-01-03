@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div class="border border-gray-700 px-10 py-4 rounded-lg">
                <form action="{{ route('send.email') }}" class="" method="post">
                    @csrf
                    <span class="text-blue-800">Contact Form</span>
                    @if(session()->has('message'))
                        <div class="bg-green-100 border border-green-400 text-green-600 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Holy smokes!</strong>
                            <span class="block sm:inline">{{ session()->get('message') }}</span>
                        </div>
                    @endif

                    <div class="mb-5 mt-2.5">
                        <label for="name" class="block text-sm font-medium text-gray-500">Name</label>
                        <input class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm" type="text" name="name" required>
                        @error('name')
                        <br>
                        <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-5 mt-2.5">
                        <label for="email" class="block text-sm font-medium text-gray-500">Email</label>
                        <input class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm" type="email" name="email" required>
                        @error('email')
                        <br>
                        <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-5 mt-2.5">
                        <label for="subject" class="block text-sm font-medium text-gray-500">Subject</label>
                        <input class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm" type="text" name="subject" required>
                        @error('subject')
                        <br>
                        <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-5 mt-2.5">
                        <label for="content" class="block text-sm font-medium text-gray-500">Message</label>
                        <div class="mt-1">
                        <textarea class="w-full border border-gray-400 px-3 py-2 rounded-lg shadow-sm"
                                  id="content" name="content" rows="5" cols="33" placeholder="Here your message !" required></textarea>
                        </div>
                        @error('content')
                        <span class="text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-5 mt-2.5">
                        <label for="submit" class=" rounded-lg bg-blue-700 text-white px-3 py-2">Submit</label>
                        <button name="submit" type="submit" id="submit"></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
