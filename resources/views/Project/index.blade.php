<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>
                
                    <div class="mt-8 text-2xl">
                        Welcome to My Assignment!
                    </div>
                
                    <div class="mt-6 text-gray-500">
                        I use Laravel 8, and Jetstream and on top of that Livewire to handel this assignment
                    </div>
                
                
                    <div class="flex mt-4 uppercase text-blue-800">
                        <svg class="w-4 h-4 mr-2 mt-1" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M374.108,373.328c-7.829-7.792-20.492-7.762-28.284,0.067L276,443.557V20c0-11.046-8.954-20-20-20    c-11.046,0-20,8.954-20,20v423.558l-69.824-70.164c-7.792-7.829-20.455-7.859-28.284-0.067c-7.83,7.793-7.859,20.456-0.068,28.285    l104,104.504c0.006,0.007,0.013,0.012,0.019,0.018c7.792,7.809,20.496,7.834,28.314,0.001c0.006-0.007,0.013-0.012,0.019-0.018    l104-104.504C381.966,393.785,381.939,381.121,374.108,373.328z"/>
                                </g>
                            </g>
                            </svg>
                        lets start
                    </div>
                
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid md:grid-cols-2">
                    <div class="p-12">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Projects List</div>
                        </div>
                    </div>
                    <div>
                        <div class="text-right p-12">
                            <a href="{{ route('projects.create') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" wire:loading.attr="disabled" wire:target="photo">
                                Add new Project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-200 bg-opacity-25  grid grid-rows-none grid-flow-col gap-2">
                    @forelse ($projects as $project)
                        <!--Available Project Card-->
                        <a href="{{ route('projects.show', $project->id)}}">
                            <div class="p-10">  
                                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-xl text-gray-700 mb-2">{{$project->name}}</div>
                                        <p class="text-gray-600 text-xs pb-2">
                                            Status: <span class="uppercase">{{$project->status}}</span> 
                                        </p>
                                        <p class="text-gray-700 text-md" maxlength="20">
                                            {{$project->description}}
                                        </p>
                                    </div>
                                </div>
                            </div> 
                        </a> 
                        @empty
                         <p class="font-bold text-md text-gray-700 m-2">there is no Project here.</p>   
                    @endforelse
                </div>                
            </div>
        </div>
    </div>
</x-app-layout>
