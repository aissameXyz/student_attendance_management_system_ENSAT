<?php $roles = ['admin','teacher']; ?>
@hasanyrole($roles)
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
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{url('admin/students')}}"">Students</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{url('admin/teachers')}}"">Teachers</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{url('admin/modules')}}"">Modules</a>
                </div>
                 <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{url('admin/absence')}}">Absence</a>
                </div>
             
                
            </div>
        </div>
    </div>
</x-app-layout>

@else
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
              <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{url('admin/teachers')}}">Teachers ( just to test permission error ! )</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{url('myinfo', strtolower($user->name) )}}">My Info </a>
                </div>
                 <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{url('student/absence',strtolower($user->name) )}}">Absence</a>
                </div>
                  

              
              
                
            </div>
        </div>
    </div>
</x-app-layout>

@endhasanyrole