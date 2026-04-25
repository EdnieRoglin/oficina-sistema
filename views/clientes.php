<?php $title = 'clientes'; ?>

<?php include 'partials/header.php'; ?>
<?php require __DIR__ . '/partials/sidebar.php'; ?>

<!-- Main Content -->
<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">

    <!-- Header Section -->
    <section class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-headline font-extrabold tracking-tight text-on-background mb-2">
                Clientes
            </h2>

            <div class="mt-2 flex items-center gap-4 text-on-surface-variant">
                <span class="bg-surface-container-low px-3 py-1 rounded-full text-sm font-medium">
                    Total: <strong class="text-slate-900">128</strong> clientes
                </span>

                <span class="flex items-center gap-1 text-sm font-medium text-tertiary">
                    <span class="material-symbols-outlined text-sm">trending_up</span>
                    12 novos este mês
                </span>
            </div>
        </div>

        <button
            hx-get="partials/modal_clientes.php"
            hx-target="#modal-container"
            class="bg-primary-container hover:bg-amber-500 text-on-primary-container font-bold px-8 py-4 rounded-xl flex items-center gap-3 shadow-lg shadow-amber-500/10 transition-all active:scale-95 group"
        >
            <span class="material-symbols-outlined group-hover:rotate-90 transition-transform">
                add_circle
            </span>
            <span class="font-headline tracking-wide uppercase text-sm">
                Novo Cliente
            </span>
        </button>
    </section>

    <!-- Search & Filters Bento -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">

        <div class="md:col-span-2 bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-outline-variant/10">
            <label class="text-[10px] uppercase tracking-widest font-bold text-on-surface-variant mb-2 block">
                Pesquisa Rápida
            </label>

            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-amber-500">
                    search
                </span>

                <input
                    class="w-full bg-surface-container-low border-b-2 border-transparent focus:border-amber-500 rounded-lg pl-10 pr-4 py-3 transition-all outline-none text-sm"
                    placeholder="Nome, CPF/CNPJ ou placa..."
                    type="text"
                />
            </div>
        </div>

        <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-outline-variant/10 flex items-center justify-between">
            <div>
                <label class="text-[10px] uppercase tracking-widest font-bold text-on-surface-variant mb-1 block">
                    Segmentação
                </label>

                <button class="flex items-center gap-2 text-slate-900 font-bold hover:text-amber-500 transition-colors">
                    Todos os Clientes
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
            </div>
        </div>

        <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-outline-variant/10 flex items-center justify-center">
            <button class="flex items-center gap-2 w-full justify-center bg-surface-container-high hover:bg-surface-variant py-3 rounded-xl font-bold transition-all">
                <span class="material-symbols-outlined">filter_list</span>
                Filtros
            </button>
        </div>
    </div>

    <!-- Table Container -->
    <div class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm border border-outline-variant/10">
        <div class="overflow-x-auto">

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant/10">
                        <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-extrabold text-on-surface-variant">Identificação</th>
                        <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-extrabold text-on-surface-variant">Contato</th>
                        <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-extrabold text-on-surface-variant">Frota</th>
                        <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-extrabold text-on-surface-variant">Histórico &amp; LTV</th>
                        <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-extrabold text-on-surface-variant text-center">Status</th>
                        <th class="px-6 py-4 text-[10px] uppercase tracking-widest font-extrabold text-on-surface-variant text-right">Ações</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-surface-container-high">
                    <!-- (linhas mantidas exatamente iguais, apenas formatadas) -->
                     <!-- Row 2 -->
<tr class="hover:bg-surface-container-low/50 transition-colors group">
<td class="px-6 py-5">
<p class="font-bold text-slate-900">Transportes Veloz Ltda</p>
<p class="text-xs text-on-surface-variant font-mono">12.345.678/0001-99</p>
</td>
<td class="px-6 py-5">
<div class="flex flex-col gap-1">
<span class="flex items-center gap-2 text-xs font-medium text-slate-600">
<span class="material-symbols-outlined text-amber-500 text-sm" data-icon="chat">chat</span>
                                        (11) 3344-5566
                                    </span>
<span class="flex items-center gap-2 text-xs font-medium text-slate-600">
<span class="material-symbols-outlined text-slate-400 text-sm" data-icon="mail">mail</span>
                                        contato@veloz.com.br
                                    </span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex flex-wrap gap-2">
<span class="bg-surface-container-high px-2 py-1 rounded border border-outline-variant/30 text-[10px] font-bold text-slate-700 tracking-wider">KRT-1010</span>
<span class="text-xs text-slate-400 font-medium">+5 veículos</span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex flex-col">
<span class="text-xs text-on-surface-variant mb-1">Última: <strong class="text-slate-900">28/05/2023</strong></span>
<span class="font-manrope font-bold text-tertiary">R$ 15.890,20</span>
</div>
</td>
<td class="px-6 py-5 text-center">
<span class="bg-amber-100 text-amber-700 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full inline-block">Pendente</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 hover:bg-amber-50 rounded-lg text-slate-400 hover:text-amber-500 transition-all">
<span class="material-symbols-outlined" data-icon="history">history</span>
</button>
<button class="p-2 hover:bg-amber-50 rounded-lg text-slate-400 hover:text-amber-500 transition-all">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
</div>
</td>
</tr>
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 bg-surface-container-low flex items-center justify-between">
            <p class="text-xs text-on-surface-variant font-medium">
                Mostrando <strong>1 - 10</strong> de 128 registros
            </p>

            <div class="flex gap-2">
                <button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white transition-all text-xs font-bold disabled:opacity-50" disabled>
                    Anterior
                </button>
                <button class="px-3 py-1 rounded-lg bg-primary-container text-on-primary-container text-xs font-bold">1</button>
                <button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white transition-all text-xs font-bold">2</button>
                <button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white transition-all text-xs font-bold">3</button>
                <button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white transition-all text-xs font-bold">
                    Próximo
                </button>
            </div>
        </div>
    </div>

    <div id="modal-container"></div>
</div>