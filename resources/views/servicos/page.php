<?php
require __DIR__ . '/../layouts/header.php';
require __DIR__ . '/../layouts/sidebar.php';
?>

<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">

    <!-- TODO O SEU HTML BONITO CONTINUA AQUI -->
    <!-- Page Content Canvas -->
<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">

    <!-- Bento Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div class="space-y-1">
            <h2 class="text-4xl font-black text-on-surface font-headline tracking-tight">
                Cadastro de Serviços
            </h2>
            <p class="text-on-surface-variant font-medium">
                Gerencie o catálogo de serviços e precificação da oficina.
            </p>
        </div>

        <button
            onclick="abrirModalNovo()"
            class="bg-primary-container hover:bg-amber-500 text-on-primary-container font-bold px-8 py-4 rounded-xl flex items-center gap-3 shadow-lg shadow-amber-500/10 transition-all active:scale-95 group"
        >
            <span class="material-symbols-outlined group-hover:rotate-90 transition-transform">
                add_circle
            </span>
            <span class="font-headline tracking-wide uppercase text-sm">
                Adicionar Serviço
            </span>
        </button>
    </div>
    <!-- Dashboard Style Stats Grid (Bento) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Card 1 -->
        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col gap-2 border border-outline-variant/10">
            <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest font-semibold">
                Total de Serviços
            </span>
            <span class="text-3xl font-headline font-extrabold text-on-surface"><?= count($servicos) ?></span>
            <div class="flex items-center gap-1 text-tertiary text-xs">
                <span class="material-symbols-outlined text-sm">trending_up</span>
                <span>4 novos este mês</span>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col gap-2 border border-outline-variant/10">
            <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest font-semibold">
                Ticket Médio
            </span>
            <span class="text-3xl font-headline font-extrabold text-on-surface"><?= 'R$ ' . number_format($ticketMedio['ticket_medio'], 2, ',', '.') ?></span>
            <div class="flex items-center gap-1 text-on-surface-variant text-xs">
                <span class="material-symbols-outlined text-sm">info</span>
                <span>Mão de obra base</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col gap-2 border border-outline-variant/10">
            <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest font-semibold">
                Serviços Ativos
            </span>
            <span class="text-3xl font-headline font-extrabold text-primary">94%</span>
            <div class="w-full bg-surface-container-high h-1.5 rounded-full mt-2 overflow-hidden">
                <div class="bg-primary-container h-full w-[94%]"></div>
            </div>
        </div>
    </div>

    <!-- Services Table Canvas -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden mt-8">

        <!-- Search and Filters -->
        <div class="p-4 border-b border-outline-variant/10 flex flex-col md:flex-row gap-4 justify-between items-center bg-surface-container-low/30">
            <div class="relative w-full md:w-96">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">
                    search
                </span>
                <input
                    class="w-full pl-10 pr-4 py-2 bg-white border-b-2 border-outline/20 focus:border-primary-container outline-none transition-colors text-sm rounded-t-lg"
                    placeholder="Buscar serviço por nome ou categoria..."
                    type="text"
                />
            </div>

            <div class="flex items-center gap-2">
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-container-high text-on-surface text-sm font-medium hover:bg-surface-variant transition-colors">
                    <span class="material-symbols-outlined text-lg">filter_list</span>
                    Filtros
                </button>
            </div>
        </div>

        <!-- Main Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low">
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold">Nome do Serviço</th>
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold">Categoria</th>
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold">Valor Padrão</th>
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold text-center">Status</th>
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold text-right">Ações</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-outline-variant/10">
                    <!-- (linhas mantidas exatamente como enviadas, apenas formatadas) -->
            <?php foreach($servicos as $servico): ?>

<!-- Service Row 2 -->
<tr class="hover:bg-amber-100/30 transition-colors group">
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg" data-icon="bolt">bolt</span>
</div>
<div>
    <p class="text-on-surface font-semibold text-sm"><?= htmlspecialchars($servico['nome']) ?></p>
    <p class="text-on-surface-variant text-[10px] uppercase font-label">Cod: <?= htmlspecialchars($servico['codigo']) ?></p>
