-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Jun-2023 às 02:48
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome_ctt`, `email_ctt`, `assunto_ctt`, `mensagem_ctt`) VALUES
(1, 'teste', 'teste@teste', 'teste', 'testando 123');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `Nome_filme`, `duracao`, `id_classind`, `id_genero`, `diretor`, `sinopse`, `lancamento`, `img_main`, `img_sec`) VALUES
(1, 'A Viagem de Chihiro', '2h 5m', '1', 1, 'Hayao Miyazaki', 'Chihiro e seus pais estão se mudando para uma cidade diferente. A caminho da nova casa, o pai decide pegar um atalho. Eles se deparam com uma mesa repleta de comida, embora ninguém esteja por perto. Chihiro sente o perigo, mas seus pais começam a comer. Quando anoitece, eles se transformam em porcos. Agora, apenas Chihiro pode salvá-los.', '2001', '../estruturas/img/chihiro.jpg', '../estruturas/img/a viagem de chihiro.png'),
(2, 'One Piece Film: Red', '1h 55m', '3', 3, 'Gorō Taniguchi', 'Em One Piece Film RED todos conhecerão Uta, a cantora mais amada do planeta, cuja voz foi descrita              como “de outro mundo”. Ela é conhecida por esconder sua própria identidade ao se apresentar. Agora,              pela primeira vez, Uta se revelará ao mundo em um show ao vivo. Com a Marinha assistindo de perto, o local              se enche de fãs de Uta - incluindo piratas animados e os Chapéus de Palha liderados por Luffy, que vieram              para curtir sua performance - todos aguardam ansiosamente a voz que o mundo inteiro estava esperando.', '2022', '../estruturas/img/opred.jpg', '../estruturas/img/oprbanner.jpg'),
(3, 'Yu-Gi-Oh! O Lado Negro das Dimensões', '2h 11m', '3', 1, 'Satoshi Kuwabara', 'No passado, Yami Yugi e Seto Kaiba se enfrentaram em inúmeras ocasiões. Yami Yugi, que habita dentro do corpo de Yugi Muto, e Kaiba vão duelar novamente, e esta será uma batalha em que os dois terão seu orgulho e experiência colocados à prova.', '2016', '../estruturas/img/yugioh.jpg', '../estruturas/img/dsod_banner.jpg'),
(4, 'Malévola: Dona do Mal', '1h 51m', '2', 1, 'Joachim Rønning', 'Malévola e sua afilhada Aurora começam a questionar os complexos laços familiares que as prendem à medida que são puxadas em direções diferentes por casamentos, aliados inesperados e novas forças sombrias em jogo.', '2019', '../estruturas/img/malevola.jpg', '../estruturas/img/Malevolabanner.retang.jpg'),
(5, 'Invocação do Mal', '1h 52m', '4', 2, 'James Wan', 'Os investigadores paranormais Ed e Lorraine Warren trabalham para ajudar a família aterrorizada por uma entidade demoníaca em sua fazenda.', '2013', '../estruturas/img/invocacaoDoMal1.jpg', '../estruturas/img/the-conjuring-banner.jpg'),
(6, 'A Casa do Terror', '1h 32m', '4', 2, ' Scott Beck, Bryan Woods', 'No Halloween, um grupo de amigos encontra uma casa assombrada que promete alimentar-se dos seus medos mais sombrios. A noite torna-se mortal quando eles chegam à terrível conclusão de que alguns pesadelos são reais.', '2019', '../estruturas/img/aCasadoTerror.jpg', '../estruturas/img/casa do terror banner.jpg'),
(7, 'O Exorcista', ' 2h 12m', '4', 2, ' William Friedkin', 'Uma atriz vai gradativamente tomando consciência de que a sua filha de doze anos está tendo um comportamento completamente assustador. Deste modo, ela pede ajuda a um padre, que também é um psiquiatra, e este chega a conclusão de que a garota está possuída pelo demônio. Ele solicita então a ajuda de um segundo sacerdote, especialista em exorcismo, para tentar livrar a menina desta terrível possessão.', '1973', '../estruturas/img/oExorcista.jpg', '../estruturas/img/o-exorcista-banner.jpg'),
(8, 'Doutor Estranho no Multiverso da Loucura', ' 2h 6m', '4', 4, 'Sam Raimi', 'O aguardado filme trata da jornada do Doutor Estranho rumo ao desconhecido. Além de receber ajuda de novos aliados místicos e outros já conhecidos do público, o personagem atravessa as realidades alternativas incompreensíveis e perigosas do Multiverso para enfrentar um novo e misterioso adversário.', '2022', '../estruturas/img/doutorEstranho2.jpeg', '../estruturas/img/doutor estranho banner.jpg'),
(9, 'Velozes & Furiosos 7', '2h 20m', '4', 4, ' James Wan', 'Um agente do governo oferece ajuda para cuidar de Shaw em troca de Dom e o grupo resgatar um \"hacker\" sequestrado. Dessa vez, não se trata apenas de velocidade: a corrida é pela sobrevivência.', '2015', '../estruturas/img/velozeseFuriosos7.jpg', '../estruturas/img/velozes e furiosos banner.jpg'),
(10, 'Jumanji: Próxima Fase', '2h 3m', '3', 4, 'Jake Kasdan', 'Spencer volta ao mundo fantástico de Jumanji. Os amigos Martha, Fridge e Bethany entram no jogo e tentam trazê-lo para casa. A turma descobre ainda mais obstáculos e perigos a serem superados.', '2019', '../estruturas/img/jumanji2.jpg', '../estruturas/img/jumanji-banner.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int NOT NULL AUTO_INCREMENT,
  `Genero` varchar(250) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `Genero`) VALUES
(1, 'Fantasia'),
(2, 'Terror'),
(3, 'Aventura'),
(4, 'Ação');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`id_usuario`, `username`, `email`, `senha`) VALUES
(1, 'teste', 'teste@teste.com', '2e6f9b0d5885b6010f9167787445617f553a735f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
