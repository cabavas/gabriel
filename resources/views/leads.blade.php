<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads captados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <div class="max-w-6xl mx-auto px-6 py-12">

        <!-- Cabeçalho -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Leads captados</h1>
                <p class="text-sm text-slate-500 mt-1">
                    Total: <span class="font-semibold text-slate-700">{{ $leads->count() }}</span>
                </p>
            </div>
            <a href="{{ url('/') }}"
               class="text-sm font-medium text-brand-600 hover:text-brand-700 transition">
                &larr; Voltar para a landing
            </a>
        </div>

        @if ($leads->isEmpty())
            <!-- Estado vazio -->
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm p-12 text-center">
                <svg class="w-12 h-12 mx-auto text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <p class="text-slate-500">Nenhum lead captado ainda.</p>
            </div>
        @else
            <!-- Tabela -->
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-slate-50 text-slate-500 uppercase text-xs tracking-wider">
                            <tr>
                                <th class="text-left font-semibold px-6 py-3">#</th>
                                <th class="text-left font-semibold px-6 py-3">Nome</th>
                                <th class="text-left font-semibold px-6 py-3">E-mail</th>
                                <th class="text-left font-semibold px-6 py-3">Telefone</th>
                                <th class="text-left font-semibold px-6 py-3">Empresa</th>
                                <th class="text-left font-semibold px-6 py-3">Recebido em</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($leads as $lead)
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 text-slate-400">{{ $lead->id }}</td>
                                    <td class="px-6 py-4 font-medium text-slate-900">{{ $lead->name }}</td>
                                    <td class="px-6 py-4 text-slate-600">{{ $lead->email }}</td>
                                    <td class="px-6 py-4 text-slate-600">{{ $lead->phone }}</td>
                                    <td class="px-6 py-4 text-slate-600">{{ $lead->company }}</td>
                                    <td class="px-6 py-4 text-slate-500">
                                        {{ $lead->created_at->format('d/m/Y H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

</body>
</html>