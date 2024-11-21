@extends('templates/master')

@section('title', 'Categories')

@section('desc', 'Manage all your existing categories or add a new one')
    

@section('header-button')
    <div class="mr-5">
        <a href="{{ url('/category/create') }}" data-modal-target="add-modal" data-modal-toggle="add-modal" class="text-sky-500 inline-flex items-center bg-sky-100 hover:bg-sky-200 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
            Add new category
        </a>
    </div>
@endsection

@section('content')
<div class="ml-5 mr-5 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-sky-500">
        <thead class="text-xs uppercase bg-slate-900  text-sky-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp

            @foreach ($categories as $category)
                <tr class="bg-sky-800 hover:bg-sky-600 text-white">
                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                        {{ $i++ }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $category->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $category->description }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ url("/category/$category->id/edit") }}" class="mr-4 font-medium text-white hover:text-sky-500 hover:underline">
                            Edit
                        </a>
                        <form method="POST" action="{{ url("/category/$category->id") }}"
                            onsubmit="return confirm('Are you sure you want to delete this data?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-white hover:text-sky-500 hover:underline">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
