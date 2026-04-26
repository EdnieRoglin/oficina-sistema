<?php $title = 'dashboard'; ?>

<?php include 'partials/header.php'; ?>

<?php require __DIR__ . '/partials/sidebar.php'; ?>

<!-- Main Content Canvas -->
<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">

<div class="p-6 md:p-8 lg:p-10 max-w-7xl mx-auto w-full flex flex-col gap-8">
<!-- Header Section: Summary Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Card 1 -->
<div class="bg-surface-container-lowest rounded-xl p-6 flex flex-col gap-4 relative overflow-hidden group">
<div class="absolute top-0 left-0 w-1 h-full bg-primary-container opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
<div class="flex justify-between items-start">
<p class="text-sm font-semibold text-on-surface-variant font-body">Orçamentos do mês</p>
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined text-sm">description</span>
</div>
</div>
<div>
<h3 class="text-3xl font-bold font-headline text-on-background">142</h3>
<div class="flex items-center gap-1 mt-2 text-sm font-medium">
<span class="material-symbols-outlined text-green-600 text-[16px] font-bold">trending_up</span>
<span class="text-green-600">+12%</span>
<span class="text-on-surface-variant text-xs ml-1">vs last month</span>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest rounded-xl p-6 flex flex-col gap-4 relative overflow-hidden group">
<div class="absolute top-0 left-0 w-1 h-full bg-error opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
<div class="flex justify-between items-start">
<p class="text-sm font-semibold text-on-surface-variant font-body">Ordens em aberto</p>
<div class="w-8 h-8 rounded-full bg-error-container flex items-center justify-center text-on-error-container">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">build</span>
</div>
</div>
<div>
<h3 class="text-3xl font-bold font-headline text-on-background">38</h3>
<div class="flex items-center gap-1 mt-2 text-sm font-medium">
<span class="material-symbols-outlined text-error text-[16px] font-bold">trending_down</span>
<span class="text-error">-5</span>
<span class="text-on-surface-variant text-xs ml-1">needs attention</span>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest rounded-xl p-6 flex flex-col gap-4 relative overflow-hidden group">
<div class="absolute top-0 left-0 w-1 h-full bg-tertiary-container opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
<div class="flex justify-between items-start">
<p class="text-sm font-semibold text-on-surface-variant font-body">Faturamento do mês</p>
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined text-sm">payments</span>
</div>
</div>
<div>
<h3 class="text-3xl font-bold font-headline text-on-background">R$ 84.5k</h3>
<div class="flex items-center gap-1 mt-2 text-sm font-medium">
<span class="material-symbols-outlined text-green-600 text-[16px] font-bold">trending_up</span>
<span class="text-green-600">+8.4%</span>
<span class="text-on-surface-variant text-xs ml-1">vs target</span>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest rounded-xl p-6 flex flex-col gap-4 relative overflow-hidden group">
<div class="absolute top-0 left-0 w-1 h-full bg-primary-container opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
<div class="flex justify-between items-start">
<p class="text-sm font-semibold text-on-surface-variant font-body">Ticket médio</p>
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined text-sm">receipt_long</span>
</div>
</div>
<div>
<h3 class="text-3xl font-bold font-headline text-on-background">R$ 1.250</h3>
<div class="flex items-center gap-1 mt-2 text-sm font-medium">
<span class="material-symbols-outlined text-slate-500 text-[16px] font-bold">trending_flat</span>
<span class="text-slate-500">0%</span>
<span class="text-on-surface-variant text-xs ml-1">steady</span>
</div>
</div>
</div>
</div>
<!-- Main Layout: Bento Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Large Chart Column (Span 2) -->
<div class="lg:col-span-2 flex flex-col gap-6">
<!-- Chart 1: Faturamento por mês -->
<div class="bg-surface-container-lowest rounded-xl p-6 flex flex-col h-[400px]">
<div class="flex justify-between items-center mb-6">
<h3 class="text-lg font-bold font-headline text-on-background">Faturamento por mês</h3>
<button class="text-on-surface-variant hover:text-primary-container transition-colors flex items-center gap-1 text-sm font-medium bg-surface-container-low px-3 py-1.5 rounded-full">
                                2024
                                <span class="material-symbols-outlined text-sm">expand_more</span>
