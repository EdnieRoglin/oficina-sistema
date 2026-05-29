<?php
require __DIR__ . '/../layouts/header.php';
require __DIR__ . '/../layouts/sidebar.php';
?>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<!-- Kanban Board Area -->
<div class="flex-1 overflow-x-auto overflow-y-hidden p-6 bg-surface">
<div class="flex h-full gap-6 items-start min-w-max pb-4">
<!-- Column 1: Aguardando Aprovação -->
<div class="w-[320px] flex flex-col h-full bg-surface-container-low rounded-xl">
<div class="p-4 flex justify-between items-center shrink-0">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-on-surface-variant"></span>
<h3 class="font-headline font-semibold text-on-surface">Aguardando Aprovação</h3>
</div>
<span class="bg-surface-variant text-on-surface-variant font-label text-xs font-semibold px-2 py-1 rounded-full">3</span>
</div>
<div class="flex-1 overflow-y-auto px-4 pb-4 space-y-4">
<div class="kanban-coluna">
    <div class="kanban-cards" data-status="aprovacao">
        <!-- Card 1 -->
<div class="bg-surface-container-lowest rounded-xl p-4 shadow-[0px_4px_16px_rgba(26,28,30,0.04)] cursor-grab hover:shadow-[0px_8px_24px_rgba(26,28,30,0.08)] transition-all duration-200 border-l-4 border-transparent hover:border-surface-variant group">
<div class="flex justify-between items-start mb-2">
<div>
<h4 class="font-headline font-bold text-on-surface text-base">ABC da XUXA</h4>
<p class="font-body text-xs text-on-surface-variant mt-0.5">Toyota Corolla 2.0</p>
</div>
<div class="bg-surface-container-high rounded-full w-8 h-8 flex items-center justify-center">
<span class="font-headline font-bold text-on-surface text-xs">RS</span>
</div>
</div>
<div class="mb-4">
<p class="font-body text-sm text-on-surface line-clamp-2">Revisão de 50.000km, barulho na suspensão dianteira direita ao passar em buracos.</p>
</div>
<div class="flex items-center justify-between mt-auto pt-3 border-t border-outline-variant/20">
<div class="flex flex-col">
<span class="font-label text-[10px] uppercase tracking-wider text-on-surface-variant">Cliente</span>
<span class="font-body text-sm font-medium text-on-surface">Roberto Silva</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label text-[10px] uppercase tracking-wider text-on-surface-variant">Orçamento</span>
<span class="font-headline text-sm font-bold text-on-surface">R$ 1.850,00</span>
</div>
</div>
<div class="mt-3 flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-[16px]">schedule</span>
<span class="font-body text-xs">Hoje, 14:00</span>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- Column 2: Aguardando Peças -->
<div class="w-[320px] flex flex-col h-full bg-surface-container-low rounded-xl">
<div class="p-4 flex justify-between items-center shrink-0">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<h3 class="font-headline font-semibold text-on-surface">Aguardando Peças</h3>
</div>
<span class="bg-surface-variant text-on-surface-variant font-label text-xs font-semibold px-2 py-1 rounded-full">1</span>
</div>
<div class="flex-1 overflow-y-auto px-4 pb-4 space-y-4">
<!-- Card: Urgent / Overdue -->
<div class="bg-surface-container-lowest rounded-xl p-4 shadow-[0px_4px_16px_rgba(26,28,30,0.04)] cursor-grab border-l-4 border-error relative overflow-hidden group">
<div class="absolute top-0 right-0 bg-error text-on-error font-label text-[10px] font-bold px-2 py-1 rounded-bl-lg uppercase tracking-wide">
                                Atrasado
                            </div>
