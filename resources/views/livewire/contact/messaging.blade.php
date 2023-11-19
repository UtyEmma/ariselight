<form method="POST" action="{{route('contact.send')}}">
    @csrf
    <p class="mb-0" id="error-msg"></p>
    <div id="simple-msg"></div>
    <div class="grid lg:grid-cols-12 lg:gap-6">
        <div class="mb-5 lg:col-span-6">
            <label for="name" class="font-medium">Your Name:</label>
            <input name="name" type="text" class="mt-2 form-input" placeholder="Name">
            <x-input.error key="name" />
        </div>

        <div class="mb-5 lg:col-span-6">
            <label for="email" class="font-medium">Your Email:</label>
            <input name="email" type="email" class="mt-2 form-input" placeholder="Email">
            <x-input.error key="email" />
        </div>
    </div>

    <div class="grid grid-cols-1">
        <div class="mb-5">
            <label for="subject" class="font-medium">Your Question:</label>
            <input name="subject" class="mt-2 form-input" placeholder="Subject">
            <x-input.error key="subject" />
        </div>

        <div class="mb-5">
            <label for="comments" class="font-medium">Your Message:</label>
            <textarea name="message" class="mt-2 form-input textarea" placeholder="Message"></textarea>
            <x-input.error key="message" />
        </div>
    </div>

    @if (session('error') || session('success'))
        <div class="py-3">
            @if (session('error'))
                <p class="text-red-600">{{session()->get('success')}}</p>
            @endif
            @if (session('success'))
                <p class="text-green-600">{{session()->get('success')}}</p>
            @endif
        </div>
    @endif
    <button type="submit" class="space-x-3 text-white bg-green-600 rounded-md btn hover:bg-green-700">Send Message</button>
    {{-- <x-spinner wire:loading wire:trigger='send' /> --}}
</div>
