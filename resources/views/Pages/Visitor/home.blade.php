@extends('layout.app')

@section('title', 'Home')

@section('content')

    <section id="category_grid">
        <div class="w-full">
            <div class="grid md:grid-cols-3 gap-0.5 grid-cols-1">
                <div id="bigger_category" class="w-full md:col-span-2 gap-0.5 grid grid-cols-1">
                    <div class="category_item">
                        <a href=""><span>Gourmet Entrées</span></a>
                        <div>
                            <img src="https://plus.unsplash.com/premium_photo-1673108852141-e8c3c22a4a22?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        </div>
                    </div>
                    <div class="category_item">
                        <a href=""><span>Petite Pleasures</span></a>
                        <div>
                            <img src="https://plus.unsplash.com/premium_photo-1667114974806-1b8af9ee8fee?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        </div>
                    </div>
                </div>
                <div id="smaller_category" class="w-full md:col-span-1 gap-0.5 grid grid-cols-1">
                    <div class="category_item">
                        <a href=""><span>Refined Refreshments</span></a>
                        <div>
                            <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?q=80&w=1557&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        </div>
                    </div>
                    <div class="category_item">
                        <a href=""><span>Harvest Elegance</span></a>
                        <div>
                            <img src="https://plus.unsplash.com/premium_photo-1721822420816-812a351499ee?q=80&w=1492&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1. Hero Search & Filter -->
    <!-- 1. Hero Search & Filter with Image Overlay -->
    <section id="searching" aria-labelledby="explore-search" class="py-20 relative overflow-hidden home-section">
        <!-- Overlay Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" class="w-full h-full object-cover opacity-20" aria-hidden="true" />
        </div>

        <!-- Content -->
        <div class="relative max-w-4xl mx-auto px-4">
            <h2 id="explore-search" class="text-2xl font-bold mb-4 text-center">Cari Menu atau Toko Favorit</h2>
            <form class="flex flex-col sm:flex-row gap-4">
                <label for="search" class="sr-only">Cari</label>
                <input id="search" type="search" placeholder="Cari makanan, minuman, toko..."
                    class="flex-1 border rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-400"
                    aria-label="Cari makanan, minuman, toko" />
                <button type="button" class="px-4 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition"
                    aria-label="Filter kategori">
                    Filter
                </button>
            </form>
        </div>
    </section>

    <section id="promo" class="home-section py-9">
        <h2 class="text-center text-4xl font-bold my-9">Promo Terkini</h2>
        <div class="max-w-6xl mx-auto overflow-auto scroll-smooth no-scrollbar">
            <div id="carousel" class="flex overflow-x-auto snap-x no-scrollbar snap-mandatory scroll-smooth">
                <!-- Slide 1 -->
                <div class="snap-start flex-shrink-0 w-full md:w-3/4 lg:w-2/3 px-4">
                    <img src="https://images.unsplash.com/photo-1615557960916-5f4791effe9d?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Promo 1"
                        class="w-full h-56 object-cover rounded-lg shadow-lg" />
                </div>
                <!-- Slide 2 -->
                <div class="snap-start flex-shrink-0 w-full md:w-3/4 lg:w-2/3 px-4">
                    <img src="https://images.unsplash.com/photo-1615557960916-5f4791effe9d?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Promo 2"
                        class="w-full h-56 object-cover rounded-lg shadow-lg" />
                </div>
                <!-- Slide 3 -->
                <div class="snap-start flex-shrink-0 w-full md:w-3/4 lg:w-2/3 px-4">
                    <img src="https://images.unsplash.com/photo-1615557960916-5f4791effe9d?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Promo 3"
                        class="w-full h-56 object-cover rounded-lg shadow-lg" />
                </div>
            </div>
        </div>
    </section>

    <section id="top_merchant" aria-labelledby="featured-sellers" class="bg-white py-8">
        <h2 id="featured-sellers" class="text-2xl font-bold mb-6 text-center">Merchant Unggulan</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
            <!-- Contoh Card Merchant -->
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="https://images.unsplash.com/photo-1615557960916-5f4791effe9d?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Restoran 1" class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Restoran A</h3>
                    <p class="text-sm text-gray-600">⭐ 4.8 • 20–30 menit</p>
                </div>
            </article>
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Restoran 2" class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Kedai B</h3>
                    <p class="text-sm text-gray-600">⭐ 4.6 • 15–25 menit</p>
                </div>
            </article>
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="https://images.unsplash.com/photo-1515823064-d6e0c04616a7?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Restoran 3" class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Warung C</h3>
                    <p class="text-sm text-gray-600">⭐ 4.9 • 10–20 menit</p>
                </div>
            </article>
        </div>
    </section>

    <section id="demand_menu" aria-labelledby="trending-dishes" class="py-8">
        <h2 id="trending-dishes" class="text-2xl font-bold mb-6 text-center">Menu Trending</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
            <!-- Contoh Card Menu -->
            <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                <img src="https://images.unsplash.com/photo-1645696329525-8ec3bee460a9?q=80&w=1629&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Mie Goreng" class="w-full h-36 object-cover" />
                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-semibold mb-2">Mie Goreng Spesial</h3>
                    <p class="mt-auto text-green-600 font-bold">Rp35.000</p>
                </div>
            </article>
            <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                <img src="https://images.unsplash.com/photo-1722478347636-5f50cb76abf3?q=80&w=1449&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Mie Goreng" class="w-full h-36 object-cover" />
                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-semibold mb-2">Mie Goreng Spesial</h3>
                    <p class="mt-auto text-green-600 font-bold">Rp35.000</p>
                </div>
            </article>
            <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                <img src="https://images.unsplash.com/photo-1645696329525-8ec3bee460a9?q=80&w=1629&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Mie Goreng" class="w-full h-36 object-cover" />
                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-semibold mb-2">Mie Goreng Spesial</h3>
                    <p class="mt-auto text-green-600 font-bold">Rp35.000</p>
                </div>
            </article>
            <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                <img src="https://images.unsplash.com/photo-1645696329525-8ec3bee460a9?q=80&w=1629&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Mie Goreng" class="w-full h-36 object-cover" />
                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-semibold mb-2">Mie Goreng Spesial</h3>
                    <p class="mt-auto text-green-600 font-bold">Rp35.000</p>
                </div>
            </article>
            <!-- Tambahkan hingga 8 item sesuai kebutuhan -->
        </div>
    </section>

    <section id="latest_menu_store" aria-labelledby="new-arrivals" class="bg-white py-8">
        <h2 id="new-arrivals" class="text-2xl font-bold mb-6 text-center">Toko & Menu Baru</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
            <!-- Contoh Card New Arrival -->
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden relative">
                <span
                    class="badge absolute flex items-center gap-1.5 left-0 top-[1rem] bg-orange-500 text-white py-0.5 px-3 rounded-r-[500px] text-sm"><i
                        class="ri-store-2-line"></i>Store</span>
                <img src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Baru 1" class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold">Resto D</h3>
                    <p class="text-sm text-gray-600">Buka minggu lalu</p>
                </div>
            </article>
            <!-- Contoh Card New Arrival -->
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden relative">
                <span
                    class="badge absolute flex items-center gap-1.5 left-0 top-[1rem] bg-green-700 text-white py-0.5 px-3 rounded-r-[500px] text-sm"><i
                        class="ri-restaurant-2-fill"></i>Menu</span>
                <img src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Baru 1" class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold">Resto D</h3>
                    <p class="text-sm text-gray-600">Buka minggu lalu</p>
                </div>
            </article>
        </div>
    </section>


    {{-- <!-- 2. Promotional Banner / Carousel -->
    <section aria-labelledby="promo-carousel" class="relative">
        <h2 id="promo-carousel" class="sr-only">Promo Terkini</h2>
        <div id="carousel" class="flex overflow-x-auto snap-x no-scrollbar snap-mandatory scroll-smooth">
            <!-- Slide 1 -->
            <div class="snap-start flex-shrink-0 w-full md:w-3/4 lg:w-2/3 px-4">
                <img src="https://via.placeholder.com/800x300?text=Promo+1" alt="Promo 1"
                    class="w-full h-56 object-cover rounded-lg shadow-lg" />
            </div>
            <!-- Slide 2 -->
            <div class="snap-start flex-shrink-0 w-full md:w-3/4 lg:w-2/3 px-4">
                <img src="https://via.placeholder.com/800x300?text=Promo+2" alt="Promo 2"
                    class="w-full h-56 object-cover rounded-lg shadow-lg" />
            </div>
            <!-- Slide 3 -->
            <div class="snap-start flex-shrink-0 w-full md:w-3/4 lg:w-2/3 px-4">
                <img src="https://via.placeholder.com/800x300?text=Promo+3" alt="Promo 3"
                    class="w-full h-56 object-cover rounded-lg shadow-lg" />
            </div>
        </div>
    </section>

    <!-- 3. Quick Category Links -->
    <section aria-labelledby="quick-categories" class="py-8">
        <h2 id="quick-categories" class="text-2xl font-bold mb-6 text-center">Kategori Cepat</h2>
        <div class="max-w-5xl mx-auto grid grid-cols-2 sm:grid-cols-4 gap-6 px-4">
            <!-- Gourmet Entrées -->
            <button
                class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition flex flex-col items-center text-center focus:outline-none focus:ring-4 focus:ring-green-200">
                <span class="text-green-600 mb-2 text-3xl">🍽️</span>
                <span class="font-semibold">Gourmet Entrées</span>
            </button>
            <!-- Petite Pleasures -->
            <button
                class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition flex flex-col items-center text-center focus:outline-none focus:ring-4 focus:ring-pink-200">
                <span class="text-pink-600 mb-2 text-3xl">🍰</span>
                <span class="font-semibold">Petite Pleasures</span>
            </button>
            <!-- Refined Refreshments -->
            <button
                class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition flex flex-col items-center text-center focus:outline-none focus:ring-4 focus:ring-teal-200">
                <span class="text-teal-600 mb-2 text-3xl">🍹</span>
                <span class="font-semibold">Refined Refreshments</span>
            </button>
            <!-- Harvest Elegance -->
            <button
                class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition flex flex-col items-center text-center focus:outline-none focus:ring-4 focus:ring-green-200">
                <span class="text-green-600 mb-2 text-3xl">🥗</span>
                <span class="font-semibold">Harvest Elegance</span>
            </button>
        </div>
    </section>

    <!-- 4. Featured Restaurants / Sellers -->
    <section aria-labelledby="featured-sellers" class="bg-white py-8">
        <h2 id="featured-sellers" class="text-2xl font-bold mb-6 text-center">Merchant Unggulan</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
            <!-- Contoh Card Merchant -->
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="https://via.placeholder.com/400x200?text=Restoran+1" alt="Restoran 1"
                    class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Restoran A</h3>
                    <p class="text-sm text-gray-600">⭐ 4.8 • 20–30 menit</p>
                </div>
            </article>
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="https://via.placeholder.com/400x200?text=Restoran+2" alt="Restoran 2"
                    class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Kedai B</h3>
                    <p class="text-sm text-gray-600">⭐ 4.6 • 15–25 menit</p>
                </div>
            </article>
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="https://via.placeholder.com/400x200?text=Restoran+3" alt="Restoran 3"
                    class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Warung C</h3>
                    <p class="text-sm text-gray-600">⭐ 4.9 • 10–20 menit</p>
                </div>
            </article>
        </div>
    </section>

    <!-- 5. Trending Dishes -->
    <section aria-labelledby="trending-dishes" class="py-8">
        <h2 id="trending-dishes" class="text-2xl font-bold mb-6 text-center">Menu Trending</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
            <!-- Contoh Card Menu -->
            <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                <img src="https://via.placeholder.com/300x200?text=Mie+Goreng" alt="Mie Goreng"
                    class="w-full h-36 object-cover" />
                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-semibold mb-2">Mie Goreng Spesial</h3>
                    <p class="mt-auto text-green-600 font-bold">Rp35.000</p>
                </div>
            </article>
            <!-- Tambahkan hingga 8 item sesuai kebutuhan -->
        </div>
    </section>

    <!-- 6. New Arrivals -->
    <section aria-labelledby="new-arrivals" class="bg-white py-8">
        <h2 id="new-arrivals" class="text-2xl font-bold mb-6 text-center">Toko & Menu Baru</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
            <!-- Contoh Card New Arrival -->
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                <img src="https://via.placeholder.com/400x200?text=Baru+1" alt="Baru 1"
                    class="w-full h-40 object-cover" />
                <div class="p-4">
                    <h3 class="font-semibold">Resto D</h3>
                    <p class="text-sm text-gray-600">Buka minggu lalu</p>
                </div>
            </article>
        </div>
    </section>

    <!-- 7. Personalized Recommendations -->
    <section aria-labelledby="personalized" class="py-8">
        <h2 id="personalized" class="text-2xl font-bold mb-6 text-center">Rekomendasi Untuk Anda</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
            <!-- Contoh Card Rekomendasi -->
            <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                <img src="https://via.placeholder.com/300x200?text=Rekomendasi+1" alt="Rekomendasi 1"
                    class="w-full h-36 object-cover" />
                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-semibold mb-2">Ayam Geprek</h3>
                    <p class="mt-auto text-green-600 font-bold">Rp28.000</p>
                </div>
            </article>
        </div>
    </section>

    <!-- 8. Combo Deals & Bundles -->
    <section aria-labelledby="combos" class="bg-white py-8">
        <h2 id="combos" class="text-2xl font-bold mb-6 text-center">Paket Hemat & Bundle</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
            <!-- Contoh Card Bundle -->
            <article class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                <img src="https://via.placeholder.com/400x200?text=Family+Set" alt="Family Set"
                    class="w-full h-40 object-cover" />
                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-semibold mb-2">Family Set</h3>
                    <p class="mt-auto text-green-600 font-bold">Rp120.000</p>
                </div>
            </article>
        </div>
    </section> --}}
@endsection
