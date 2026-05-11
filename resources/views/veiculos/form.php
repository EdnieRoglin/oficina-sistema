<!-- Modal Overlay (Sample for 'Cadastrar Veículo') -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-on-surface/40 backdrop-blur-sm">

    <!-- Modal Surface -->
    <div class="bg-surface-container-lowest w-full max-w-4xl rounded-2xl shadow-2xl overflow-hidden flex flex-col max-h-[921px]">

        <!-- Modal Header -->
        <div class="px-8 py-6 bg-slate-50 flex items-center justify-between border-b border-outline-variant/10">
            <div>
                <h3 class="text-2xl font-extrabold font-manrope text-on-surface">
                    Novo Registro de Veículo
                </h3>
                <p class="text-xs text-on-surface-variant font-label uppercase tracking-widest mt-1">
                    Preencha os detalhes técnicos para inventário
                </p>
            </div>

            <button
                onclick="this.closest('#modal-container').innerHTML = ''"
                class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
            >
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Modal Content -->
        <div class="flex-1 overflow-y-auto p-8 space-y-10">

            <!-- Section 1: Identificação -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-8 h-8 rounded-lg bg-primary-container text-on-primary-container flex items-center justify-center font-bold">1</span>
                    <h4 class="font-manrope font-bold text-lg">Identificação</h4>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">Placa</label>
                        <input class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all font-manrope font-bold uppercase text-lg px-3 py-2" placeholder="ABC-1234" type="text"/>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">Chassi (VIN)</label>
                        <input class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all px-3 py-2" placeholder="Número do Chassi" type="text"/>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">Renavam</label>
                        <input class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all px-3 py-2" placeholder="Código Renavam" type="text"/>
                    </div>

                </div>
            </div>

            <!-- Section 2: Características -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-8 h-8 rounded-lg bg-primary-container text-on-primary-container flex items-center justify-center font-bold">2</span>
                    <h4 class="font-manrope font-bold text-lg">Características</h4>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">Marca</label>
                        <select class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all px-3 py-2">
                            <option>Selecione</option>
                            <option>Porsche</option>
                            <option>Volkswagen</option>
                            <option>Jeep</option>
                            <option>Toyota</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">Modelo</label>
                        <input class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all px-3 py-2" placeholder="Ex: 911 Carrera" type="text"/>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div class="space-y-1">
                            <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">Ano</label>
                            <input class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all px-3 py-2 text-center" placeholder="2024" type="number"/>
                        </div>
                        <div class="space-y-1">
                            <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">KM</label>
                            <input class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all px-3 py-2 text-center" placeholder="0" type="number"/>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="space-y-1">
                        <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">Cor Predominante</label>
                        <input class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all px-3 py-2" placeholder="Ex: Azul Marinho" type="text"/>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold uppercase tracking-wider text-on-surface-variant font-label ml-1">Motorização</label>
                        <input class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all px-3 py-2" placeholder="Ex: 2.0 Turbo" type="text"/>
                    </div>
                </div>
            </div>

            <!-- Section 3: Vínculo -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-8 h-8 rounded-lg bg-primary-container text-on-primary-container flex items-center justify-center font-bold">3</span>
                    <h4 class="font-manrope font-bold text-lg">Proprietário</h4>
                </div>

                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="person_search">person_search</span>

                    <input
                        class="w-full bg-surface-container-low border-0 border-b-2 border-outline border-opacity-20 focus:border-primary-container focus:ring-0 transition-all pl-12 pr-4 py-4 rounded-t-lg"
                        placeholder="Pesquisar por nome, CPF ou Telefone do Cliente..."
                        type="text"
                    />

                    <!-- Search Dropdown Suggestion -->
                    <div class="border-x border-b border-outline-variant/10 bg-slate-50 rounded-b-lg overflow-hidden">
                        <div class="p-4 hover:bg-amber-50 cursor-pointer flex items-center justify-between group transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-zinc-200 flex items-center justify-center font-bold text-zinc-600">RS</div>
                                <div>
                                    <p class="font-bold text-sm text-on-surface">Ricardo Senna</p>
                                    <p class="text-xs text-on-surface-variant">CPF: ***.456.***-01 • (11) 98765-4321</p>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-primary-container opacity-0 group-hover:opacity-100 transition-opacity" data-icon="add_circle">add_circle</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Modal Footer -->
        <div class="px-8 py-6 bg-slate-50 flex items-center justify-end gap-4 border-t border-outline-variant/10">
            <button
                onclick="this.closest('#modal-container').innerHTML = ''"
                class="w-19 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
            >
                <span class="px-6 py-3 rounded-xl font-bold text-on-surface-variant hover:bg-surface-variant transition-all">
                    Cancelar
                </span>
            </button>

            <button class="bg-primary-container text-on-primary-container px-10 py-3 rounded-lg font-manrope font-black shadow-lg hover:shadow-primary-container/20 hover:scale-[1.02] active:scale-95 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined" data-icon="save" style="font-variation-settings: 'FILL' 1;">save</span>
                Salvar Veículo
            </button>
        </div>

    </div>
</div>
