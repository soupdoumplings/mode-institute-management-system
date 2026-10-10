@if ($errors->any())
    <div class="mb-7 border-l-4 border-[#8d2445] bg-[#f2e5e7] p-5" role="alert">
        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#6b263d]">Please review the form</p>
        <ul class="mt-3 list-disc space-y-1 pl-5 text-sm text-[#491528]">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
