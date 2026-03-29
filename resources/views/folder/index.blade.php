@extends('layouts.app')
@section('title', 'Folders')
@section('header', 'Folders')

@section('content')
     <div class="px-8 py-5 grid grid-rows-[50px_1fr] md:bg-slate-50">
        @include('components.header')

        <div class="flex flex-col gap-y-7">
            <div class="flex justify-between items-center mt-5">
                <div>
                    <h1 class="text-3xl font-semibold mb-1">Folders</h1>
                    <p class="text-gray-400 font-medium">[Total Folders]</p>
                </div>

                <div class="flex gap-x-1 items-center">
                    <div class="hidden md:flex border border-slate-200  gap-x-2 p-1 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>
                    <a href="" class="flex gap-x-2 bg-blue-500 text-white px-4 py-3 rounded-xl ml-3 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        New Folder
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-10 gap-y-6">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="flex flex-col border border-slate-100 shadow bg-white p-4 rounded-xl min-w-fit hover:bg-slate-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-10 text-slate-400 mb-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                        </svg>
                        <h2 class="mb-1">Biology<h2>
                        <div class="flex justify-between text-slate-500 text-sm">
                            <p>3 Documents</p>
                            <p>2024-05-05</p>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="hidden absolute bottom-10 lg:flex gap-x-8 justify-center items-center left-1/2 -translate-x-1/2 font-semibold p-2 rounded-full">
                <div class="rounded-full w-10 h-10 items-center flex justify-center border border-slate-300 hover:bg-blue-400 cursor-pointer hover:text-white text-slate-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </div>
                <div class="flex gap-x-4">
                    @for($i = 1; $i <= 5; $i++)
                        <div class="rounded-full w-10 h-10 items-center flex justify-center border border-slate-300 hover:bg-blue-400 cursor-pointer hover:text-white  text-slate-800">{{ $i }}</div>
                    @endfor
                </div>
                <div class="rounded-full w-10 h-10 items-center flex justify-center border border-slate-300 hover:bg-blue-400 cursor-pointer hover:text-white text-slate-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
        </div>

    </div>
@endsection
