<?php $title = 'orcamento'; ?>

<?php include 'partials/header.php'; ?>
<?php require __DIR__ . '/partials/sidebar.php'; ?>

<!-- Page Content -->
<div class="p-8 @container flex flex-col gap-8 max-w-7xl mx-auto w-full">

    <!-- Section 1: Dados do Cliente -->
    <section class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden">

        <div class="bg-surface-container-low px-6 py-4 flex items-center gap-3">
            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">
                person_search
            </span>
            <h3 class="text-on-surface font-headline font-bold text-lg">
                Dados do Cliente
            </h3>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-1 @2xl:grid-cols-4 gap-6">

                <div class="col-span-1 @2xl:col-span-2">
                    <label class="block text-sm font-semibold text-on-surface-variant mb-2">
                        Buscar Cliente (Nome, CPF ou Placa)
                    </label>

                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary">
                            search
                        </span>

                        <input
                            class="w-full pl-11 pr-4 py-3 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary-container font-medium text-on-surface"
                            type="text"
                            value="João Silva Santos"
                        />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-on-surface-variant mb-2">
                        Telefone
                    </label>

                    <input
                        class="w-full px-4 py-3 bg-surface/50 border border-outline-variant/30 rounded-xl text-on-surface-variant font-medium cursor-not-allowed"
                        readonly=""
                        type="text"
                        value="(11) 98765-4321"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-on-surface-variant mb-2">
                        CPF/CNPJ
                    </label>

                    <input
                        class="w-full px-4 py-3 bg-surface/50 border border-outline-variant/30 rounded-xl text-on-surface-variant font-medium cursor-not-allowed"
                        readonly=""
                        type="text"
                        value="123.456.789-00"
                    />
                </div>

                <div class="col-span-1 @2xl:col-span-2">
                    <label class="block text-sm font-semibold text-on-surface-variant mb-2">
                        Veículo
                    </label>

                    <input
                        class="w-full px-4 py-3 bg-surface/50 border border-outline-variant/30 rounded-xl text-on-surface-variant font-medium cursor-not-allowed"
                        readonly=""
                        type="text"
                        value="Volkswagen Golf GTI 2.0 Turbo 2020"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-on-surface-variant mb-2">
                        Placa
                    </label>

                    <input
                        class="w-full px-4 py-3 bg-surface/50 border border-outline-variant/30 rounded-xl text-on-surface-variant font-bold uppercase tracking-wider cursor-not-allowed"
                        readonly=""
                        type="text"
                        value="BRA2E19"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-on-surface-variant mb-2">
                        Km Atual
                    </label>

                    <input
                        class="w-full px-4 py-3 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary-container font-medium text-on-surface"
                        placeholder="45.000"
                        type="text"
                    />
                </div>

            </div>
        </div>

    </section>

        <!-- Section 2: Itens do Orçamento -->
    <section class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden">

        <div class="bg-surface-container-low px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">
                    build
                </span>
                <h3 class="text-on-surface font-headline font-bold text-lg">
                    Itens do Orçamento
                </h3>
            </div>

            <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed-variant text-xs font-bold rounded-full">
                3 Itens adicionados
            </span>
        </div>

        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full border-collapse">

                <thead>
                    <tr class="bg-surface-container-high/50 text-left border-b border-outline-variant/20">
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider w-1/3">Descrição</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider w-1/2">Categoria</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider text-center">Qtd</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Preço Unit.</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Total</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider"></th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-outline-variant/10">

                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4">
                            <div class="font-medium text-sm text-on-surface">
                                Pastilha de Freio Dianteira - Brembo Sinterizada
                            </div>
                            <div class="text-[10px] text-outline uppercase font-bold mt-0.5">
                                SKU: BRA-7455-BR
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <span class="text-xs font-medium px-2 py-1 bg-surface-container-high rounded text-on-surface-variant">
                                Freios
                            </span>
                        </td>

                        <td class="px-6 py-4 text-center">
                            <input
                                class="w-16 text-center bg-surface border border-outline-variant/30 text-sm rounded-lg py-1.5"
                                type="number"
                                value="1"
                            />
                        </td>

                        <td class="px-6 py-4 font-medium text-sm">
                            <div class="relative w-28">
                                <span class="absolute left-2 top-1/2 -translate-y-1/2 text-xs font-bold text-on-surface-variant">R$</span>
                                <input
                                    class="w-full pl-7 pr-2 py-1.5 bg-surface border border-outline-variant/30 text-sm rounded-lg font-medium text-on-surface focus:ring-primary-container"
                                    type="text"
                                    value="480,00"
                                />
                            </div>
                        </td>

                        <td class="px-6 py-4 font-bold text-sm text-on-surface">
                            R$ 480,00
                        </td>

                        <td class="px-6 py-4 text-right">
                            <button class="text-error hover:bg-error-container p-1.5 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-xl">delete</span>
                            </button>
                        </td>
                    </tr>

                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4">
                            <div class="font-medium text-sm text-on-surface">
                                Óleo Motor Castrol EDGE 5W-30 LL
                            </div>
                            <div class="text-[10px] text-outline uppercase font-bold mt-0.5">
                                SKU: OIL-CST-5W30
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <span class="text-xs font-medium px-2 py-1 bg-surface-container-high rounded text-on-surface-variant">
                                Manutenção
                            </span>
                        </td>

                        <td class="px-6 py-4 text-center">
                            <input
                                class="w-16 text-center bg-surface border border-outline-variant/30 text-sm rounded-lg py-1.5"
                                type="number"
                                value="6"
                            />
                        </td>

                        <td class="px-6 py-4 font-medium text-sm">
                            <div class="relative w-28">
                                <span class="absolute left-2 top-1/2 -translate-y-1/2 text-xs font-bold text-on-surface-variant">R$</span>
                                <input
                                    class="w-full pl-7 pr-2 py-1.5 bg-surface border border-outline-variant/30 text-sm rounded-lg font-medium text-on-surface focus:ring-primary-container"
                                    type="text"
                                    value="95,00"
                                />
                            </div>
                        </td>

                        <td class="px-6 py-4 font-bold text-sm text-on-surface">
                            R$ 570,00
                        </td>

                        <td class="px-6 py-4 text-right">
                            <button class="text-error hover:bg-error-container p-1.5 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-xl">delete</span>
                            </button>
                        </td>
                    </tr>

                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4">
                            <div class="font-medium text-sm text-on-surface">
                                Mão de Obra: Troca de Pastilhas e Fluido
                            </div>
                            <div class="text-[10px] text-outline uppercase font-bold mt-0.5">
                                Mecânico: Rafael S.
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <span class="text-xs font-medium px-2 py-1 bg-surface-container-high rounded text-on-surface-variant">
                                Serviço Técnico
                            </span>
                        </td>

                        <td class="px-6 py-4 text-center">
                            <input
                                class="w-16 text-center bg-surface border border-outline-variant/30 text-sm rounded-lg py-1.5"
                                type="number"
                                value="1.5"
                            />
                        </td>

                        <td class="px-6 py-4 font-medium text-sm">
                            <div class="relative w-28">
                                <span class="absolute left-2 top-1/2 -translate-y-1/2 text-xs font-bold text-on-surface-variant">R$</span>
                                <input
                                    class="w-full pl-7 pr-2 py-1.5 bg-surface border border-outline-variant/30 text-sm rounded-lg font-medium text-on-surface focus:ring-primary-container"
                                    type="text"
                                    value="180,00"
                                />
                            </div>
                        </td>

                        <td class="px-6 py-4 font-bold text-sm text-on-surface">
                            R$ 270,00
                        </td>

                        <td class="px-6 py-4 text-right">
                            <button class="text-error hover:bg-error-container p-1.5 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-xl">delete</span>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="p-4 bg-surface-container-lowest flex justify-center">
            <button 
	            hx-get="partials/modal_orcamento.php"
                hx-target="#modal-container"
	                class="flex items-center gap-2 px-6 py-3 border-2 border-dashed border-primary-container text-primary-container hover:bg-primary-container/10 rounded-xl transition-all group">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">
                    add_circle
                </span>
                <span class="font-bold text-sm">
                    Adicionar Novo Item ao Orçamento
                </span>
            </button>
        </div>

    </section>

        <div class="grid grid-cols-1 @4xl:grid-cols-3 gap-8">

        <!-- Observations -->
        <div class="@4xl:col-span-2 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 p-6">
            <label class="block text-sm font-bold text-on-surface mb-3">
                Observações Adicionais
            </label>

            <textarea
                class="w-full p-4 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary-container text-sm text-on-surface resize-none"
                placeholder="Ex: Cliente relatou barulho metálico ao frear em baixas velocidades. Veículo necessita de lavagem após serviço."
                rows="6"
            ></textarea>
        </div>

        <!-- Section 3: Resumo do Orçamento -->
        <div class="bg-surface-container-lowest rounded-xl shadow-md border border-outline-variant/10 p-6 flex flex-col gap-6">

            <h3 class="text-on-surface font-headline font-bold text-lg border-b border-outline-variant/10 pb-4">
                Resumo Final
            </h3>

            <div class="space-y-3">

                <div class="flex justify-between text-sm">
                    <span class="text-on-surface-variant font-medium">Subtotal de Peças:</span>
                    <span class="text-on-surface font-semibold">R$ 1.050,00</span>
                </div>

                <div class="flex justify-between text-sm">
                    <span class="text-on-surface-variant font-medium">Subtotal de Serviços:</span>
                    <span class="text-on-surface font-semibold">R$ 270,00</span>
                </div>

                <div class="flex items-center justify-between gap-4 pt-2">
                    <label class="text-sm font-bold text-primary">Desconto:</label>

                    <div class="relative flex-1 max-w-[120px]">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-xs font-bold text-primary">
                            R$
                        </span>

                        <input
                            class="w-full pl-8 pr-3 py-2 bg-primary-fixed/30 border-none rounded-lg text-right font-bold text-primary focus:ring-1 focus:ring-primary"
                            type="text"
                            value="20,00"
                        />
                    </div>
                </div>

            </div>

            <div class="mt-auto pt-6 border-t border-outline-variant/20">
                <div class="flex flex-col items-end gap-1">
                    <span class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">
                        Valor Total
                    </span>

                    <div class="text-4xl font-headline font-extrabold text-primary-container drop-shadow-sm">
                        R$ 1.300,00
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <button 
	                hx-get="partials/modal_impressao.php"
	                hx-target="#modal-container"
	                    class="w-full flex items-center justify-center gap-2 py-4 bg-primary-container hover:bg-surface-tint text-on-primary-fixed font-black rounded-xl shadow-lg shadow-primary-container/20 transition-all active:scale-[0.98]">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">
                        check_circle
                    </span>
                    SALVAR ORÇAMENTO
                </button>
            </div>

        </div>
    </div>

</div>
</main>
</div>
    <div id="modal-container"></div>
</body>
</html>