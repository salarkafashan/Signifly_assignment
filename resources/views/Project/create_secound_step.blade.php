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
                                2 / 2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 bg-opacity-25 grid grid-cols-3">
                    <!-- Project form Card-->
                    <div class="p-10">                                                         
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Years of experience :
                            </label>
                            @include('Project.ajax_select_experience')
                            
                        </div>
                    
                        <a href="{{route('projects.index')}}" class="uppercase inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" wire:loading.attr="disabled" wire:target="photo">
                            Save Project
                        </a>
                    </div> 
                    <div class="p-7">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Available team members :
                            </label>
                            <div style="height:29rem" id="display_users" class="grid grid-cols-3 overflow-auto shadow-md ">
                                @php($i =0)
                                @foreach($project->specific_technologies as $teck)
                                    @foreach($users as $user)
                                        @if(array_intersect($user->skills , $project->specific_technologies))
                                        @php($i++)
                                        <div class="h-30 m-2 grid grid-row-2 hover:bg-gray-200 cursor-pointer">
                                            <input class="user_selected" value="{{$user->id}}" type="checkbox" class="form-checkbox">
                                            <div class="mt-5 mx-8 mb-2">
                                                @if ($user->profile_photo_path)
                                                    <img class="w-15 h-15 border-2 border-white rounded-full" alt="{{$user->name}}" src="{{$user->profile_photo_path}}">
                                                @else
                                                    <svg class="w-15 h-15 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="-42 0 512 512.001">
                                                        <path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"/>
                                                        <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"/>
                                                    </svg>
                                                @endif
                                                
                                            </div>
                                            <div class="text-center mb-3">
                                                <p class="text-gray-800 text-sm font-semibold">{{$user->name}}</p> 
                                                <span class="text-gray-600 text-xs">{{$user->role->name}}</span> 
                                            </div> 
                                        </div>
                                        @endif
                                    @endforeach
                                @endforeach
                                @if($i == 0)
                                    <h4 class="text-center mt-5 text-red-700 text-md">None of the team member are available</h4>
                                @endif
                            </div> 
                        </div>
                    </div>

                    <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                </div>              
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- ajax for select users and show --}}
    <script>
        $(document).ready(function(){
            $(".user_selected").click(function() {
            selected_User($(this).val());
        });


        });
        function selected_User(id)
        {
            $.ajax({
            type: 'post',
            data: {
                _token: $('#signup-token').val(),
                project_id: {{$project->id}},
                user_id : id
            },
            url: '/Ajax/user/add_project',

            success: function(responce){
                console.log(responce);
            }
            });
        
        }
    </script>
</x-app-layout>
