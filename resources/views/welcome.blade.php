<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/projects') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="__GLYEAOv__Layer_1" class="h-16 w-auto text-gray-700 sm:h-20" viewBox="0 0 78.9 31.2">
                        <g>
                            <path d="M9.8,8.6c0.8,0.3,1.4,0.7,1.9,1.2c0.5,0.5,0.9,1.1,1.1,1.7c0.3,0.6,0.4,1.3,0.4,1.9h-3.1 c0-0.7-0.3-1.3-0.8-1.8C8.8,11.3,8,11.1,7,11.1c-0.4,0-0.8,0-1.2,0.1c-0.4,0.1-0.7,0.2-1,0.4c-0.3,0.2-0.5,0.4-0.7,0.6 c-0.2,0.2-0.3,0.5-0.3,0.8c0,0.6,0.3,1,0.9,1.3c0.6,0.3,1.5,0.5,2.8,0.8c1,0.2,1.9,0.4,2.6,0.6c0.8,0.2,1.4,0.6,2,0.9 c0.5,0.4,1,0.9,1.3,1.4c0.3,0.6,0.4,1.3,0.4,2.1c0,0.8-0.2,1.5-0.5,2.1c-0.3,0.6-0.8,1.2-1.4,1.6c-0.6,0.4-1.3,0.8-2.1,1 C9,25.1,8.1,25.2,7,25.2c-0.8,0-1.6-0.1-2.4-0.4c-0.8-0.2-1.5-0.6-2.2-1.1c-0.6-0.5-1.2-1.1-1.5-1.8c-0.4-0.7-0.6-1.6-0.6-2.6h3.1 c0,0.5,0.1,0.9,0.3,1.3c0.2,0.4,0.5,0.7,0.9,0.9C5,21.9,5.4,22,5.8,22.2c0.4,0.1,0.8,0.2,1.3,0.2c0.4,0,0.9,0,1.3-0.1 c0.4-0.1,0.8-0.2,1.2-0.4c0.3-0.2,0.6-0.4,0.8-0.7c0.2-0.3,0.3-0.6,0.3-1c0-0.2-0.1-0.5-0.2-0.7c-0.1-0.2-0.3-0.4-0.6-0.6 c-0.3-0.2-0.7-0.4-1.2-0.5c-0.5-0.2-1.1-0.3-1.9-0.4c-0.8-0.1-1.5-0.3-2.2-0.5c-0.7-0.2-1.4-0.5-1.9-0.9c-0.6-0.4-1-0.8-1.4-1.4 c-0.4-0.6-0.5-1.3-0.5-2.2c0-0.7,0.1-1.4,0.4-1.9c0.3-0.6,0.7-1.1,1.3-1.5c0.6-0.4,1.2-0.7,2-1C5.2,8.3,6.1,8.2,7,8.2 C8.1,8.2,9.1,8.3,9.8,8.6z"></path>
                            <rect x="15.8" y="12.9" width="3.1" height="12.2"></rect>
                            <path d="M33.1,24.4c0,1-0.1,1.9-0.4,2.7c-0.3,0.8-0.7,1.5-1.3,2.1c-0.5,0.6-1.2,1-2,1.3c-0.8,0.3-1.7,0.5-2.6,0.5 c-0.7,0-1.4-0.1-2.1-0.3c-0.7-0.2-1.3-0.5-1.8-0.9c-0.5-0.4-1-0.8-1.3-1.3c-0.4-0.5-0.6-1.1-0.7-1.7h3.4c0.1,0.2,0.2,0.4,0.4,0.6 c0.2,0.2,0.4,0.3,0.6,0.4c0.2,0.1,0.5,0.2,0.7,0.2c0.2,0,0.5,0.1,0.7,0.1c1.1,0,1.9-0.3,2.4-1c0.5-0.7,0.8-1.5,0.8-2.6v-0.6 c-0.5,0.5-1,0.8-1.6,1.1c-0.6,0.2-1.3,0.4-2,0.4c-0.8,0-1.5-0.2-2.2-0.5c-0.7-0.3-1.3-0.8-1.8-1.3c-0.5-0.6-0.9-1.2-1.3-2 c-0.3-0.8-0.5-1.6-0.5-2.5c0-0.9,0.2-1.7,0.5-2.5c0.3-0.8,0.7-1.5,1.3-2c0.5-0.6,1.1-1,1.8-1.3c0.7-0.3,1.4-0.5,2.2-0.5 c0.8,0,1.4,0.1,2.1,0.4c0.6,0.3,1.2,0.7,1.7,1.2v-1.3h3V24.4z M29.7,17.6c-0.2-0.4-0.4-0.8-0.7-1.1c-0.3-0.3-0.6-0.6-1-0.7 c-0.4-0.2-0.8-0.3-1.2-0.3c-0.4,0-0.8,0.1-1.2,0.3c-0.4,0.2-0.7,0.4-1,0.7c-0.3,0.3-0.5,0.7-0.7,1.1c-0.2,0.4-0.2,0.9-0.2,1.4 c0,0.5,0.1,0.9,0.2,1.4c0.2,0.4,0.4,0.8,0.7,1.1c0.3,0.3,0.6,0.5,1,0.7c0.4,0.2,0.8,0.3,1.2,0.3c0.4,0,0.8-0.1,1.2-0.3 c0.4-0.2,0.7-0.4,1-0.7c0.3-0.3,0.5-0.7,0.7-1.1c0.2-0.4,0.2-0.9,0.2-1.3C30,18.5,29.9,18.1,29.7,17.6z"></path>
                            <path d="M46.3,25.1h-3.1v-7.1c0-0.2,0-0.4-0.1-0.7c0-0.3-0.1-0.5-0.3-0.8c-0.1-0.3-0.4-0.5-0.7-0.7 c-0.3-0.2-0.7-0.3-1.2-0.3c-0.7,0-1.3,0.2-1.7,0.7c-0.4,0.5-0.7,1-0.7,1.7v7.1h-3.1V12.9h3v1.2c0.4-0.5,0.9-0.8,1.4-1.1 c0.5-0.3,1.1-0.4,1.8-0.4c0.7,0,1.4,0.1,1.9,0.4c0.6,0.3,1.1,0.6,1.5,1.1c0.4,0.5,0.7,1,1,1.7c0.2,0.7,0.3,1.4,0.3,2.2V25.1z"></path>
                            <rect x="48.5" y="12.9" width="3.1" height="12.2"></rect>
                            <path d="M59.9,12.9v2.8h-2.2v9.4h-3.1v-9.4h-1.5v-2.8h1.5c0-0.8,0.1-1.5,0.4-2.2c0.2-0.7,0.6-1.2,1.1-1.7 c0.5-0.5,1-0.8,1.7-1c0.7-0.2,1.4-0.3,2.3-0.2v2.9c-0.8-0.1-1.3,0.1-1.7,0.4c-0.4,0.3-0.6,0.9-0.6,1.8H59.9z"></path>
                            <path d="M64.8,25.1h-3.1V7.7h3.1V25.1z"></path>
                            <path d="M73.2,27.3c-0.3,0.8-0.6,1.4-1,1.9c-0.4,0.5-0.8,0.8-1.3,1.1c-0.5,0.2-1,0.4-1.5,0.4 c-0.6,0.1-1.2,0.1-1.8,0v-2.8c0.4,0,0.7,0,1,0c0.3,0,0.5-0.1,0.8-0.3c0.2-0.1,0.4-0.3,0.6-0.5c0.2-0.2,0.3-0.5,0.4-0.9l0.4-0.9 l-4.7-12.4h3.3l3,8.8l2.9-8.8h3.3L73.2,27.3z"></path>
                            <circle cx="50.1" cy="2.2" r="1.8"></circle>
                        </g>
                    </svg>
                </div>
                <div class="ml-12">
                    <div class="mt-2">
                        <a href="{{route('projects.index')}}" class="text-blue-400 text-md">Click me!</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
