@extends('_layouts.main')

@section('body')
    <section class="p-8 space-y-4">
        <h1 class="text-3xl font-bold">HELLO ECLAIR COMPONENTS WORLD!!</h1>
        <section class="p-8 space-y-4">
            <h2 class="text-xl font-bold">■Tailwind Example</h2>
            <div class="relative w-full rounded-lg overflow-hidden shadow-xl flex items-center py-2 px-4 bg-white">
                <div class="flex-none flex justify-center items-center">
                    <img src="http://placehold.jp/200x55.png" class="w-full h-auto">
                </div>
                <nav class="ml-auto flex-none px-8">
                    <ul class="flex justify-end items-center space-x-8 text-base font-bold">
                        <li>About</li>
                        <li>Works</li>
                        <li>Blog</li>
                        <li>Contact</li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="p-8 space-y-4">
            <h2 class="text-xl font-bold">■Alpine Example</h2>
            <div class="w-full flex" x-data="{ 'active' : 0 }">
                <div class="flex-auto py-2 flex justify-center items-center"
                     x-bind:class="{ 'bg-black text-white' : active==0, 'bg-gray-100 text-black' : active!==0 }"
                     x-on:click="active=0">タブ１
                </div>
                <div class="flex-auto py-2 flex justify-center items-center"
                     x-bind:class="{ 'bg-black text-white' : active==1, 'bg-gray-100 text-black' : active!==1 }"
                     x-on:click="active=1">タブ2
                </div>
                <div class="flex-auto py-2 flex justify-center items-center"
                     x-bind:class="{ 'bg-black text-white' : active==2, 'bg-gray-100 text-black' : active!==2 }"
                     x-on:click="active=2">タブ3
                </div>
                <div class="flex-auto py-2 flex justify-center items-center"
                     x-bind:class="{ 'bg-black text-white' : active==3, 'bg-gray-100 text-black' : active!==3 }"
                     x-on:click="active=3">タブ4
                </div>
            </div>
        </section>
    </section>

    {{--<script src="https://cdn-tailwindcss.vercel.app/?plugins=forms,typography,aspect-ratio,line-clamp"></script>--}}
    {{--<script src="https://unpkg.com/alpinejs" defer></script>--}}
@endsection
