<!DOCTYPE html>
<html>
<head>
    <script>
        // Al cargar, aplica el modo guardado o el preferido del sistema
        if (localStorage.getItem('theme') === 'dark' || (!('theme in localStorage') && window.matchMedia('(prefers-color-scheme: dark').matches)) {
            document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
    </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<!-- <body class="bg-slate-50 font-sans antialiased text-slate-900"> -->
<body class="bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 transition-colors duration-300">
    <!-- <nav class="sticky top-0 z-50 w-full bg-white/70 backdrop-blur-md border-b border-slate-200"> -->
        <nav class="sticky top-0 z-50 w-full bg-white/70 backdrop-blur-md border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-2xl font-bold tracking-tight text-indigo-600">Mnetti<span class="text-slate-900">.dev</span></span>
                </div>
# hidden md:
                <div class="flex space-x-8 items-center">
                    <a href="#proyectos" class="text-sm font-medium text-slate-600 hover:text-indigo-600 dark:text-slate 400 transition-colors">Proyectos</a>
                    <a href="#habilidades" class="text-sm font-medium text-slate-600 hover:text-indigo-600 dark:text-slate 400 transition-colors">Habilidades</a>
                    <a href="#servicios" class="text-sm font-medium text-slate-600 hover:text-indigo-600 dark:text-slate 400 transition-colors">Servicios</a>
                    <a href="#contacto" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition-all shadow-sm">
                        Contacto
                    </a>
                    <button id="theme-toggle" class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path></svg>
    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
</button>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <section class="relative overflow-hidden py-24 sm:py-32 bg-white dark:bg-slate-950 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-6xl">
                Miguel Netti
            </h1>
            
            <p class="mt-6 text-lg leading-8 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                Técnico Superior Universitario en Informática & Full-Stack Developer. 
                Especializado en crear soluciones robustas con <span class="text-indigo-600 dark:text-indigo-400 font-semibold">Laravel</span> y optimización de procesos de <span class="text-indigo-600 dark:text-indigo-400 font-semibold">Data Entry</span>.
            </p>
            
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#proyectos" class="text-sm font-semibold leading-6 text-slate-900 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                    Ver mis proyectos <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="absolute top-0 -z-10 h-full w-full bg-white dark:bg-slate-950 transition-colors duration-300">
        <div class="absolute bottom-auto left-auto right-0 top-0 h-[500px] w-[500px] -translate-x-[30%] translate-y-[20%] rounded-full bg-[rgba(173,109,244,0.15)] dark:bg-[rgba(173,109,244,0.1)] opacity-50 blur-[80px]"></div>
    </div>
</section>

        <section id="proyectos" class="py-24 bg-white dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
            <div class="max-w-xl">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Proyectos Destacados</h2>
                <p class="mt-4 text-lg text-slate-600">
                    Selección de aplicaciones web y herramientas desarrolladas con un enfoque en la eficiencia y la arquitectura limpia.
                </p>
            </div>
            <a href="https://github.com/migueln06" target="_blank" class="text-indigo-600 font-semibold hover:text-indigo-500 transition flex items-center gap-2">
                Ver todo en GitHub 
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group relative flex flex-col overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 transition-all hover:shadow-xl hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10">Full-Stack</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white leading-7">Sistema de Gestión de Citas e Inventario</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-600 dark:text-slate-400">
                        Aplicación robusta para el control automatizado de stock y agendas. Incluye panel de administración y reportes en tiempo real.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-[10px] font-bold px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded">PHP / Laravel</span>
                        <span class="text-[10px] font-bold px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded">MySQL</span>
                        <span class="text-[10px] font-bold px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded">Tailwind</span>
                    </div>
                </div>
            </div>

            <div class="group relative flex flex-col overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 transition-all hover:shadow-xl hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-flex items-center rounded-md bg-emerald-50 px-2 py-1 text-xs font-medium text-emerald-700 ring-1 ring-inset ring-emerald-700/10">Data Processing</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white leading-7">Optimización de Entrada de Datos</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-600 dark:text-slate-400">
                        Scripts automatizados para la migración y limpieza de bases de datos, garantizando la integridad de la información en sistemas masivos.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-[10px] font-bold px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded">Python</span>
                        <span class="text-[10px] font-bold px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded">SQL Server</span>
                        <span class="text-[10px] font-bold px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded">Excel API</span>
                    </div>
                </div>
            </div>
</section>

<section id="habilidades" class="py-24 bg-slate-50 dark:bg-slate-900/50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Stack Tecnológico</h2>
            <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">Herramientas y tecnologías que domino para dar vida a cada proyecto.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 flex flex-col items-center shadow-sm">
                <span class="text-indigo-600 dark:text-indigo-400 font-bold text-lg">PHP</span>
                <span class="text-xs text-slate-500 dark:text-slate-400 uppercase tracking-widest mt-1">Laravel</span>
            </div>
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 flex flex-col items-center shadow-sm">
                <span class="text-indigo-600 dark:text-indigo-400 font-bold text-lg">Python</span>
                <span class="text-xs text-slate-500 dark:text-slate-400 uppercase tracking-widest mt-1">Scripts / Data</span>
            </div>
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 flex flex-col items-center shadow-sm">
                <span class="text-indigo-600 dark:text-indigo-400 font-bold text-lg">SQL</span>
                <span class="text-xs text-slate-500 dark:text-slate-400 uppercase tracking-widest mt-1">MySQL / Server</span>
            </div>
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 flex flex-col items-center shadow-sm">
                <span class="text-indigo-600 dark:text-indigo-400 font-bold text-lg">JavaScript</span>
                <span class="text-xs text-slate-500 dark:text-slate-400 uppercase tracking-widest mt-1">Tailwind / Vue / React / Angular</span>
            </div>
        </div>
    </div>
</section>

<section id="servicios" class="py-24 bg-white dark:bg-slate-900 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            
            <div>
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-6 shadow-lg shadow-indigo-200">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 dark:text-white">Desarrollo Web</h3> 
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed ">Sistemas a medida utilizando Laravel. Enfoque en código limpio, seguridad y escalabilidad para aplicaciones de alto rendimiento.</p>
            </div>

            <div>
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-6 shadow-lg shadow-indigo-200">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.58 4 8 4s8-1.79 8-4M4 7c0-2.21 3.58-4 8-4s8 1.79 8 4m0 5c0 2.21-3.58 4-8 4s-8-1.79-8-4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 dark:text-white">Data Entry & Processing</h3>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Gestión, migración y depuración de grandes volúmenes de datos con precisión milimétrica y automatización mediante scripts.</p>
            </div>

            <div>
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-6 shadow-lg shadow-indigo-200">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3 dark:text-white">Soporte Técnico Especializado</h3>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Diagnóstico y optimización de hardware y software para garantizar que tu infraestructura tecnológica nunca se detenga.</p>
            </div>

        </div>
    </div>
</section>

<section id="contacto" class="py-24 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            
            <div>
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">¿Tienes un proyecto en mente?</h2>
                <p class="mt-4 text-lg text-slate-400">
                    Estoy disponible para nuevos proyectos de desarrollo, optimización de datos y consultoría técnica. Hablemos sobre cómo puedo ayudarte.
                </p>
                
                <div class="mt-8 space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="bg-indigo-600/20 p-3 rounded-lg text-indigo-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-slate-300">miguelnet93@gmail.com</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-indigo-600/20 p-3 rounded-lg text-indigo-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <span class="text-slate-300">Barcelona, Anzoategui, Venezuela</span>
                    </div>
                </div>
            </div>

            <form action="https://formspree.io/f/mreojzgn" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Nombre</label>
                    <input type="text" name="name" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition" placeholder="Tu nombre">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Correo</label>
                    <input type="email" name="email" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition" placeholder="tu@correo.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Mensaje</label>
                    <textarea name="message" rows="4" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition" placeholder="¿En qué puedo ayudarte?"></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition-all shadow-lg shadow-indigo-500/20">
                    Enviar mensaje
                </button>
            </form>
        </div>
    </div>
</section>

<footer class="bg-slate-900 border-t border-slate-800 py-12">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
        <p class="text-slate-500 text-sm">
            © 2026 Mnetti.dev
        </p>
        <div class="flex gap-6">
            <a href="https://linkedin.com/in/miguelnetti" class="text-slate-400 hover:text-white transition">LinkedIn</a>
            <a href="https://github.com/migueln06" class="text-slate-400 hover:text-white transition">GitHub</a>
            <a href="https://wa.me/+584224405454" class="text-slate-400 hover:text-white transition">WhatsApp</a>
        </div>
    </div>
</footer>
    </main>

    <script>
    const themeToggleBtn = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');

    // Función para mostrar el icono correcto según el modo actual
    function updateIcons() {
        if (document.documentElement.classList.contains('dark')) {
            lightIcon.classList.remove('hidden');
            darkIcon.classList.add('hidden');
        } else {
            lightIcon.classList.add('hidden');
            darkIcon.classList.remove('hidden');
        }
    }

    // Ejecutar al cargar la página
    updateIcons();

    themeToggleBtn.addEventListener('click', () => {
        // Intercambiar la clase 'dark' en la etiqueta <html>
        document.documentElement.classList.toggle('dark');
        
        // Guardar la preferencia
        const isDark = document.documentElement.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        
        // Actualizar iconos
        updateIcons();
    });
</script>
</body>
</html>