</div>
</div>
</td>
<td class="px-6 py-5">
    <span class="px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed text-[11px] font-bold uppercase tracking-tight"><?= htmlspecialchars($servico['nome_categoria']) ?></span>
</td>
<td class="px-6 py-5">
    <span class="font-headline font-bold text-on-surface">R$ <?= number_format($servico['preco'], 2, ',', '.') ?></span>
</td>
<td class="px-6 py-5">
    <div class="flex justify-center">
        <label class="relative inline-flex items-center cursor-pointer">
            <input checked="" class="sr-only peer" type="checkbox"/>
            <div class="w-11 h-6 bg-surface-container-high rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-container"></div>
        </label>
    </div>
</td>
<td class="px-6 py-5 text-right">
<button 
    onclick="abrirModalEditar(this)"
    data-id="<?= $servico['id'] ?>"
    data-nome="<?= htmlspecialchars($servico['nome']) ?>"
    data-codigo="<?= htmlspecialchars($servico['codigo'] ?? '') ?>"
    data-categoria-id="<?= $servico['categoria_id'] ?>"
    data-preco="<?= $servico['preco'] ?>"
    data-observacao="<?= htmlspecialchars($servico['observacao'] ?? '') ?>"
    class="p-2 hover:bg-surface-container-high rounded-lg text-on-surface-variant transition-colors active:scale-90"
>
    <span class="material-symbols-outlined">edit_square</span>
</button>
<a href="/oficina-sistema/public/servicos/excluir?id=<?= $servico['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este serviço?')" class="p-2 hover:bg-error/10 rounded-lg text-error transition-colors active:scale-90 inline-flex">
                                <span class="material-symbols-outlined">delete_sweep</span>
                            </a>
</td>
</tr>

        <?php endforeach; ?>

                </tbody>
            </table>
        </div>

        <!-- Pagination Footer -->
        <div class="px-6 py-4 bg-surface-container-low flex items-center justify-between">
            <p class="text-xs text-on-surface-variant font-medium">
                Mostrando <strong>1 - 10</strong> de 128 registros
            </p>

            <div class="flex gap-2">
                <button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white transition-all text-xs font-bold disabled:opacity-50" disabled>
                    Anterior
                </button>
                <button class="px-3 py-1 rounded-lg bg-primary-container text-on-primary-container text-xs font-bold">1</button>
                <button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white transition-all text-xs font-bold">2</button>
                <button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white transition-all text-xs font-bold">3</button>
                <button class="px-3 py-1 rounded-lg border border-outline-variant/20 hover:bg-white transition-all text-xs font-bold">
                    Próximo
                </button>
            </div>
        </div>

    </div>
</div>

<div id="modal-container" class="hidden">
    <?php include __DIR__ . '/form.php'; ?>
</div>

    

</div>

<script>
function abrirModalNovo() {
    var form = document.getElementById('service-registration-form');
    form.reset();
    form.action = '/oficina-sistema/public/servicos/adicionar';
    document.getElementById('servico-id').value = '';
    document.getElementById('modal-titulo').textContent = 'Cadastrar Serviço';
    document.getElementById('modal-btn-texto').textContent = 'Confirmar Cadastro';
    document.getElementById('modal-container').classList.remove('hidden');
}

function abrirModalEditar(btn) {
    var form = document.getElementById('service-registration-form');
    form.action = '/oficina-sistema/public/servicos/editar';
    document.getElementById('servico-id').value = btn.dataset.id;
    form.querySelector('[name="nome"]').value = btn.dataset.nome;
    form.querySelector('[name="codigo"]').value = btn.dataset.codigo;
    form.querySelector('[name="categoria_id"]').value = btn.dataset.categoriaId;
    form.querySelector('[name="preco"]').value = btn.dataset.preco;
    form.querySelector('[name="observacao"]').value = btn.dataset.observacao;
    document.getElementById('modal-titulo').textContent = 'Editar Serviço';
    document.getElementById('modal-btn-texto').textContent = 'Salvar Alterações';
    document.getElementById('modal-container').classList.remove('hidden');
}
</script>
