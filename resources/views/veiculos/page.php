<?php $title = 'veiculos'; ?>

<?php include 'partials/header.php'; ?>
<?php require __DIR__ . '/partials/sidebar.php'; ?>

<!-- TopAppBar -->
<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">

    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-extrabold tracking-tight text-on-surface headline">
                Frota de Veículos
            </h1>
            <p class="text-on-surface-variant font-medium mt-1">
                <span class="font-bold text-primary">245</span> veículos cadastrados
                <span class="mx-2 text-outline-variant opacity-30">|</span>
                <span class="font-bold text-tertiary">5</span> em manutenção hoje
            </p>
        </div>

        <button
            hx-get="partials/modal_veiculos.php"
            hx-target="#modal-container"
            class="bg-primary-container hover:bg-amber-500 text-on-primary-container font-bold px-8 py-4 rounded-xl flex items-center gap-3 shadow-lg shadow-amber-500/10 transition-all active:scale-95 group">

            <span class="material-symbols-outlined group-hover:rotate-90 transition-transform">
                add_circle
            </span>
            <span class="font-headline tracking-wide uppercase text-sm">
                Novo Veículo
            </span>
        </button>
    </header>

    <!-- Search & Filters Bento -->
    <section class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-8">
        <div class="md:col-span-7 bg-surface-container-lowest p-2 rounded-2xl shadow-sm flex items-center gap-3">
            <div class="flex-1 flex items-center bg-surface-container-high rounded-xl px-4 py-2">
                <span class="material-symbols-outlined text-on-surface-variant mr-3">search</span>
                <input
                    type="text"
                    placeholder="Buscar por Placa, Modelo ou Proprietário..."
                    class="bg-transparent border-none focus:ring-0 w-full text-sm placeholder:text-outline" />
            </div>

            <button class="bg-surface-container-highest p-2.5 rounded-xl text-on-surface hover:bg-zinc-200 transition-colors">
                <span class="material-symbols-outlined">tune</span>
            </button>
        </div>

        <div class="md:col-span-5 grid grid-cols-3 gap-3">
            <select class="bg-surface-container-low border-none rounded-xl text-xs font-semibold focus:ring-2 focus:ring-primary-container cursor-pointer">
                <option>Marca</option>
            </select>

            <select class="bg-surface-container-low border-none rounded-xl text-xs font-semibold focus:ring-2 focus:ring-primary-container cursor-pointer">
                <option>Ano</option>
            </select>

            <select class="bg-surface-container-low border-none rounded-xl text-xs font-semibold focus:ring-2 focus:ring-primary-container cursor-pointer">
                <option>Status</option>
            </select>
        </div>
    </section>

    <!-- Main Table Container -->
    <div class="bg-surface-container-lowest rounded-3xl shadow-sm overflow-hidden">
        <table class="w-full text-left border-separate border-spacing-y-0">

            <thead>
                <tr class="bg-surface-container-low">
                    <th class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-outline">Veículo</th>
                    <th class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-outline">Proprietário</th>
                    <th class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-outline">Especificações</th>
                    <th class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-outline">Motorização</th>
                    <th class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-outline">Status</th>
                    <th class="px-6 py-4 text-right text-[10px] font-black uppercase tracking-widest text-outline">Ações</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-surface-container-high">

                <!-- Rows mantidas exatamente iguais, apenas identadas -->
            <!-- Row 2 -->
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-6 py-5">
<div class="flex flex-col">
<span class="font-bold text-on-surface headline">Volkswagen Golf GTI</span>
<span class="mt-1 inline-flex items-center justify-center bg-on-background text-white text-[10px] font-bold px-2 py-0.5 rounded-sm tracking-tighter w-fit">
                                    HTY-9901
                                </span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-2 group/link cursor-pointer">
<span class="text-sm font-semibold text-on-surface">Fernanda Lima</span>
<span class="material-symbols-outlined text-xs text-primary opacity-0 group-hover/link:opacity-100 transition-opacity">open_in_new</span>
</div>
</td>
<td class="px-6 py-5">
<div class="text-xs space-y-0.5">
<p class="text-outline font-medium">2019 • Cinza Nardo</p>
<p class="text-on-surface font-bold">68.120 KM</p>
</div>
</td>
<td class="px-6 py-5">
<div class="text-xs font-medium text-on-surface-variant">
                                2.0 TSI • <span class="text-error">Gasolina</span>
</div>
</td>
<td class="px-6 py-5">
<span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tight">Pronto para Retirada</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-1">
<button class="p-2 text-outline hover:text-primary hover:bg-primary/5 rounded-lg transition-all" title="Novo Orçamento"><span class="material-symbols-outlined text-[20px]">request_quote</span></button>
<button class="p-2 text-outline hover:text-primary hover:bg-primary/5 rounded-lg transition-all" title="Histórico"><span class="material-symbols-outlined text-[20px]">history</span></button>
<button class="p-2 text-outline hover:text-primary hover:bg-primary/5 rounded-lg transition-all" title="Editar"><span class="material-symbols-outlined text-[20px]">edit</span></button>
</div>
</td>
</tr>

            </tbody>
        </table>

        <div class="bg-surface-container px-6 py-4 flex justify-between items-center text-xs text-outline font-medium">
            <p>Mostrando 3 de 245 veículos</p>
            <div class="flex gap-2">
                <button class="px-3 py-1 bg-white rounded-md shadow-sm border border-outline-variant/20 hover:bg-zinc-50 transition-colors">
                    Anterior
                </button>
                <button class="px-3 py-1 bg-white rounded-md shadow-sm border border-outline-variant/20 hover:bg-zinc-50 transition-colors">
                    Próximo
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal-container"></div>
</body>
</html>