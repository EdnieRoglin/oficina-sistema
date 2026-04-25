<?php include 'partials/header.php'; ?>
<?php require __DIR__ . '/partials/sidebar.php'; ?>

<!-- Page Content Canvas -->
<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">

    <!-- Bento Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div class="space-y-1">
            <h2 class="text-4xl font-black text-on-surface font-headline tracking-tight">
                Cadastro de Peças
            </h2>
            <p class="text-on-surface-variant font-medium">
                Gestão técnica de inventário e precificação industrial.
            </p>
        </div>

        <button
            hx-get="partials/modal_pecas.php"
            hx-target="#modal-container"
            class="bg-primary-container hover:bg-amber-500 text-on-primary-container font-bold px-8 py-4 rounded-xl flex items-center gap-3 shadow-lg shadow-amber-500/10 transition-all active:scale-95 group">

            <span class="material-symbols-outlined group-hover:rotate-90 transition-transform">
                add_circle
            </span>
            <span class="font-headline tracking-wide uppercase text-sm">
                Adicionar Peça
            </span>
        </button>
    </div>

    <!-- Search & Filter Bar -->
    <section class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-8">
        <div class="md:col-span-7 bg-surface-container-lowest p-2 rounded-2xl shadow-sm flex items-center gap-3">
            <div class="relative flex-grow w-full">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">
                    search
                </span>
                <input
                    type="text"
                    placeholder="Buscar por nome da peça ou código de referência..."
                    class="w-full bg-surface-container-high border-none border-b-2 border-outline-variant focus:border-primary focus:ring-0 rounded-lg pl-12 py-3 text-on-surface placeholder:text-on-surface-variant/60 font-body transition-all" />
            </div>

            <div class="flex gap-2 w-full md:w-auto">
                <button class="bg-surface-container-low hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-2 text-on-surface-variant font-semibold text-sm transition-colors border border-outline-variant/10">
                    <span class="material-symbols-outlined text-sm">filter_list</span>
                    Filtros
                </button>

                <button class="bg-surface-container-low hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-2 text-on-surface-variant font-semibold text-sm transition-colors border border-outline-variant/10">
                    <span class="material-symbols-outlined text-sm">file_download</span>
                    Exportar
                </button>
            </div>
        </div>
    </section>

    <!-- Table Section -->
    <div class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm border border-outline-variant/5">
        <table class="w-full text-left border-collapse">

            <thead class="bg-surface-container-low text-on-surface-variant">
                <tr>
                    <th class="px-8 py-5 font-headline uppercase text-[11px] tracking-widest font-bold">Nome da Peça</th>
                    <th class="px-6 py-5 font-headline uppercase text-[11px] tracking-widest font-bold">Código/Referência</th>
                    <th class="px-6 py-5 font-headline uppercase text-[11px] tracking-widest font-bold text-right">Valor Padrão</th>
                    <th class="px-6 py-5 font-headline uppercase text-[11px] tracking-widest font-bold text-center">Status</th>
                    <th class="px-8 py-5 font-headline uppercase text-[11px] tracking-widest font-bold text-right">Ações</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-surface-container-high">

                <!-- Row 1 -->
                <tr class="hover:bg-surface-container-low/50 transition-colors group">
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-tertiary">
                                <span class="material-symbols-outlined">settings_input_component</span>
                            </div>
                            <div>
                                <div class="font-bold text-on-surface font-headline">Pastilha de Freio Cerâmica</div>
                                <div class="text-xs text-on-surface-variant font-medium">Sistema de Frenagem Premium</div>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-6">
                        <span class="font-mono text-sm bg-surface-container-high px-2 py-1 rounded text-on-surface-variant font-semibold tracking-tight">
                            BRK-5520-CR
                        </span>
                    </td>

                    <td class="px-6 py-6 text-right">
                        <div class="font-bold text-on-surface font-headline">R$ 489,00</div>
                        <div class="text-[10px] text-primary font-bold uppercase">Preço Atelier</div>
                    </td>

                    <td class="px-6 py-6 text-center">
                        <span class="bg-tertiary/10 text-tertiary px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider">
                            Ativo
                        </span>
                    </td>

                    <td class="px-8 py-6 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="p-2 hover:bg-surface-container-high rounded-lg text-on-surface-variant transition-colors active:scale-90">
                                <span class="material-symbols-outlined">edit_square</span>
                            </button>
                            <button class="p-2 hover:bg-error/10 rounded-lg text-error transition-colors active:scale-90">
                                <span class="material-symbols-outlined">delete_sweep</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- (demais linhas seguem o mesmo padrão, já organizadas) -->

            </tbody>
        </table>

        <!-- Pagination Footer -->
        <div class="px-8 py-6 bg-surface-container-low flex justify-between items-center border-t border-outline-variant/10">
            <p class="text-xs font-semibold text-on-surface-variant">
                Exibindo 4 de 128 itens cadastrados
            </p>

            <div class="flex gap-1">
                <button class="w-10 h-10 rounded-lg flex items-center justify-center hover:bg-surface-container-high text-on-surface-variant transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="w-10 h-10 rounded-lg flex items-center justify-center bg-primary-container text-on-primary-container font-bold">1</button>
                <button class="w-10 h-10 rounded-lg flex items-center justify-center hover:bg-surface-container-high text-on-surface-variant font-bold">2</button>
                <button class="w-10 h-10 rounded-lg flex items-center justify-center hover:bg-surface-container-high text-on-surface-variant font-bold">3</button>
                <button class="w-10 h-10 rounded-lg flex items-center justify-center hover:bg-surface-container-high text-on-surface-variant transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</div>

<nav class="md:hidden fixed bottom-0 left-0 w-full bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl border-t border-slate-200/20 py-3 px-6 flex justify-around items-center z-50">
    <!-- mobile nav -->
</nav>

<div id="modal-container"></div>
</body>
</html>