<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quis odio natus culpa doloribus eveniet illo totam. Libero, numquam modi quis laboriosam suscipit maiores error laudantium consequuntur excepturi alias laborum nesciunt ad placeat esse commodi veniam, porro sint aliquid doloremque sed fugit officia repellat unde minima. Vitae quisquam qui voluptatem.</p>

        <div class="fixed inset-0 backdrop-blur-sm flex justify-center items-center">
            <div class="border border-slate-100 p-5 bg-white rounded-xl w-100">
                <div class="flex flex-col gap-y-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="font-semibold text-xl">Upload Document</h2>
                            <p>Add a new file to your library</p>
                        </div>
                        <div>x</div>
                    </div>

                    <div>
                        <p>Document Title</p>
                        <input type="text" placeholder="e.g. Syllabus_2024" class="p-2 border border-slate-200 bg-slate-100 w-full">
                    </div>

                    <div>
                        <div>
                            <p class="mb-2 font-medium">Document Title</p>

                            <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition">

                                <span class="text-gray-500">Click to upload file</span>

                                <input type="file" class="hidden">
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-between gap-x-5">
                        <div class="w-full">
                            <p>Folder</p>
                            <select name="" id="" class="w-full border border-slate-200 bg-slate-100 p-2 rounded-xl">
                                <option value="">Biology</option>
                                <option value="">Math</option>
                                <option value="">English</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <p>Folder</p>
                            <select name="" id="" class="w-full border border-slate-200 bg-slate-100 p-2 rounded-xl">
                                <option value="">Biology</option>
                                <option value="">Math</option>
                                <option value="">English</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-between gap-x-5">
                        <a href="" class="border border-slate-50 py-2 px-5 bg-white w-full">Cancel</a>
                        <a href="" class="bg-blue-500 text-white font-semibold py-2 px-5 w-full">Upload</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
