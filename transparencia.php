<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal da Transparência - AHB Maracaí</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
        .transparency-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('http://static.photos/finance/1200x630/1');
            background-size: cover;
            background-position: center;
        }
        .document-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <i data-feather="heart" class="text-red-600 mr-2"></i>
                <h1 class="text-xl font-bold text-gray-800">AHB Maracaí</h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-red-600 font-medium">Início</a>
                <a href="/sobre.php" class="text-gray-600 hover:text-red-600">Sobre</a>
                <a href="/noticias.php" class="text-gray-600 hover:text-red-600">Notícias</a>
                <a href="/medicos.php" class="text-gray-600 hover:text-red-600">Médicos</a>
                <a href="/servicos.php" class="text-gray-600 hover:text-red-600">Serviços</a>
                <a href="/transparencia.php" class="text-gray-600 hover:text-red-600">Transparência</a>
                <a href="/contato.php" class="text-gray-600 hover:text-red-600">Contato</a>
            </nav>
            <button class="md:hidden" id="menu-toggle" aria-label="Toggle menu">
                <i data-feather="menu"></i>
            </button>
        </div>
        <div class="md:hidden hidden bg-white py-2 px-4 shadow-md" id="mobile-menu">
            <a href="/" class="block py-2 text-red-600">Início</a>
            <a href="/sobre.php" class="block py-2 text-gray-600">Sobre</a>
            <a href="/noticias.php" class="block py-2 text-gray-600">Notícias</a>
            <a href="/medicos.php" class="block py-2 text-gray-600">Médicos</a>
            <a href="/servicos.php" class="block py-2 text-gray-600">Serviços</a>
            <a href="/transparencia.php" class="block py-2 text-gray-600">Transparência</a>
            <a href="/contato.php" class="block py-2 text-gray-600">Contato</a>
        </div>
    </header>

    <!-- Page Header -->
    <section class="transparency-bg text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Portal da Transparência</h1>
            <p class="text-xl max-w-2xl mx-auto">Compromisso com a gestão pública e o acesso à informação</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Nossos Dados</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                A Associação Hospital Beneficente de Maracaí tem como princípio a transparência na gestão dos recursos públicos. Aqui você encontra todas as informações sobre nossa administração, finanças e prestação de contas.
            </p>
        </div>

        <!-- Documents Section -->
        <section class="mb-16">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Documentos Institucionais</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="document-card bg-white p-6 rounded-lg shadow-md transition-shadow duration-300" data-aos="fade-up">
                    <div class="flex items-start mb-4">
                        <div class="bg-red-100 p-3 rounded-full mr-4">
                            <i data-feather="file-text" class="text-red-600"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Estatuto Social</h4>
                            <p class="text-sm text-gray-500">Atualizado em 15/03/2023</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Documento que rege a organização e funcionamento da associação.</p>
                    <a href="#" class="text-red-600 font-medium hover:underline flex items-center">
                        <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar PDF
                    </a>
                </div>
                <div class="document-card bg-white p-6 rounded-lg shadow-md transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i data-feather="clipboard" class="text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Regimento Interno</h4>
                            <p class="text-sm text-gray-500">Atualizado em 10/02/2023</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Normas que regulamentam o funcionamento interno do hospital.</p>
                    <a href="#" class="text-red-600 font-medium hover:underline flex items-center">
                        <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar PDF
                    </a>
                </div>
                <div class="document-card bg-white p-6 rounded-lg shadow-md transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i data-feather="award" class="text-green-600"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">Certificado de Entidade Beneficente</h4>
                            <p class="text-sm text-gray-500">Válido até 31/12/2024</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Certificação que comprova o status de entidade beneficente.</p>
                    <a href="#" class="text-red-600 font-medium hover:underline flex items-center">
                        <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar PDF
                    </a>
                </div>
            </div>
        </section>

        <!-- Financial Section -->
        <section class="mb-16">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Dados Financeiros</h3>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="grid md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                    <div class="p-6 text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">R$ 12.5M</div>
                        <p class="text-gray-600">Orçamento Anual (2023)</p>
                    </div>
                    <div class="p-6 text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">87%</div>
                        <p class="text-gray-600">Recursos Aplicados Diretamente em Atendimento</p>
                    </div>
                    <div class="p-6 text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">R$ 3.2M</div>
                        <p class="text-gray-600">Investimentos em 2023</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reports Section -->
        <section>
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Relatórios e Prestações de Contas</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left text-gray-700">Documento</th>
                            <th class="py-3 px-4 text-left text-gray-700">Período</th>
                            <th class="py-3 px-4 text-left text-gray-700">Data de Publicação</th>
                            <th class="py-3 px-4"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="py-4 px-4">Relatório Anual de Gestão</td>
                            <td class="py-4 px-4">2022</td>
                            <td class="py-4 px-4">30/04/2023</td>
                            <td class="py-4 px-4 text-right">
                                <a href="#" class="text-red-600 hover:underline flex items-center justify-end">
                                    <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4">Demonstrações Financeiras</td>
                            <td class="py-4 px-4">1º Trimestre 2023</td>
                            <td class="py-4 px-4">15/04/2023</td>
                            <td class="py-4 px-4 text-right">
                                <a href="#" class="text-red-600 hover:underline flex items-center justify-end">
                                    <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4">Prestação de Contas</td>
                            <td class="py-4 px-4">2022</td>
                            <td class="py-4 px-4">28/03/2023</td>
                            <td class="py-4 px-4 text-right">
                                <a href="#" class="text-red-600 hover:underline flex items-center justify-end">
                                    <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4">Relatório de Auditoria</td>
                            <td class="py-4 px-4">2022</td>
                            <td class="py-4 px-4">10/03/2023</td>
                            <td class="py-4 px-4 text-right">
                                <a href="#" class="text-red-600 hover:underline flex items-center justify-end">
                                    <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4">Demonstrações Financeiras</td>
                            <td class="py-4 px-4">2022</td>
                            <td class="py-4 px-4">28/02/2023</td>
                            <td class="py-4 px-4 text-right">
                                <a href="#" class="text-red-600 hover:underline flex items-center justify-end">
                                    <i data-feather="download" class="mr-2 w-4 h-4"></i> Baixar
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="mt-16 bg-gray-100 rounded-lg p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Acesso à Informação</h3>
            <p class="text-gray-600 mb-6">
                Caso não encontre a informação que procura, você pode solicitar diretamente através da Lei de Acesso à Informação (LAI).
            </p>
            <a href="#" class="inline-block bg-red-600 text-white px-6 py-3 rounded-md font-medium hover:bg-red-700">Solicitar Informação</a>
        </section>
    </div>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">AHBM Hospital</h3>
                     <a 
                        href="https://www.google.com/maps?q=Av.+José+Bonifácio,+382+-+Centro,+Maracaí+-+SP,+19840-000" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="text-gray-300 hover:underline flex items-start"
                    >
                        <i data-feather="map-pin" class="mr-2 mt-1 h-4 w-4"></i>
                        <span>
                            Av. José Bonifácio, 382 - Centro<br>
                            Maracaí - SP<br>
                            CEP: 19840-000
                        </span>
                    </a>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contato</h3>
                    <p class="text-gray-300 mb-2">
                        <a href="tel:+551833334444" class="flex items-center hover:underline">
                            <i data-feather="phone" class="mr-2 h-4 w-4"></i> (18) 3333-4444
                        </a>
                    </p>
                    <p class="text-gray-300 mb-2">
                         <a href="mailto:contato@ahbmhospital.com.br" class="flex items-center hover:underline">
                            <i data-feather="mail" class="mr-2 h-4 w-4"></i> contato@ahbmhospital.com.br
                        </a>
                    </p>
                    <p class="text-gray-300 flex items-center">
                        <i data-feather="clock" class="mr-2 h-4 w-4"></i> Emergência 24 horas
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Links Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="/sobre.php" class="text-gray-300 hover:text-white">Sobre Nós</a></li>
                        <li><a href="/noticias.php" class="text-gray-300 hover:text-white">Notícias</a></li>
                        <li><a href="/medicos.php" class="text-gray-300 hover:text-white">Médicos</a></li>
                        <li><a href="/servicos.php" class="text-gray-300 hover:text-white">Serviços</a></li>
                        <li><a href="/transparencia.php" class="text-gray-300 hover:text-white">Portal da Transparência</a></li>
                        <li><a href="/contato.php" class="text-gray-300 hover:text-white">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Redes Sociais</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/ahbm.maracai" target='_blank' class="text-gray-300 hover:text-white"><i data-feather="facebook"></i></a>
                        <a href="https://www.instagram.com/ahbm.maracai/" target='_blank' class="text-gray-300 hover:text-white"><i data-feather="instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© <?php echo date("Y"); ?> AHBM Hospital de Maracaí. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
            feather.replace();
        });
    </script>
</body>
</html>
