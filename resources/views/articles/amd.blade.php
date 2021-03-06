<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ECE Tech News - AMD on the LEAD !</title>

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

        {{-- Article section --}}
        <div class="pt-4 grid grid-rows-1 sm:grid-rows-1 sm:grid-cols-6 items-center">
            @include('components.ads')
            <div class="p-4 col-span-6 sm:col-span-4">
                <div class="text-2xl text-red-600 font-serif">AMD on the LEAD !</div>
                <div class="italic">Reading time : 2m</div>
                <div class="mt-8 tracking-wider">AMD, and its new 5th generation processors, take all that was good in its 3rd generation
                    little brother : 7nm, up to 105 max TDP, cores ranging from 6 physical and 12 logic to 16 physical and
                    32 logic for the highest end and prices still just as correct. This year???s evolution is the improvement
                    of the frequencies of the processors going from the ryzen 5 5 5600x, in base at 3.7ghz and 4.6Ghz in
                    boost, to the Ryzen 9 5950x, which goes from 3.4Ghz to 4.9Ghz in turbo. And they are obviously
                    compatible with B450, x470, B550 and X570 motherboards under socket AM4. Still compatible with
                    pcie 4.0 and up to 4300Mghz for RAM.
                </div>

                <div class="mt-4 grid grid-cols-8">
                    <div class="col-span-5 tracking-wider">
                        Intel, took for their 11th generation, the previous (take as their model their predecessors)
                        10th generation processor base: 14nm, 125 TPD max, cores ranging from 6 physical and 12 logical
                        cores to 8 physical and 16 logical for the most high end. Frequencies ranging for the i5 11400T
                        1.3Ghz to 3.7Ghz, to the i9 11900k which at 3.5Ghz to 5.3Ghz.
                        Still with the same price bracket, so slightly more expensive than their competitors AMD, they will
                        also be compatible with the old motherboards in socket LGA 1200 but they will, for this year, take
                        into account the pcie 4.0 and the RAM at 3600Mghz.
                    </div>
                    <div class="col-span-3 bg-cover bg-hero-amd bg-center rounded"></div>
                </div>

                <div class="mt-4 tracking-wider">
                    When it comes to performance, AMD is far ahead on all points. Whether it's games, video
                    and photo edits, calculations or even treatments, AMD's new babies consistently perform 5% to 15%
                    better than their Intel naysayers. If you don't understand a thing, just tell yourself that your edits, game sessions and retouching will be much smoother and more enjoyable. The processor, the
                    brain of your pc, will then be able to execute, process and perform in less time than it takes to say
                    overspeed!
                </div>

                <div class="mt-4 tracking-wider">
                    The union of science and philosophy led Turing to work on artificial intelligence. It creates a test called <span class="italic">Turing test</span> allowing to define if a machine is qualified as conscious. It was a bet that in half a century we will no longer be able to distinguish a machine from man. He even created a chess program which unfortunately could not be executed due to the lack of technical means at the time, however it was recreated under the name <span class="italic">Turochamp</span> in 2012 in order to lead a game against Garry Kasparov, a famous Russian chess champion.
                </div>

                <div class="mt-4 text-red-400 text-lg">How to explain this ?</div>
                <div class="mt-4 tracking-wider">
                    AMD adds more frequencies to their processors, they still burn in 7nm and above all they
                    mostly have more physical and logical processors than Intel. Indeed Intel, being still stuck at 14nm,
                    cannot afford to add more cores. They therefore decided to add more frequency but that cannot
                    match the weight of more hearts.
                </div>

                <div class="mt-4 text-red-400 text-lg">What about consumption ?</div>
                <div class="mt-4 tracking-wider">
                    As seen in the technical details, AMD offer processors engraved in 7nm is 2 times less than
                    Intel (14nm). They can therefore afford to offer more cores, therefore more performance with less
                    energy consumption. Where Intel is still stagnating with some slight updates to their previous
                    versions to bring them up to date.
                </div>

                <div class="mt-4 tracking-wider">
                    In conclusion, AMD's raw performance surpasses anything it has come up with to date.
                    Coupled with a good graphics card, you can only appreciate the quality and fluidity of the animations
                    without your power monster overheating.
                </div>

                <div class="mt-4 tracking-wider">
                    They run the processor market, but they have one major flaw: inventory.
                    (Indeed, AMD has a lot of inventory issues lately just like graphics cards)
                    This is how Intel is able to keep its head above water and can take advantage: they have much larger
                    stocks than their rivals (and this is what keeps them in the PC processor market).
                    We could now wonder how Intel will be able to return to the field dominated by AMD? What new
                    products and technologies should they offer to become the big players once again in the processor
                    market?
                </div>

                <div class="mt-8 mb-8 flex flex-initial border-gray-400 border-b border-t p-4">
                    <div class="rounded-full shadow-lg bg-cover bg-center bg-hero-donatien h-14 w-14"></div>
                    <div class="ml-4">
                        <div class="font-semibold text-red-400">Donatien HANNA</div>
                        <div class="italic">Video maker & Video editor</div>
                    </div>
                </div>

                <div class="pt-4 pb-4">
                    <div class="pb-4 text-red-600 text-sm font-bold text-center">MORE NEWS</div>
                    <div class="grid grid-cols-2 divide-x divide-gray-400">
                        <div class="pr-2">
                            <div class="text-red-600 text-sm font-bold">HEALTH</div>
                            <div class="text-lg font-serif">How technology is impacting our sleep</div>
                            <div class="text-sm text-gray-700">We spend about a third of our life sleeping, however most of us have an important lack of  sleep that deteriorates health. You might think that technology is helping us sleep and recover better, but that???s not really the case...
                                <a href="/how-tech-is-impacting-our-sleep" class="hover:underline text-blue-600"> Read more.</a>
                            </div>
                        </div>
                        <div class="pl-2">
                            <div class="text-red-600 text-sm font-bold">HARDWARE</div>
                            <div class="text-lg font-serif">Intel Graphics Cards Leak.</div>
                            <div class="text-sm text-gray-700">Intel, the experience, the processor and AI giants, are entering the graphics card market!
                                Indeed, for almost a year, we have been hearing rumors saying that Intel is working on new Graphics
                                Cards: The Intel Xe series..
                                <a href="/" class="hover:underline text-blue-600"> Read more.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.shareit')
        </div>
        @include('components.footer')
    </body>
</html>
