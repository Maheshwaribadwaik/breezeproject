<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div><center>
        <b><a href="{{Route('form')}}"<button type="button" class="btn btn-info">ADD YOUR DISCRIPTION <br><br></button></center>
            <center><b><a href="{{Route('table')}}"<button type="button" class="btn btn-info">USER TABLE INFO</button></b>
        </div></center>
</x-app-layout>
