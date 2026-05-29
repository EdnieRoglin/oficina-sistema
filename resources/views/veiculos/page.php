<?php
require __DIR__ . '/../layouts/header.php';
require __DIR__ . '/../layouts/sidebar.php';
?>


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
            onclick="abrirModalNovo()"
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
                 <?php foreach($veiculos as $veiculo):?>
            <!-- Row 2 -->
<tr class="hover:bg-surface-container-low transition-colors group">
<td class="px-6 py-5">
<div class="flex flex-col">
<span class="font-bold text-on-surface headline"> <?= htmlspecialchars($veiculo['modelo'])?></span>
<span class="mt-1 inline-flex items-center justify-center bg-on-background text-white text-[10px] font-bold px-2 py-0.5 rounded-sm tracking-tighter w-fit">
                                    <?= htmlspecialchars($veiculo['placa'])?>
                                </span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex items-center gap-2 group/link cursor-pointer">
<span class="text-sm font-semibold text-on-surface"><?= htmlspecialchars($veiculo['cliente_nome'] ?? 'Sem proprietário') ?></span>
<span class="material-symbols-outlined text-xs text-primary opacity-0 group-hover/link:opacity-100 transition-opacity">open_in_new</span>
</div>
</td>
<td class="px-6 py-5">
<div class="text-xs space-y-0.5">
<p class="text-outline font-medium"> <?= htmlspecialchars($veiculo['ano'])?> •  <?= htmlspecialchars($veiculo['cor'])?></p>
<p class="text-on-surface font-bold"> <?= htmlspecialchars($veiculo['km'])?> km</p>
</div>
</td>
<td class="px-6 py-5">
<div class="text-xs font-medium text-on-surface-variant">
                                <?= htmlspecialchars($veiculo['motorizacao'])?> • <span class="text-error"> <?= htmlspecialchars($veiculo['combustivel'])?></span>
</div>
</td>
<td class="px-6 py-5">
<span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tight">Pronto para Retirada</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-1">
<button class="p-2 hover:bg-surface-container-high rounded-lg text-on-surface-variant transition-colors active:scale-90" title="Novo Orçamento"><span class="material-symbols-outlined">request_quote</span></button>
<button 
    onclick="abrirModalEditar(this)"
    data-id="<?= $veiculo['id'] ?>"
    data-placa="<?= htmlspecialchars($veiculo['placa']) ?>"
    data-chassi="<?= htmlspecialchars($veiculo['chassi'] ?? '') ?>"
    data-motorizacao="<?= htmlspecialchars($veiculo['motorizacao'] ?? '') ?>"
    data-marca="<?= htmlspecialchars($veiculo['marca']) ?>"
    data-modelo="<?= htmlspecialchars($veiculo['modelo'] ?? '') ?>"
    data-ano="<?= htmlspecialchars($veiculo['ano']) ?>"
    data-km="<?= htmlspecialchars($veiculo['km']) ?>"
    data-cor="<?= htmlspecialchars($veiculo['cor']) ?>"
    data-combustivel="<?= htmlspecialchars($veiculo['combustivel'] ?? '') ?>"
    data-cliente-id="<?= htmlspecialchars($veiculo['cliente_id'] ?? '') ?>"
    data-cliente-nome="<?= htmlspecialchars($veiculo['cliente_nome'] ?? '') ?>"
    class="p-2 hover:bg-surface-container-high rounded-lg text-on-surface-variant transition-colors active:scale-90"
>
    <span class="material-symbols-outlined">edit_square</span>
</button>
</div>
</td>
</tr>
    <?php endforeach?>
            </tbody>
        </table>

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

<script>
function abrirModalNovo() {
    var form = document.getElementById('veiculos-registration-form');
    form.reset();
    form.action = '/oficina-sistema/public/veiculos/adicionar';
    document.getElementById('veiculo-id').value = '';
    document.getElementById('modal-titulo').textContent = 'Cadastrar Veículo';
    document.getElementById('modal-btn-texto').textContent = 'Confirmar Cadastro';

    // Limpar proprietário selecionado
    removerProprietario();

    document.getElementById('modal-container').classList.remove('hidden');
}

function abrirModalEditar(btn) {
    var form = document.getElementById('veiculos-registration-form');
    form.action = '/oficina-sistema/public/veiculos/editar';
    document.getElementById('veiculo-id').value = btn.dataset.id;
    form.querySelector('[name="placa"]').value = btn.dataset.placa;
    form.querySelector('[name="chassi"]').value = btn.dataset.chassi || '';   
    form.querySelector('[name="motorizacao"]').value = btn.dataset.motorizacao || '';
    form.querySelector('[name="marca"]').value = btn.dataset.marca;
    form.querySelector('[name="modelo"]').value = btn.dataset.modelo;
    form.querySelector('[name="ano"]').value = btn.dataset.ano;
    form.querySelector('[name="km"]').value = btn.dataset.km;
    form.querySelector('[name="cor"]').value = btn.dataset.cor;
    form.querySelector('[name="combustivel"]').value = btn.dataset.combustivel || '';

    // Proprietário: setar hidden e mostrar card se tiver
    var clienteId = btn.dataset.clienteId;
    var clienteNome = btn.dataset.clienteNome;

    if (clienteId && clienteNome) {
        document.getElementById('proprietario-id').value = clienteId;
        document.getElementById('proprietario-nome').textContent = clienteNome;
        document.getElementById('proprietario-info').textContent = 'ID: ' + clienteId;
        document.getElementById('proprietario-selecionado').classList.remove('hidden');
    } else {
        removerProprietario();
    }

    document.getElementById('modal-titulo').textContent = 'Editar Veículo';
    document.getElementById('modal-btn-texto').textContent = 'Salvar Alterações';
    document.getElementById('modal-container').classList.remove('hidden');
}
</script>