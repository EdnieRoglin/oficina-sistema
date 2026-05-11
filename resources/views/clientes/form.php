<!-- Section Preview: Modal de Cadastro (Demonstrative) -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-on-surface/40 backdrop-blur-sm">

    <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-6 flex items-center gap-3">
    </h3>

    <div class="max-w-4xl mx-auto bg-surface-container-lowest rounded-3xl shadow-2xl border border-outline-variant/20 overflow-hidden">

        <div class="bg-slate-900 px-8 py-6 flex items-center justify-between">
            <div>
                <h4 class="text-white text-xl font-bold">Cadastrar Novo Cliente</h4>
                <p class="text-slate-400 text-xs uppercase tracking-widest mt-1">
                    Preencha os campos técnicos abaixo
                </p>
            </div>

            <button
                onclick="this.closest('#modal-container').innerHTML = ''"
                class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
            >
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- Column 1: Personal Data -->
            <div class="space-y-6">

                <div class="flex items-center gap-3 mb-4 text-amber-500">
                    <span class="material-symbols-outlined" data-icon="person">person</span>
                    <h5 class="text-xs font-black uppercase tracking-widest">
                        Dados Pessoais / Identificação
                    </h5>
                </div>

                <div class="space-y-4">

                    <div>
                        <label class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-wider mb-1">
                            Nome Completo ou Razão Social
                        </label>
                        <input
                            type="text"
                            placeholder="Ex: João da Silva Santos"
                            class="w-full bg-surface-container-high border-b-2 border-outline-variant focus:border-amber-500 rounded-t px-4 py-3 outline-none transition-all text-sm"
                        />
                    </div>

                    <div class="grid grid-cols-2 gap-4">

                        <div>
                            <label class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-wider mb-1">
                                Tipo de Documento
                            </label>
                            <select class="w-full bg-surface-container-high border-b-2 border-outline-variant focus:border-amber-500 rounded-t px-4 py-3 outline-none transition-all text-sm appearance-none">
                                <option>CPF</option>
                                <option>CNPJ</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-wider mb-1">
                                Número
                            </label>
                            <input
                                type="text"
                                placeholder="000.000.000-00"
                                class="w-full bg-surface-container-high border-b-2 border-outline-variant focus:border-amber-500 rounded-t px-4 py-3 outline-none transition-all text-sm"
                            />
                        </div>

                    </div>

                </div>
            </div>

            <!-- Column 2: Contact/Address -->
            <div class="space-y-6">

                <div class="flex items-center gap-3 mb-4 text-amber-500">
                    <span class="material-symbols-outlined" data-icon="location_on">location_on</span>
                    <h5 class="text-xs font-black uppercase tracking-widest">
                        Contato e Endereço
                    </h5>
                </div>

                <div class="space-y-4">

                    <div class="grid grid-cols-2 gap-4">

                        <div>
                            <label class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-wider mb-1">
                                WhatsApp
                            </label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-emerald-500 text-sm" data-icon="chat">
                                    chat
                                </span>
                                <input
                                    type="text"
                                    placeholder="(00) 00000-0000"
                                    class="w-full bg-surface-container-high border-b-2 border-outline-variant focus:border-amber-500 rounded-t pl-10 pr-4 py-3 outline-none transition-all text-sm"
                                />
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-wider mb-1">
                                Email
                            </label>
                            <input
                                type="email"
                                placeholder="contato@exemplo.com"
                                class="w-full bg-surface-container-high border-b-2 border-outline-variant focus:border-amber-500 rounded-t px-4 py-3 outline-none transition-all text-sm"
                            />
                        </div>

                    </div>

                    <div>
                        <label class="block text-[10px] font-bold text-on-surface-variant uppercase tracking-wider mb-1">
                            Logradouro / Número
                        </label>
                        <input
                            type="text"
                            placeholder="Rua, Avenida, Praça, nº"
                            class="w-full bg-surface-container-high border-b-2 border-outline-variant focus:border-amber-500 rounded-t px-4 py-3 outline-none transition-all text-sm"
                        />
                    </div>

                </div>
            </div>

        </div>

        <div class="bg-surface-container-low px-8 py-6 flex items-center justify-end gap-4">

            <button
                onclick="this.closest('#modal-container').innerHTML = ''"
                class="w-19 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant active:scale-90 duration-150"
            >
                <span class="px-6 py-3 rounded-xl font-bold text-on-surface-variant hover:bg-surface-variant transition-all">
                    Cancelar
                </span>
            </button>

            <button class="bg-gradient-to-br from-primary to-primary-container px-10 py-3 rounded-xl font-bold text-white shadow-lg shadow-amber-500/30 active:scale-95 transition-all">
                Salvar Cliente
            </button>

        </div>

    </div>

</div>

<!-- Floating Action Summary (Industrial Feel) -->
<div class="fixed bottom-8 right-8 z-50 flex flex-col gap-4">
    <button class="w-14 h-14 bg-slate-900 text-white rounded-2xl flex items-center justify-center shadow-xl hover:bg-slate-800 transition-all group overflow-hidden">
        <span class="material-symbols-outlined group-hover:scale-125 transition-transform" data-icon="bolt">
            bolt
        </span>
    </button>
</div>
