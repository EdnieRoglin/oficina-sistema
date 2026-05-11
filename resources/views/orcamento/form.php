<!-- Modal Backdrop -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-on-background/40 backdrop-blur-sm p-4">
<!-- Modal Container -->
<div class="relative w-full max-w-4xl max-h-[921px] flex flex-col bg-surface-container-lowest rounded-xl shadow-[0px_12px_32px_rgba(26,28,30,0.06)] overflow-hidden">
<!-- Header -->
<header class="flex items-center justify-between px-6 py-4 bg-surface-container-lowest border-b border-surface-container-high z-10 shrink-0">
<div class="flex items-center gap-3">
<span aria-hidden="true" class="material-symbols-outlined text-primary-container text-2xl" data-icon="add_circle">add_circle</span>
<h2 class="text-xl font-headline font-bold text-on-surface">Adicionar Item ao Orçamento</h2>
</div>
<button
                onclick="this.closest('#modal-container').innerHTML = ''"
                class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
            >
                <span class="material-symbols-outlined">close</span>
            </button>
</header>
<!-- Body/Scrollable Area -->
<div class="flex-1 overflow-y-auto bg-surface">
<!-- Search & Filters -->
<div class="p-6 bg-surface-container-lowest flex flex-col gap-4">
<!-- Search Input -->
<div class="relative w-full">
<span aria-hidden="true" class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="search">search</span>
<input class="w-full h-12 pl-12 pr-4 bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary-container focus:ring-0 rounded-t-lg text-body text-on-surface placeholder:text-on-surface-variant transition-colors outline-none" placeholder="Busca por nome do item..." type="text"/>
</div>
<!-- Filters -->
<div class="flex gap-2">
<button class="px-4 py-2 rounded-full bg-primary-container text-on-primary-container font-label text-sm font-medium transition-colors">
                            Todos
                        </button>
<button class="px-4 py-2 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-variant font-label text-sm font-medium transition-colors">
                            Serviços
                        </button>
<button class="px-4 py-2 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-variant font-label text-sm font-medium transition-colors">
                            Peças
                        </button>
</div>
</div>
<!-- Spacer -->
<div class="h-2"></div>
<!-- Table Container -->
<div class="px-6 pb-6">
<div class="bg-surface-container-lowest rounded-lg overflow-hidden">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-surface-container-high">
<th class="py-3 px-4 font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider w-32">Tipo</th>
<th class="py-3 px-4 font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Nome do Item</th>
<th class="py-3 px-4 font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider hidden sm:table-cell">Categoria</th>
<th class="py-3 px-4 font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider text-right w-32">Valor Padrão</th>
<th class="py-3 px-4 font-label text-xs font-semibold text-on-surface-variant uppercase tracking-wider text-center w-28">Ação</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-high">
<!-- Row 1: Peça -->
<tr class="hover:bg-surface-container-highest transition-colors group">
<td class="py-4 px-4 align-middle">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-container/20 text-primary-container border border-primary-container/30">
                                            Peça
                                        </span>
</td>
<td class="py-4 px-4 align-middle font-body text-sm text-on-surface font-medium">Filtro de Óleo - Sintético</td>
<td class="py-4 px-4 align-middle font-body text-sm text-on-surface-variant hidden sm:table-cell">Manutenção</td>
<td class="py-4 px-4 align-middle font-headline text-sm font-semibold text-on-surface text-right">R$ 55,00</td>
<td class="py-4 px-4 align-middle text-center">
<button class="px-3 py-1.5 rounded-md text-primary font-label text-sm font-medium hover:bg-primary/10 transition-colors">
                                            Selecionar
                                        </button>
</td>
</tr>
<!-- Row 2: Serviço (Selected/Expanded State Simulation) -->
<tr class="bg-primary-fixed/30 border-l-4 border-l-primary-container">
<td class="p-0" colspan="5">
<div class="flex flex-col">
<!-- Basic Info Row -->
<div class="flex items-center px-4 py-4 w-full">
<div class="w-32 pr-4 shrink-0">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary/10 text-tertiary border border-tertiary/20">
                                                        Serviço
                                                    </span>
