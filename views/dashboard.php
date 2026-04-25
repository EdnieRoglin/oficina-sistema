<?php $title = 'dashboard'; ?>

<?php include 'partials/header.php'; ?>

<?php require __DIR__ . '/partials/sidebar.php'; ?>

<!-- Page Content -->
<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">
<!-- Header Section with Bento Grid Influence -->
<section class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
<div>
<h2 class="text-4xl font-headline font-extrabold tracking-tight text-on-background mb-2">Dashboard Operacional</h2>
<p class="text-on-surface-variant max-w-md">Gerencie orçamentos e fluxo de trabalho com eficiência.</p>
</div>
<button 
    hx-get="partials/modal_orcamento.php" 
    hx-target="#modal-container"
    class="bg-primary-container hover:bg-amber-500 text-on-primary-container font-bold px-8 py-4 rounded-xl flex items-center gap-3 shadow-lg shadow-amber-500/10 transition-all active:scale-95 group">
    
    <span class="material-symbols-outlined group-hover:rotate-90 transition-transform">add_circle</span>
    <span class="font-headline tracking-wide uppercase text-sm">Novo Orçamento</span>
</button>
</section>
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-l-4 border-amber-500">
<p class="text-label-md uppercase tracking-widest text-on-surface-variant text-xs font-semibold mb-2">Faturamento Hoje</p>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-headline font-extrabold">R$ 12.450</span>
<span class="text-emerald-600 text-xs font-bold bg-emerald-50 px-2 py-0.5 rounded">+12%</span>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-l-4 border-tertiary">
<p class="text-label-md uppercase tracking-widest text-on-surface-variant text-xs font-semibold mb-2">Orçamentos Pendentes</p>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-headline font-extrabold text-on-surface">08</span>
<span class="text-on-surface-variant text-xs font-medium">Aguardando aprovação</span>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-l-4 border-slate-400">
<p class="text-label-md uppercase tracking-widest text-on-surface-variant text-xs font-semibold mb-2">Ordens em Execução</p>
<div class="flex items-baseline gap-2">
<span class="text-3xl font-headline font-extrabold text-on-surface">14</span>
<span class="text-on-surface-variant text-xs font-medium">Capacidade: 85%</span>
</div>
</div>
</div>
<!-- List Section -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
<div class="px-6 py-5 border-b border-surface-container-high flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-amber-500" data-icon="list_alt">list_alt</span>
<h3 class="font-headline font-bold text-lg">Orçamentos Recentes</h3>
</div>
<!-- Quick Filters -->
<div class="flex bg-surface-container-low p-1 rounded-lg">
<button class="px-4 py-1.5 text-xs font-semibold rounded-md bg-white shadow-sm text-on-surface">Hoje</button>
<button class="px-4 py-1.5 text-xs font-semibold rounded-md text-on-surface-variant hover:text-on-surface transition-colors">Semana</button>
<button class="px-4 py-1.5 text-xs font-semibold rounded-md text-on-surface-variant hover:text-on-surface transition-colors">Mês</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-separate border-spacing-0">
<thead>
<tr class="bg-surface-container-low">
<th class="px-6 py-4 text-[10px] font-headline uppercase tracking-widest font-bold text-on-surface-variant">Cliente / Veículo</th>
<th class="px-6 py-4 text-[10px] font-headline uppercase tracking-widest font-bold text-on-surface-variant">Data</th>
<th class="px-6 py-4 text-[10px] font-headline uppercase tracking-widest font-bold text-on-surface-variant text-right">Valor Total</th>
<th class="px-6 py-4 text-[10px] font-headline uppercase tracking-widest font-bold text-on-surface-variant">Status</th>
<th class="px-6 py-4 text-[10px] font-headline uppercase tracking-widest font-bold text-on-surface-variant"></th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-high">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer group">
<td class="px-6 py-5">
<div class="flex flex-col">
<span class="font-headline font-bold text-on-surface">Ricardo Oliveira</span>
<span class="text-xs text-on-surface-variant">Toyota Corolla - HGT-2244</span>
</div>
</td>
<td class="px-6 py-5 text-sm text-on-surface">14/10/2023 09:45</td>
<td class="px-6 py-5 text-right font-headline font-bold text-on-surface">R$ 2.450,00</td>
<td class="px-6 py-5">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-amber-100 text-amber-700 text-[10px] font-bold uppercase tracking-wider">Aguardando</span>
</td>
<td class="px-6 py-5 text-right">
<button class="text-slate-300 group-hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer group">
<td class="px-6 py-5">
<div class="flex flex-col">
<span class="font-headline font-bold text-on-surface">Beatriz Mendes</span>
<span class="text-xs text-on-surface-variant">Jeep Compass - BRA-2S12</span>
</div>
</td>
<td class="px-6 py-5 text-sm text-on-surface">13/10/2023 16:20</td>
<td class="px-6 py-5 text-right font-headline font-bold text-on-surface">R$ 840,00</td>
<td class="px-6 py-5">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-bold uppercase tracking-wider">Aprovado</span>
</td>
<td class="px-6 py-5 text-right">
<button class="text-slate-300 group-hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer group">
<td class="px-6 py-5">
<div class="flex flex-col">
<span class="font-headline font-bold text-on-surface">Oficina TransPrime</span>
<span class="text-xs text-on-surface-variant">MB Sprinter 415 - OPA-9900</span>
</div>
</td>
<td class="px-6 py-5 text-sm text-on-surface">13/10/2023 11:05</td>
<td class="px-6 py-5 text-right font-headline font-bold text-on-surface">R$ 14.200,00</td>
<td class="px-6 py-5">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant text-[10px] font-bold uppercase tracking-wider">Em Execução</span>
</td>
<td class="px-6 py-5 text-right">
<button class="text-slate-300 group-hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer group">
<td class="px-6 py-5">
<div class="flex flex-col">
<span class="font-headline font-bold text-on-surface">Carlos Eduardo</span>
<span class="text-xs text-on-surface-variant">Honda Civic - KJU-1122</span>
</div>
</td>
<td class="px-6 py-5 text-sm text-on-surface">12/10/2023 15:40</td>
<td class="px-6 py-5 text-right font-headline font-bold text-on-surface">R$ 3.120,50</td>
<td class="px-6 py-5">
<span class="inline-flex items-center px-3 py-1 rounded-full bg-error-container text-error text-[10px] font-bold uppercase tracking-wider">Cancelado</span>
</td>
<td class="px-6 py-5 text-right">
<button class="text-slate-300 group-hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-6 py-4 bg-surface-container-low flex items-center justify-between">
<span class="text-xs text-on-surface-variant font-medium">Mostrando 4 de 128 orçamentos</span>
<div class="flex gap-2">
<button class="p-1.5 rounded bg-white border border-surface-container-high text-on-surface-variant hover:bg-white active:scale-95 duration-150">
<span class="material-symbols-outlined text-sm" data-icon="arrow_back">arrow_back</span>
</button>
<button class="p-1.5 rounded bg-white border border-surface-container-high text-on-surface-variant hover:bg-white active:scale-95 duration-150">
<span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</div>

<!-- BottomNavBar (Authority: JSON - Mobile Only) -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white/80 backdrop-blur-xl border-t border-slate-200/20 z-50 flex justify-around items-center py-2 px-4 shadow-[0_-4px_20px_rgba(0,0,0,0.05)]">
<a class="flex flex-col items-center gap-1 p-2 text-amber-600" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="text-[10px] font-bold font-manrope">Dash</span>
</a>
<a class="flex flex-col items-center gap-1 p-2 text-slate-400" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-[10px] font-bold font-manrope">Clientes</span>
</a>
<a class="flex flex-col items-center gap-1 p-2 text-slate-400" href="#">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span class="text-[10px] font-bold font-manrope">Histórico</span>
</a>
<a class="flex flex-col items-center gap-1 p-2 text-slate-400" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="text-[10px] font-bold font-manrope">Ajustes</span>
</a>
</nav>
<!-- Floating Action Button (Mobile Contextual) -->
<button class="md:hidden fixed bottom-24 right-6 w-14 h-14 bg-primary-container text-on-primary-container rounded-full shadow-2xl flex items-center justify-center z-40 active:scale-90 transition-transform">
<span class="material-symbols-outlined" data-icon="add">add</span>
</button>
<div id="modal-container"></div>
</body></html>