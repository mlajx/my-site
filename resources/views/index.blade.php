<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marcelo</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body class="bg-white">

    <header class="relative">
        <div class="section bg-primary has-chamfer">
            <div class="container">
                <x-title class="text-name">Olá, seja bem vindo(a).</x-title>
                <h2 class="text-xl md:text-4xl text-primary leading-none">
                    Me chamo Marcelo e <br />
                    sou um
                    <span class="inline-block text-2xl font-bold uppercase md:text-5xl align-middle relative">
                        Desenvolvedor Full Stack
                        <a id="question-mark" href="#what-is-dev-web-full-stack" class="question-mark">?</a>
                    </span>
                </h2>
            </div>
        </div>
    </header>

    <section id="what-is-dev-web-full-stack" class="relative">
        <div class="section bg-white has-chamfer">
            <div class="container">
                <x-title class="text-title opacity-0">Mas o que é um “Desenvolvedor Web Full Stack” ?</x-title>
                <p class="text-base text-content pb-4 opacity-0">
                    Um Desenvolvedor Web Full Stack tem conhecimento tanto na área de front-end, quando na área de back-end.
                </p>
                <p class="text-base text-content pb-4 opacity-0">
                    Um desenvolvedor front-end, tem o conhecimento para criar o visual, ou seja, o que o cliente final vai utilizar, sempre pensando em sua experiência, sendo assim, algumas de suas especialidades são em HTML, CSS, Javascript e UX. Além disso, precisa conhecer alguns frameworks, para facilitar a vida do desenvolvimento, como por exemplo o TailwindCSS, Bulma e Bootstrap.
                </p>
                <p class="text-base text-content pb-4 opacity-0">
                    Já um desenvolvedor back-end, precisa ter conhecimento em linguagens de programação que são utilizadas na parte do servidor, algumas delas são PHP, NodeJS (Javascript), SQL. E também precisa ter conhecimentos de ferramentas que utilizam essas linguagens, tais como MySQL, Postgre, MongoDB e Firebase.
                </p>
            </div>
        </div>
        <div class="has-chamfer-bg bg-secondary"></div>
    </section>

    <section class="section bg-secondary">
        <div class="container relative">
            <x-title class="text-white">Quais Ferramentas e Tecnologias eu trabalho?</x-title>
            <div class="flex flex-wrap justify-center md:justify-start -mx-2">
                @foreach($tecnologies as $tecnology)
                    <a href="{{$tecnology->link}}" target="_blank" class="card flex flex-col items-center rounded-lg text-secondary hover:shadow-xl hover:bg-card transition-all duration-150 ease-in-out p-4 mx-2" data-color="{{$tecnology->color}}">
                        {!! $tecnology->blade_icon !!}
                        <h1 class="font-bold text-lg pt-4 md:opacity-0">{{$tecnology->name}}</h1>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section bg-my-experience">
        <div class="container">
            <x-title class="text-center text-white">Minha Experiência até Hoje</x-title>
            <div class="flex flex-col items-center">
                <div class="flex flex-col w-2/3">

                    @foreach($experience as $exp)
                        @if($loop->odd)
                            <div class="timeline-item right flex md:ml-auto w-full md:w-1/2">
                                <div class="flex flex-row mb-3">
                                    <div class="flex flex-col items-center -ml-1.5">
                                        <div class="circle w-3 h-3 rounded-full bg-white flex-shrink-0 mb-3 opacity-0"></div>
                                        <div class="line bg-white rounded w-1 opacity-0"></div>
                                    </div>
                                    <div class="content flex flex-col text-white -mt-2 ml-4">
                                        <h1 class="md:text-lg font-bold mb-1 opacity-0">{{$exp->title}}</h1>
                                        <h2 class="text-sm md:text-base mb-1 opacity-0">{{$exp->company}}</h2>
                                        <h3 class="text-xs text-timeline-date mb-2 opacity-0">{{$exp->date}}</h3>
                                        <p class="text-sm md:text-base leading-4 md:leading-5 opacity-0">{{$exp->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="timeline-item left flex w-full md:w-1/2">
                                <div class="flex flex-row md:flex-row-reverse mb-3">
                                    <div class="flex flex-col items-center -ml-1.5 md:ml-0 md:-mr-1.5">
                                        <div class="circle w-3 h-3 rounded-full bg-white flex-shrink-0 mb-3 opacity-0"></div>
                                        <div class="line bg-white rounded w-1 opacity-0"></div>
                                    </div>
                                    <div class="content flex flex-col text-white md:items-end md:text-right -mt-2 ml-4 md:ml-0 md:mr-4">
                                        <h1 class="md:text-lg font-bold mb-1 opacity-0">{{$exp->title}}</h1>
                                        <h2 class="text-sm md:text-base mb-1 opacity-0">{{$exp->company}}</h2>
                                        <h3 class="text-xs text-timeline-date mb-2 opacity-0">{{$exp->date}}</h3>
                                        <p class="text-sm md:text-base leading-4 md:leading-5 opacity-0">{{$exp->description}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section relative bg-white">
        <div class="container text-secondary-light relative z-10">
            <x-title>Alguns projetos que fiz por diversão:</x-title>
            <ul class="project-list">
                @foreach($projects as $project)
                    <li class="project-item mb-4 md:mb-0">
                        <div class="flex flex-col">
                            <a href="{{$project->link}}" target="_blank" class="text-base md:text-xl font-bold block relative">{{$project->title}}</a>
                            <div class="underline h-1 w-0 bg-gradient-to-r from-white to-underline"></div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="tsparticles"></div>
    </section>

    <section class="section bg-social">
        <div class="container">
            <x-title class="text-white">Minhas Redes Sociais</x-title>
            <div class="social-wrapper flex -mx-2">
                <a href="#" class="social-item text-white mx-2">
                    <svg class="w-auto h-16 stroke-current stroke-1" fill="none" viewBox="0 0 78 76" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.781 61.188c0-.313-.312-.626-.781-.626-.469 0-.781.313-.781.626 0 .312.312.624.781.468.469 0 .781-.156.781-.468zm-4.843-.782c0 .313.312.782.78.782.313.156.782 0 .938-.313 0-.313-.156-.625-.625-.781-.468-.157-.937 0-1.093.312zm7.03-.156c-.468 0-.78.313-.78.781 0 .313.468.469.937.313.469-.157.781-.313.625-.625 0-.313-.469-.625-.781-.469zm10.157-60C16.562.25 0 16.813 0 38.375c0 17.344 10.781 32.188 26.406 37.5 2.032.313 2.657-.938 2.657-1.875v-9.688s-10.938 2.344-13.282-4.687c0 0-1.719-4.531-4.219-5.625 0 0-3.593-2.5.157-2.5 0 0 3.906.313 6.094 4.063 3.437 6.093 9.062 4.374 11.406 3.28.312-2.5 1.25-4.218 2.5-5.312-8.75-.937-17.657-2.187-17.657-17.187 0-4.375 1.25-6.407 3.75-9.219-.468-1.094-1.718-5.156.47-10.625 3.124-.938 10.78 4.219 10.78 4.219 3.125-.938 6.407-1.25 9.688-1.25 3.438 0 6.719.312 9.844 1.25 0 0 7.5-5.313 10.781-4.219 2.188 5.469.781 9.531.469 10.625 2.5 2.813 4.062 4.844 4.062 9.219 0 15-9.218 16.25-17.968 17.187 1.406 1.25 2.656 3.594 2.656 7.344 0 5.156-.157 11.719-.157 12.969 0 1.094.782 2.344 2.813 1.875 15.625-5.156 26.25-20 26.25-37.344C77.5 16.812 59.844.25 38.125.25zM15.156 54.156c-.312.157-.156.625 0 .938.313.156.625.312.938.156.156-.156.156-.625-.157-.938-.312-.156-.624-.312-.78-.156zm-1.719-1.25c-.156.313 0 .469.313.625.313.157.625.157.781-.156 0-.156-.156-.313-.469-.469-.312-.156-.468-.156-.624 0zm5 5.625c-.156.157-.156.625.313.938.313.312.781.468.938.156.156-.156.156-.625-.157-.938-.312-.312-.781-.468-1.093-.156zm-1.718-2.343c-.313.156-.313.624 0 .937.312.313.625.469.937.313.157-.157.157-.626 0-.938-.312-.313-.625-.469-.937-.313z"/>
                    </svg>
                </a>
                <a href="#" class="social-item text-white mx-2">
                    <svg class="w-auto h-16 stroke-current stroke-1" fill="none" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg">
                        <path d="M65 0H4.844C2.187 0 0 2.344 0 5.156V65c0 2.813 2.188 5 4.844 5H65c2.656 0 5-2.188 5-5V5.156C70 2.344 67.656 0 65 0zM21.094 60H10.78V26.719h10.313V60zm-5.157-37.969c-3.437 0-6.093-2.656-6.093-5.937C9.844 12.812 12.5 10 15.938 10c3.28 0 5.937 2.813 5.937 6.094a5.935 5.935 0 01-5.938 5.937zM60 60H49.531V43.75c0-3.75 0-8.75-5.312-8.75-5.469 0-6.25 4.219-6.25 8.594V60H27.656V26.719H37.5v4.531h.156c1.407-2.656 4.844-5.469 9.844-5.469 10.469 0 12.5 7.032 12.5 15.938V60z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-footer py-4">
        <div class="container text-footer text-xs text-center">
            Site desenvolvido utilizando <a href="#" class="hover:text-white">Laravel</a>, <a href="#" class="hover:text-white">Sharp</a>, <a href="#" class="hover:text-white">TailwindCss</a>, <a href="#" class="hover:text-white">AnimeJS</a> e <a href="#" class="hover:text-white">tsParticles</a>
        </div>
    </footer>

    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
