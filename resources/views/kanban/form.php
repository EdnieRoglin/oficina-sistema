<!-- Side Drawer (Right Panel) -->
<div class="fixed top-0 right-0 h-full w-[40%] min-w-[500px] max-w-[800px] bg-surface-container-lowest shadow-2xl z-50 flex flex-col transform transition-transform duration-300 translate-x-0 border-l border-outline-variant/20">
<!-- Drawer Header (Fixed Top) -->
<div class="p-6 border-b border-outline-variant/20 bg-surface-bright shrink-0">
<div class="flex justify-between items-start mb-4">
<div>
<div class="flex items-center gap-3 mb-1">
<h2 class="font-headline text-2xl font-bold tracking-tight text-on-surface">BRA-2S12</h2>
<span class="bg-primary-container text-on-primary-container px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Em Execução</span>
</div>
<p class="text-on-surface-variant font-headline font-medium text-lg">Toyota Corolla 2.0</p>
</div>
<button class="text-on-surface-variant hover:bg-surface-container-high p-2 rounded-full transition-colors flex items-center justify-center">
<span class="material-symbols-outlined text-xl">close</span>
</button>
</div>
<div class="grid grid-cols-2 gap-4 mt-6">
<div class="bg-surface-container-low p-3 rounded-lg">
<p class="text-xs text-on-surface-variant uppercase tracking-wider mb-1 font-semibold">Cliente</p>
<p class="font-medium text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">person</span>
                        Ricardo Silva
                    </p>
<p class="text-sm text-on-surface-variant mt-1 flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">call</span>
                        (11) 98765-4321
                    </p>
</div>
<div class="bg-surface-container-low p-3 rounded-lg flex flex-col justify-between">
<div>
<p class="text-xs text-on-surface-variant uppercase tracking-wider mb-1 font-semibold">Previsão Entrega</p>
<p class="font-medium text-primary flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">schedule</span>
                             Hoje, 17:00
                         </p>
</div>
<div class="mt-3">
<p class="text-xs text-on-surface-variant uppercase tracking-wider mb-1 font-semibold">Total Orçamento</p>
<p class="font-headline text-xl font-extrabold text-on-surface">R$ 2.100,00</p>
</div>
</div>
</div>
</div>
<!-- Content Area -->
<div class="flex-1 overflow-y-auto bg-surface">
<!-- Tabs Navigation -->
<div class="flex border-b border-outline-variant/20 bg-surface-container-lowest sticky top-0 z-10 px-6">
<button class="py-4 px-4 font-semibold text-primary border-b-2 border-primary">Serviços e Peças</button>
<button class="py-4 px-4 font-medium text-on-surface-variant hover:bg-surface-container-low transition-colors">Diagnóstico</button>
<button class="py-4 px-4 font-medium text-on-surface-variant hover:bg-surface-container-low transition-colors">Peças</button>
<button class="py-4 px-4 font-medium text-on-surface-variant hover:bg-surface-container-low transition-colors">Histórico</button>
</div>
<!-- Tab Content: Serviços e Peças -->
<div class="p-6">
<div class="bg-surface-container-lowest rounded-lg border border-outline-variant/20 overflow-hidden">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-xs uppercase tracking-wider text-on-surface-variant">
<th class="p-3 font-semibold w-12 text-center">Tipo</th>
<th class="p-3 font-semibold">Descrição</th>
<th class="p-3 font-semibold text-right">Qtd</th>
<th class="p-3 font-semibold text-right">Valor un.</th>
<th class="p-3 font-semibold text-right">Total</th>
<th class="p-3 font-semibold text-center">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 text-sm">
<tr class="hover:bg-surface-container-highest transition-colors">
<td class="p-3 text-center">
<span class="material-symbols-outlined text-on-surface-variant" title="Serviço">build</span>
</td>
<td class="p-3 font-medium">Troca de Óleo e Filtro</td>
<td class="p-3 text-right">1</td>
<td class="p-3 text-right text-on-surface-variant">R$ 150,00</td>
<td class="p-3 text-right font-headline font-semibold">R$ 150,00</td>
<td class="p-3 text-center">
<span class="bg-tertiary/10 text-tertiary px-2 py-1 rounded text-xs font-semibold">Concluído</span>
</td>
</tr>
<tr class="hover:bg-surface-container-highest transition-colors">
<td class="p-3 text-center">
<span class="material-symbols-outlined text-on-surface-variant" title="Peça">inventory_2</span>
</td>
<td class="p-3 font-medium">Óleo Sintético 5W30 (Litro)</td>
<td class="p-3 text-right">4</td>
<td class="p-3 text-right text-on-surface-variant">R$ 65,00</td>
<td class="p-3 text-right font-headline font-semibold">R$ 260,00</td>
<td class="p-3 text-center">
<span class="bg-tertiary/10 text-tertiary px-2 py-1 rounded text-xs font-semibold">Aplicado</span>
</td>
</tr>
<tr class="bg-primary-fixed/30 hover:bg-primary-fixed/50 transition-colors">
<td class="p-3 text-center">
<span class="material-symbols-outlined text-primary" title="Serviço">build</span>
</td>
<td class="p-3 font-medium">Substituição Pastilhas de Freio</td>
<td class="p-3 text-right">1</td>
<td class="p-3 text-right text-on-surface-variant">R$ 200,00</td>
<td class="p-3 text-right font-headline font-semibold">R$ 200,00</td>
<td class="p-3 text-center">
<span class="bg-primary-container text-on-primary-container px-2 py-1 rounded text-xs font-semibold">Em Andamento</span>
</td>
</tr>
<tr class="hover:bg-surface-container-highest transition-colors">
<td class="p-3 text-center">
<span class="material-symbols-outlined text-on-surface-variant" title="Peça">inventory_2</span>
</td>
<td class="p-3 font-medium">Jogo Pastilhas Dianteiras OEM</td>
<td class="p-3 text-right">1</td>
<td class="p-3 text-right text-on-surface-variant">R$ 490,00</td>
<td class="p-3 text-right font-headline font-semibold">R$ 490,00</td>
<td class="p-3 text-center">
<span class="bg-surface-container-high text-on-surface-variant px-2 py-1 rounded text-xs font-semibold">Aguardando</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="mt-6 flex justify-end">
<button class="bg-surface-container-high text-on-surface px-4 py-2 rounded-lg font-medium hover:bg-surface-dim transition-colors flex items-center gap-2 text-sm">
<span class="material-symbols-outlined text-[18px]">add</span>
                        Adicionar Item
                    </button>
</div>
</div>
</div>
<!-- Drawer Footer (Fixed Bottom) -->
<div class="p-6 border-t border-outline-variant/20 bg-surface-container-lowest/80 backdrop-blur-xl shrink-0">
<div class="flex gap-3 justify-end">
<button class="px-5 py-3 rounded-lg font-medium text-on-surface border-2 border-surface-container-high hover:bg-surface-container-high transition-colors text-sm">
                    Mover Status
                </button>
<button class="px-5 py-3 rounded-lg font-medium text-on-surface bg-surface-container-high hover:bg-surface-dim transition-colors text-sm">
                    Editar Orçamento
                </button>
<button class="px-5 py-3 rounded-lg font-medium text-on-surface bg-surface-container-high hover:bg-surface-dim transition-colors text-sm flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
                    Gerar PDF
                </button>
<button class="px-6 py-3 rounded-lg font-bold text-on-primary-container bg-gradient-to-br from-[#845400] to-[#ffa600] hover:opacity-90 transition-opacity text-sm shadow-lg shadow-primary/20">
                    Finalizar Ordem
                </button>
</div>
</div>
</div>
</body></html>