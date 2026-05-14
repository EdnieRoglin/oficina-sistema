<?php
require __DIR__ . '/../layouts/header.php';
require __DIR__ . '/../layouts/sidebar.php';
?>

<!-- Content Area -->
<div class="mt-16 p-8 flex-1 overflow-y-auto space-y-8 bg-surface">

    <div class="flex flex-col lg:flex-row gap-8 items-start">

        <!-- Card 1: Categorias de Serviços -->
        <section class="flex-1 w-full bg-white rounded-xl shadow-sm border border-transparent overflow-hidden">

            <div class="p-6 border-b border-surface-container-high">
                <div class="flex items-center gap-2 mb-6">
                    <span class="material-symbols-outlined text-primary" data-icon="home_repair_service">
                        home_repair_service
                    </span>
                    <h3 class="font-headline text-lg font-bold text-on-surface">
                        Categorias de Serviços
                    </h3>
                </div>

                <div class="flex gap-3">
                    <div class="flex-1 bg-surface-container-high rounded-lg flex items-center px-4 border-b-2 border-outline/20 focus-within:border-primary transition-colors group">
                        <span class="material-symbols-outlined text-outline/50 mr-2 group-focus-within:text-primary" data-icon="label">
                            label
                        </span>
                        <input
                            class="bg-transparent border-none focus:ring-0 text-sm py-3 w-full text-on-background placeholder:text-on-surface-variant/50"
                            placeholder="Nome da categoria"
                            type="text"
                        />
                    </div>

                    <button class="bg-primary-container hover:bg-[#cc8500] text-on-primary-container font-bold px-6 py-3 rounded-lg transition-all active:scale-95 flex items-center gap-2 whitespace-nowrap">
                        <span class="material-symbols-outlined" data-icon="add">add</span>
                        Adicionar
                    </button>
                </div>
            </div>

            <div class="p-0">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low text-[10px] uppercase tracking-wider text-on-surface-variant font-bold">
                        <tr>
                            <th class="px-6 py-4">Nome da Categoria</th>
                            <th class="px-6 py-4">Serviços Vinculados</th>
                            <th class="px-6 py-4 text-right">Ações</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-surface-container-low">


                                            <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4 font-bold text-on-background">Motor e Transmissão</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                    12 serviços
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </button>
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-error">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4 font-bold text-on-background">Suspensão e Freios</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                    24 serviços
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </button>
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-error">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4 font-bold text-on-background">Elétrica e Eletrônica</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                    18 serviços
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </button>
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-error">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4 font-bold text-on-background">Ar Condicionado</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                    8 serviços
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </button>
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-error">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>


                <!-- Card 2: Categorias de Peças -->
        <section class="flex-1 w-full bg-white rounded-xl shadow-sm border border-transparent overflow-hidden">
            <div class="p-6 border-b border-surface-container-high">
                <div class="flex items-center gap-2 mb-6">
                    <span class="material-symbols-outlined text-primary" data-icon="settings_input_component">settings_input_component</span>
                    <h3 class="font-headline text-lg font-bold text-on-surface">Categorias de Peças</h3>
                </div>

                <div class="flex gap-3">
                    <div class="flex-1 bg-surface-container-high rounded-lg flex items-center px-4 border-b-2 border-outline/20 focus-within:border-primary transition-colors group">
                        <span class="material-symbols-outlined text-outline/50 mr-2 group-focus-within:text-primary" data-icon="inventory_2">inventory_2</span>
                        <input class="bg-transparent border-none focus:ring-0 text-sm py-3 w-full text-on-background placeholder:text-on-surface-variant/50" placeholder="Nome da categoria" type="text"/>
                    </div>

                    <button class="bg-primary-container hover:bg-[#cc8500] text-on-primary-container font-bold px-6 py-3 rounded-lg transition-all active:scale-95 flex items-center gap-2 whitespace-nowrap">
                        <span class="material-symbols-outlined" data-icon="add">add</span>
                        Adicionar
                    </button>
                </div>
            </div>

            <div class="p-0">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low text-[10px] uppercase tracking-wider text-on-surface-variant font-bold">
                        <tr>
                            <th class="px-6 py-4">Nome da Categoria</th>
                            <th class="px-6 py-4">Peças Vinculadas</th>
                            <th class="px-6 py-4 text-right">Ações</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-surface-container-low">
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4 font-bold text-on-background">Consumíveis e Fluidos</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                    84 itens
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </button>
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-error">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4 font-bold text-on-background">Componentes de Freio</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                    156 itens
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </button>
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-error">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4 font-bold text-on-background">Filtros</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                    42 itens
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </button>
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-error">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4 font-bold text-on-background">Suspensão Dianteira</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                    98 itens
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                    </button>
                                    <button class="p-2 hover:bg-white rounded-lg text-on-surface-variant transition-colors hover:text-error">
                                        <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>