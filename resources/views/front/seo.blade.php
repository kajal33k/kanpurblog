@extends('component.main')
@section('content')


    <!-- Hero Section -->
    <section class="relative py-20">
        <div class="absolute inset-0">
            <img src="assets\img\seo.webp" alt="App Development" class="object-cover w-full h-full">
        </div>
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="relative z-10 container mx-auto px-4 text-center text-white">
            <h2 class="text-5xl font-bold mb-6">SEO Excellence</h2>
            <p class="text-xl mb-8">Boost your online visibility and drive organic traffic to your website</p>
            <a href="#" class="bg-white text-red-700 py-3 px-8 rounded-full font-semibold hover:bg-green-100 transition duration-300">Get a Free SEO Audit</a>

        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Introduction -->
        <section class="mb-16 flex flex-col md:flex-row items-center md:items-start">
            <div class="md:w-1/2 mb-6 md:mb-0">
                <img src="assets/img/seo1.jpg" alt="SEO Expertise" class="w-full h-auto rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 md:pl-8">
                <h3 class="text-3xl font-semibold mb-6 text-red-600 text-center md:text-left">Our SEO Expertise</h3>
                <p class="text-lg mb-6 text-center md:text-left">
                    At Real Victory Groups, we specialize in comprehensive SEO strategies that propel your website to the top of search engine results. Our team of SEO experts combines data-driven insights with cutting-edge techniques to enhance your online presence and drive targeted traffic to your site.
                </p>
            </div>
        </section>
        

        <!-- Services Grid -->
        <section class="mb-16">
            <h3 class="text-3xl font-semibold mb-8 text-red-600 text-center">Our SEO Services</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <i class="ri-search-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Keyword Research & Analysis</h4>
                    <p>Identify high-value keywords to target and optimize your content strategy.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <i class="ri-pages-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">On-Page SEO Optimization</h4>
                    <p>Optimize your website's structure, content, and metadata for better search rankings.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <i class="ri-links-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Link Building</h4>
                    <p>Develop a strong backlink profile to boost your site's authority and rankings.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <i class="ri-article-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Content Strategy</h4>
                    <p>Create SEO-friendly content that engages users and ranks well in search results.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <i class="ri-line-chart-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">SEO Analytics & Reporting</h4>
                    <p>Track your SEO performance with detailed analytics and actionable insights.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <i class="ri-global-line text-4xl text-red-500 mb-4"></i>
                    <h4 class="text-xl font-semibold mb-3">Local SEO</h4>
                    <p>Optimize your online presence for local search to attract nearby customers.</p>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="mb-16">
            <h3 class="text-3xl font-semibold mb-8 text-red-600 text-center">Why Choose Our SEO Services?</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:bg-red-200">
                    <h4 class="text-xl font-semibold mb-4 text-red-600">Data-Driven Approach</h4>
                    <p>We base our strategies on comprehensive data analysis and industry best practices.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:bg-red-200">
                    <h4 class="text-xl font-semibold mb-4 text-red-600">Customized Strategies</h4>
                    <p>We tailor our SEO solutions to meet your specific business goals and target audience.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:bg-red-200">
                    <h4 class="text-xl font-semibold mb-4 text-red-600">Transparent Reporting</h4>
                    <p>Regular, detailed reports keep you informed about your SEO progress and ROI.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md  hover:bg-red-200">
                    <h4 class="text-xl font-semibold mb-4 text-red-600">Continuous Optimization</h4>
                    <p>We constantly refine our strategies to adapt to search engine algorithm updates.</p>
                </div>
            </div>
        </section>

        <!-- SEO Process -->
        <section class="mb-16">
            <h3 class="text-3xl font-semibold mb-8 text-red-600 text-center">Our SEO Process</h3>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center ">
                    <div class="bg-white p-6 rounded-lg shadow-md  hover:bg-red-300">
                        <span class="text-2xl font-bold text-red-500">01</span>
                        <h5 class="text-xl font-semibold my-3">Audit & Analysis</h5>
                        <p>We thoroughly analyze your website and identify areas for improvement.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                    <div class="bg-white p-6 rounded-lg shadow-md  hover:bg-red-300">
                        <span class="text-2xl font-bold text-red-500">02</span>
                        <h5 class="text-xl font-semibold my-3">Strategy Development</h5>
                        <p>We create a customized SEO strategy tailored to your business objectives.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                    <div class="bg-white p-6 rounded-lg shadow-md  hover:bg-red-300">
                        <span class="text-2xl font-bold text-red-500">03</span>
                        <h5 class="text-xl font-semibold my-3">Implementation</h5>
                        <p>We execute the strategy, optimizing your site for better search performance.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-4 text-center">
                    <div class="bg-white p-6 rounded-lg shadow-md  hover:bg-red-300">
                        <span class="text-2xl font-bold text-red-500">04</span>
                        <h5 class="text-xl font-semibold my-3">Monitoring</h5>
                        <p>We continuously monitor results and refine our approach for optimal outcomes.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-red-600 text-white py-12 px-4 rounded-lg text-center">
            <h3 class="text-3xl font-bold mb-4">Ready to Skyrocket Your Search Rankings?</h3>
            <p class="mb-8 text-lg">Let's boost your online visibility and drive more organic traffic to your website.</p>
            <a href="#" class="bg-white text-red-600 py-3 px-8 rounded-full font-semibold hover:bg-red-100 transition duration-300">Contact Us Today</a>
        </section>
    </main>




@endsection