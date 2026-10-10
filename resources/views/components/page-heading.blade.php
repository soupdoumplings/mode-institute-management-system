@props(['eyebrow', 'title', 'description', 'actionLabel' => null, 'actionUrl' => null])

<section class="magazine-masthead relative mb-10 overflow-hidden lg:mb-12">
    <div class="relative z-10 flex min-h-80 flex-col justify-between p-7 sm:p-10 lg:min-h-96 lg:p-12">
        <div class="flex items-start justify-between gap-6">
            <p class="text-[0.62rem] font-bold uppercase tracking-[0.28em] text-[#9d1d56]">{{ $eyebrow }}</p>
            <p class="text-right text-[0.58rem] font-bold uppercase tracking-[0.18em] text-black/50">Volume 01<br>Institute Edit</p>
        </div>
        <div class="max-w-3xl">
            <h1 class="font-serif text-6xl leading-[0.77] tracking-[-0.075em] sm:text-7xl lg:text-8xl">{{ $title }}</h1>
            <p class="mt-6 max-w-xl text-sm leading-6 text-black/65">{{ $description }}</p>
        </div>
    </div>

    @if ($actionLabel && $actionUrl)
        <a href="{{ $actionUrl }}" class="absolute right-7 top-28 z-20 inline-flex w-fit items-center bg-[#9d1d56] px-5 py-3 text-xs font-bold uppercase tracking-[0.16em] text-white transition hover:bg-[#211e1e] sm:right-10 lg:right-12">
            {{ $actionLabel }}
        </a>
    @endif
</section>
