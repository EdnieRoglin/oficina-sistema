<!-- Modal Backdrop -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-on-surface/40 backdrop-blur-sm">

    <!-- Modal Surface -->
    <div class="bg-surface-container-lowest w-full max-w-2xl rounded-xl shadow-2xl flex flex-col overflow-hidden animate-in fade-in zoom-in duration-300">

        <!-- Modal Header -->
        <header class="flex items-center justify-between px-8 py-6 border-b border-outline-variant/20">

            <div class="flex items-center gap-3">
                <div class="bg-primary-container/20 p-2 rounded-lg">
                    <span class="material-symbols-outlined text-amber-600" style="font-variation-settings: 'FILL' 1;">
                        inventory_2
                    </span>
                </div>

                <div>
                    <h2 id="modal-titulo" class="font-headline font-bold text-xl text-on-surface tracking-tight">
                        Cadastrar Peça
                    </h2>
                    <p class="text-xs font-medium text-on-surface-variant/70 uppercase tracking-widest">
                        Controle de Inventário
                    </p>
                </div>
            </div>

            <button
                onclick="this.closest('#modal-container').innerHTML = ''"
                class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
            >
                <span class="material-symbols-outlined">close</span>
            </button>

        </header>

        <!-- Modal Content (Form) -->
        <form class="p-8 space-y-8" id="pecas-registration-form" method="POST" action="/oficina-sistema/public/pecas/adicionar">

            <input type="hidden" name="id" id="peca-id" value=""/>

            <!-- Section 1: Basic Info -->  
            <div class="space-y-4">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Identificação
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">
                            Nome da Peça
                        </label>
                        <input
                            type="text"
                            placeholder="ex: Pastilha de Freio"
                            name="nome"
                            class="speed-input w-full rounded-t-lg pl-10 pr-4 py-3 text-sm font-headline font-bold focus:ring-0"
                            required
                        />
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">
                            Código/Referência
                        </label>
                        <input
                            type="text"
                            placeholder="ex: BRK-5520"
                            name="codigo"
                            class="speed-input w-full rounded-t-lg pl-10 pr-4 py-3 text-sm font-headline font-bold focus:ring-0"
                            required
                        />
                    </div>

                </div>
            </div>

            <!-- Section 2: Classification -->
            <div class="space-y-4">

                <div class="flex items-center gap-2 mb-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Classificação e Precificação
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">
                            Categoria
                        </label>
                        <select name="categoria_id" class="speed-input rounded-t-lg px-4 py-3 text-sm font-medium focus:ring-0 appearance-none">
                            <?php foreach($categorias as $categoria):?>
                                <option value="<?= $categoria['id'] ?>"><?= htmlspecialchars($categoria['nome']) ?></option>
                            <?php endforeach?>
                            </select>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">
                            Fabricante/Marca
                        </label>
                        <input
                            type="text"
                            placeholder="ex: Brembo / Bosch"
                            name="marca"
                            class="speed-input w-full rounded-t-lg pl-10 pr-4 py-3 text-sm font-headline font-bold focus:ring-0"
                            required
                        />
                    </div>

                </div>
            </div>

            <!-- Section 3: Values & Stock -->
            <div class="space-y-4">

                <div class="flex items-center gap-2 mb-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Precificação e Estoque
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">
                            Preço de Custo (R$)
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sm font-bold text-primary">R$</span>
                            <input
                                type="number"
                                placeholder="0,00"
                                name="preco_custo"
                                class="speed-input w-full rounded-t-lg pl-10 pr-4 py-3 text-sm font-headline font-bold focus:ring-0"
                                required
                            />
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">
                            Preço Venda (R$)
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sm font-bold text-primary">R$</span>
                            <input
                                type="number"
                                placeholder="0,00"
                                name="preco_venda"
                                class="speed-input w-full rounded-t-lg pl-10 pr-4 py-3 text-sm font-headline font-bold focus:ring-0"
                                required
                            />
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">
                            Estoque
                        </label>
                        <input
                            type="number"
                            placeholder="0"
                            name="quantidade"
                            class="speed-input w-full rounded-t-lg pl-10 pr-4 py-3 text-sm font-headline font-bold focus:ring-0"
                            required
                        />
                    </div>

                </div>
            </div>

            <!-- Section 4: Description -->
            <div class="space-y-4">

                <div class="flex items-center gap-2 mb-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Observações
                    </span>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-medium text-on-surface-variant ml-1">
                        Descrição Técnica ou Aplicação
                    </label>
                    <textarea
                        rows="4"
                        placeholder="Detalhes técnicos, compatibilidade de modelos, especificações de material..."
                        name="observacao"
                        class="speed-input w-full rounded-t-lg pl-10 pr-4 py-3 text-sm font-headline font-bold focus:ring-0"
                    ></textarea>
                </div>

            </div>

            <!-- Submit button inside the form -->
            <div class="flex items-center justify-end gap-4 pt-6 border-t border-outline-variant/10">

                <button
                    type="button"
                    onclick="this.closest('#modal-container').innerHTML = ''"
                    class="w-19 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
                >
                    <span class="px-6 py-3 rounded-xl font-bold text-on-surface-variant hover:bg-surface-variant transition-all">
                        Cancelar
                    </span>
                </button>

                <button
                    id="modal-btn-submit"
                    class="flex items-center gap-2 px-8 py-3 bg-primary-container hover:bg-primary transition-all text-on-primary-container hover:text-white font-bold text-sm rounded-lg shadow-lg active:scale-95 shadow-primary-container/20"
                    type="submit"
                >
                    <span class="material-symbols-outlined text-xl" data-icon="save">save</span>
                    <span id="modal-btn-texto">Confirmar Cadastro</span>
                </button>

            </div>

        </form>

    </div>
</div>
