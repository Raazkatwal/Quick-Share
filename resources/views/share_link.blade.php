@extends('layout')
@section('content')
<main class="bg-custombg font-play h-screen pt-4 text-white grid place-items-center">
    <div class="flex flex-col items-center justify-center gap-10 text-black">
        <h1 class="text-white text-2xl">Keep tapping!!! 👏</h1>
        <div class="bg-white rounded-md px-3 py-5 w-[40rem] flex flex-col items-center justify-center gap-5">
            <h1 class="text-center">
                {!! session('code_creator') 
    ? 'To share your codes, use this link' 
    : 'To open the <span class="font-semibold">code</span>, click the <span class="text-blue-500 font-semibold">Open</span> button' !!}

                
            </h1>
            <div class="w-full flex gap-0">
                <input type="text" readonly value="{{ url()->current() }}" id="myInput"
                    class="w-10/12 border-2 border-[#3B82F6] p-3 outline-none rounded-l-xl">
                @if (session('code_creator'))
                <button onclick="copyToClipboard()" id="copyButton"
                    class="flex justify-center items-center gap-1 bg-blue-500 border-l-0 rounded-l-none rounded-r-xl text-gray-50 hover:bg-blue-600 transition-all duration-200 ease-linear hover:text-white px-4">
                    Copy
                    <i id="copyIcon" class="fa-solid fa-copy"></i>
                </button>
                @else
                <a href="{{ route('copy_text', ['id'=>$id]) }}" class="flex justify-center items-center gap-1 bg-blue-500 border-l-0 rounded-l-none rounded-r-xl text-gray-50 hover:bg-blue-600 transition-all duration-200 ease-linear hover:text-white px-4">
                    Open
                    <i class="fa-solid fa-up-right-from-square"></i>
                </a>
                @endif
            </div>
            <div class="flex gap-8">
                <a href="/">
                    <button
                        class="text-blue-500 border-2 border-blue-500 hover:bg-blue-500 hover:text-white transition-all ease duration-100 w-[161px] active:bg-blue-400 py-2 rounded-md">
                        Share {{session('code_creator')? 'Another': 'Text'}}
                    </button>
                </a>
                <button onclick="showModal()"
                    class="flex items-center gap-1 justify-center text-white bg-blue-500 w-[161px] hover:bg-blue-600 hover:text-white transition-all ease duration-100 active:bg-blue-400 py-2 rounded-md">
                    Share QR <i class="fa-solid fa-qrcode"></i></button>
                </div>
                <div id="qrModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white rounded-lg p-10 text-center">
                        <h2 class="text-lg font-semibold mb-4">Your QR Code</h2>
                        <div id="qrcode"></div>
                        <button onclick="closeModal()"
                            class="mt-10 px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition">Close</button>
                </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: window.location.href,
        width: 200,
        height: 200,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });

    function showModal() {
        document.getElementById("qrModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("qrModal").classList.add("hidden");
    }
</script>
@endpush
