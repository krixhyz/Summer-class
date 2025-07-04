@extends('master')

@section('content')
  <!-- HERO SECTION -->
  <section id="home" class="bg-blue-100 text-center py-20">
    <h2 class="text-4xl font-bold mb-4">Contact</h2>
    <p class="text-lg text-gray-700 mb-6">We provide awesome solutions for your needs.</p>
    <a href="#services" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Get Started</a>
  </section>

  <!-- ABOUT SECTION -->
  <section id="about" class="py-16 px-6 max-w-5xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-6">About Us</h2>
    <p class="text-center text-gray-600 leading-relaxed">
      We are a team of dedicated professionals passionate about delivering high-quality web solutions.
      Our goal is to help businesses grow online with creative and effective strategies.
    </p>
  </section>

  <!-- SERVICES SECTION -->
  <section id="services" class="bg-white py-16 px-6">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-gray-100 p-6 rounded-xl shadow-md text-center">
          <h3 class="text-xl font-semibold mb-2">Web Design</h3>
          <p>Modern and responsive web design to make your brand stand out.</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-xl shadow-md text-center">
          <h3 class="text-xl font-semibold mb-2">Development</h3>
          <p>Custom websites and applications tailored to your needs.</p>
        </div>
        <div class="bg-gray-100 p-6 rounded-xl shadow-md text-center">
          <h3 class="text-xl font-semibold mb-2">SEO Optimization</h3>
          <p>Boost your visibility and traffic with our SEO services.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contact" class="py-16 px-6 bg-blue-50">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">Contact Us</h2>
      <p class="text-gray-700 mb-4">Have a question or want to work with us? Send us a message!</p>
      <form class="space-y-4">
        <input type="text" placeholder="Your Name" class="w-full p-3 rounded border border-gray-300" />
        <input type="email" placeholder="Your Email" class="w-full p-3 rounded border border-gray-300" />
        <textarea placeholder="Your Message" class="w-full p-3 rounded border border-gray-300 h-32"></textarea>
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Send Message</button>
      </form>
    </div>
  </section>
@endsection