</div>
<div class="flex-1 font-body text-sm text-on-surface font-medium">Troca de Óleo e Filtro</div>
<div class="flex-1 font-body text-sm text-on-surface-variant hidden sm:block">Mão de Obra</div>
<div class="w-32 px-4 font-headline text-sm font-semibold text-on-surface text-right shrink-0">R$ 120,00</div>
<div class="w-28 pl-4 text-center shrink-0">
<button class="px-3 py-1.5 rounded-md text-on-surface-variant font-label text-sm font-medium hover:bg-surface-variant transition-colors">
                                                        Cancelar
                                                    </button>
</div>
</div>
<!-- Expanded Action Area -->
<div class="px-6 pb-5 pt-2 flex flex-wrap items-end gap-4 ml-32">
<div class="flex flex-col gap-1 w-24 shrink-0">
<label class="font-label text-xs text-on-surface-variant font-medium">Qtd.</label>
<input class="h-10 px-3 bg-surface-container-high border-none border-b-2 border-surface-variant focus:border-primary-container focus:ring-0 rounded-t text-body text-sm text-center outline-none" min="1" type="number" value="1"/>
</div>
<div class="flex flex-col gap-1 w-32 shrink-0">
<label class="font-label text-xs text-on-surface-variant font-medium">V. Unitário (R$)</label>
<input class="h-10 px-3 bg-surface-container-high border-none border-b-2 border-surface-variant focus:border-primary-container focus:ring-0 rounded-t text-body text-sm text-right outline-none" type="text" value="120,00"/>
</div>
<div class="flex-1 flex justify-end">
<button class="h-10 px-6 bg-gradient-to-br from-[#845400] to-[#ffa600] text-on-primary rounded-lg font-label text-sm font-semibold hover:opacity-90 transition-opacity flex items-center gap-2 shadow-sm">
<span aria-hidden="true" class="material-symbols-outlined text-[18px]" data-icon="check">check</span>
                                                        Adicionar
                                                    </button>
</div>
</div>
</div>
</td>
</tr>
<!-- Row 3: Peça -->
<tr class="hover:bg-surface-container-highest transition-colors group border-t border-surface-container-high">
<td class="py-4 px-4 align-middle">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-container/20 text-primary-container border border-primary-container/30">
                                            Peça
                                        </span>
</td>
<td class="py-4 px-4 align-middle font-body text-sm text-on-surface font-medium">Pastilha de Freio Dianteira</td>
<td class="py-4 px-4 align-middle font-body text-sm text-on-surface-variant hidden sm:table-cell">Freios</td>
<td class="py-4 px-4 align-middle font-headline text-sm font-semibold text-on-surface text-right">R$ 280,00</td>
<td class="py-4 px-4 align-middle text-center">
<button class="px-3 py-1.5 rounded-md text-primary font-label text-sm font-medium hover:bg-primary/10 transition-colors">
                                            Selecionar
                                        </button>
</td>
</tr>
<!-- Row 4: Peça -->
<tr class="hover:bg-surface-container-highest transition-colors group">
<td class="py-4 px-4 align-middle">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-container/20 text-primary-container border border-primary-container/30">
                                            Peça
                                        </span>
</td>
<td class="py-4 px-4 align-middle font-body text-sm text-on-surface font-medium">Óleo Motor 5W30 (Litro)</td>
<td class="py-4 px-4 align-middle font-body text-sm text-on-surface-variant hidden sm:table-cell">Fluidos</td>
<td class="py-4 px-4 align-middle font-headline text-sm font-semibold text-on-surface text-right">R$ 45,00</td>
<td class="py-4 px-4 align-middle text-center">
<button class="px-3 py-1.5 rounded-md text-primary font-label text-sm font-medium hover:bg-primary/10 transition-colors">
                                            Selecionar
                                        </button>
</td>
</tr>
<!-- Row 5: Serviço -->
<tr class="hover:bg-surface-container-highest transition-colors group">
<td class="py-4 px-4 align-middle">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary/10 text-tertiary border border-tertiary/20">
                                            Serviço
                                        </span>
</td>
<td class="py-4 px-4 align-middle font-body text-sm text-on-surface font-medium">Alinhamento 3D</td>
<td class="py-4 px-4 align-middle font-body text-sm text-on-surface-variant hidden sm:table-cell">Suspensão</td>
<td class="py-4 px-4 align-middle font-headline text-sm font-semibold text-on-surface text-right">R$ 80,00</td>
<td class="py-4 px-4 align-middle text-center">
<button class="px-3 py-1.5 rounded-md text-primary font-label text-sm font-medium hover:bg-primary/10 transition-colors">
                                            Selecionar
                                        </button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</body></html>