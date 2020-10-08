<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marcelo</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body class="cold">

    <div class="fixed top-0 right-0 z-50">
        <div class="buttons-colors flex mt-1">
            <button id="cold" class="rounded-full relative border-2 border-white mx-1 focus:outline-none">
                <div class="flex rounded-full overflow-hidden border-2 border-black">
                    <div class="w-4 h-8"></div>
                    <div class="w-4 h-8"></div>
                </div>
            </button>
            <button id="hot" class="rounded-full relative border-2 border-white mx-1 focus:outline-none">
                <div class="flex rounded-full overflow-hidden border-2  border-black">
                    <div class="w-4 h-8"></div>
                    <div class="w-4 h-8"></div>
                </div>
            </button>
            <button id="cyberpunk" class="rounded-full relative border-2 border-white mx-1 focus:outline-none">
                <div class="flex rounded-full overflow-hidden border-2  border-black">
                    <div class="w-4 h-8"></div>
                    <div class="w-4 h-8"></div>
                </div>
            </button>
        </div>
    </div>

    <header class="relative">
        <div class="bg-header section has-chamfer relative z-20 theme-animation-bg" chamfer-bordered>
            <div class="container">
                <x-title class="text-header-primary text-name">Olá, seja bem vindo(a).</x-title>
                <h2 class="text-header-secondary text-xl md:text-4xl text-primary leading-none">
                    Me chamo Marcelo e <br />
                    sou um
                    <span class="inline-block text-2xl font-bold uppercase md:text-5xl align-middle relative">
                        Desenvolvedor Full Stack
                        <a id="question-mark" href="#what-is-dev-web-full-stack" class="question-mark">?</a>
                    </span>
                </h2>
            </div>
        </div>
        <div class="chamfer-border bg-header-chamfer-border theme-animation-bg"></div>
        <div class="chamfer-bg bg-what-is-dev theme-animation-bg"></div>
    </header>

    <section id="what-is-dev-web-full-stack" class="relative">
        <div class="bg-what-is-dev text-what-is-dev section has-chamfer relative z-20 theme-animation-bg" chamfer-bordered>
            <div class="container">
                <x-title class="opacity-0">Mas o que é um “Desenvolvedor Web Full Stack” ?</x-title>
                <p class="text-base text-content pb-4 opacity-0 theme-animation-color">
                    Um Desenvolvedor Web Full Stack tem conhecimento tanto na área de front-end, quando na área de back-end.
                </p>
                <p class="text-base text-content pb-4 opacity-0 theme-animation-color">
                    Um desenvolvedor front-end, tem o conhecimento para criar o visual, ou seja, o que o cliente final vai utilizar, sempre pensando em sua experiência, sendo assim, algumas de suas especialidades são em HTML, CSS, Javascript e UX. Além disso, precisa conhecer alguns frameworks, para facilitar a vida do desenvolvimento, como por exemplo o TailwindCSS, Bulma e Bootstrap.
                </p>
                <p class="text-base text-content pb-4 opacity-0 theme-animation-color">
                    Já um desenvolvedor back-end, precisa ter conhecimento em linguagens de programação que são utilizadas na parte do servidor, algumas delas são PHP, NodeJS (Javascript), SQL. E também precisa ter conhecimentos de ferramentas que utilizam essas linguagens, tais como MySQL, Postgre, MongoDB e Firebase.
                </p>
            </div>
        </div>
        <div class="chamfer-border bg-what-is-dev-border theme-animation-bg"></div>
        <div class="chamfer-bg bg-tech-that-i-use theme-animation-bg"></div>
    </section>

    <section class="section bg-tech-that-i-use relative theme-animation-bg">
        <div class="container relative">
            <x-title class="text-tech-that-i-use">Quais Ferramentas e Tecnologias eu trabalho?</x-title>
            <div class="flex flex-wrap justify-center md:justify-start -mx-2">
                @foreach($tecnologies as $tecnology)
                    <a href="{{$tecnology->link}}" target="_blank" class="text-tech-that-i-use-icon card flex flex-col items-center rounded-lg text-secondary hover:shadow-tech-that-i-use hover:bg-tech-that-i-use-icon transition-all duration-150 ease-in-out p-4 mx-2" data-color="{{$tecnology->color}}">
                        {!! $tecnology->blade_icon !!}
                        <h1 class="font-bold text-lg pt-4 md:opacity-0">{{$tecnology->name}}</h1>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="has-border bg-tech-that-i-use-border theme-animation-bg"></div>
    </section>

    <section class="section relative bg-my-experience text-my-experience theme-animation-bg">
        <div class="container">
            <x-title class="text-center">Minha Experiência até Hoje</x-title>
            <div class="flex flex-col items-center">
                <div class="flex flex-col w-2/3">

                    @foreach($experience as $exp)
                        @if($loop->odd)
                            <div class="timeline-item right flex md:ml-auto w-full md:w-1/2">
                                <div class="flex flex-row mb-3">
                                    <div class="flex flex-col items-center -ml-1.5">
                                        <div class="bg-my-experience-timeline theme-animation-bg circle w-3 h-3 rounded-full flex-shrink-0 mb-3 opacity-0"></div>
                                        <div class="bg-my-experience-timeline theme-animation-bg line rounded w-1 opacity-0"></div>
                                    </div>
                                    <div class="content flex flex-col text-white -mt-2 ml-4">
                                        <h1 class="md:text-lg font-bold mb-1 opacity-0">{{$exp->title}}</h1>
                                        <h2 class="text-sm md:text-base mb-1 opacity-0">{{$exp->company}}</h2>
                                        <h3 class="text-my-experience-date text-xs text-timeline-date mb-2 opacity-0">{{$exp->date}}</h3>
                                        <p class="text-sm md:text-base leading-4 md:leading-5 opacity-0">{{$exp->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="timeline-item left flex w-full md:w-1/2">
                                <div class="flex flex-row md:flex-row-reverse mb-3">
                                    <div class="flex flex-col items-center -ml-1.5 md:ml-0 md:-mr-1.5">
                                        <div class="bg-my-experience-timeline theme-animation-bg circle w-3 h-3 rounded-full flex-shrink-0 mb-3 opacity-0"></div>
                                        <div class="bg-my-experience-timeline theme-animation-bg line rounded w-1 opacity-0"></div>
                                    </div>
                                    <div class="content flex flex-col text-white md:items-end md:text-right -mt-2 ml-4 md:ml-0 md:mr-4">
                                        <h1 class="md:text-lg font-bold mb-1 opacity-0">{{$exp->title}}</h1>
                                        <h2 class="text-sm md:text-base mb-1 opacity-0">{{$exp->company}}</h2>
                                        <h3 class="text-my-experience-date text-xs text-timeline-date mb-2 opacity-0">{{$exp->date}}</h3>
                                        <p class="text-sm md:text-base leading-4 md:leading-5 opacity-0">{{$exp->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="has-border bg-my-experience-border theme-animation-bg"></div>
    </section>

    <section class="section relative bg-some-projects text-some-projects theme-animation-bg">
        <div class="container relative z-10">
            <x-title>Alguns projetos que fiz por diversão:</x-title>
            <ul class="project-list">
                @foreach($projects as $project)
                    <li class="project-item mb-4 md:mb-0">
                        <div class="flex flex-col">
                            <a href="{{$project->link}}" target="_blank" class="text-base md:text-xl font-bold block relative theme-animation-color">{{$project->title}}</a>
                            <div class="underline h-1 w-0 bg-gradient-to-r from-underline-light to-underline-dark"></div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="tsparticles"></div>
        <div class="has-border bg-some-projects-border theme-animation-bg"></div>
    </section>

    <section id="social-network" class="section relative bg-social-network theme-animation-bg">
        <div class="container">
            <x-title class="text-social-network-primary">Minhas Redes Sociais</x-title>
            <div class="text-social-network-secondary social-wrapper flex -mx-2">
                @foreach($socials as $social)
                    <a href="{{$social->link}}" target="_blank" class="social-item text-social-network mx-2">
                        {!! $social->blade_icon !!}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="py-2 bg-footer theme-animation-bg">
        <div class="container text-footer text-xs text-center">
            Site desenvolvido com
            <a href="https://laravel.com/" target="_blank" class="hover:text-footer-hover transition-colors duration-200">Laravel</a>,
            <a href="https://sharp.code16.fr/docs/" target="_blank" class="hover:text-footer-hover transition-colors duration-200">Sharp</a>,
            <a href="https://tailwindcss.com/" class="hover:text-footer-hover transition-colors duration-200">TailwindCSS</a>,
            <a href="https://animejs.com/" class="hover:text-footer-hover transition-colors duration-200">AnimeJS</a> e
            <a href="https://github.com/matteobruni/tsparticles" class="hover:text-footer-hover transition-colors duration-200">tsParticles</a>
            .
        </div>
    </footer>

    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
