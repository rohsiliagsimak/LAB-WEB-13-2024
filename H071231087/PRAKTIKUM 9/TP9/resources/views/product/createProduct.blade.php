@extends('templates/master')

@section('content')    
    <section>
        <div class="py-4 px-4 mx-auto max-w-2xl ">
            <h2 class="mb-4 text-xl font-bold text-sky-950">Add a new product</h2>
            <form action="{{ url('/product') }}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-sky-950">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="border text-sm rounded-lg focus:ring-slate-300 focus:border-slate-300 block w-full p-2.5 bg-white border-gray-600 placeholder-sky-950 text-sky-950" placeholder="Type product name" required="">
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-sky-950">Price</label>
                        <input type="number" name="price" id="price" value="{{ old('price') }}" class="border text-sm rounded-lg focus:ring-slate-300 focus:border-slate-300 block w-full p-2.5 bg-white border-gray-600 placeholder-sky-950 text-sky-950" required="">
                    </div>
                    <div>
                        <label for="category_id" class="block mb-2 text-sm font-medium text-sky-950">Category</label>
                        <select name="category_id" id="category" class="border text-sm rounded-lg focus:ring-slate-300 focus:border-slate-300 block w-full p-2.5 bg-white border-white placeholder-sky-950 text-sky-950">
                            <option selected="">Select category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="stock" class="block mb-2 text-sm font-medium text-sky-950">Stock</label>
                        <input type="number" name="stock" id="stock" value="{{ old('stock') }}" class="border text-sm rounded-lg focus:ring-slate-300 focus:border-slate-300 block w-full p-2.5 bg-white border-gray-600 placeholder-sky-950 text-sky-950" required="" min="0">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-sky-950">Description</label>
                        <textarea name="description" id="description" value="{{ old('description') }}" rows="4" class="block p-2.5 w-full text-sm rounded-lg border focus:ring-slate-300 focus:border-slate-300 bg-white border-gray-600 placeholder-sky-950 text-sky-950" placeholder="Write product description here"></textarea>                    
                    </div>
                  </div>
                  <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center rounded-lg bg-sky-400 hover:bg-sky-500 focus:ring-4 focus:ring-sky-700">
                      <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                      Add new product
                  </button>
            </form>
        </div>
    </section>
@endsection