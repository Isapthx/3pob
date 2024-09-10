-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/07/2024 às 01:53
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbprojetofinal`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `author_username` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `author_id`, `created_at`, `author_username`, `image`) VALUES
(28, 'TRETA QUENTE! Kendrick vs Drake!', 'A rivalidade entre Kendrick Lamar e Drake é uma das mais comentadas no mundo do rap, marcada por uma série de indiretas em músicas, entrevistas e performances ao longo dos anos. Aqui está um resumo dos principais momentos dessa disputa:\r\n\r\nControl Verse (2013): Kendrick Lamar deu início à rivalidade com sua famosa participação na faixa \"Control\" de Big Sean, onde ele nomeia vários rappers, incluindo Drake, desafiando-os diretamente e se autoproclamando o \"rei de Nova York\". Esse verso causou grande impacto na comunidade do rap e foi visto como uma declaração de guerra amigável.\r\n\r\nBET Cypher (2013): Kendrick lançou outra indireta em direção a Drake durante sua performance no BET Hip-Hop Awards Cypher, onde ele criticou rappers que não escrevem suas próprias letras, um possível ataque a Drake, que foi acusado de usar ghostwriters.\r\n\r\nEntrevistas e Indiretas: Após essas provocações iniciais, ambos os artistas continuaram a lançar indiretas um para o outro em suas músicas e entrevistas. Drake, em várias entrevistas, minimizou a importância das rimas de Kendrick, enquanto Kendrick continuou a afirmar sua superioridade lírica.\r\n\r\nFaixas de Resposta: Tanto Kendrick quanto Drake incluíram letras em suas músicas que muitos interpretaram como respostas diretas um ao outro. Exemplos incluem \"The Language\" de Drake e \"King Kunta\" de Kendrick.\r\n\r\nPremiações e Performances: A rivalidade também se manifestou em premiações e performances ao vivo, onde os dois evitaram interações diretas e, às vezes, faziam comentários sarcásticos sobre o outro.\r\n\r\nApesar dessa rivalidade, é importante notar que ambos os artistas continuaram a respeitar o talento e o impacto um do outro na indústria musical. A disputa nunca escalou para níveis pessoais extremos, permanecendo principalmente dentro dos limites da competição artística e do rap.', 2, '2024-07-10 21:57:49', 'adm', 'MUSIC P O D C A S T (2).jpg'),
(29, 'RET Declara Amor por Gloria Groove e Leva Um Fora Público: Treta Agita o Mundo do Rap!', 'No mundo fictício do rap, Diggy (Rapper RET) decide fazer uma live no Instagram, onde ele declara publicamente seu desejo de que Gloria Groove seja sua mulher.\r\n\r\n**Diggy (RET):** \"Vocês estão ligados que a Gloria Groove é uma das mulheres mais talentosas e incríveis desse país, né? Eu tava pensando aqui, e é o seguinte, eu quero que a Gloria seja minha mulher. É isso mesmo, Gloria Groove, cola comigo que o bagulho vai ser louco!\"\r\n\r\nA live explode de comentários, com os fãs de RET apoiando e incentivando a união, enquanto outros ficam em choque com a declaração.\r\n\r\nPouco tempo depois, Gloria Groove responde em suas redes sociais com um vídeo.\r\n\r\n**Gloria Groove:** \"Gente, vamos esclarecer umas coisas aqui. Primeiro, Diggy, eu te respeito como artista, você é brabo demais. Mas essa história de ser sua mulher? Não rola, meu caro. Eu sou dona da minha própria vida e carreira, e não vou ser de ninguém, entendeu? Estou focada na minha música e nos meus projetos. Então, pra galera que tá esperando um romance, sinto informar, mas isso não vai acontecer. Muita luz pra você, Diggy, mas segue o baile aí porque eu tô na minha.\"\r\n\r\nOs fãs de Gloria Groove aplaudem a resposta firme, enquanto a treta se espalha pelas redes sociais, gerando memes e discussões acaloradas entre os fãs dos dois artistas.', 2, '2024-07-10 22:20:33', 'adm', 'ret e gloria groove.png'),
(30, 'Péricles Entra na Treta de RET e Gloria Groove: Se Quer Conquistar, Vai Ter que Passar Por Mim!', 'Numa reviravolta inesperada, Péricles, o gigante do samba, entra na confusão durante uma entrevista ao vivo, jogando mais lenha na fogueira.\r\n\r\nPéricles: \"Olha, eu tenho um respeito enorme pelo RET e pela Gloria Groove, mas essa história de tretar em público não é o caminho. A gente tem que focar na música e no que nos une. Mas já que estou aqui, vou deixar claro: se alguém tá querendo conquistar a Gloria, vai ter que passar por mim primeiro. Eu não vou deixar barato!\"\r\n\r\nOs fãs ficam em polvorosa, e a treta ganha um novo capítulo explosivo.', 2, '2024-07-10 22:24:41', 'adm', 'pericles e ret.png'),
(31, 'Péricles Revela: Gloria Groove é Demais Para Qualquer Um! e Propõe Collab Explosiva com RET!', 'Em meio à polêmica envolvendo RET e Gloria Groove, um novo vídeo vaza, mostrando Péricles em uma conversa particular com RET. No vídeo, Péricles faz uma declaração inesperada.\r\n\r\nPéricles: \"Mano, eu sei que você tá na sua vibe e tudo mais, mas vou ser sincero aqui: Gloria Groove é demais pra qualquer um de nós. Ela é uma rainha, e a gente tem que respeitar isso. Mas, se você quer causar, então bora fazer uma collab insana pra galera ver o que é música de verdade!\"\r\n\r\nRET ri e concorda, mas a notícia da declaração vaza e gera um alvoroço nas redes sociais.', 2, '2024-07-10 22:26:57', 'adm', 'colabexplosiva.png'),
(32, 'Entre Acordes e Histórias: Conversa Musical com Bruno do Sorriso Maroto', 'Introdução:\r\nBem-vindos ao \"Entre Acordes e Histórias\", o podcast onde mergulhamos no universo da música com artistas que marcaram gerações. Hoje, temos uma conversa especial com Bruno, vocalista do Sorriso Maroto, sobre os bastidores da música e suas histórias pessoais.\r\n\r\nChristiano Monteiro Bourguignon Leite: Bruno, é um prazer tê-lo aqui! O Sorriso Maroto tem uma trajetória incrível na música brasileira. Como você descreveria a evolução da banda ao longo dos anos?\r\n\r\nBruno do Sorriso Maroto: Christiano, primeiro obrigado pelo convite! Olha, nossa evolução foi uma jornada de aprendizado e amadurecimento musical. Começamos na adolescência, misturando samba com pagode romântico, e ao longo dos anos fomos explorando novos estilos e experimentando diferentes sonoridades.\r\n\r\nChristiano Monteiro Bourguignon Leite: E falando em sonoridades, como vocês lidam com a pressão de inovar sem perder a essência do Sorriso Maroto?\r\n\r\nBruno do Sorriso Maroto: Essa é uma questão que sempre nos preocupou. Acreditamos que a essência do Sorriso Maroto está na nossa identidade musical e nas letras que emocionam. Sempre buscamos novas formas de expressar isso, seja através de parcerias com outros artistas, explorando novos ritmos, ou simplesmente contando histórias que tocam o coração das pessoas.\r\n\r\nChristiano Monteiro Bourguignon Leite: E quais são os planos futuros da banda? Podemos esperar algum projeto especial?\r\n\r\nBruno do Sorriso Maroto: Com certeza! Estamos sempre trabalhando em novas músicas e pensando em maneiras de surpreender nossos fãs. Temos alguns projetos em mente que ainda não podemos revelar totalmente, mas posso adiantar que estamos empolgados com o que está por vir!\r\n\r\nChristiano Monteiro Bourguignon Leite: Incrível! E para finalizar, Bruno, qual conselho você daria para os jovens que estão começando na música hoje?\r\n\r\nBruno do Sorriso Maroto: A música é uma jornada de paixão e dedicação. Persistência é a chave. Não tenham medo de experimentar, de errar, de aprender com os desafios. E, acima de tudo, sejam autênticos e fiéis à sua arte. Isso é o que torna cada artista único.\r\n\r\nEncerramento:\r\nE assim concluímos mais um episódio do \"Entre Acordes e Histórias\". Agradeço muito ao Bruno do Sorriso Maroto por compartilhar conosco suas experiências e insights. Não se esqueçam de acompanhar o Sorriso Maroto nas redes sociais e de ouvir suas músicas inspiradoras. Até a próxima!', 1, '2024-07-10 22:31:22', 'christiano', 'MUSIC P O D C A S T.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'christiano', '123'),
(2, 'adm', '123'),
(5, 'isaac', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`author_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
