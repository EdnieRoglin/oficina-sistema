<?php $pagina_atual = basename($_SERVER['PHP_SELF']); ?>

<link href="/css/output.css" rel="stylesheet">
<!-- SideNavBar (Authority: JSON) -->
<aside class="h-screen w-64 hidden md:flex flex-col bg-slate-50 border-r border-slate-200/20">
<div class="flex flex-col gap-2 p-4 h-full">
<div class="flex items-center gap-3 px-2 py-6">
<div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary-container" data-icon="precision_manufacturing">precision_manufacturing</span>
</div>
<div>
<h1 class="text-lg font-bold text-slate-800 font-headline tracking-tight">AR Retífica</h1>
<p class="text-[10px] font-manrope uppercase tracking-wider font-semibold text-slate-500">Unidade Central</p>
</div>
</div>
<nav class="flex-1 flex flex-col gap-1 mt-4">
    <?php
    $menus = [
        ['url' => 'dashboard.php', 'label' => 'Dashboard', 'icon' => 'dashboard'],
        ['url' => 'orcamento.php', 'label' => 'orcamento', 'icon' => 'request_quote'],
        ['url' => 'clientes.php',  'label' => 'Clientes',  'icon' => 'person'],
        ['url' => 'servicos.php',  'label' => 'Serviços',  'icon' => 'build'],
        ['url' => 'pecas.php',     'label' => 'Peças',     'icon' => 'inventory_2'],
        ['url' => 'veiculos.php',  'label' => 'Veículos',  'icon' => 'directions_car'],
        ['url' => 'categorias.php', 'label' => 'Categorias', 'icon' => 'category'],
        ['url' => 'historico.php', 'label' => 'Histórico', 'icon' => 'history'],
    ];

    foreach ($menus as $menu):
        $isActive = ($pagina_atual == $menu['url']);
        $classes = $isActive ? "bg-amber-100 text-amber-700" : "text-slate-500 hover:bg-slate-200";
    ?>
        <a hx-get="/oficina-sistema/views/<?php echo $menu['url']; ?>" 
           hx-target="main" 
           hx-select="main > *"
           hx-push-url="true"
           class="menu-link <?php echo $classes; ?> rounded-lg px-4 py-3 flex items-center gap-3 cursor-pointer transition-transform hover:translate-x-1">
            <span class="material-symbols-outlined"><?php echo $menu['icon']; ?></span>
            <span class="font-manrope uppercase tracking-wider text-xs font-semibold">
                <?php echo $menu['label']; ?>
            </span>
        </a>
    <?php endforeach; ?>
</nav>
<div class="mt-auto pt-4 border-t border-slate-200">
<button class="w-full text-slate-500 hover:bg-slate-200 rounded-lg px-4 py-3 flex items-center gap-3 cursor-pointer active:opacity-80 transition-transform hover:translate-x-1">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-manrope uppercase tracking-wider text-xs font-semibold">Sair</span>
</button>
</div>
</div>
</aside>
<script src="https://unpkg.com/htmx.org@1.9.10"></script>
<script>
    document.body.addEventListener('htmx:afterOnLoad', function(evt) {
        // 1. Pegamos a URL para onde o HTMX acabou de navegar
        // O htmx:afterOnLoad nos dá o caminho final em evt.detail.pathInfo.requestPath
        const currentPath = evt.detail.pathInfo.requestPath;

        // 2. Removemos o destaque de TODOS os links
        document.querySelectorAll('.menu-link').forEach(link => {
            link.classList.remove('bg-amber-100', 'text-amber-700');
            link.classList.add('text-slate-500', 'hover:bg-slate-200');
        });

        // 3. Procuramos o link que possui o hx-get igual ao caminho que acabamos de carregar
        document.querySelectorAll('.menu-link').forEach(link => {
            const hxGet = link.getAttribute('hx-get');
            
            // Se o hx-get do link for igual ao caminho carregado, destacamos!
            if (hxGet === currentPath) {
                link.classList.add('bg-amber-100', 'text-amber-700');
                link.classList.remove('text-slate-500', 'hover:bg-slate-200');
            }
        });
    });
</script>
<main class="flex-1 flex flex-col relative h-screen overflow-y-auto bg-surface">