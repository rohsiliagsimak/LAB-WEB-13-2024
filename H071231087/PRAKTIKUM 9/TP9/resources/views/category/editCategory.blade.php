@extends('templates/master')

@section('content')    
    <section>
        <div class="py-4 px-4 mx-auto max-w-2xl ">
            <h2 class="mb-4 text-xl font-bold text-sky-950">Edit category</h2>
            <form action="{{ url("/category/$category->id") }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-sky-950">Category Name</label>
                        <input type="text" name="name" id="name" value="{{ $category->name }}" class="border text-sm rounded-lg focus:ring-sky-300 focus:border-sky-300 block w-full p-2.5 bg-white border-gray-600 placeholder-sky-950 text-sky-950" placeholder="Type product name">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-sky-950">Description</label>
                        <textarea name="description" id="description" rows="8" class="block p-2.5 w-full text-sm rounded-lg border focus:ring-sky-300 focus:border-sky-300 bg-white border-gray-600 placeholder-sky-950 text-sky-950" placeholder="Your description here">{{ $category->description }}</textarea>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-sky-400 hover:bg-sky-500 rounded-lg focus:ring-4 focus:ring-sky-700">
                    Save Category
                </button>
            </form>
        </div>
    </section>
@endsection
