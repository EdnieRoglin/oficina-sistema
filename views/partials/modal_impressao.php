<div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-on-surface/40 backdrop-blur-sm">
    
    <div class="relative w-full max-w-4xl bg-surface-container-lowest rounded-lg shadow-2xl border border-outline-variant/20 flex flex-col max-h-[90vh] overflow-hidden">

        <!-- Document Toolbar -->
    <section class="no-print flex flex-wrap justify-between items-center gap-4 bg-surface-container-lowest p-4 rounded-xl shadow-sm border border-outline-variant/10">
        <div class="flex items-center gap-2">
            <button class="flex items-center gap-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface px-4 py-2 rounded-lg font-semibold text-sm transition-all active:scale-95" onclick="window.print()">
                <span class="material-symbols-outlined text-lg">print</span> Imprimir
            </button>
                <button class="flex items-center gap-2 bg-surface-container-high hover:bg-surface-container-highest text-on-surface px-4 py-2 rounded-lg font-semibold text-sm transition-all active:scale-95">
                    <span class="material-symbols-outlined text-lg">picture_as_pdf</span> PDF
                </button>
        </div>
        <div class="flex items-center gap-2">
            <button class="flex items-center gap-2 bg-tertiary-container/20 text-on-tertiary-container px-4 py-2 rounded-lg font-semibold text-sm hover:bg-tertiary-container/30 transition-all">
                <span class="material-symbols-outlined text-lg">mail</span> E-mail
            </button>
                <button class="flex items-center gap-2 bg-green-100 text-green-800 px-4 py-2 rounded-lg font-semibold text-sm hover:bg-green-200 transition-all">
                    <span class="material-symbols-outlined text-lg">chat</span> WhatsApp
                </button>
                    <button class="flex items-center gap-2 bg-primary-container text-on-primary-container px-4 py-2 rounded-lg font-bold text-sm hover:bg-amber-500 transition-all active:scale-95 shadow-sm">
                        <span class="material-symbols-outlined text-lg">content_copy</span> Duplicar
                    </button>
        </div>
    </section>

        <header class="p-8 md:p-10 border-b-2 border-primary-container bg-surface-container-lowest sticky top-0 z-10">
            <button onclick="this.closest('#modal-container').innerHTML = ''" class="absolute top-4 right-4 p-2 hover:bg-surface-container-high rounded-full transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>

            <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-primary-container rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-on-primary-container" style="font-variation-settings: 'FILL' 1;">precision_manufacturing</span>
                    </div>
                    <div>
                        <h1 class="font-headline font-extrabold text-2xl tracking-tighter text-on-background">AR Retífica</h1>
                        <p class="font-label text-[12px] uppercase tracking-widest text-on-surface-variant font-bold">CNPJ: 12.345.678/0001-90</p>
                        <p class="font-label text-[12px] uppercase tracking-widest text-on-surface-variant font-bold">Tel: (11) 98765-4321</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="bg-primary-container/10 px-4 py-2 rounded-lg inline-block mb-1">
                        <span class="font-headline font-bold text-primary">ORÇAMENTO #2023-0842</span>
                    </div>
                    <p class="text-[11px] text-on-surface-variant font-bold uppercase">Data de Emissão: 24/10/2023</p>
                    <p class="text-[11px] text-on-surface-variant font-bold uppercase">Válido até: 30/10/2023</p>
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8 md:p-10 space-y-10 custom-scrollbar">
            
            <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-surface-container-low p-5 rounded-xl border border-outline-variant/10">
                    <h3 class="font-headline font-bold text-on-surface-variant text-xs uppercase tracking-widest mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-lg">person</span> DADOS DO CLIENTE
                    </h3>
                    <p class="font-bold text-on-surface">Ricardo Mendonça de Alcantara</p>
                    <p class="text-xs text-on-surface-variant">(11) 99123-4455</p>
                </div>
                <div class="bg-surface-container-low p-5 rounded-xl border border-outline-variant/10">
                    <h3 class="font-headline font-bold text-on-surface-variant text-xs uppercase tracking-widest mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-lg">directions_car</span> VEÍCULO
                    </h3>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <p class="text-on-surface-variant font-medium">MODELO: <span class="font-bold text-on-surface">Audi A4</span></p>
                        <p class="text-on-surface-variant font-medium">PLACA: <span class="font-bold text-on-surface">ABC-1234</span></p>
                        <p></p>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <p class="text-on-surface-variant font-medium">ANO: <span class="font-bold text-on-surface">Audi A4</span></p>
                        <p class="text-on-surface-variant font-medium">KM ATUAL: <span class="font-bold text-on-surface">ABC-1234</span></p>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="font-headline font-bold text-lg mb-4 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-primary-container rounded-full"></span> Mão de Obra
                </h2>
                <table class="w-full text-sm">
                    <thead class="bg-surface-container text-on-surface-variant uppercase text-[10px] font-bold tracking-widest">
                        <tr>
                            <th class="py-2 px-4 text-left">Descrição</th>
                            <th class="py-2 px-4 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/10">
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="py-4 px-4">Revisão Completa do Sistema de Freios</td>
                            <td class="py-4 px-4 text-right font-bold">R$ 770,00</td>
                        </tr>
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="py-4 px-4">Revisão Completa do Sistema de Freios</td>
                            <td class="py-4 px-4 text-right font-bold">R$ 770,00</td>
                        </tr>
                        </tbody>
                </table>
            </section>

                        <section>
                <h2 class="font-headline font-bold text-lg mb-4 flex items-center gap-2">
                    <span class="w-1.5 h-6 bg-tertiary-container rounded-full"></span> Peças
                </h2>
                <table class="w-full text-sm">
                    <thead class="bg-surface-container text-on-surface-variant uppercase text-[10px] font-bold tracking-widest">
                        <tr>
                            <th class="py-2 px-4 text-left">Descrição</th>
                            <th class="py-2 px-4 text-left">Quantidade</th>
                            <th class="py-2 px-4 text-left">Valor Unid</th>
                            <th class="py-2 px-4 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/10">
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="py-4 px-4">Revisão Completa do Sistema de Freios</td>
                            <td class="py-4 px-4 text-left font-bold">70,00</td>
                            <td class="py-4 px-4 text-left font-bold">R$ 70,00</td>
                            <td class="py-4 px-4 text-right font-bold">R$ 7000,00</td>
                        </tr>
                        </tbody>
                </table>
            </section>

        </div>

        <footer class="p-8 md:p-10 border-t-2 border-surface-container-high bg-surface-container-lowest sticky bottom-0 z-10">
            <section class="flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="w-full md:w-2/3 bg-surface-container-low p-4 rounded-lg text-xs italic text-on-surface-variant border-l-4 border-primary-container">
                    <strong>Obs:</strong> Pastilhas com desgaste acentuado. Recomendada troca imediata.
                </div>
                
                <div class="w-full md:w-1/3 text-right">
                    <div class="text-right mb-1">
                        <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Total de Descontos</p>
                        <p class="text-error font-bold">- R$ 150,00</p>
                </div>
                    <div class="bg-primary-container p-6 rounded-2xl shadow-lg shadow-primary-container/20">
                        <p class="text-on-primary-container text-[10px] font-bold uppercase tracking-widest mb-1">Total do Orçamento</p>
                        <p class="font-headline font-extrabold text-on-primary-fixed text-4xl tracking-tighter">R$ 2.665,00</p>
                    </div>
                </div>
            </section>
        </footer>

    </div>
</div>

<style>
    /* Estilização opcional para a barra de rolagem ficar mais fina e discreta */
    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #e2e2e5;
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #ffa600;
    }
</style>