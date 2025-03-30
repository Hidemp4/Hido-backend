<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> {{-- class="dark-theme" --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiDo!</title>
    <meta name="description" content="Descrição da página para SEO">
    <meta name="keywords" content="laravel, aprendizado, sistema">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        :root {
            --primary-color: #e7eef7;
            --secundary-color: #5b7cfd;
            --text-color: #232d42;
        }

        .dark-theme {
            --primary-color: #292b2f;
            --secundary-color: #212327;
            --text-color: #fff;
        }

        .bg-primary {
            background-color: var(--primary-color);
            color: var(--text-color);
        }

        .bg-secundary {
            background-color: var(--secundary-color);
            color: #fff;
        }

        .text-color {
            color: var(--text-color);
        }
    </style>

</head>

<body>
    <div class="w-screen h-full bg-primary text-[--text-color]">
        <!-- HEADER PRINCIPAL CONTENDO O LOGO E A NAVEGAÇÃO -->
        <header class="w-full h-32 bg-secundary flex justify-between shadow-md">
            <!-- Área da logo - Linkaria para a homepage  -->
            <div class="w-1/3 h-full flex items-center px-8">
                <a class="text-3xl font-black text-white" href="/">HiDo!</a>
            </div>

            <!-- Navegação principal - Contém toggle de tema e CTAs importantes -->
            <div class="w-1/3 h-full flex justify-end items-center space-x-2 px-8">

                <!-- Link para a seção features (scroll suave em versões futuras) -->
                <a href="#features">
                    <button
                        class="px-8 py-2 rounded-lg cursor-pointer hover:bg-[#5572e9] dark:hover:bg-[#ddd]/[.2]
                        transition-all duration-300">Features</button>
                </a>

                <!-- Botão de registro - Usa rota nomeada Laravel -->
                <a href="#">
                    <button
                        class="px-8 py-2 rounded-lg cursor-pointer bg-primary text-color hover:bg-[#eee]
                        transition-all duration-300">
                        Começar
                    </button>
                </a>
            </div>
        </header>

        <main class="space-y-5">
            <!-- Hero Section - Conteúdo principal -->
            <!-- TODO: Adicionar animação de entrada no título -->
            <div class="w-full h-auto flex items-center flex-col space-y-3 mt-8">
                <h1 class="font-black text-6xl tracking-wide">Seu gerenciador de tarefas ideal</h1>
                <h2 class="font-black text-4xl tracking-wider">organiza sua vida!</h2>
                <p class="pt-4">Crie tarefas rapidamente e gerencie seus projetos com facilidade.</p>

                <!-- Botão secundário - Mesma rota mas com estilização diferente -->
                <a href="#">
                    <button
                        class="px-8 py-2 rounded-lg cursor-pointer bg-secundary text-[#5b7cfd] dark:text-[#292b2f]
                            hover:bg-[#eee] transition-all duration-300">
                        Começar de graça
                    </button>
                </a>
            </div>

            <section id="features" class="w-full h-auto ">
                <!-- INICIO DA SEÇÃO FEATURES -->
                <div class="w-full h-full flex flex-col items-center pt-8 space-y-3">
                    <h2 class="font-black">FEATURES</h2>

                    <div class="w-7/12 h-auto flex flex-wrap items-center justify-around space-y-5">
                        <!-- Grid de features - Estrutura responsiva:
                            - Mobile: 1 coluna
                            - Tablet: 2 colunas
                            - Desktop: 3 colunas
                        -->
                        <div class="flex flex-col w-[300px] h-aut text-center space-y-3">
                            <img class="size-[300px]" src="{{ asset('build/assets/images/captura.png') }}"
                                alt="Ilustração do sistema de tarefas">
                            <h2 class="font-bold">Tarefas</h2>
                            <p>Crie e gerencie suas tarefas com facilidade, defina tags e prazos</p>
                        </div>

                        <div class="flex flex-col w-[300px] h-aut text-center space-y-3">
                            <img class="size-[300px]" src="{{ asset('build/assets/images/captura.png') }}"
                                alt="Ilustração do sistema de projetos">
                            <h2 class="font-bold">Projetos</h2>
                            <p>Organize suas tarefas em projetos e acompanhe seu progresso</p>
                        </div>

                        <div class="flex flex-col w-[300px] h-aut text-center space-y-3">
                            <img class="size-[300px]" src="{{ asset('build/assets/images/captura.png') }}"
                                alt="Ilustração do sistema de Compartilhe o que importa">
                            <h2 class="font-bold">Compartilhe o que importa</h2>
                            <p>Compartilhe suas tarefas e projetos com sua equipe e colabore em tempo real</p>
                        </div>

                        <div class="flex flex-col w-[300px] h-aut text-center space-y-3">
                            <img class="size-[300px]" src="{{ asset('build/assets/images/captura.png') }}"
                                alt="Ilustração do sistema de relatórios">
                            <h2 class="font-bold">Relatórios</h2>
                            <p>Gere relatórios para analisar seu desempenho e melhorar sua produtividade</p>
                        </div>

                        <div class="flex flex-col w-[300px] h-aut text-center space-y-3">
                            <img class="size-[300px]" src="{{ asset('build/assets/images/captura.png') }}"
                                alt="Ilustração do sistema de inspire-se">
                            <h2 class="font-bold">Inspire-se</h2>
                            <p>Ao concluir tarefas, você receberá aplausos para ajudá-lo a se manter motivado</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="w-full h-screen bg-secundary flex flex-col justify-center items-center space-y-6">
                <!-- SEÇÃO PARA CONVITE E BOTÃO PARA SE REGISTRAR -->
                <h1 class="text-7xl font-black">Mantenha Simples e Organizado</h1>
                <h2 class="text-4xl font-bold">Nosso plano gratuito oferece a maioria dos recursos. Experimente agora!
                </h2>

                <!-- Botão secundário - Mesma rota mas com estilização diferente -->
                <a href="   #">
                    <button
                        class="px-10 py-3 rounded-md cursor-pointer text-lg bg-primary text-[#5b7cfd] dark:text-[#292b2f]
                         hover:bg-[#eee] transition-all duration-300">
                        Começar de graça
                    </button>
                </a>
            </div>
        </main>

        <footer class="w-full h-40 flex flex-col justify-center items-center">
            <!-- Footer básico - Links placeholder para páginas legais (implementar rotas no futuro) -->
            <div class="w-full h-full flex justify-center items-center space-x-16 font-['Arial'] text-sm">
                <a href="#">Privacidade</a>
                <a href="#">Termos</a>
                <a href="#">Serviços</a>
            </div>

            <!-- Copyright - (Ano dinâmico via Blade serial em versões futuras) -->
            <div class="w-4/6 h-full text-sm flex justify-center items-center border-t border-zinc-300">
                <p>© HiDo! All rights reserved 2025.</p>
            </div>
        </footer>
    </div>

</body>

</html>
