<div class="bg-orange-300 w-full h-screen flex items-center justify-center">
    <div class="container p-4 lg:p-0">
        <div class="page-content grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($reviews as $review)
                <!-- Customer Begins -->
                <div class="customer w-full h-auto" wire:key='{{ $review->id }}'>
                    <div class="p-8 bg-white border border-2 border-black">
                        <div class="star mb-9">
                           {!! $review->rating !!}
                        </div>
                        <div class="text-content text-lg mb-10 text-base">
                           {{ $review->body }}
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-[43px] h-[43px]">
                                <img src="{{ asset('images/'.$review->customer->picture) }}" alt="">
                            </div>
                            <div class="title">
                                <h4 class="text-base capitalize mb-1">{{ $review->customer->fullname }}</h4>
                                <p class="text-sm">{{ $review->customer->role }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Customer -->
            @endforeach
        </div>
    </div>
</div>