<div class="flex justify-between items-start mb-2 mt-2">
<div>
<h4 class="font-headline font-bold text-on-surface text-base">XYZ-9A88</h4>
<p class="font-body text-xs text-on-surface-variant mt-0.5">Honda Civic Touring</p>
</div>
<div class="bg-surface-container-high rounded-full w-8 h-8 flex items-center justify-center">
<span class="font-headline font-bold text-on-surface text-xs">MC</span>
</div>
</div>
<div class="mb-4">
<p class="font-body text-sm text-on-surface line-clamp-2">Troca do compressor do ar condicionado. Aguardando peça original Honda (Cod. 88310-TBA-A01).</p>
</div>
<div class="flex items-center justify-between mt-auto pt-3 border-t border-outline-variant/20">
<div class="flex flex-col">
<span class="font-label text-[10px] uppercase tracking-wider text-on-surface-variant">Cliente</span>
<span class="font-body text-sm font-medium text-on-surface">Mariana Costa</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label text-[10px] uppercase tracking-wider text-on-surface-variant">Orçamento</span>
<span class="font-headline text-sm font-bold text-on-surface">R$ 4.200,00</span>
</div>
</div>
<div class="mt-3 flex items-center gap-2 text-error">
<span class="material-symbols-outlined text-[16px]">warning</span>
<span class="font-body text-xs font-semibold">Prazo: Ontem</span>
</div>
</div>
</div>
</div>
<!-- Column 3: Em Execução -->
<div class="w-[320px] flex flex-col h-full bg-surface-container-low rounded-xl">
<div class="p-4 flex justify-between items-center shrink-0">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary-container animate-pulse"></span>
<h3 class="font-headline font-semibold text-on-surface">Em Execução</h3>
</div>
<span class="bg-surface-variant text-on-surface-variant font-label text-xs font-semibold px-2 py-1 rounded-full">2</span>
</div>
<div class="flex-1 overflow-y-auto px-4 pb-4 space-y-4">
<!-- Card: Close to deadline -->
<div class="bg-surface-container-lowest rounded-xl p-4 shadow-[0px_4px_16px_rgba(26,28,30,0.04)] cursor-grab border-l-4 border-primary-container relative group hover:bg-surface-container-highest transition-colors">
<div class="flex justify-between items-start mb-2">
<div>
<h4 class="font-headline font-bold text-on-surface text-base">FGH-4T33</h4>
<p class="font-body text-xs text-on-surface-variant mt-0.5">VW Jetta GLI</p>
</div>
<div class="w-8 h-8 rounded-full overflow-hidden border border-outline">
<img alt="Mechanic Profile" class="w-full h-full object-cover" data-alt="A portrait of a skilled mechanic inside a high-end workshop. He is wearing dark, clean coveralls typical of a premium automotive service center. The lighting is sharp and industrial, highlighting his focused expression. The background features blurred, high-tech diagnostic equipment and clean metallic surfaces, reinforcing the 'Industrial Atelier' aesthetic of precision and professional authority." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkOhQgXIb2G8U26V2L6R0znxa_aVwpMxdxPT-QvH8NDKrmK3mgMy8tajgsZdYDuvA1MJ6TXGiFh51D7XcVMOSjNL9z7cZlLq8tUUbebueZNTTQGGUUtKbEeBqe1PoY1g2K5o_k73RgQZa5tKK2ICkhOGkXjGlXK0KdmObaYHJXAbTqCg84IsXBPxtIR_dsP5oiut08pZHFQfV1UGK_zG67Ikjdfr1OaeF77EQZtk_BqFQCEVPxRelqKnEnrCZP2HpnrEE9o9rSjGo"/>
</div>
</div>
<div class="mb-4">
<p class="font-body text-sm text-on-surface line-clamp-2">Troca de óleo do câmbio DSG, filtros e reprogramação do módulo mecatrônico.</p>
</div>
<div class="flex items-center gap-2 mb-3">
<span class="bg-tertiary-container/30 text-on-tertiary-container font-label text-[10px] font-bold px-2 py-1 rounded-full uppercase">Manutenção</span>
<span class="bg-surface-container-high text-on-surface-variant font-label text-[10px] font-bold px-2 py-1 rounded-full uppercase">Box 3</span>
</div>
<div class="flex items-center justify-between mt-auto pt-3 border-t border-outline-variant/20">
<div class="flex flex-col">
<span class="font-label text-[10px] uppercase tracking-wider text-on-surface-variant">Cliente</span>
<span class="font-body text-sm font-medium text-on-surface">Fernando Lima</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label text-[10px] uppercase tracking-wider text-on-surface-variant">Orçamento</span>
<span class="font-headline text-sm font-bold text-on-surface">R$ 2.100,00</span>
</div>
</div>
<div class="mt-3 flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-[16px]">timer</span>
<span class="font-body text-xs font-bold">Entrega: Hoje, 17:00</span>
</div>
</div>
</div>
</div>
<!-- Column 4: Pronto para Entrega -->
<div class="w-[320px] flex flex-col h-full bg-surface-container-low rounded-xl">
<div class="p-4 flex justify-between items-center shrink-0">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<h3 class="font-headline font-semibold text-on-surface">Pronto para Entrega</h3>
</div>
<span class="bg-surface-variant text-on-surface-variant font-label text-xs font-semibold px-2 py-1 rounded-full">0</span>
</div>
<div class="flex-1 flex flex-col items-center justify-center p-6 text-center border-2 border-dashed border-outline-variant/30 rounded-xl mx-4 mb-4">
<span class="material-symbols-outlined text-4xl text-surface-variant mb-2">done_all</span>
<p class="font-body text-sm text-on-surface-variant">Nenhum veículo aguardando retirada no momento.</p>
</div>
</div>
<!-- Column 5: Finalizado -->
<div class="w-[320px] flex flex-col h-full bg-surface-container-low rounded-xl opacity-80">
<div class="p-4 flex justify-between items-center shrink-0">
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
<h3 class="font-headline font-semibold text-on-surface">Finalizado</h3>
</div>
</div>
<div class="flex-1 overflow-y-auto px-4 pb-4 space-y-4">
<!-- Completed Card -->
<div class="bg-surface-container-lowest rounded-xl p-4 shadow-sm opacity-75 grayscale-[20%]">
<div class="flex justify-between items-start mb-2">
<div>
<h4 class="font-headline font-bold text-on-surface text-base line-through text-on-surface-variant">ABC-1D23</h4>
<p class="font-body text-xs text-on-surface-variant mt-0.5">Ford Ranger XLT</p>
</div>
<span class="material-symbols-outlined text-tertiary">check_circle</span>
</div>
<div class="flex items-center justify-between mt-4 pt-3 border-t border-outline-variant/20">
<div class="flex flex-col">
<span class="font-label text-[10px] uppercase tracking-wider text-on-surface-variant">Cliente</span>
<span class="font-body text-sm font-medium text-on-surface">Agropecuária Sul</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
document.querySelectorAll('.kanban-cards').forEach(coluna => {
    new Sortable(coluna, {
        group: 'kanban',
        animation: 250,
        ghostClass: 'kanban-ghost',
        chosenClass: 'kanban-chosen',
        dragClass: 'kanban-drag',

        onEnd: function (evt) {
            const ordemId = evt.item.dataset.id;
            const novoStatus = evt.to.dataset.status;

            fetch('atualizar_status.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({
                    id: ordemId,
                    status: novoStatus
                })
            });
        }
    });
});
</script>
</main>
</body></html>