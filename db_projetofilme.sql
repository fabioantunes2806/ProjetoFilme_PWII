-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Jun-2023 às 05:01
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_projetofilme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `class_ind`
--

DROP TABLE IF EXISTS `class_ind`;
CREATE TABLE IF NOT EXISTS `class_ind` (
  `id_classind` int NOT NULL AUTO_INCREMENT,
  `class_ind` varchar(7) NOT NULL,
  PRIMARY KEY (`id_classind`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `class_ind`
--

INSERT INTO `class_ind` (`id_classind`, `class_ind`) VALUES
(1, 'Livre'),
(2, '10 Anos'),
(3, '12 Anos'),
(4, '14 Anos'),
(5, '16 Anos'),
(6, '18 Anos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int NOT NULL AUTO_INCREMENT,
  `nome_ctt` varchar(250) NOT NULL,
  `email_ctt` varchar(250) NOT NULL,
  `assunto_ctt` varchar(250) NOT NULL,
  `mensagem_ctt` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome_ctt`, `email_ctt`, `assunto_ctt`, `mensagem_ctt`) VALUES
(1, 'teste', 'teste@teste', 'teste', 'testando 123'),
(2, 'Jorjin', 'jorjehenrique@gmail.com', 'Parabéns', 'Site incrível e com ótima funcionalidade, parabéns! Os devs merecem MB.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE IF NOT EXISTS `filmes` (
  `id_filme` int NOT NULL AUTO_INCREMENT,
  `Nome_filme` varchar(250) NOT NULL,
  `duracao` varchar(20) NOT NULL,
  `id_classind` varchar(7) NOT NULL,
  `id_genero` int NOT NULL,
  `diretor` varchar(250) NOT NULL,
  `sinopse` varchar(5000) NOT NULL,
  `lancamento` varchar(4) NOT NULL,
  `img_main` varchar(1000) NOT NULL,
  `img_sec` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_filme`),
  KEY `id_genero` (`id_genero`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `Nome_filme`, `duracao`, `id_classind`, `id_genero`, `diretor`, `sinopse`, `lancamento`, `img_main`, `img_sec`) VALUES
(1, 'A Viagem de Chihiro', '2h 5m', '1', 1, 'Hayao Miyazaki', 'Chihiro e seus pais estão se mudando para uma cidade diferente. A caminho da nova casa, o pai decide pegar um atalho. Eles se deparam com uma mesa repleta de comida, embora ninguém esteja por perto. Chihiro sente o perigo, mas seus pais começam a comer. Quando anoitece, eles se transformam em porcos. Agora, apenas Chihiro pode salvá-los.', '2001', '../estruturas/img/chihiro.jpg', '../estruturas/img/a viagem de chihiro.png'),
(2, 'One Piece Film: Red', '1h 55m', '3', 1, 'Gorō Taniguchi', 'Em One Piece Film RED todos conhecerão Uta, a cantora mais amada do planeta, cuja voz foi descrita              como “de outro mundo”. Ela é conhecida por esconder sua própria identidade ao se apresentar. Agora,              pela primeira vez, Uta se revelará ao mundo em um show ao vivo. Com a Marinha assistindo de perto, o local              se enche de fãs de Uta - incluindo piratas animados e os Chapéus de Palha liderados por Luffy, que vieram              para curtir sua performance - todos aguardam ansiosamente a voz que o mundo inteiro estava esperando.', '2022', '../estruturas/img/opred.jpg', '../estruturas/img/oprbanner.jpg'),
(3, 'Yu-Gi-Oh! O Lado Negro das Dimensões', '2h 11m', '3', 1, 'Satoshi Kuwabara', 'No passado, Yami Yugi e Seto Kaiba se enfrentaram em inúmeras ocasiões. Yami Yugi, que habita dentro do corpo de Yugi Muto, e Kaiba vão duelar novamente, e esta será uma batalha em que os dois terão seu orgulho e experiência colocados à prova.', '2016', '../estruturas/img/yugioh.jpg', '../estruturas/img/dsod_banner.jpg'),
(4, 'Malévola: Dona do Mal', '1h 51m', '2', 1, 'Joachim Rønning', 'Malévola e sua afilhada Aurora começam a questionar os complexos laços familiares que as prendem à medida que são puxadas em direções diferentes por casamentos, aliados inesperados e novas forças sombrias em jogo.', '2019', '../estruturas/img/malevola.jpg', '../estruturas/img/Malevolabanner.retang.jpg'),
(5, 'Invocação do Mal', '1h 52m', '4', 2, 'James Wan', 'Os investigadores paranormais Ed e Lorraine Warren trabalham para ajudar a família aterrorizada por uma entidade demoníaca em sua fazenda.', '2013', '../estruturas/img/invocacaoDoMal1.jpg', '../estruturas/img/the-conjuring-banner.jpg'),
(6, 'A Casa do Terror', '1h 32m', '4', 2, ' Scott Beck, Bryan Woods', 'No Halloween, um grupo de amigos encontra uma casa assombrada que promete alimentar-se dos seus medos mais sombrios. A noite torna-se mortal quando eles chegam à terrível conclusão de que alguns pesadelos são reais.', '2019', '../estruturas/img/aCasadoTerror.jpg', '../estruturas/img/casa do terror banner.jpg'),
(7, 'O Exorcista', ' 2h 12m', '4', 2, ' William Friedkin', 'Uma atriz vai gradativamente tomando consciência de que a sua filha de doze anos está tendo um comportamento completamente assustador. Deste modo, ela pede ajuda a um padre, que também é um psiquiatra, e este chega a conclusão de que a garota está possuída pelo demônio. Ele solicita então a ajuda de um segundo sacerdote, especialista em exorcismo, para tentar livrar a menina desta terrível possessão.', '1973', '../estruturas/img/oExorcista.jpg', '../estruturas/img/o-exorcista-banner.jpg'),
(8, 'Doutor Estranho no Multiverso da Loucura', ' 2h 6m', '4', 4, 'Sam Raimi', 'O aguardado filme trata da jornada do Doutor Estranho rumo ao desconhecido. Além de receber ajuda de novos aliados místicos e outros já conhecidos do público, o personagem atravessa as realidades alternativas incompreensíveis e perigosas do Multiverso para enfrentar um novo e misterioso adversário.', '2022', '../estruturas/img/doutorEstranho2.jpeg', '../estruturas/img/doutor estranho banner.jpg'),
(9, 'Velozes & Furiosos 7', '2h 20m', '4', 4, ' James Wan', 'Um agente do governo oferece ajuda para cuidar de Shaw em troca de Dom e o grupo resgatar um \"hacker\" sequestrado. Dessa vez, não se trata apenas de velocidade: a corrida é pela sobrevivência.', '2015', '../estruturas/img/velozeseFuriosos7.jpg', '../estruturas/img/velozes e furiosos banner.jpg'),
(10, 'Jumanji: Próxima Fase', '2h 3m', '3', 4, 'Jake Kasdan', 'Spencer volta ao mundo fantástico de Jumanji. Os amigos Martha, Fridge e Bethany entram no jogo e tentam trazê-lo para casa. A turma descobre ainda mais obstáculos e perigos a serem superados.', '2019', '../estruturas/img/jumanji2.jpg', '../estruturas/img/jumanji-banner.jpg'),
(13, 'Shrek', '1h 29m', '1', 1, ' Vicky Jenson, Andrew Adamson', 'Um ogro tem sua vida invadida por personagens de contos de fadas que acabam com a tranquilidade de seu lar. Ele faz um acordo pra resgatar uma princesa.', '2001', '../estruturas/img/shrek.jpg', '../estruturas/img/shrek banner.jpg'),
(14, 'Harry Potter e a Pedra Filosofal', '2h 32m', '1', 1, ' Chris Columbus', 'Harry Potter é um garoto órfão que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, Harry é impedido de ler a carta por seu tio, mas logo recebe a visita de Hagrid, o guarda-caça de Hogwarts, que chega para levá-lo até a escola. Harry adentra um mundo mágico que jamais imaginara, vivendo diversas aventuras com seus novos amigos, Rony Weasley e Hermione Granger.', '2001', '../estruturas/img/hp.jpg', ''),
(15, 'Coraline e o Mundo Secreto', '1h 55m', '2', 1, ' Henry Selick', 'Enquanto explora sua nova casa à noite, a pequena Coraline descobre uma porta secreta que contém um mundo parecido com o dela, porém melhor em muitas maneiras. Todos têm botões no lugar dos olhos, os pais são carinhosos e os sonhos de Coraline viram realidade por lá. Ela se encanta com essa descoberta, mas logo percebe que segredos estranhos estão em ação: uma outra mãe e o resto de sua família tentam mantê-la eternamente nesse mundo paralelo.', '2009', '../estruturas/img/coraline.jpg', '../estruturas/img/coraline banner.jpg'),
(16, 'Yu-Gi-Oh!: Vínculos Além do Tempo', '1h', '1', 1, 'Kenichi Takeshita', 'O filme reúne os protagonistas das três séries anteriores, Yugi Muto, Judai Yuki e Yuusei Fudou, para juntar forças para lutar contra Paradox, o inimigo mais poderoso da história.', '2010', '../estruturas/img/vadt.jpg', '../estruturas/img/vadt banner.jpg'),
(17, 'Alice no País das Maravilhas', '1h 48m', '2', 1, ' Tim Burton', 'Ainda garotinha, Alice Kingsleigh visitou um lugar mágico pela primeira vez e não tinha mais lembranças sobre o local a não ser em seus sonhos. Em uma festa da nobreza, a jovem vê um coelho branco. Alice o segue e cai em um buraco, indo parar em um mundo estranho: o País das Maravilhas. Lá, ela reencontra personagens que estavam guardados em sua memória através dos sonhos.', '2010', '../estruturas/img/alice.jpg', '../estruturas/img/alice banner.jpg'),
(18, 'O Estranho Mundo de Jack', '1h 16m', '1', 1, 'Henry Selick', 'Jack Skellington, o Rei das Abóboras, se cansa de fazer o Dia das Bruxas todos os anos e deixa os limites da cidade. Por acaso, acaba atravessando o portal do Natal, onde vê a alegria do espírito natalino. Ao retornar para a Cidade do Halloween, sem ter compreendido o que viu, ele começa a convencer os cidadãos a sequestrarem o Papai Noel e fazerem seu próprio Natal. Apesar de sua leal namorada Sally ser contra, o Papai Noel é capturado e os fatos mostrarão que Sally estava certa o tempo todo.', '1993', '../estruturas/img/Mundo_de_Jack.jpg', '../estruturas/img/jack banner.jpeg'),
(19, 'A Hora do Pesadelo', '1h 35m', '5', 2, ' Samuel Bayer', 'Os adolescentes Nancy, Quentin, Kris, Jesse e Dean são amigos que começam a ter o mesmo pesadelo com um homem desfigurado que usa uma luva feita de facas. O homem, Freddy Krueger (Jackie Earle Haley), os aterroriza em sonhos. A única saída é acordar, mas quando um deles morre de forma violenta, os amigos percebem que o sonho é real. A saída, na verdade, é ficar acordado.', '2010', '../estruturas/img/a hora do pesadelo.jpg', '../estruturas/img/hora do pesadelo banner.jpg'),
(20, 'Espíritos Obscuros', '1h 39m', '5', 2, 'Scott Cooper', 'Uma professora da cidade de Oregon (Keri Russell) e seu irmão, o xerife local (Jesse Plemons), descobrem que um jovem estudante está mantendo um segredo perigoso, com consequências assustadoras. Dirigido por Scott Cooper e produzido por Guillermo del Toro.', '2021', '../estruturas/img/espiritos-obscuros.jpg', '../estruturas/img/espiritos obscuros banner.jpeg'),
(21, 'Alien - O 8.º Passageiro', '1h 57m', '4', 2, ' Ridley Scott', 'Uma nave espacial, ao retornar para Terra, recebe estranhos sinais vindos de um asteroide. Enquanto a equipe investiga o local, um dos tripulantes é atacado por um misterioso ser. O que parecia ser um ataque isolado se transforma em um terror constante, pois o tripulante atacado levou para dentro da nave o embrião de um alienígena, que não para de crescer e tem como meta matar toda a tripulação.', '1979', '../estruturas/img/alien.jpg', '../estruturas/img/alien banner.jpg'),
(22, 'A Freira', '1h 36m', '4', 2, 'Corin Hardy', 'Presa em um convento na Romênia, uma freira comete suicídio. Para investigar o caso, o Vaticano envia um padre assombrado e uma noviça prestes a se tornar freira. Arriscando suas vidas, a fé e até suas almas, os dois descobrem um segredo profano e se confrontam com uma força do mal que toma a forma de uma freira demoníaca e transforma o convento em um campo de batalha.', '2018', '../estruturas/img/a freira.jpeg', '../estruturas/img/a freira banner.jpg'),
(23, 'Terrifier', '1h 38m', '6', 2, 'Damien Leone', 'Enquanto cuida de duas crianças no halloween, uma babá encontra uma antiga fita VHS no saco de doces. O filme apresenta três contos de terror, todos ligados entre si por um palhaço assassino. Ao longo da noite, coisas estranhas começam a acontecer na casa e a presença do palhaço parece cada vez mais real.', '2016', '../estruturas/img/terrifier.jpg', '../estruturas/img/terrifier banner.jpg'),
(24, 'Pânico', '1h 51m', '4', 2, ' Wes Craven', 'Um grupo de jovens enfrenta um assassino mascarado que testa seus conhecimentos sobre filmes de terror. A pequena cidade de Woodsboro nunca mais será a mesma.', '1996', '../estruturas/img/panico.jpg', '../estruturas/img/panico banner.jpg'),
(25, 'O Iluminado', ' 2h 26m', '4', 2, ' Stanley Kubrick', 'Jack Torrance se torna caseiro de inverno do isolado Hotel Overlook, nas montanhas do Colorado, na esperança de curar seu bloqueio de escritor. Ele se instala com a esposa Wendy e o filho Danny, que é atormentando por premonições. Jack não consegue escrever e as visões de Danny se tornam mais perturbadoras. O escritor descobre os segredos sombrios do hotel e começa a se transformar em um maníaco homicida, aterrorizando sua família.', '1980', '../estruturas/img/o iluminado.jpg', '../estruturas/img/o iluminado banner.jpg'),
(26, 'Scott Pilgrim contra o Mundo', '1h 52m', '3', 4, ' Edgar Wright', 'Guitarrista de uma banda de rock do colégio, o jovem Scott Pilgrim nunca teve problemas para conseguir namorada. O problema sempre foi se livrar delas. Mas com Ramona Flowers é diferente, pois ele se apaixona perdidamente por ela e não será nada fácil conquistar seu amor. Ela tem o maior de todos os problemas: um exército de ex-namorados que não medem esforços para eliminar Scott da lista de interessados.', '2010', '../estruturas/img/scott pirlgrim.jpg', '../estruturas/img/scott pirlgrim banner.jpg'),
(27, 'Jurassic Park - Parque dos Dinossauros', '2h 7m', '3', 4, 'Steven Spielberg', 'Os paleontólogos Alan Grant, Ellie Sattler e o matemático Ian Malcolm fazem parte de um seleto grupo escolhido para visitar uma ilha habitada por dinossauros criados a partir de DNA pré-histórico. O idealizador do projeto e bilionário John Hammond garante a todos que a instalação é completamente segura. Mas após uma queda de energia, os visitantes descobrem, aos poucos, que vários predadores ferozes estão soltos e à caça.', '1993', '../estruturas/img/jurassic park.jpg', '../estruturas/img/jurassic park banner.jpg'),
(28, 'Dungeons & Dragons: Honra Entre Rebeldes', '2h 14m', '3', 4, 'John Francis Daley, Jonathan M. Goldstein', 'Um ladrão e um bando de aventureiros embarcam em uma jornada épica para recuperar uma relíquia.', '2023', '../estruturas/img/d&d.jpg', '../estruturas/img/d&d banner.png'),
(29, 'The Batman', '2h 56m', '4', 4, ' Matt Reeves', 'Após dois anos espreitando as ruas como Batman, Bruce Wayne se encontra nas profundezas mais sombrias de Gotham City. Com poucos aliados confiáveis, o vigilante solitário se estabelece como a personificação da vingança para a população.', '2022', '../estruturas/img/batman.jpg', '../estruturas/img/batbanner.jpg'),
(30, 'Demon Slayer - Mugen Train: O Filme', '2h', '4', 4, 'Haruo Sotozaki', 'Um grupo de caçadores de Oni embarcam em um trem com a missão de derrotar um demônio que tem atormentado as pessoas.', '2020', '../estruturas/img/kimetsu.jpg', '../estruturas/img/kimetsu banner.png'),
(31, 'Homem-Aranha: Sem Volta para Casa', '2h 28m', '3', 4, 'Jon Watts', 'Peter Parker tem a sua identidade secreta revelada e pede ajuda ao Doutor Estranho. Quando um feitiço para reverter o evento não sai como o esperado, o Homem-Aranha e seu companheiro dos Vingadores precisam enfrentar inimigos de todo o multiverso.', '2021', '../estruturas/img/miranha.jpg', '../estruturas/img/miranha banner.png'),
(32, 'Deadpool', '1h 48m', '5', 4, ' Tim Miller', 'Wade Wilson é um ex-agente especial que passou a trabalhar como mercenário. Seu mundo é destruído quando um cientista maligno o tortura e o desfigura completamente. O experimento brutal transforma Wade em Deadpool, que ganha poderes especiais de cura e uma força aprimorada. Com a ajuda de aliados poderosos e um senso de humor mais desbocado e cínico do que nunca, o irreverente anti-herói usa habilidades e métodos violentos para se vingar do homem que quase acabou com a sua vida.', '2016', '../estruturas/img/Deadpool.jpg', '../estruturas/img/deadpool banner.jpeg'),
(33, 'Ted', '1h 46m', '5', 5, ' Seth MacFarlane', 'Quando criança, John desejou que seu ursinho Ted ganhasse vida e, surpreendentemente, foi atendido. Porém, agora que é adulto, ele precisa lidar com as consequências de seu pedido, já que Ted não vai parar de atormentar a sua vida.', '2012', '../estruturas/img/ted.jpg', '../estruturas/img/ted banner.jpg'),
(34, 'Todo Poderoso', '1h 41m', '1', 5, 'Tom Shadyac', 'Bruce Nolan é um jornalista que tem a vida perfeita. Quando as coisas começam a dar errado, ele questiona Deus e a forma como ele comanda a Terra. O Todo Poderoso dá ao rapaz todos seus poderes, mas Bruce percebe como é difícil ser onipresente.', '2003', '../estruturas/img/todo-poderoso.jpg', '../estruturas/img/todo poderoso banner.jpeg'),
(35, 'Super Mario Bros. O Filme', ' 1h 32m', '1', 5, 'Aaron Horvath, Michael Jelenic', 'Mario é um encanador junto com seu irmão Luigi. Um dia, eles vão parar no reino dos cogumelos, governado pela Princesa Peach, mas ameaçado pelo rei dos Koopas, que faz de tudo para conseguir reinar em todos os lugares.', '2023', '../estruturas/img/mario.jpg', '../estruturas/img/mario banner.jpg'),
(36, 'Esposa de Mentirinha', '1h 57m', '3', 5, 'Dennis Dugan', 'Infeliz em sua tentativa de casamento, Danny passa a vivenciar relacionamentos sem compromisso para driblar a carência. Assim, ele toca sua vida como cirurgião plástico bem-sucedido, tendo sua melhor amiga Katherine, mãe solteira de um casal, como fiel escudeira. Quando conhece a jovem Palmer e a paixão toma conta de ambos, ele inventa, para tentar conquistá-la, que é marido de Katherine, pai das crianças e que vai se separar.', '2011', '../estruturas/img/esposa de mentirinha.jpeg', '../estruturas/img/esposa de mentirinha banner.jpeg'),
(37, 'Norbit - Uma Comédia de Peso', '1h 43m', '3', 5, 'Brian Robbins', 'Desde que foi abandonado em um orfanato, Norbit sempre teve uma vida muito dura. Agora, casado com Rasputia, sua vida é ainda pior. Mas tudo muda quando sua antiga namorada volta à cidade.', '2007', '../estruturas/img/norbit.jpg', '../estruturas/img/norbit banner.jpeg'),
(38, 'As Branquelas', '1h 49m', '3', 5, 'Keenen Ivory Wayans', 'Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos sejam presos em uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites nos Hamptons. Quando as meninas descobrem o plano da agência, elas se recusam a ir. Sem opções, Marcus e Kevin, dois homens negros, decidem fingir que são as irmãs e se transformam em um par de loiras.', '2004', '../estruturas/img/as-branquelas.jpg', '../estruturas/img/as branquelas banner.jpg'),
(39, 'Gente Grande', '1h 42m', '3', 5, 'Dennis Dugan', 'A morte do treinador de basquete de infância de velhos amigos reúne a turma no mesmo lugar que celebraram um campeonato anos atrás. Os amigos, acompanhados de suas esposas e filhos, descobrem que idade não significa o mesmo que maturidade.', '2010', '../estruturas/img/gente grande.jpg', '../estruturas/img/gente grande banner.jpg'),
(40, 'O Pequenino', '1h 38m', '3', 5, 'Keenen Ivory Wayans', 'O anão Calvin mal saiu da prisão e já planeja um novo assalto a uma joalheria. Perseguido pela polícia, ele esconde o diamante na bolsa de Vanessa, cujo marido, Darryl, sonha em ter um filho. Aproveitando a oportunidade para recuperar a pedra, Calvin se veste como criança e é deixado em frente à casa de Darryl para que seja acolhido. O casal passa um final de semana com o pequeno e decide adotá-lo, acreditando ser um bebê abandonado.', '2006', '../estruturas/img/o pequenino.jpeg', '../estruturas/img/o pequenino banner.jpg'),
(41, 'Todo Mundo em Pânico 3', '1h 24m', '4', 5, 'David Zucker', 'Depois de a repórter de jornal Cindy assistir acidentalmente uma estranha fita de vídeo que faz com que o espectador morra dentro de uma semana, ela descobre que a fita é apenas um dos muitos acontecimentos estranhos recentes. Os agricultores locais Tom e George relataram círculos enormes que aparecem durante a noite em seus campos. Cindy encontra uma ligação entre a fita e os círculos nas plantações com a ajuda do presidente dos Estados Unidos e uma tia gentil.', '2003', '../estruturas/img/tmep.jpg', '../estruturas/img/tmep banner.jpg'),
(42, 'Sim Senhor', ' 1h 44m', '4', 5, 'Peyton Reed', 'Carl Allen é um homem que perdeu muitas oportunidades por causa da palavra não. Ele decide ir para um seminário de autoajuda para aprender a dizer sim. Respondendo positivamente a todos os convites e oportunidades, Carl passa por experiências incríveis e logo descobre que as mudanças não precisariam ser tão drásticas.', '2008', '../estruturas/img/sim.jpg', '../estruturas/img/sim banner.jpg'),
(43, 'A Voz do Silêncio: Koe no Katachi', '2h 9m', '4', 3, 'Naoko Yamada', 'Uma estudante com problemas de audição sofre com o bullying dos colegas e decide mudar de escola. Anos mais tarde, um dos rapazes que a importunavam resolve se redimir.', '2016', '../estruturas/img/koe no katachi.jpg', '../estruturas/img/koe no katachi banner.png'),
(44, 'A Culpa É das Estrelas', ' 2h 6m', '3', 3, 'Josh Boone', 'Hazel Grace Lancaster e Augustus Waters são dois adolescentes que se conhecem em um grupo de apoio para pacientes com câncer. Por causa da doença, Hazel sempre descartou a ideia de se envolver amorosamente, mas acaba cedendo ao se apaixonar por Augustus. Juntos, eles viajam para Amsterdã, onde embarcam em uma jornada inesquecível.', '2014', '../estruturas/img/a culpa é das estrela.jpg', '../estruturas/img/a culpa é das estrelas banner.jpeg'),
(45, 'Como Eu Era Antes de Você', '1h 50m', '3', 3, 'Thea Sharrock', 'De origem modesta e sem grandes aspirações, a peculiar Louisa Clark é contratada para ser cuidadora de Will, um jovem tetraplégico depressivo e cínico.', '2016', '../estruturas/img/ceeadv.jpg', '../estruturas/img/ceeadv banner.jpg'),
(46, '17 Outra Vez', '1h 42m', '2', 3, 'Burr Steers', 'No ensino médio, Mike foi uma estrela do basquete e tinha um futuro promissor, mas jogou tudo para o alto ao casar-se com sua namorada, que estava grávida. Quase 20 anos depois, com o casamento arruinado e um trabalho que não o leva para lugar algum, seus filhos o consideram um fracassado. Milagrosamente, ele volta a ser um adolescente de 17 anos e tem a chance de corrigir os erros que cometeu no passado.', '2009', '../estruturas/img/17.jpg', '../estruturas/img/17 banner.jpg'),
(47, 'A Barraca do Beijo', '1h 45m', '3', 3, 'Vince Marcello', 'O primeiro beijo de Elle vira um romance proibido com o garoto mais bonito do colégio, mas acaba colocando em risco a sua relação com seu melhor amigo.', '2018', '../estruturas/img/barraca do beijo.jpeg', '../estruturas/img/barraca do beijo banner.jpeg'),
(48, 'De Repente 30', '1h 38m', '1', 3, 'Gary Winick', 'Jenna Rink é uma garota que está descontente com sua própria idade. Em seu 13º aniversário, ela faz um pedido: virar adulta. O pedido milagrosamente se torna realidade e, no dia seguinte, Jenna acorda com 30 anos de idade.', '2004', '../estruturas/img/30.jpg', '../estruturas/img/30 banner.jpeg'),
(49, 'Para Todos os Garotos que Já Amei', '1h 39m', '3', 3, 'Susan Johnson', 'Lara Jean Song Covey escreve cartas de amor secretas para todos os seus antigos paqueras. Um dia, as cartas são misteriosamente enviadas para os destinatários, virando sua vida de cabeça para baixo.', '2018', '../estruturas/img/ptgja.jpg', '../estruturas/img/ptgja banner.jpeg'),
(50, 'Com Amor, Simon', '1h 50m', '3', 3, 'Greg Berlanti', 'Aos 17 anos, Simon Spier aparenta levar uma vida comum, mas sofre por esconder um grande segredo: não revelou ser gay para sua família e amigos. E tudo fica mais complicado quando ele se apaixona por um dos colegas de classe, anônimo, na internet.', '2018', '../estruturas/img/Simon.jpg', '../estruturas/img/Simon banner.jpg'),
(51, 'Gnomeu e Julieta', '1h 24m', '1', 3, 'Kelly Asbury', 'Gnomeu e Julieta são anões de jardim cujas famílias são vizinhas e rivais. Um dia eles se apaixonam, para desgosto dos familiares. Para ficarem juntos, eles precisam enfrentar diversos obstáculos.', '2011', '../estruturas/img/gnomeo.jpg', '../estruturas/img/gnomeo banner.jpeg'),
(52, 'Your Name', '1h 52m', '3', 3, 'Makoto Shinkai', 'Mitsuha é a filha do prefeito de uma pequena cidade, mas sonha em tentar a sorte em Tóquio. Taki trabalha em um restaurante em Tóquio e deseja largar o seu emprego. Os dois não se conhecem, mas estão conectados pelas imagens de seus sonhos.', '2016', '../estruturas/img/your name.jpg', '../estruturas/img/your name banner.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int NOT NULL AUTO_INCREMENT,
  `Genero` varchar(250) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `Genero`) VALUES
(1, 'Fantasia'),
(2, 'Terror'),
(3, 'Romancce'),
(4, 'Ação e Aventura'),
(5, 'Comédia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`id_usuario`, `username`, `email`, `senha`) VALUES
(1, 'teste', 'teste@teste.com', '2e6f9b0d5885b6010f9167787445617f553a735f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
