<?php
require __DIR__ . '/../layouts/header.php';
require __DIR__ . '/../layouts/sidebar.php';
?>

<!-- Main Content -->
<div class="pt-20 px-8 pb-12 w-full max-w-7xl mx-auto">

    <!-- Bento Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div class="space-y-1">
            <h2 class="text-4xl font-black text-on-surface font-headline tracking-tight">
                Cadastro de Clientes
            </h2>
            <p class="text-on-surface-variant font-medium">
                Gerencie sua lista de clientes
            </p>
        </div>

        <button
            onclick="abrirModalNovo()";
            class="bg-primary-container hover:bg-amber-500 text-on-primary-container font-bold px-8 py-4 rounded-xl flex items-center gap-3 shadow-lg shadow-amber-500/10 transition-all active:scale-95 group"
        >
            <span class="material-symbols-outlined group-hover:rotate-90 transition-transform">
                add_circle
            </span>
            <span class="font-headline tracking-wide uppercase text-sm">
                Novo Cliente
            </span>
        </button>
    </div>

    
 <!-- Dashboard Style Stats Grid (Bento) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Card 1 -->
        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col gap-2 border border-outline-variant/10">
            <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest font-semibold">
                Total de Clientes
            </span>
            <span class="text-3xl font-headline font-extrabold text-on-surface"><?= count($clientes)?></span>
            <div class="flex items-center gap-1 text-tertiary text-xs">
                <span class="material-symbols-outlined text-sm">trending_up</span>
                <span>4 novos este mês</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col gap-2 border border-outline-variant/10">
            <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest font-semibold">
                Ticket Médio de Clientes
            </span>
            <span class="text-3xl font-headline font-extrabold text-on-surface">R$ 450,00</span>
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
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold">Identificação</th>
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold">Contato</th>
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold">Frota</th>
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold text-center">Histórico &amp; LTV</th>
                        <th class="px-6 py-4 font-headline text-xs uppercase tracking-wider text-on-surface-variant font-extrabold text-right">Ações</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-outline-variant/10">
                    <!-- (linhas mantidas exatamente como enviadas, apenas formatadas) -->
                    <!-- Row 2 -->
                     <?php foreach ($clientes as $cliente):?>
<tr class="hover:bg-surface-container-low/50 transition-colors group">
<td class="px-6 py-5">
<p class="font-bold text-slate-900"><?= htmlspecialchars($cliente['nome'])?></p>
<p class="text-xs text-on-surface-variant font-mono"><?= htmlspecialchars($cliente['cpf_cnpj'])?></p>
</td>
<td class="px-6 py-5">
<div class="flex flex-col gap-1">
<span class="flex items-center gap-2 text-xs font-medium text-slate-600">
<span class="material-symbols-outlined text-amber-500 text-sm" data-icon="chat">chat</span>
                                        <?= htmlspecialchars($cliente['telefone'])?>
                                    </span>
<span class="flex items-center gap-2 text-xs font-medium text-slate-600">
<span class="material-symbols-outlined text-slate-400 text-sm" data-icon="mail">mail</span>
                                        <?= htmlspecialchars($cliente['email'])?>
                                    </span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex flex-wrap gap-2">
<span class="bg-surface-container-high px-2 py-1 rounded border border-outline-variant/30 text-[10px] font-bold text-slate-700 tracking-wider">KRT-1010</span>
<span class="text-xs text-slate-400 font-medium">+5 veículos</span>
</div>
</td>
<td class="px-6 py-5">
<div class="flex flex-col">
<span class="text-xs text-on-surface-variant mb-1">Última: <strong class="text-slate-900">28/05/2023</strong></span>
<span class="font-manrope font-bold text-tertiary">R$ 15.890,20</span>
</div>
</td>

<td class="px-6 py-5 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 hover:bg-surface-container-high rounded-lg text-on-surface-variant transition-colors active:scale-90">
<span class="material-symbols-outlined" data-icon="history">history</span>
</button>
<button 
    onclick="abrirModalEditar(this)"
    data-id="<?= $cliente['id'] ?>"
    data-nome="<?= htmlspecialchars($cliente['nome']) ?>"
    data-cpf-cnpj="<?= htmlspecialchars($cliente['cpf_cnpj'] ?? '') ?>"
    data-cpf_cnpj="<?= htmlspecialchars($cliente['telefone'])?>"
    data-email="<?= $cliente['email'] ?>"
    data-endereco="<?= htmlspecialchars($cliente['endereco'])?>"
    class="p-2 hover:bg-surface-container-high rounded-lg text-on-surface-variant transition-colors active:scale-90">
<span class="material-symbols-outlined">edit_square</span>
</button>
</div>
</td>
</tr>

                        <?php endforeach ?>
                </tbody>
            </table>
        </div>


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
    var form = document.getElementById('clientes-registration-form');
    form.reset();
    form.action = '/oficina-sistema/public/clientes/adicionar';
    document.getElementById('cliente-id').value = '';
    document.getElementById('modal-titulo').textContent = 'Novo Cliente';
    document.getElementById('modal-btn-texto').textContent = 'Confirmar Cadastro';
    document.getElementById('modal-container').classList.remove('hidden');
}

function abrirModalEditar(btn) {
    var form = document.getElementById('clientes-registration-form');
    form.action = '/oficina-sistema/public/clientes/editar';
    document.getElementById('cliente-id').value = btn.dataset.id;
    form.querySelector('[name="nome"]').value = btn.dataset.nome;
    form.querySelector('[name="cpf_cnpj"]').value = btn.dataset.cpf_cnpj;
    form.querySelector('[name="telefone"]').value = btn.dataset.telefone;
    form.querySelector('[name="email"]').value = btn.dataset.email;
    form.querySelector('[name="endereco"]').value = btn.dataset.endereco;
    document.getElementById('modal-titulo').textContent = 'Editar Cliente';
    document.getElementById('modal-btn-texto').textContent = 'Salvar Alterações';
    document.getElementById('modal-container').classList.remove('hidden');
}
</script>