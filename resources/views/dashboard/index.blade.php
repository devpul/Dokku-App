@extends('layouts.app')
@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
        {{-- RIGHT --}}
        <div class="px-8 py-5 grid grid-rows-[50px_1fr] md:bg-slate-50 ">
                @include('components.header')

                <div class="flex flex-col gap-y-10">
                    <div class="flex justify-between items-center mt-8">
                        <div>
                            <h1 class="text-3xl font-semibold mb-1">Dashboard</h1>
                            <p class="text-gray-400 font-medium">Your Document overview</p>
                        </div>
                        <button class="px-5 font-medium py-2 rounded-xl text-white bg-blue-500 cursor-pointer flex gap-x-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                            Upload
                        </button>
                    </div>

                    <div>
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-4">
                            <div class="bg-white shadow rounded-xl h-[150px] p-5">
                                <div class="flex gap-x-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-12 bg-blue-50 text-blue-500 p-3 rounded-full">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                    <p class="text-slate-600">Total Files</p>
                                </div>
                                <h1 class="text-center mt-2 text-4xl font-bold">40</h1>
                            </div>
                            <div class="bg-white shadow rounded-xl h-[150px] p-5">
                                <div class="flex gap-x-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-12 bg-blue-50 text-blue-500 p-3 rounded-full">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                    </svg>

                                    <p class="text-slate-600">Folders</p>
                                </div>
                                <h1 class="text-center mt-2 text-4xl font-bold">40</h1>
                            </div>
                            <div class="bg-white shadow rounded-xl h-[150px] p-5">
                                <div class="flex gap-x-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-12 bg-blue-50 text-blue-500 p-3 rounded-full">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 17.25v-.228a4.5 4.5 0 0 0-.12-1.03l-2.268-9.64a3.375 3.375 0 0 0-3.285-2.602H7.923a3.375 3.375 0 0 0-3.285 2.602l-2.268 9.64a4.5 4.5 0 0 0-.12 1.03v.228m19.5 0a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3m19.5 0a3 3 0 0 0-3-3H5.25a3 3 0 0 0-3 3m16.5 0h.008v.008h-.008v-.008Zm-3 0h.008v.008h-.008v-.008Z" />
                                    </svg>
                                    <p class="text-slate-600">Storage Used</p>
                                </div>
                                <h1 class="text-center mt-2 text-4xl font-bold">5.6</h1>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-xl font-semibold mb-3">Recent Documents</h1>
                        <table class="bg-white shadow w-full rounded-xl">
                            <tr class="hidden md:table-row">
                                <th class="px-6 py-4 text-left">NAME</th>
                                <th class="px-6 py-4 text-center">TYPE</th>
                                <th class="px-6 py-4 text-center">DATE</th>
                                <th class="px-6 py-4"></th>
                            </tr>
                            <tr class="group hover:bg-slate-50">
                                <td class="border-t-1 border-slate-100 p-6 text-left">Example_Document_2024</td>
                                <td class="border-t-1 border-slate-100 hidden md:table-cell p-6 text-center text-gray-400">PDF</td>
                                <td class="border-t-1 border-slate-100 hidden md:table-cell p-6 text-center text-gray-400">2024-10-10</td>
                                <td class="opacity-0 group-hover:opacity-100 border-t-1 border-slate-100 p-6 text-center flex gap-x-2">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50">
                                <td class="border-t-1 border-slate-100 p-6 text-left">Example_Document_2024</td>
                                <td class="border-t-1 border-slate-100 hidden md:table-cell p-6 text-center text-gray-400">PDF</td>
                                <td class="border-t-1 border-slate-100 hidden md:table-cell p-6 text-center text-gray-400">2024-10-10</td>
                                <td class="opacity-0 group-hover:opacity-100 border-t-1 border-slate-100 p-6 text-center flex gap-x-2">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="group hover:bg-slate-50 items-center">
                                <td class="border-t-1 border-slate-100 p-6 text-left">Example_Document_2024</td>
                                <td class="border-t-1 border-slate-100 hidden md:table-cell p-6 text-center text-gray-400">PDF</td>
                                <td class="border-t-1 border-slate-100 hidden md:table-cell p-6 text-center text-gray-400">2024-10-10</td>
                                <td class="opacity-0 group-hover:opacity-100 border-t-1 border-slate-100 p-6 text-center flex gap-x-2">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
        </div>

@endsection
