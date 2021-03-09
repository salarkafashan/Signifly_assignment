    <select id="select_experience" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option value="">select years of experience</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="30">30</option>
    </select>
   
    
 


    {{-- Jquery CDN for using ajax --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- ajax for select users and show --}}
    <script>
        $(document).ready(function(){
            var experience = [];
            $("#select_experience").change(function(){
                $('#display_users').empty();
                fetchRecord($('#select_experience').val());                
            });
        });
        function fetchRecord(id)
        {
            $.ajax({
            type: 'get',
            url: '/Ajax/Projects/'+id,
            dataType: 'json', 
            success: function(responce){
                console.log(responce);
                    var len = 0;
                    $('#display_users').empty();
                    if(responce['data'] != null){
                        len = responce['data'].length;
                    }
                    if(len > 0)
                    {
                        for(var i=0; i<len; i++){
                            var id = responce['data'][i].id;
                            var name = responce['data'][i].name;
                            var profile_photo_path = responce['data'][i].profile_photo_path;
                            if(profile_photo_path == null)
                            {
                                profile_photo_path = '/User_image/Unknown_User.png'
                            }

                            var tr_str = "<div class='h-30 m-2 grid grid-row-2 hover:bg-gray-200 cursor-pointer'>" +
                                "<input id='user_selected' type='checkbox' value='"+id+"' class='form-checkbox'>"+
                                "<div class='mt-5 mx-8 mb-2'>"+
                                    "<img class='w-15 h-15 border-2 border-white rounded-full' alt='"+name+"' src="+profile_photo_path+">"+
                                    "</div>"+
                                    "<div class='text-center mb-3'>"+
                                            "<p class='text-gray-800 text-sm font-semibold'>"+name+"</p>"+
                                            "<span class='text-gray-600 text-xs'>Back-end Developer</span>"+ 
                                        "</div>" 
                                    "</div>";

                            $("#display_users").append(tr_str);
                        }
                    }
                    else
                    {
                        $("#display_users").append("<h4 class='text-red-500 text-sm font-semibold'>No record found.</h4>");
                    }

                }
            });
        }
    </script>





