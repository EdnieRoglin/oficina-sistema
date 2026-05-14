

<!-- Modal Backdrop -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-on-surface/40 backdrop-blur-sm">

    <!-- Modal Content (The Industrial Atelier Card) -->
    <div class="relative w-full max-w-2xl bg-surface-container-lowest shadow-2xl rounded-xl overflow-hidden transition-all transform scale-100">

        <!-- Header -->
        <div class="flex items-center justify-between px-8 py-6 border-b border-outline-variant/20">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-on-primary-container">
                    <span class="material-symbols-outlined" data-icon="handyman">handyman</span>
                </div>
                <h2 class="font-headline font-bold text-xl tracking-tight text-on-surface">
                    Cadastrar Serviço
                </h2>
            </div>

            <button
                onclick="this.closest('#modal-container').innerHTML = ''"
                class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
            >
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Modal Body -->
        <form class="p-8 space-y-8" id="service-registration-form">

            <!-- Identification Section -->
            <div class="space-y-4">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Identificação
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Nome do Serviço</label>
                        <input class="speed-input rounded-t-lg px-4 py-3 text-sm font-medium focus:ring-0" placeholder="Ex: Troca de Óleo Sintético" type="text"/>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Código Interno</label>
                        <input class="speed-input rounded-t-lg px-4 py-3 text-sm font-medium focus:ring-0" placeholder="REF-001" type="text"/>
                    </div>
                </div>
            </div>

            <!-- Classification & Pricing -->
            <div class="space-y-4">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Classificação e Precificação
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Categoria</label>
                        <select class="speed-input rounded-t-lg px-4 py-3 text-sm font-medium focus:ring-0 appearance-none">
                            <option value="mecanica">Mecânica</option>
                            <option value="eletrica">Elétrica</option>
                            <option value="suspensao">Suspensão</option>
                            <option value="freios">Sistema de Freios</option>
                            <option value="preventiva">Preventiva</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">
                            Preço Padrão de Mão de Obra (R$)
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sm font-bold text-primary">R$</span>
                            <input class="speed-input w-full rounded-t-lg pl-10 pr-4 py-3 text-sm font-headline font-bold focus:ring-0" placeholder="0,00" type="number"/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="space-y-4">
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Descrição do Trabalho
                    </span>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-medium text-on-surface-variant ml-1">Procedimento Padrão</label>
                    <textarea class="speed-input rounded-t-lg px-4 py-3 text-sm font-medium focus:ring-0 resize-none" placeholder="Descreva os passos técnicos necessários para este serviço..." rows="3"></textarea>
                </div>
            </div>

        </form>

        <!-- Footer -->
        <div class="flex items-center justify-end gap-4 px-8 py-6 bg-surface-container-low border-t border-outline-variant/10">

            <button
                onclick="this.closest('#modal-container').innerHTML = ''"
                class="w-19 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
            >
                <span class="px-6 py-3 rounded-xl font-bold text-on-surface-variant hover:bg-surface-variant transition-all">
                    Cancelar
                </span>
            </button>

            <button
                class="flex items-center gap-2 px-8 py-3 bg-primary-container hover:bg-primary transition-all text-on-primary-container hover:text-white font-bold text-sm rounded-lg shadow-lg active:scale-95 shadow-primary-container/20"
                form="service-registration-form"
                type="submit"
            >
                <span class="material-symbols-outlined text-xl" data-icon="save">save</span>
                Confirmar Cadastro
            </button>

        </div>

    </div>
</div>
