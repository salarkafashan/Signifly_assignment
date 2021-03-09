<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-gray-200 bg-opacity-25 grid md:grid-cols-2">
                    <div class="p-12">
                        <div class="flex items-center">
                            <svg class="w-8 h-8 text-gray-700" stroke-width="2" xmlns="http://www.w3.org/2000/svg" id="Capa_1" viewBox="0 0 512 512">
                                <g>
                                    <path d="m343.5 172.281c0-4.142-3.358-7.5-7.5-7.5h-255c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h255c4.142 0 7.5-3.358 7.5-7.5z"/>
                                    <path d="m266.365 231.448h-185.365c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h185.365c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/>
                                    <path d="m81 313.115h185.365c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-185.365c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"/>
                                    <path d="m81 379.781h255c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-255c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"/>
                                    <path d="m408.5 175.067v-142.567c0-17.92-14.58-32.5-32.5-32.5h-169.505c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h169.505c9.649 0 17.5 7.851 17.5 17.5v142.567c-50.24 3.838-90 45.937-90 97.214 0 51.705 40.176 93.408 90 97.214v110.005c0 9.649-7.851 17.5-17.5 17.5h-330c-9.649 0-17.5-7.851-17.5-17.5v-361h71c17.92 0 32.5-14.58 32.5-32.5v-71h39.495c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-46.995c-1.886 0-3.853.745-5.303 2.197l-103.5 103.5c-1.425 1.424-2.197 3.418-2.197 5.303v368.5c0 17.92 14.58 32.5 32.5 32.5h330c17.92 0 32.5-14.58 32.5-32.5v-110.017c15.104-1.16 29.742-5.801 42.723-13.616 3.548-2.136 4.693-6.745 2.557-10.294-2.136-3.547-6.744-4.694-10.294-2.557-12.784 7.697-27.475 11.765-42.485 11.765-45.491 0-82.5-37.009-82.5-82.5s37.009-82.5 82.5-82.5 82.5 37.009 82.5 82.5c0 17.946-5.661 35.005-16.37 49.335-2.479 3.318-1.8 8.018 1.518 10.498 3.319 2.479 8.019 1.799 10.498-1.518 12.662-16.942 19.354-37.107 19.354-58.314-.001-51.239-39.73-93.373-90.001-97.215zm-291.5-149.461v60.394c0 9.649-7.851 17.5-17.5 17.5h-60.394z"/>
                                    <path d="m449.748 264.781h-41.248v-41.248c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v41.248h-41.248c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h41.248v41.248c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-41.248h41.248c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"/>
                                </g>
                            </svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                                Create new project
                                <br>
                                1 / 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 bg-opacity-25 grid grid-cols-2">
                    <!-- Project form Card-->
                    <div class="p-10">  
                        <form id="form" action="{{route('projects.store')}}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Project name :
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    name="name" type="text" placeholder="please enter a name"  value={{old('name')}}>
                                    @error('name')
                                        <span class="text-red-600 text-sm font-semibold">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Technologies you need :
                                </label>
                                <input type="checkbox" name="specific_technologies[]" value="Laravel"> Laravel <br>
                                <input type="checkbox" name="specific_technologies[]" value="java"> Java<br>
                                <input type="checkbox" name="specific_technologies[]" value="vue.js"> Vue.js<br>
                                <input type="checkbox" name="specific_technologies[]" value="html5"> Html5<br>
                                <input type="checkbox" name="specific_technologies[]" value="css3"> css3<br>
                                <input type="checkbox" name="specific_technologies[]" value="react.js"> react.js<br>
                                <input type="checkbox" name="specific_technologies[]" value="photoshop"> photoshop<br>

                                    @error('tspecific_technologies[]')
                                        <span class="text-red-600 text-sm font-semibold">{{ $message }}</span>
                                    @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Dead line :
                                </label>
                                @include('Project.data_picker')
                                @error('dead_line')
                                    <span class="text-red-600 text-sm font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                
                            <div class="mb-4">
                
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Description :
                                </label>
                                <textarea rows="10" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="message1" type="text" placeholder="write project description">{{old('description')}}</textarea>
                                @error('description')
                                    <span class="text-red-600 text-sm font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                            <button
                                class="uppercase bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                     Next Step
                            </button> 
                        </form>
                    </div> 
                    
                </div>              
            </div>
        </div>
    </div>


</x-app-layout>
