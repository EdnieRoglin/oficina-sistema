<!-- SideNavBar -->
<aside class="h-screen w-64 hidden md:flex flex-col bg-slate-50 border-r border-slate-200/20">
<div class="flex flex-col gap-2 p-4 h-full">

    <div class="flex items-center gap-3 px-2 py-6">
        <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center">
            <span class="material-symbols-outlined text-on-primary-container">precision_manufacturing</span>
        </div>
        <div>
            <h1 class="text-lg font-bold text-slate-800 tracking-tight">AR Retífica</h1>
            <p class="text-[10px] uppercase tracking-wider font-semibold text-slate-500">Unidade Central</p>
        </div>
    </div>

    <nav class="flex-1 flex flex-col gap-1 mt-4">
    <?php
    $menus = [
        ['route' => '/dashboard', 'key'=>'dashboard', 'label' => 'Dashboard', 'icon' => 'dashboard'],
        ['route' => '/orcamento', 'key'=>'orcamento', 'label' => 'Orçamento', 'icon' => 'request_quote'],
        ['route' => '/clientes',  'key'=>'clientes',  'label' => 'Clientes',  'icon' => 'person'],
        ['route' => '/servicos',  'key'=>'servicos',  'label' => 'Serviços',  'icon' => 'build'],
        ['route' => '/pecas',     'key'=>'pecas',     'label' => 'Peças',     'icon' => 'inventory_2'],
        ['route' => '/veiculos',  'key'=>'veiculos',  'label' => 'Veículos',  'icon' => 'directions_car'],
        ['route' => '/kanban',    'key'=>'kanban',    'label' => 'Quadro',    'icon' => 'view_kanban'],
        ['route' => '/categorias','key'=>'categorias','label' => 'Categorias','icon' => 'category'],
        ['route' => '/historico', 'key'=>'historico', 'label' => 'Histórico', 'icon' => 'history'],
    ];

    foreach ($menus as $menu):
        $isActive = isset($activeMenu) && ($activeMenu === $menu['key']);
    ?>
        <a 
           href="<?= $menu['route'] ?>"
           class="<?= $isActive ? 'bg-amber-100 text-amber-700' : 'text-slate-500 hover:bg-slate-200' ?>
                  rounded-lg px-4 py-3 flex items-center gap-3 transition-transform hover:translate-x-1">

            <span class="material-symbols-outlined"><?= $menu['icon'] ?></span>
            <span class="uppercase tracking-wider text-xs font-semibold">
                <?= $menu['label'] ?>
            </span>
        </a>
    <?php endforeach; ?>
    </nav>

    <div class="mt-auto pt-4 border-t border-slate-200">
        <a href="/logout"
           class="w-full text-slate-500 hover:bg-slate-200 rounded-lg px-4 py-3 flex items-center gap-3 transition-transform hover:translate-x-1">
            <span class="material-symbols-outlined">logout</span>
            <span class="uppercase tracking-wider text-xs font-semibold">Sair</span>
        </a>
    </div>

</div>
</aside>