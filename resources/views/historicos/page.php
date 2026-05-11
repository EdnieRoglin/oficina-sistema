<?php $title = 'historico'; ?>

<?php include 'partials/header.php'; ?>
<?php require __DIR__ . '/partials/sidebar.php'; ?>

<!-- Main Content Area -->
<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">

    <!-- Page Header & Key Metrics (Asymmetric Layout) -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-end">

        <div class="lg:col-span-8">
            <span class="text-amber-600 font-bold text-xs uppercase tracking-[0.2em] mb-2 block">
                Gestão de Vendas
            </span>

            <h2 class="text-4xl font-extrabold text-on-background tracking-tight">
                Histórico de Orçamentos
            </h2>

            <p class="text-on-surface-variant mt-2 max-w-lg">
                Acompanhe todos os orçamentos emitidos, gerencie rascunhos e monitore a produtividade da sua oficina.
            </p>
        </div>

        <div class="lg:col-span-4 flex justify-end gap-4">
            <div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/10 shadow-sm flex items-center gap-4 w-full">

                <div class="w-12 h-12 rounded-full bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary">check_circle</span>
                </div>

                <div>
                    <p class="text-[10px] uppercase font-bold text-outline tracking-wider">
                        Finalizados (Mês)
                    </p>
                    <p class="text-2xl font-black text-on-surface">
                        R$ 42.850
                    </p>
                </div>

            </div>
        </div>

    </section>

    <!-- Advanced Filters -->
    <section class="bg-surface-container-low p-6 rounded-2xl">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">

            <div class="md:col-span-2 space-y-1.5">
                <label class="text-[11px] font-bold uppercase text-on-surface-variant tracking-wide px-1">
                    Buscar Cliente
                </label>

                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-lg">
                        search
                    </span>

                    <input
                        type="text"
                        placeholder="Nome do cliente ou placa do veículo..."
                        class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border-0 border-b-2 border-outline-variant/30 focus:border-primary-container focus:ring-0 rounded-t-lg text-sm transition-all"
                    />
                </div>
            </div>

            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase text-on-surface-variant tracking-wide px-1">
                    Período
                </label>

                <input
                    type="date"
                    class="w-full px-4 py-3 bg-surface-container-lowest border-0 border-b-2 border-outline-variant/30 focus:border-primary-container focus:ring-0 rounded-t-lg text-sm"
                />
            </div>

            <button class="bg-surface-container-high text-on-surface py-3 px-6 rounded-lg font-bold text-sm hover:bg-surface-variant transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-lg">filter_list</span>
                Filtrar
            </button>

        </div>

    </section>

    <!-- Table Container -->
    <section class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm">

        <div class="overflow-x-auto">

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant/10">
                        <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">ID</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Cliente</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Data</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Valor Total</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-[10px] font-bold text-outline uppercase tracking-widest text-right">Ações</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-outline-variant/5">
                    <!-- Rows mantidas exatamente iguais -->

                    <!-- Row 2 -->
<tr class="hover:bg-surface-container-high/30 transition-colors group">
<td class="px-6 py-5">
<span class="text-xs font-mono font-bold text-outline">#ORD-2024-002</span>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded bg-secondary-container flex items-center justify-center text-xs font-bold text-secondary">BR</div>
<div>
<p class="font-bold text-on-surface text-sm">Beatriz Rocha</p>
<p class="text-[10px] text-outline">Honda Civic • GHT-1234</p>
</div>
</div>
</td>
<td class="px-6 py-5">
<p class="text-sm text-on-surface-variant">25/05/2024</p>
</td>
<td class="px-6 py-5">
<p class="font-bold text-on-surface text-sm">R$ 3.480,50</p>
</td>
<td class="px-6 py-5">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-outline-variant/20 text-on-surface-variant text-[10px] font-bold uppercase tracking-wide">
<span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                        Rascunho
                                    </span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex items-center justify-end gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-outline hover:text-primary hover:bg-primary/10 rounded-lg transition-all" title="Visualizar">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
<button class="p-2 text-outline hover:text-primary hover:bg-primary/10 rounded-lg transition-all" title="Duplicar">
<span class="material-symbols-outlined text-lg">content_copy</span>
</button>
<button class="p-2 text-outline hover:text-error hover:bg-error/10 rounded-lg transition-all" title="Deletar">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
                </tbody>
            </table>

        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 bg-surface-container-low flex items-center justify-between">
            <p class="text-xs text-outline">
                Exibindo <span class="font-bold text-on-surface">1 - 3</span> de 128 orçamentos
            </p>

            <div class="flex items-center gap-2">
                <button class="p-2 rounded-lg border border-outline-variant/30 text-outline hover:bg-white transition-colors disabled:opacity-50" disabled>
                    <span class="material-symbols-outlined text-lg">chevron_left</span>
                </button>

                <button class="w-8 h-8 rounded-lg bg-primary text-white text-xs font-bold">1</button>
                <button class="w-8 h-8 rounded-lg text-outline text-xs font-bold hover:bg-white transition-colors">2</button>
                <button class="w-8 h-8 rounded-lg text-outline text-xs font-bold hover:bg-white transition-colors">3</button>

                <button class="p-2 rounded-lg border border-outline-variant/30 text-outline hover:bg-white transition-colors">
                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                </button>
            </div>
        </div>

    </section>

</div>

<!-- Mobile Bottom Navigation -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white/90 glass-nav border-t border-slate-200/20 z-50 px-6 py-3 flex justify-between items-center">
    ...
</nav>

</body>
</html>