</button>
</div>
<!-- Pseudo-Chart Area (CSS Only) -->
<div class="flex-1 flex items-end justify-between gap-2 px-2 pb-6 relative">
<!-- Y-axis guidelines -->
<div class="absolute inset-0 flex flex-col justify-between pb-6 pointer-events-none opacity-20 z-0">
<div class="border-b border-outline-variant w-full h-0"></div>
<div class="border-b border-outline-variant w-full h-0"></div>
<div class="border-b border-outline-variant w-full h-0"></div>
<div class="border-b border-outline-variant w-full h-0"></div>
</div>
<!-- Bars -->
<div class="w-full bg-surface-container hover:bg-primary-fixed-dim transition-colors rounded-t-sm h-[40%] relative group z-10">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">R$ 42k</div>
</div>
<div class="w-full bg-surface-container hover:bg-primary-fixed-dim transition-colors rounded-t-sm h-[60%] relative group z-10">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">R$ 60k</div>
</div>
<div class="w-full bg-surface-container hover:bg-primary-fixed-dim transition-colors rounded-t-sm h-[45%] relative group z-10">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">R$ 45k</div>
</div>
<div class="w-full bg-surface-container hover:bg-primary-fixed-dim transition-colors rounded-t-sm h-[80%] relative group z-10">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">R$ 80k</div>
</div>
<div class="w-full bg-surface-container hover:bg-primary-fixed-dim transition-colors rounded-t-sm h-[75%] relative group z-10">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">R$ 75k</div>
</div>
<div class="w-full bg-primary-container rounded-t-sm h-[95%] relative group shadow-[0_0_15px_rgba(255,166,0,0.3)] z-10">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-inverse-on-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">R$ 84.5k</div>
</div>
<!-- X-axis Labels -->
<div class="absolute bottom-0 w-full flex justify-between text-xs font-medium text-on-surface-variant px-2">
<span>Jan</span>
<span>Fev</span>
<span>Mar</span>
<span>Abr</span>
<span>Mai</span>
<span class="font-bold text-primary-container">Jun</span>
</div>
</div>
</div>
<!-- Chart 2: Serviços/Peças mais vendidas -->
<div class="bg-surface-container-lowest rounded-xl p-6">
<div class="flex justify-between items-center mb-6">
<h3 class="text-lg font-bold font-headline text-on-background">Serviços/Peças mais vendidas</h3>
<button class="text-sm font-semibold text-primary-container hover:text-primary transition-colors">View All</button>
</div>
<div class="flex flex-col gap-4">
<!-- List Item 1 -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-high transition-colors group cursor-default">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-fixed group-hover:text-primary-container transition-colors">
<span class="material-symbols-outlined text-xl">oil_barrel</span>
</div>
<div>
<p class="font-semibold text-sm text-on-background">Troca de Óleo Sintético</p>
<p class="text-xs text-on-surface-variant">Serviço • 124 executados</p>
</div>
</div>
<div class="text-right">
<p class="font-bold text-sm text-on-background">R$ 38.440</p>
<p class="text-xs text-green-600 font-medium">18% of rev</p>
</div>
</div>
<!-- List Item 2 -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-high transition-colors group cursor-default">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-fixed group-hover:text-primary-container transition-colors">
<span class="material-symbols-outlined text-xl">settings</span>
</div>
<div>
<p class="font-semibold text-sm text-on-background">Pastilha de Freio Dianteira</p>
<p class="text-xs text-on-surface-variant">Peça • 86 vendidas</p>
</div>
</div>
<div class="text-right">
<p class="font-bold text-sm text-on-background">R$ 21.500</p>
<p class="text-xs text-slate-500 font-medium">10% of rev</p>
</div>
</div>
<!-- List Item 3 -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-high transition-colors group cursor-default">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-fixed group-hover:text-primary-container transition-colors">
<span class="material-symbols-outlined text-xl">plumbing</span>
</div>
<div>
<p class="font-semibold text-sm text-on-background">Alinhamento e Balanceamento</p>
<p class="text-xs text-on-surface-variant">Serviço • 92 executados</p>
</div>
</div>
<div class="text-right">
<p class="font-bold text-sm text-on-background">R$ 13.800</p>
<p class="text-xs text-slate-500 font-medium">6% of rev</p>
</div>
</div>
</div>
</div>
</div>
<!-- Right Column: Intelligent Alerts -->
<div class="bg-surface-container-low rounded-xl p-6 border border-outline-variant/20 flex flex-col h-full shadow-sm">
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary-container" style="font-variation-settings: 'FILL' 1;">lightbulb</span>
<h3 class="text-lg font-bold font-headline text-on-background">Alertas Inteligentes</h3>
</div>
<div class="flex flex-col gap-4 flex-1">
<!-- Alert 1: Urgent -->
<div class="bg-surface-container-lowest p-4 rounded-xl border-l-4 border-error shadow-sm hover:shadow-md transition-shadow cursor-pointer">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-error mt-0.5">warning</span>
<div>
<h4 class="font-semibold text-sm text-on-background mb-1">Orçamentos parados há +7 dias</h4>
<p class="text-xs text-on-surface-variant mb-3 leading-relaxed">Existem 12 orçamentos de alto valor aguardando aprovação. Sugestão: Enviar lembrete via WhatsApp.</p>
<button class="text-xs font-bold text-error uppercase tracking-wider hover:bg-error-container px-2 py-1 rounded transition-colors -ml-2">Revisar Lista</button>
</div>
</div>
</div>
<!-- Alert 2: Inventory -->
<div class="bg-surface-container-lowest p-4 rounded-xl border-l-4 border-primary-container shadow-sm hover:shadow-md transition-shadow cursor-pointer">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary-container mt-0.5">inventory</span>
<div>
<h4 class="font-semibold text-sm text-on-background mb-1">Peças com estoque baixo</h4>
<p class="text-xs text-on-surface-variant mb-3 leading-relaxed">Filtro de óleo (Mod: VW001) com apenas 3 unidades restantes. Média de uso semanal é 8.</p>
<button class="text-xs font-bold text-primary-container uppercase tracking-wider hover:bg-primary-fixed-dim/20 px-2 py-1 rounded transition-colors -ml-2">Criar Pedido</button>
</div>
</div>
</div>
<!-- Alert 3: CRM / Info -->
<div class="bg-surface-container-lowest p-4 rounded-xl border-l-4 border-tertiary shadow-sm hover:shadow-md transition-shadow cursor-pointer">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-tertiary mt-0.5">group_add</span>
<div>
<h4 class="font-semibold text-sm text-on-background mb-1">Clientes que mais retornam</h4>
<p class="text-xs text-on-surface-variant mb-3 leading-relaxed">3 clientes VIP agendaram serviços preventivos esta semana. Prepare o pacote premium.</p>
<button class="text-xs font-bold text-tertiary uppercase tracking-wider hover:bg-tertiary-container/30 px-2 py-1 rounded transition-colors -ml-2">Ver Perfil</button>
</div>
</div>
</div>
</div>
<div class="mt-6 pt-4 border-t border-outline-variant/20 text-center">
<p class="text-xs text-on-surface-variant flex items-center justify-center gap-1">
<span class="material-symbols-outlined text-[14px]">bolt</span>
                             Powered by Predictive Analytics
                         </p>
</div>
</div>
</div>
</div>
</main>
</body></html>