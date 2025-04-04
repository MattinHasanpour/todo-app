@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="my-5 flex items-center justify-center">
        <div class="flex space-x-3 backdrop-blur-lg bg-white/10 p-4 rounded-full shadow-2xl border border-white/30">

            {{-- دکمه‌ی قبلی --}}
            @if ($paginator->onFirstPage())
                <span class="px-5 py-3 text-white bg-gray-500/50 border border-gray-600 rounded-full cursor-not-allowed shadow-md opacity-50">
                    ⬅
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-5 py-3 text-white bg-gradient-to-r from-blue-600 to-indigo-600 border border-blue-700 rounded-full hover:scale-110 hover:shadow-2xl transition-all duration-500 ease-in-out">
                    ⬅
                </a>
            @endif

            {{-- شماره صفحات --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="px-5 py-3 text-gray-300 bg-gray-700/50 border border-gray-600 rounded-full shadow-sm">
                        {{ $element }}
                    </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-6 py-3 text-white bg-gradient-to-r from-blue-500 to-indigo-500 border border-blue-700 rounded-full shadow-xl font-bold ring-4 ring-blue-400/50 animate-pulse">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="px-6 py-3 text-white bg-white/10 border border-blue-500 rounded-full hover:bg-gradient-to-r from-blue-400 to-indigo-400 hover:scale-110 hover:shadow-2xl transition-all duration-500 ease-in-out">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- دکمه‌ی بعدی --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-5 py-3 text-white bg-gradient-to-r from-blue-600 to-indigo-600 border border-blue-700 rounded-full hover:scale-110 hover:shadow-2xl transition-all duration-500 ease-in-out">
                    ➡
                </a>
            @else
                <span class="px-5 py-3 text-white bg-gray-500/50 border border-gray-600 rounded-full cursor-not-allowed shadow-md opacity-50">
                    ➡
                </span>
            @endif

        </div>
    </nav>
@endif
