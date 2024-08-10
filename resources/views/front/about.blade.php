@extends('component.main')
@section('content')
<main class="container mx-auto">
    <section class="relative rounded-lg shadow-md overflow-hidden mb-8">
        <div class="w-full">
            <img src="/assets/img/about.jpg" alt="Kanpur skyline" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-60"></div>
        <div class="absolute inset-0 p-6 flex flex-col justify-end">
            <h2 class="text-3xl font-bold mb-4 text-white">About Kanpur Chronicles</h2>
            <p class="mb-4 text-white text-shadow">
                Welcome to Kanpur Chronicles, your go-to source for all things Kanpur! We are passionate about sharing the rich culture, vibrant history, and exciting developments of our beloved city.
            </p>
            <p class="mb-4 text-white text-shadow">
                <strong>And we haven't stopped since.</strong> Our content marketing strategies have grown this blog to reach over 4 Million+ readers each year. Today, we're also working on exciting side projects like RightBlogger and SmartWP.
            </p>
        </div>
    </section>
{{--     
    
    <section class="relative rounded-lg shadow-md overflow-hidden mb-8">
        <div class="relative">
            <img src="/assets/img/about1.png" alt="Consulting experience illustration" class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                <h3 class="text-2xl font-bold mb-4">Consulting Experience</h3>
                <p class="mb-4">
                    <strong>We've landed consulting deals with dozens of the world's top startups.</strong> Here are a few of the companies we've consulted on content marketing for.
                </p>
                {{-- <div class="flex flex-wrap gap-4 mt-4">
                    <!-- Placeholder for company logos -->
                    <!-- Replace these divs with actual company logos -->
                    <div class="w-16 h-16 bg-white bg-opacity-80 rounded-full"></div>
                    <div class="w-16 h-16 bg-white bg-opacity-80 rounded-full"></div>
                    <div class="w-16 h-16 bg-white bg-opacity-80 rounded-full"></div>
                    <div class="w-16 h-16 bg-white bg-opacity-80 rounded-full"></div>
                {{-- </div> --}}
            {{-- </div>
        </div>
    </section>
    

    <section class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">The Side Hustle Project</h3>
        <p class="text-gray-600 mb-4">
            <strong>My podcast, The Side Hustle Project, has 130+ episodes and 400k+ listeners.</strong> Just a few of the guests who've come on the show to share their best advice & lessons learned.
        </p>
        <p class="text-gray-600 mb-4">
            Exploring the nitty gritty details behind what it takes to start & grow a profitable side hustle through interviews, business challenges, hands-on tactics and proven strategies. If you want to start a podcast of your own, check out my picks for the best podcast hosting platforms to host your show this year.
        </p>
        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">Listen Now</a>
    </section>

    <section class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Thank You</h3>
        <p class="text-gray-600 mb-4">
            <strong>If you've made it this far… thank you.</strong> Seriously, I deeply value every relationship I've been lucky enough to build from this blog. My strengths lie in teaching readers how to start a blog and grow a profitable side business. So if you're here for one of those two things, don't hesitate to reach out. If you're reading this right now and feeling that you'd really like to chat with me, shoot me an email at <a href="mailto:ryan@ryrob.com" class="text-blue-500 hover:underline">ryan@ryrob.com</a>, I'd love to hear from you. I mean it.
        </p>
        <p class="text-gray-600 mb-4">
            If you're looking for something to read, start with my best content and dive deep today.
        </p>
        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">Read My Best Content</a>
    </section>

    <section class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">From the Blog</h3>
        <ul class="list-disc list-inside text-gray-600">
            <li>27 ChatGPT Prompts for Bloggers (Ideas, Outlines, Drafts, SEO, and More)</li>
            <li>How to Write a Blog Post Outline in 8 Easy Steps (Free Blog Post Outline Template)</li>
            <li>How to Edit a Blog Post: My Guide to Blog Editing & Proofreading (SEO)</li>
            <li>How to Change Font Color in WordPress (on Your Blog) in 2024</li>
        </ul>
    </section> --}}

    {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <section class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Free Blogging Tools</h3>
            <ul class="list-disc list-inside text-gray-600">
                <li>Keyword Tool</li>
                <li>Article Writer</li>
                <li>Title Generator</li>
                <li>Domain Name Generator</li>
                <li>Paragraph Rewriter</li>
                <li>Blog Idea Generator</li>
                <li>All Free Tools</li>
            </ul>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Popular Posts</h3>
            <ul class="list-disc list-inside text-gray-600">
                <li>How to Start a Blog (Ultimate Guide)</li>
                <li>How to Make Money Blogging This Year</li>
                <li>Best Hosting Plans for Bloggers</li>
                <li>101 Best Side Business Ideas</li>
                <li>72 Genius Ways to Make Money Online</li>
                <li>How to Start a Podcast (and Grow It)</li>
                <li>Best Podcast Hosting (Free & Paid)</li>
            </ul>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Work With Me</h3>
            <ul class="list-disc list-inside text-gray-600">
                <li>About Ryan</li>
                <li>Contact (or Hire) Ryan</li>
                <li>My Best Content</li>
                <li>Everything About Blogging</li>
                <li>Side Projects: RightBlogger, Not Not Business, 26 Tracks, Music to Blog to, SmartWP, Hike with Ryan, MightyShare, ColorKit</li>
                <li>Built to Blog Online Course</li>
            </ul> 
        </section> --}}
    </div>
</main>
@endsection