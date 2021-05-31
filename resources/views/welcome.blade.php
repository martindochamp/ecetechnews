<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ECE Tech News - Home page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset("/storage/favicon.png") }}" />

        <link rel="preconnect" href="https://fonts.gstatic.com">  
        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,400;0,500;1,400;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap');
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>
    <body class="antialiased">
        
        @include('components.navbar')
        
        {{-- Hero n1 --}}
        <div class="p-4 grid grid-cols-2 divide-x divide-gray-400">

            <div class="pr-4 grid grid-cols-2 gap-2">
                <div>
                    <div class="text-red-600 text-sm font-bold">FRESHLY</div>
                    <div class="text-lg font-serif">A new record broken by the SpaceX rocket</div>
                    <div class="text-sm text-gray-700">For its last mission, the rocket Falcon 9 B1051 made its ninth flight, which is a record. However it remains without surprise for Elon Musk who estimated the average life of 10 flights for Falcon 9 launchers. The most interesting thing is the mission..
                        <a href="/new-record-broken-by-the-spacex-rocket" class="hover:underline text-blue-600"> Read more.</a>
                    </div>
                </div>
                <div class="bg-cover bg-hero-musk rounded"></div>
            </div>

            <div class="pl-4 grid grid-rows-2 divide-y divide-gray-400">
                <div class="pb-2">
                    <div class="text-red-600 text-sm font-bold">SPACE</div>
                    <div class="text-lg font-serif">A space telescope that can look 13.8 Billion years back</div>
                    <div class="text-sm text-gray-700">A new space telescope will be send the 31 October 2021 in the Guyana space center . The James
                        Webb telescope was developed by space agency of United State, Europe and Canada in order to
                        catch more information about the creation of the universe..
                        <a href="/space-telescope-that-can-look-billions-years-back" class="hover:underline text-blue-600"> Read more.</a>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="text-red-600 text-sm font-bold">BIOGRAPHY</div>
                    <div class="text-lg font-serif">How Alan Turing contributed to computer science</div>
                    <div class="text-sm text-gray-700">Alan Turing is a British man born in 1912. He is the author of many works about mathematics and
                        exploits during the WWII. However, most of his creations were silenced for a long time. We will see
                        how it impacted the world, whether real or virtual..
                        <a href="/how-turing-contributed-to-computer-science" class="hover:underline text-blue-600"> Read more.</a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Second hero --}}
        <div class="p-4 grid grid-cols-4 divide-x divide-gray-400">
            {{-- Pub perceuse --}}
            <div class="">
                <div class="text-red-600 text-sm font-bold">ADS</div>
                <img src="{{ asset("/storage/ads.gif") }}" alt="Turn off your ads blocker"  width="280" class="rounded" />
            </div>
            <div class="col-span-3 grid grid-cols-3 divide-x divide-gray-400">
                <div class="grid grid-rows-2 p-4 divide-y divide-gray-400">
                    <div class="pb-2">
                        <div class="text-red-600 text-sm font-bold">HARDWARE</div>
                        <div class="text-lg font-serif">Intel Graphics Cards Leak.</div>
                        <div class="text-sm text-gray-700">Intel, the experience, the processor and AI giants, are entering the graphics card market!
                            Indeed, for almost a year, we have been hearing rumors saying that Intel is working on new Graphics
                            Cards: The Intel Xe series..
                            <a href="/intel-graphics-cards-leak" class="hover:underline text-blue-600"> Read more.</a>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="text-red-600 text-sm font-bold">HEALTH</div>
                        <div class="text-lg font-serif">How technology is impacting our sleep</div>
                        <div class="text-sm text-gray-700">We spend about a third of our life sleeping, however most of us have an important lack of  sleep that deteriorates health. You might think that technology is helping us sleep and recover better, but that’s not really the case...
                            <a href="/how-tech-is-impacting-our-sleep" class="hover:underline text-blue-600"> Read more.</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 grid grid-rows-3 p-4">
                    <div class="row-span-2 bg-cover bg-hero-flamanville rounded"></div>
                    <div>
                        <div class="text-red-600 text-sm font-bold">ENERGY</div>
                        <div class="text-lg font-serif">Flamanville 3, the cradle of French nuclear energy has been overtaken by events</div>
                        <div class="text-sm text-gray-700">This project, both ambitious and technological was to reveal the quality of French engineering in terms of innovation and safety, in a field where safety measures is always worthwhile.
                            Unfortunately, number of events have significantly slowed its progress in recent years...
                            <a href="/flamanville-the-cradle-of-French-nuclear-energy-has-been-overtaken-by-events" class="hover:underline text-blue-600"> Read more.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Last hero --}}
        <div class="p-4 grid grid-cols-3 divide-x">
            <div class="p-2">
                <div class="text-red-600 text-sm font-bold">ENERGY</div>
                <div class="text-lg font-serif">France hosts the Future of electricity production : Project Iter</div>
                <div class="text-sm text-gray-700">Whilst many people believe that the Nuclear field is not the futur to produce electricity, one country, France, forerunner in the nuclear fission field, took the challenge to demonstrate that the nuclear field is far from being laid to rest..
                    <a href="/france-hosts-the-Future-for-electricity-production-project-iter" class="hover:underline text-blue-600"> Read more.</a>
                </div>
            </div>
            <div class="p-2">
                <div class="text-red-600 text-sm font-bold">HARDWARE</div>
                <div class="text-lg font-serif">AMD on the LEAD !</div>
                <div class="text-sm text-gray-700">AMD, and its new 5th generation processors, take all that was good in its 3rd generation
                    little brother : 7nm, up to 105 max TDP, cores ranging from 6 physical and 12 logic to 16 physical and
                    32 logic for the highest end and prices still just as correct..
                    <a href="/amd-on-the-lead" class="hover:underline text-blue-600"> Read more.</a>
                </div>
            </div>
            <div class="p-2">
                <div class="text-red-600 text-sm font-bold">HEALTH</div>
                <div class="text-lg font-serif">Nanotechnologies : A New Perspective Of Evolution</div>
                <div class="text-sm text-gray-700">Nanomedicine is the medical application of advances in nanotechnology. Nanoscience in the field of
                    physics and chemistry has made it possible to develop methods and objects that are unique to this
                    day..
                    <a href="/nanotechnologies-a-new-perspective-of-evolution" class="hover:underline text-blue-600"> Read more.</a>
                </div>
            </div>
        </div>

        <div class="p-4 grid grid-cols-4 divide-x divide-gray-400">
            <div class="col-span-2 grid grid-rows-4 p-4">
                <div class="row-span-2 bg-cover bg-hero-micro bg-center rounded"></div>
                <div class="row-span-2">
                    <div class="text-red-600 text-sm font-bold">HEALTH</div>
                    <div class="text-lg font-serif">Microfluidics : The Future of Cancer Screening</div>
                    <div class="text-sm text-gray-700">Before introducing you to the lab-on-chip, let me remind you how malignant cancer spreads.
                        When a cell undergoes a mutation, it can cause the overexpression of certain genes, which
                        will cause it to proliferate at a much higher rate. Each of our cells carry DNA within them,
                        and when one dies by apoptosis, the tumor DNA is released into the blood..
                        <a href="/microfluidics-the-future-of-cancer-screening" class="hover:underline text-blue-600"> Read more.</a>
                    </div>
                </div>
            </div>
            <div class="col-span-2 grid grid-rows-2 p-4 divide-y divide-gray-400">
                <div class="pb-2">
                    <div class="text-red-600 text-sm font-bold">A.I.</div>
                    <div class="text-lg font-serif">Can artificial intelligence lead to the end of humanity ?</div>
                    <div class="text-sm text-gray-700">Whether we are aware of it or not, AI is everywhere : when you search on google, when you watch videos on facebook, when you listen to music on spotify ... The progress of AI continues to grow, and the use of this technology is often debated . But what are the benefits of AI, and what are the dangers ? 
                        <a href="/can-artificial-intelligence-lead-to-the-end-of-humanity" class="hover:underline text-blue-600">Read more.</a>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="text-red-600 text-sm font-bold">SPACE</div>
                    <div class="text-lg font-serif">SpaceX's Crew Dragon capsule docks with the International Space Station</div>
                    <div class="text-sm text-gray-700">A used SpaceX Crew Dragon capsule carrying four astronauts to the International Space Station as part of the company's Crew-2 mission docked successfully at the orbiting lab early Saturday (April 24), and this is the first time that this ever happened..
                        <a href="/spacex-crew-dragon-capsule-docks-with-the-international-space-station" class="hover:underline text-blue-600">Read more.</a>
                    </div>
                </div>
            </div>
        </div>
        @include('components.footer')
    </body>
</html>