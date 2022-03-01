@extends('_layouts.master')

@section('body')
<div>
    <header class="flex flex-col space-y-4 items-center text-center justify-center px-4 py-16">
        <p class="text-gray-500 text-xl font-medium">Hi there! I'm</p>
        <h1 class="text-6xl font-bold">Adedaramola Adetimehin</h1>
        <p class="text-2xl font-bold">Software Developer - Web 2 & 3</p>
    </header>

    <section id="about" class="grid lg:grid-cols-2 border-t-2 border-b-2 border-black divide-x-2 divide-black">
        <div class="bg-black">j</div>
        <div class="px-4 py-10 md:p-12 text-lg">
            <h1 class="text-4xl font-bold mb-4">A bit 'bout me</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam iusto sunt architecto voluptate ducimus!
                Quos molestiae debitis perspiciatis nobis soluta ab. Et nam provident optio qui eaque assumenda illo
                quo, delectus reprehenderit, exercitationem, doloremque recusandae voluptas maiores soluta numquam
                pariatur!</p>
        </div>
    </section>

    <section id="contact" class="flex flex-col items-center justify-center py-20 px-8 text-center bg-blue-500">
        <h1 class="max-w-4xl text-5xl font-bold">Wanna reach out for a Job, Collaboration or maybe just friendship?</h1>
        <a href="#" class="w-full lg:w-max px-10 py-4 mt-8 text-lg text-white bg-black rounded">
            Send Message
        </a>
    </section>
</div>
@endsection