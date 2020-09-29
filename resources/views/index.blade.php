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
    <header class="section bg-primary">
        <div class="container">
            <x-title class="text-name">Olá, seja bem vindo(a).</x-title>
            <h2 class="text-4xl text-primary leading-none">
                Me chamo Marcelo e <br />
                sou um
                <span class="font-bold uppercase text-5xl align-middle relative">
                    Desenvolvedor Full Stack
                    <a id="question-mark" href="#what-is-dev-web-full-stack" class="question-mark">?</a>
                </span>
            </h2>
        </div>
    </header>
    <x-chamfer color="bg-primary" background="bg-white"/>

    <section id="what-is-dev-web-full-stack" class="section">
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
    </section>
    <x-chamfer color="bg-white" background="bg-secondary"/>

    <section class="section bg-secondary">
        <div class="container">
            <x-title class="text-white">Quais Ferramentas e Técnologias eu trabalho?</x-title>
            <div class="flex -mx-2">
                <a href="#" class="card flex flex-col items-center rounded-lg text-secondary hover:shadow-xl hover:bg-card transition-all duration-150 ease-in-out p-4 mx-2" data-color="#ff2d20">
                    <svg class="h-32 w-32 fill-current" viewBox="0 -0.114 49.742 51.317" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.626 11.564a.809.809 0 01.028.209v10.972a.8.8 0 01-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 01-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 010 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 01.8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 01.028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 01.8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09V12.33L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"/>
                    </svg>
                    <h1 class="font-bold text-lg pt-4 opacity-0">Laravel</h1>
                </a>

                <a href="#" class="card flex flex-col items-center rounded-lg text-secondary hover:shadow-xl hover:bg-card transition-all duration-150 ease-in-out p-4 mx-2" data-color="#4dba87">
                    <svg class="h-32 w-32 fill-current" viewBox="0 0 153 131" xmlns="http://www.w3.org/2000/svg">
                        <path d="M120.984.84H95.156L76.125 30.746 59.812.84H0L76.125 131 152.25.84h-31.266zM18.691 11.715h18.352l39.082 67.289 38.742-67.29h18.352L76.125 109.59 18.691 11.715z"/>
                      </svg>

                    <h1 class="font-bold text-lg pt-4 opacity-0">Vue</h1>
                </a>

                <a href="#" class="card flex flex-col items-center rounded-lg text-secondary hover:shadow-xl hover:bg-card transition-all duration-150 ease-in-out p-4 mx-2" data-color="#61dafb">
                    <svg class="h-32 w-32 fill-current" viewBox="175.7 78 490.6 436.9" xmlns="http://www.w3.org/2000/svg">
                        <path d="M666.3 296.5c0-32.5-40.7-63.3-103.1-82.4 14.4-63.6 8-114.2-20.2-130.4-6.5-3.8-14.1-5.6-22.4-5.6v22.3c4.6 0 8.3.9 11.4 2.6 13.6 7.8 19.5 37.5 14.9 75.7-1.1 9.4-2.9 19.3-5.1 29.4-19.6-4.8-41-8.5-63.5-10.9-13.5-18.5-27.5-35.3-41.6-50 32.6-30.3 63.2-46.9 84-46.9V78c-27.5 0-63.5 19.6-99.9 53.6-36.4-33.8-72.4-53.2-99.9-53.2v22.3c20.7 0 51.4 16.5 84 46.6-14 14.7-28 31.4-41.3 49.9-22.6 2.4-44 6.1-63.6 11-2.3-10-4-19.7-5.2-29-4.7-38.2 1.1-67.9 14.6-75.8 3-1.8 6.9-2.6 11.5-2.6V78.5c-8.4 0-16 1.8-22.6 5.6-28.1 16.2-34.4 66.7-19.9 130.1-62.2 19.2-102.7 49.9-102.7 82.3 0 32.5 40.7 63.3 103.1 82.4-14.4 63.6-8 114.2 20.2 130.4 6.5 3.8 14.1 5.6 22.5 5.6 27.5 0 63.5-19.6 99.9-53.6 36.4 33.8 72.4 53.2 99.9 53.2 8.4 0 16-1.8 22.6-5.6 28.1-16.2 34.4-66.7 19.9-130.1 62-19.1 102.5-49.9 102.5-82.3zm-130.2-66.7c-3.7 12.9-8.3 26.2-13.5 39.5-4.1-8-8.4-16-13.1-24-4.6-8-9.5-15.8-14.4-23.4 14.2 2.1 27.9 4.7 41 7.9zm-45.8 106.5c-7.8 13.5-15.8 26.3-24.1 38.2-14.9 1.3-30 2-45.2 2-15.1 0-30.2-.7-45-1.9-8.3-11.9-16.4-24.6-24.2-38-7.6-13.1-14.5-26.4-20.8-39.8 6.2-13.4 13.2-26.8 20.7-39.9 7.8-13.5 15.8-26.3 24.1-38.2 14.9-1.3 30-2 45.2-2 15.1 0 30.2.7 45 1.9 8.3 11.9 16.4 24.6 24.2 38 7.6 13.1 14.5 26.4 20.8 39.8-6.3 13.4-13.2 26.8-20.7 39.9zm32.3-13c5.4 13.4 10 26.8 13.8 39.8-13.1 3.2-26.9 5.9-41.2 8 4.9-7.7 9.8-15.6 14.4-23.7 4.6-8 8.9-16.1 13-24.1zM421.2 430c-9.3-9.6-18.6-20.3-27.8-32 9 .4 18.2.7 27.5.7 9.4 0 18.7-.2 27.8-.7-9 11.7-18.3 22.4-27.5 32zm-74.4-58.9c-14.2-2.1-27.9-4.7-41-7.9 3.7-12.9 8.3-26.2 13.5-39.5 4.1 8 8.4 16 13.1 24s9.5 15.8 14.4 23.4zM420.7 163c9.3 9.6 18.6 20.3 27.8 32-9-.4-18.2-.7-27.5-.7-9.4 0-18.7.2-27.8.7 9-11.7 18.3-22.4 27.5-32zm-74 58.9c-4.9 7.7-9.8 15.6-14.4 23.7-4.6 8-8.9 16-13 24-5.4-13.4-10-26.8-13.8-39.8 13.1-3.1 26.9-5.8 41.2-7.9zm-90.5 125.2c-35.4-15.1-58.3-34.9-58.3-50.6s22.9-35.6 58.3-50.6c8.6-3.7 18-7 27.7-10.1 5.7 19.6 13.2 40 22.5 60.9-9.2 20.8-16.6 41.1-22.2 60.6-9.9-3.1-19.3-6.5-28-10.2zM310 490c-13.6-7.8-19.5-37.5-14.9-75.7 1.1-9.4 2.9-19.3 5.1-29.4 19.6 4.8 41 8.5 63.5 10.9 13.5 18.5 27.5 35.3 41.6 50-32.6 30.3-63.2 46.9-84 46.9-4.5-.1-8.3-1-11.3-2.7zm237.2-76.2c4.7 38.2-1.1 67.9-14.6 75.8-3 1.8-6.9 2.6-11.5 2.6-20.7 0-51.4-16.5-84-46.6 14-14.7 28-31.4 41.3-49.9 22.6-2.4 44-6.1 63.6-11 2.3 10.1 4.1 19.8 5.2 29.1zm38.5-66.7c-8.6 3.7-18 7-27.7 10.1-5.7-19.6-13.2-40-22.5-60.9 9.2-20.8 16.6-41.1 22.2-60.6 9.9 3.1 19.3 6.5 28.1 10.2 35.4 15.1 58.3 34.9 58.3 50.6-.1 15.7-23 35.6-58.4 50.6z"/>
                        <circle cx="420.9" cy="296.5" r="45.7"/>
                    </svg>
                    <h1 class="font-bold text-lg pt-4 opacity-0">React</h1>
                </a>
            </div>
        </div>
    </section>

    <section class="section bg-my-experience">
        <div class="container">
            <x-title class="text-center text-white">Minha Experiência até Hoje</x-title>
            <div class="flex flex-col items-center">
                <div class="flex flex-col w-2/3">

                    <div class="timeline-item right flex ml-auto w-1/2">
                        <div class="flex flex-row mb-3">
                            <div class="flex flex-col items-center -ml-1.5">
                                <div class="circle w-3 h-3 rounded-full bg-white flex-shrink-0 mb-3 opacity-0"></div>
                                <div class="line bg-white rounded w-1 opacity-0"></div>
                            </div>
                            <div class="content flex flex-col text-white -mt-2 ml-4">
                                <h1 class="text-lg font-bold mb-1 opacity-0">Autômato</h1>
                                <h2 class="mb-1 opacity-0">App World</h2>
                                <h3 class="text-timeline-date text-xs mb-2 opacity-0">2020 - Presente</h3>
                                <p class="leading-5 opacity-0">Empresa que eu abri com foco em desenvolvimento Web, em Aplicativos Android e iOS e Mídias Sociais.</p>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item left flex w-1/2">
                        <div class="flex flex-row-reverse mb-3">
                            <div class="flex flex-col items-center -mr-1.5">
                                <div class="circle w-3 h-3 rounded-full bg-white flex-shrink-0 mb-3 opacity-0"></div>
                                <div class="line bg-white rounded w-1 opacity-0"></div>
                            </div>
                            <div class="content flex flex-col text-white items-end text-right -mt-2 mr-4">
                                <h1 class="text-lg font-bold mb-1 opacity-0">Autômato</h1>
                                <h2 class="mb-1 opacity-0">App World</h2>
                                <h3 class="text-timeline-date text-xs mb-2 opacity-0">2020 - Presente</h3>
                                <p class="leading-5 opacity-0">Empresa que eu abri com foco em desenvolvimento Web, em Aplicativos Android e iOS e Mídias Sociais.</p>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item right flex ml-auto w-1/2">
                        <div class="flex flex-row mb-3">
                            <div class="flex flex-col items-center -ml-1.5">
                                <div class="circle w-3 h-3 rounded-full bg-white flex-shrink-0 mb-3 opacity-0"></div>
                                <div class="line bg-white rounded w-1 opacity-0"></div>
                            </div>
                            <div class="content flex flex-col text-white -mt-2 ml-4">
                                <h1 class="text-lg font-bold mb-1 opacity-0">Autômato</h1>
                                <h2 class="mb-1 opacity-0">App World</h2>
                                <h3 class="text-timeline-date text-xs mb-2 opacity-0">2020 - Presente</h3>
                                <p class="leading-5 opacity-0">Empresa que eu abri com foco em desenvolvimento Web, em Aplicativos Android e iOS e Mídias Sociais.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
