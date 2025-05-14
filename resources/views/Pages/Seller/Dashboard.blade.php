@extends('layout.app2')

@section('title', 'Dashboard')

@section('content')
<div class="flex flex-col flex-wrap md:flex-row gap-6">

    <!-- Card 1 -->
    <div class="relative flex-1 min-w-[250px]">
        <!-- Icon -->
        <div
            class="absolute -top-4 left-4 w-12 h-12 rounded-lg shadow-lg
           bg-gradient-to-br from-gray-600 to-gray-400
           flex items-center justify-center text-white">
            <!-- Eye icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943
                       9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
        </div>
        <!-- Card -->
        <div class="bg-white rounded-lg shadow p-6 pt-10 flex flex-col">
            <div class="text-sm text-gray-500">Pageviews</div>
            <div class="mt-1 text-2xl font-bold text-gray-800">14,000</div>
            <div class="mt-4 text-sm flex items-center">
                <span class="text-green-500 font-semibold">+22%</span>
                <span class="ml-2 text-gray-500">vs last month</span>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="relative flex-1 min-w-[250px] md:my-0 my-5">
        <!-- Icon -->
        <div
            class="absolute -top-4 left-4 w-12 h-12 rounded-lg shadow-lg
           bg-blue-600 flex items-center justify-center text-white">
            <!-- User icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A11.955 11.955 0 0112 15
                       c2.485 0 4.826.726 6.879 2.804M15 11
                       a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </div>
        <!-- Card -->
        <div class="bg-white rounded-lg shadow p-6 pt-10 flex flex-col">
            <div class="text-sm text-gray-500">Users</div>
            <div class="mt-1 text-2xl font-bold text-gray-800">2,300</div>
            <div class="mt-4 text-sm flex items-center">
                <span class="text-green-500 font-semibold">+3%</span>
                <span class="ml-2 text-gray-500">vs last month</span>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="relative flex-1 min-w-[250px] md:my-0 my-5">
        <!-- Icon -->
        <div
            class="absolute -top-4 left-4 w-12 h-12 rounded-lg shadow-lg
           bg-green-600 flex items-center justify-center text-white">
            <!-- Dollar icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2
                       3 .895 3 2-1.343 2-3 2m0-8v2m0 4v2" />
            </svg>
        </div>
        <!-- Card -->
        <div class="bg-white rounded-lg shadow p-6 pt-10 flex flex-col">
            <div class="text-sm text-gray-500">Sales</div>
            <div class="mt-1 text-2xl font-bold text-gray-800">$5,360</div>
            <div class="mt-4 text-sm flex items-center">
                <span class="text-red-500 font-semibold">-3%</span>
                <span class="ml-2 text-gray-500">vs last month</span>
            </div>
        </div>
    </div>

</div>
@endsection
