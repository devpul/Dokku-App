<div id="modal" class="flex fixed inset-0 backdrop-blur-sm bg-white/50  justify-center">
    <div class="flex justify-center items-center min-h-screen">
        <div class="flex flex-col gap-y-7 border bg-white border-slate-200 p-7 w-120 rounded-xl">
            <div class="flex justify-between">
                <div>
                    <h1 class="font-semibold text-lg">Upload Document</h1>
                    <p class="text-slate-400 text-sm">Add a new file to your library</p>
                </div>
                <button onclick="closeModal()" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div>
                <h2 class="font-medium">Document Title</h2>
                <input type="text" class="bg-slate-50 outline-none py-2 px-3 border rounded-lg border-slate-200 w-full mt-2">
            </div>

            <div>
                <h2 class="font-medium">File</h2>
                <label for="fileInput" class="flex flex-col w-full cursor-pointer bg-slate-50 outline-none p-10 border rounded-lg border-slate-200 mt-2 justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-10 bg-blue-100 text-blue-500 rounded-full p-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    <span class="text-center font-medium mt-2">Upload your Document</span>
                    <p class="text-slate-400 text-sm">or drag and drop your file here</p>
                    <input type="file" id="fileInput" class="hidden">
                </label>
            </div>

            <div class="flex justify-between gap-x-2">
                <div >
                    <h2 class="font-medium">Folder</h2>
                    <input type="text" class="bg-slate-50 outline-none py-2 px-3 border rounded-lg border-slate-200 w-full mt-2">
                </div>
                <div >
                    <h2 class="font-medium">Document Type</h2>
                    <input type="text" class="bg-slate-50 outline-none py-2 px-3 border rounded-lg border-slate-200 w-full mt-2">
                </div>
            </div>
            <div class="flex justify-between gap-x-2 ">
                <button class="flex items-center py-2 rounded-xl bg-white border border-slate-100 w-full justify-center cursor-pointer font-medium">
                    Cancel
                </button>
                <button class="flex items-center py-2 rounded-xl gap-x-1 bg-blue-500 text-white font-semibold w-full justify-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                    </svg>
                    Upload
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal()
    {
        document.getElementById("modal").classList.remove('hidden');
        document.getElementById("modal").classList.add('transition-all duration-300');
        document.getElementById("modal").classList.add('flex');
    }

    function closeModal()
    {
        document.getElementById("modal").classList.remove('flex');
        document.getElementById("modal").classList.add('hidden');
    }
</script>
