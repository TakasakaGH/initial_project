<x-app-layout>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">

            <div class="bg-white py-6 sm:py-8 lg:py-12">
                <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
                    <div class="bg-gray-100 rounded-lg px-4 py-6 md:py-8 lg:py-12">
                        <p class="text-indigo-500 lg:text-lg font-semibold text-center mb-2 md:mb-3">Wellcome to 「Vege Pad」!</p>

                        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">私たちは新規就農者の一人立ちをサポートします</h2>

                        <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">農業・畜産・漁業それぞれのエキスパートがノウハウを提供。ベテラン農家のノウハウ共有アプリ 「Vege Pad」
                        
    従来の学習期間(研修・下積み)期間の短縮・又はリモート学習ができます</p>
                    </div>
                </div>
            </div>

            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">農作物 一覧</h2>

                <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">
                    </p>
            </div>
            <!-- text - end -->

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-8">
                <!-- article - start -->
                @foreach ($posts as $post)
                    <a href="{{ route('posts.show', $post) }}"
                        class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
                        <img src="{{ $post->image_url }}" alt="" loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

                        <div
                            class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none">
                        </div>

                        <div class="relative p-4 mt-auto">
                            <span class="block text-gray-200 text-sm">April 07, 2021</span>
                            <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">
                                {{ $post->title }}</h2>

                            <span class="text-indigo-300 font-semibold">Read more</span>
                        </div>
                    </a>
                @endforeach

                {{-- 
                <h2
                            class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl break-words">
                        <h3>{{ $post->user->name }}</h3>
                        <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                            <span
                                class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $post->created_at ? 'NEW' : '' }}</span>
                            {{ $post->created_at }}
                        </p>
                        <p class="text-gray-700 text-base">{{ Str::limit($post->body, 50) }}</p>
                    </a>
                </article> --}}
                <!-- article - end -->
            </div>
        </div>

        {{ $posts->links() }}
    </div>
</x-app-layout>
