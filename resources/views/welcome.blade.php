@extends('layout')
@section('content')
<main class="bg-custombg font-play h-screen pt-4 text-white">
    <nav class="flex w-screen items-center justify-center">
        <a href="" class="text-2xl font-semibold">QuickShare</a>
    </nav>
    <div class="mt-8 flex h-4/5 flex-col items-center justify-between justify-items-center">
        <button class="rounded-lg border border-white px-5 py-3 text-sm">
            <i class="fa-solid fa-magnifying-glass mr-4"></i>Search Code
        </button>
        <div class="grid h-64 w-64 place-items-center rounded-full bg-[#303A56]">
            <div class="col-start-1 row-start-1 h-48 w-48 rounded-full bg-[#22283C]"></div>
            <div class="col-start-1 row-start-1 h-32 w-32 rounded-full bg-[#141824]"></div>
            <img class="col-start-1 row-start-1 h-16 w-16 rounded-full" src="{{ asset('img/pointer.webp') }}"
                alt="pointer" />
        </div>
        <a href="/code">
            <button class="rounded-lg border border-white px-5 py-3 text-sm">
                <i class="fa-solid fa-plus mr-4"></i>Share Text
            </button>
        </a>
    </div>
</main>
@endsection