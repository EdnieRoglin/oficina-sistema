

<!-- Modal Backdrop -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-on-surface/40 backdrop-blur-sm">

    <!-- Modal Surface -->
    <div class="bg-surface-container-lowest w-full max-w-3xl rounded-xl shadow-2xl flex flex-col overflow-hidden animate-in fade-in zoom-in duration-300" style="max-height: 90vh;">

        <!-- Modal Header -->
        <header class="flex items-center justify-between px-8 py-5 border-b border-outline-variant/20">

            <div class="flex items-center gap-3">
                <div class="bg-primary-container/20 p-2 rounded-lg">
                    <span class="material-symbols-outlined text-amber-600" style="font-variation-settings: 'FILL' 1;">
                        directions_car
                    </span>
                </div>

                <div>
                    <h2 id="modal-titulo" class="font-headline font-bold text-xl text-on-surface tracking-tight">
                        Cadastrar Veículo
                    </h2>
                    <p class="text-xs font-medium text-on-surface-variant/70 uppercase tracking-widest">
                        Registro Automotivo
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

        <!-- Modal Content (Form) - Scrollable -->
        <form class="p-6 space-y-5 overflow-y-auto" id="veiculos-registration-form" method="POST" action="/oficina-sistema/public/veiculos/adicionar">

            <input type="hidden" name="id" id="veiculo-id" value=""/>

            <!-- Section 1: Identificação -->
            <div class="space-y-3">
                <div class="flex items-center gap-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Identificação
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Placa</label>
                        <input
                            type="text"
                            placeholder="ex: ABC-1D23"
                            name="placa"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold uppercase focus:ring-0"
                            required
                        />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Chassi (VIN)</label>
                        <input
                            type="text"
                            placeholder="ex: 9BWZZZ377VT004251"
                            name="chassi"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold focus:ring-0"
                        />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Motorização</label>
                        <input
                            type="text"
                            placeholder="ex: 2.0 TSI Turbo"
                            name="motorizacao"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold focus:ring-0"
                        />
                    </div>

                </div>
            </div>

            <!-- Section 2: Características -->
            <div class="space-y-3">

                <div class="flex items-center gap-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Características do Veículo
                    </span>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Marca</label>
                        <input
                            type="text"
                            placeholder="ex: Volkswagen"
                            name="marca"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold focus:ring-0"
                            required
                        />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Modelo</label>
                        <input
                            type="text"
                            placeholder="ex: Golf GTI"
                            name="modelo"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold focus:ring-0"
                            required
                        />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Ano</label>
                        <input
                            type="number"
                            placeholder="2024"
                            name="ano"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold focus:ring-0"
                            required
                        />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">KM</label>
                        <input
                            type="number"
                            placeholder="45000"
                            name="km"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold focus:ring-0"
                        />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Cor</label>
                        <input
                            type="text"
                            placeholder="ex: Preto"
                            name="cor"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold focus:ring-0"
                        />
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-medium text-on-surface-variant ml-1">Combustível</label>
                        <select
                            name="combustivel"
                            class="speed-input w-full rounded-t-lg px-4 py-2.5 text-sm font-headline font-bold focus:ring-0 bg-transparent"
                        >
                            <option value="">Selecione...</option>
                            <option value="Gasolina">Gasolina</option>
                            <option value="Etanol">Etanol</option>
                            <option value="Flex">Flex</option>
                            <option value="Diesel">Diesel</option>
                            <option value="GNV">GNV</option>
                            <option value="Elétrico">Elétrico</option>
                            <option value="Híbrido">Híbrido</option>
                        </select>
                    </div>

                </div>
            </div>

            <!-- Section 3: Proprietário -->
            <div class="space-y-3">

                <div class="flex items-center gap-2">
                    <div class="w-1 h-4 bg-primary-container rounded-full"></div>
                    <span class="font-label text-[12px] font-semibold uppercase tracking-wider text-on-surface-variant">
                        Proprietário
                    </span>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="text-xs font-medium text-on-surface-variant ml-1">Buscar Cliente</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">person_search</span>
                        <input
                            type="text"
                            id="busca-proprietario"
                            placeholder="Pesquisar por nome, CPF ou telefone..."
                            class="speed-input w-full rounded-t-lg pl-12 pr-4 py-2.5 text-sm font-medium focus:ring-0"
                            autocomplete="off"
                        />
                    </div>
                    <input type="hidden" name="proprietario_id" id="proprietario-id" value=""/>

                    <!-- Resultado da busca (aparece dinamicamente) -->
                    <div id="resultado-busca-proprietario" class="border border-outline-variant/10 bg-surface-container-low rounded-b-lg overflow-hidden hidden">
                        <!-- Os resultados serão inseridos via JS -->
                    </div>

                    <!-- Proprietário selecionado -->
                    <div id="proprietario-selecionado" class="hidden mt-1 flex items-center gap-3 bg-surface-container-high px-4 py-2.5 rounded-lg">
                        <div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center">
                            <span class="material-symbols-outlined text-on-primary-container text-sm">person</span>
                        </div>
                        <div class="flex-1">
                            <p id="proprietario-nome" class="text-sm font-bold text-on-surface"></p>
                            <p id="proprietario-info" class="text-xs text-on-surface-variant"></p>
                        </div>
                        <button type="button" onclick="removerProprietario()" class="p-1 hover:bg-error/10 rounded-full text-error transition-colors">
                            <span class="material-symbols-outlined text-sm">close</span>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Submit button inside the form -->
            <div class="flex items-center justify-end gap-4 pt-4 border-t border-outline-variant/10">

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

