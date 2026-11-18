@props(['type' => 'success'])
@if(session($type))<div class="mb-8 border border-[#6b263d] bg-[#ead5d9] px-5 py-4 text-sm font-medium text-[#491528]" role="status">{{ session($type) }}</div>@endif
