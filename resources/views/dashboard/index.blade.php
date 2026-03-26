@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="min-h-screen grid lg:grid-cols-[250px_1fr] md:grid-cols-[30%_1fr] md:bg-white bg-[#f6f6ff]">
        {{-- LEFT --}}
        <div class="shadow-md hidden md:block">
            <div class="flex flex-col justify-between min-h-screen p-5">
                    <div>
                        <div class="flex gap-x-2.5 items-center mb-5 px-4">
                            <svg class="bg-blue-500 text-white p-2 rounded-xl size-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                            <h1 class="text-xl font-medium">DOKKU</h1>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <a href="" class="hover:text-blue-500 font-semibold hover:transition-all hover:bg-blue-100 rounded-2xl w-full px-5 py-2">
                                Dashboard
                            </a>
                            <a href="" class="hover:text-blue-500 font-semibold hover:transition-all hover:bg-blue-100 rounded-2xl w-full px-5 py-2">
                                Folders
                            </a>
                            <a href="" class="hover:text-blue-500 font-semibold hover:transition-all hover:bg-blue-100 rounded-2xl w-full px-5 py-2">
                                Documents
                            </a>
                        </div>
                    </div>

                    <div  class="flex flex-col gap-y-2">
                        <a href="" class="hover:text-blue-500 font-semibold hover:transition-all hover:bg-blue-100 rounded-2xl w-full px-5 py-2">
                            Settings
                        </a>
                        <form action="{{ route('logout') }}" method="POST"
                        class="cursor-pointer hover:text-red-500 font-semibold hover:transition-all hover:bg-red-100 rounded-2xl w-full px-5 py-2">
                            @csrf
                            <button type="submit">Sign Out</button>
                        </form>
                    </div>
                </div>
            </div>

        {{-- RIGHT --}}
        <div class="px-8 py-5 grid grid-rows-[50px_1fr] md:bg-[#f6f6ff] ">
            <div>
                <div class="flex justify-between items-center">
                    <div class="flex gap-x-3">
                        <p class="text-gray-400 font-medium">Dokku ></p>
                        <p class="font-medium">Document</p>
                    </div>
                    <svg class="size-10 bg-blue-100 p-2 rounded-full text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col gap-y-10">
                <div class="flex justify-between items-center mt-5">
                    <div>
                        <h1 class="text-2xl font-semibold mb-1">Dashboard</h1>
                        <p class="text-gray-400 font-medium">Your Document overview</p>
                    </div>

                    <div class="block md:hidden">
                        <button class="px-3 py-2 rounded-xl text-white bg-blue-500 cursor-pointer">Upload</button>
                    </div>
                </div>

                <div>
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-3">
                        <div class="bg-white shadow rounded-xl h-[150px] p-5">
                            <p class="">Document</p>
                        </div>
                        <div class="bg-white shadow rounded-xl h-[150px] p-5">
                            <p class="">Document</p>
                        </div>
                        <div class="bg-white shadow rounded-xl h-[150px] p-5">
                            <p class="">Document</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class="text-md font-semibold mb-5">Recent Documents</h1>
                    <table class="bg-white shadow w-full rounded-xl">
                        <tr class="hidden md:table-row">
                            <th class="px-6 py-3 text-left">NAME</th>
                            <th class="px-6 py-3 text-center">TYPE</th>
                            <th class="px-6 py-3 text-center">DATE</th>
                            <th class="px-6 py-3"></th>
                        </tr>

                        <tr>
                            <td class="px-6 py-3 text-left">Example_Document_2024</td>

                            <td class="hidden md:table-cell px-6 py-3 text-center">PDF</td>

                            <td class="hidden md:table-cell px-6 py-3 text-center">
                                2024-10-10
                            </td>

                            <td class="px-6 py-3 text-center">Action</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3 text-left">Example_Document_2024</td>

                            <td class="hidden md:table-cell px-6 py-3 text-center">PDF</td>

                            <td class="hidden md:table-cell px-6 py-3 text-center">
                                2024-10-10
                            </td>

                            <td class="px-6 py-3 text-center">Action</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3 text-left">Example_Document_2024</td>

                            <td class="hidden md:table-cell px-6 py-3 text-center">PDF</td>

                            <td class="hidden md:table-cell px-6 py-3 text-center">
                                2024-10-10
                            </td>

                            <td class="px-6 py-3 text-center">Action</td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
