<div>
 <!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capture mais leads com o [Nome do seu Produto]</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans">

    <!-- ===== NAVBAR (Opcional, mas ajuda na credibilidade) ===== -->
    <header class="w-full max-w-6xl mx-auto px-6 py-6 flex justify-between items-center">
        <div class="text-2xl font-bold tracking-tight text-brand-700">
            [SuaLogo]
        </div>
        <nav class="hidden md:flex space-x-8 text-sm font-medium text-slate-500">
            <a href="#beneficios" class="hover:text-brand-600 transition">Benefícios</a>
            <a href="#faq" class="hover:text-brand-600 transition">Dúvidas</a>
            <a href="#formulario" class="text-brand-600 hover:text-brand-700 font-semibold transition">Começar agora</a>
        </nav>
    </header>

    <!-- ===== HERO SECTION COM CAPTURA DE LEAD ===== -->
    <section class="relative overflow-hidden bg-white pt-10 pb-20 lg:pt-16 lg:pb-28">
        <!-- Detalhe de fundo sutil (gradiente) -->
        <div class="absolute inset-x-0 top-0 h-96 bg-gradient-to-b from-brand-50 to-transparent -z-10"></div>

        <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <!-- Lado Esquerdo: Copy de Conversão -->
            <div>
                <!-- Badge de Prova Social -->
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-100 text-brand-700 text-xs font-semibold mb-6">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-500"></span>
                    </span>
                    Junte-se a mais de 2.000 profissionais
                </span>

                <!-- Headline -->
                <h1 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight mb-4">
                    Transforme visitantes em <span class="text-brand-600">clientes reais</span> sem complicação.
                </h1>
                <p class="text-lg text-slate-500 mb-8 max-w-lg">
                    Descubra como o [Nome do seu Produto] pode automatizar sua captação e liberar seu time para o que realmente importa: fechar negócios.
                </p>

                <!-- Pontos de Prova Rápida -->
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-3 text-slate-600">
                        <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Configuração em menos de 5 minutos.
                    </li>
                    <li class="flex items-center gap-3 text-slate-600">
                        <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Integração nativa com as principais CRMs.
                    </li>
                    <li class="flex items-center gap-3 text-slate-600">
                        <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Suporte humano de verdade, 7 dias por semana.
                    </li>
                </ul>
            </div>

            <!-- Lado Direito: Formulário de Captura (O Coração da Página) -->
            <div id="formulario" class="relative">
                <div class="absolute -inset-1 bg-gradient-to-r from-brand-200 to-purple-200 rounded-2xl blur-lg opacity-30"></div>
                <div class="relative bg-white p-8 rounded-2xl shadow-xl border border-slate-100">
                    
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">Receba uma demonstração</h2>
                    <p class="text-sm text-slate-500 mb-6">Preencha os dados abaixo e nosso time entrará em contato.</p>

                    <!-- Exibição de mensagem de sucesso (Gerenciada pelo seu Backend) -->
                    @if (session('success'))
                        <div class="mb-6 p-4 rounded-lg bg-green-50 text-green-800 text-sm font-medium border border-green-200">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Formulário -->
                    <form action="{{ route('lead.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <!-- Campo Nome -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-1.5">Nome completo</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                   class="w-full px-4 py-3 rounded-lg border @error('name') border-red-400 focus:ring-red-500 focus:border-red-500 @else border-slate-300 focus:ring-brand-500 focus:border-brand-500 @enderror outline-none transition bg-slate-50 focus:bg-white"
                                   placeholder="Seu nome">
                            @error('name')
                                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Campo E-mail Corporativo -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">E-mail corporativo</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-3 rounded-lg border @error('email') border-red-400 focus:ring-red-500 focus:border-red-500 @else border-slate-300 focus:ring-brand-500 focus:border-brand-500 @enderror outline-none transition bg-slate-50 focus:bg-white"
                                   placeholder="voce@empresa.com">
                            @error('email')
                                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Campo Telefone (Opcional) -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-slate-700 mb-1.5">Telefone / WhatsApp <span class="text-slate-400 font-normal">(opcional)</span></label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                                   class="w-full px-4 py-3 rounded-lg border @error('phone') border-red-400 focus:ring-red-500 focus:border-red-500 @else border-slate-300 focus:ring-brand-500 focus:border-brand-500 @enderror outline-none transition bg-slate-50 focus:bg-white"
                                   placeholder="(11) 99999-9999">
                            @error('phone')
                                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Campo Empresa -->
                        <div>
                            <label for="company" class="block text-sm font-medium text-slate-700 mb-1.5">Empresa</label>
                            <input type="text" name="company" id="company" value="{{ old('company') }}" required
                                   class="w-full px-4 py-3 rounded-lg border @error('company') border-red-400 focus:ring-red-500 focus:border-red-500 @else border-slate-300 focus:ring-brand-500 focus:border-brand-500 @enderror outline-none transition bg-slate-50 focus:bg-white"
                                   placeholder="Nome da sua empresa">
                            @error('company')
                                <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Botão de Envio -->
                        <button type="submit"
                                class="w-full py-3.5 px-6 bg-brand-600 hover:bg-brand-700 text-white font-semibold rounded-lg shadow-lg shadow-brand-500/30 transition-all transform hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus:ring-4 focus:ring-brand-200">
                            Quero minha demonstração gratuita
                        </button>

                        <p class="text-center text-xs text-slate-400 mt-4 flex items-center justify-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            Seus dados estão seguros. Sem spam.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SEÇÃO DE BENEFÍCIOS (Prova de Valor) ===== -->
    <section id="beneficios" class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Por que escolher o [Nome do Produto]?</h2>
                <p class="text-slate-500">Não vendemos apenas software. Entregamos resultados mensuráveis para o seu pipeline.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-brand-100 text-brand-600 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Velocidade de Implementação</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Não perca semanas com integrações complexas. Comece a capturar leads no mesmo dia.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Dados Acionáveis</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Saiba exatamente de onde seus melhores leads vêm e otimize seu investimento em mídia.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Foco no Relacionamento</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Automatize a captura para que seu time foque no que realmente fecha contrato: a conversa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER SIMPLES ===== -->
    <footer class="bg-white border-t border-slate-100 py-8">
        <div class="max-w-6xl mx-auto px-6 text-center text-sm text-slate-400">
            <p>&copy; {{ date('Y') }} [Nome da sua Empresa]. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>   <!-- We must ship. - Taylor Otwell -->
</div>