<script>
// ============================================
// Busca de Proprietário via AJAX (com debounce)
// ============================================
(function() {
    let debounceTimer = null;
    const campoBusca = document.getElementById('busca-proprietario');
    const resultadoContainer = document.getElementById('resultado-busca-proprietario');

    if (!campoBusca) return;

    campoBusca.addEventListener('input', function() {
        const termo = this.value.trim();

        clearTimeout(debounceTimer);

        if (termo.length < 2) {
            resultadoContainer.classList.add('hidden');
            resultadoContainer.innerHTML = '';
            return;
        }

        debounceTimer = setTimeout(function() {
            fetch('/oficina-sistema/public/veiculos/buscar-clientes?termo=' + encodeURIComponent(termo))
                .then(function(response) { return response.json(); })
                .then(function(clientes) {
                    if (clientes.length === 0) {
                        resultadoContainer.innerHTML = '<div class="px-4 py-3 text-sm text-on-surface-variant/60 text-center">Nenhum cliente encontrado</div>';
                        resultadoContainer.classList.remove('hidden');
                        return;
                    }

                    var html = '';
                    clientes.forEach(function(cliente) {
                        var nome = escapeHtml(cliente.nome);
                        var cpf = escapeHtml(cliente.cpf_cnpj || '');
                        var tel = escapeHtml(cliente.telefone || '');

                        html += '<button type="button" '
                            + 'onclick="selecionarProprietario(' + cliente.id + ', \'' + nome.replace(/'/g, "\\'") + '\', \'' + cpf.replace(/'/g, "\\'") + '\', \'' + tel.replace(/'/g, "\\'") + '\')" '
                            + 'class="w-full flex items-center gap-3 px-4 py-3 hover:bg-surface-container-high transition-colors text-left border-b border-outline-variant/5 last:border-0">'
                            + '<div class="w-8 h-8 rounded-full bg-primary-container/30 flex items-center justify-center shrink-0">'
                            + '<span class="material-symbols-outlined text-on-primary-container text-sm">person</span>'
                            + '</div>'
                            + '<div class="flex-1 min-w-0">'
                            + '<p class="text-sm font-bold text-on-surface truncate">' + nome + '</p>'
                            + '<p class="text-xs text-on-surface-variant">' + (cpf ? cpf : '') + (cpf && tel ? ' • ' : '') + (tel ? tel : '') + '</p>'
                            + '</div>'
                            + '<span class="material-symbols-outlined text-xs text-primary">chevron_right</span>'
                            + '</button>';
                    });

                    resultadoContainer.innerHTML = html;
                    resultadoContainer.classList.remove('hidden');
                })
                .catch(function(err) {
                    console.error('Erro ao buscar clientes:', err);
                    resultadoContainer.classList.add('hidden');
                });
        }, 300);
    });

    // Fechar resultado ao clicar fora
    document.addEventListener('click', function(e) {
        if (!campoBusca.contains(e.target) && !resultadoContainer.contains(e.target)) {
            resultadoContainer.classList.add('hidden');
        }
    });
})();

function escapeHtml(text) {
    var div = document.createElement('div');
    div.appendChild(document.createTextNode(text));
    return div.innerHTML;
}

function selecionarProprietario(id, nome, cpf, telefone) {
    document.getElementById('proprietario-id').value = id;
    document.getElementById('proprietario-nome').textContent = nome;

    var info = '';
    if (cpf) info += cpf;
    if (cpf && telefone) info += ' • ';
    if (telefone) info += telefone;
    document.getElementById('proprietario-info').textContent = info;

    document.getElementById('proprietario-selecionado').classList.remove('hidden');
    document.getElementById('busca-proprietario').value = '';
    document.getElementById('resultado-busca-proprietario').classList.add('hidden');
}

function removerProprietario() {
    document.getElementById('proprietario-id').value = '';
    document.getElementById('proprietario-nome').textContent = '';
    document.getElementById('proprietario-info').textContent = '';
    document.getElementById('proprietario-selecionado').classList.add('hidden');
    document.getElementById('busca-proprietario').value = '';
}
</script>
