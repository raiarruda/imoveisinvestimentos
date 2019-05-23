CREATE TABLE `imovel`
(
  `id` int PRIMARY KEY,
  `destaque` bool
);

CREATE TABLE `loja`
(
  `id` int PRIMARY KEY,
  `imovel_id` int,
  `tem_mezzanino` bool,
  `frente_rua` bool,
  `shopping` bool,
  `centro_comercial` bool,
  `tipo_de_rua` int,
  `area` float
);

CREATE TABLE `sala`
(
  `id` int PRIMARY KEY,
  `imovel_id` int,
  `name` varchar(255),
  `merchant_id` int NOT NULL,
  `price` int,
  `status` varchar(255),
  `created_at` varchar(255)
);

CREATE TABLE `apartamento`
(
  `id` int PRIMARY KEY,
  `imovel_id` int,
  `a_venda` bool,
  `quartos` int,
  `suites` int,
  `salas` int,
  `cozinha` int,
  `varanda` int,
  `hall_social` int,
  `area_de_servico` bool,
  `elevador` bool,
  `salao_de_festa` bool,
  `piscina` bool,
  `academia` bool,
  `bicicletario` bool,
  `garagem` bool,
  `estacionamento` bool,
  `salao_de_jogos` bool,
  `quadra_poliesportiva` bool,
  `intertfone` bool,
  `cameras` bool,
  `portaria` bool,
  `portoes_eletronicos` bool,
  `area_privativa` float,
  `area_comuns` float,
  `area_total` float,
  `descricao` text,
  `localizacao` text
);

CREATE TABLE `casa`
(
  `id` int PRIMARY KEY,
  `imovel_id` int,
  `a_venda` bool,
  `quartos` int,
  `suites` int,
  `salas` int,
  `cozinha` int,
  `varanda` int,
  `hall_social` int,
  `area_de_servico` bool,
  `condominio` bool,
  `pavimentos` int,
  `area_terreno` float,
  `area_construida` float,
  `area_total` float,
  `descricao` text,
  `localizacao` text
);

CREATE TABLE `terreno`
(
  `id` int PRIMARY KEY,
  `imovel_id` int,
  `a_venda` bool,
  `tipo_de_rua` int,
  `tem_muro` bool,
  `tem_vegetacao` bool,
  `area_testada` float,
  `area_profundidade` float,
  `area_total` float
);

CREATE TABLE `img_imovel`
(
  `id` int PRIMARY KEY,
  `imovel_id` int,
  `nome_arquivo` varchar(255),
  `data` datetime
);

ALTER TABLE `loja` ADD FOREIGN KEY (`imovel_id`) REFERENCES `imovel` (`id`);

ALTER TABLE `sala` ADD FOREIGN KEY (`imovel_id`) REFERENCES `imovel` (`id`);

ALTER TABLE `apartamento` ADD FOREIGN KEY (`imovel_id`) REFERENCES `imovel` (`id`);

ALTER TABLE `casa` ADD FOREIGN KEY (`imovel_id`) REFERENCES `imovel` (`id`);

ALTER TABLE `terreno` ADD FOREIGN KEY (`imovel_id`) REFERENCES `imovel` (`id`);

ALTER TABLE `img_imovel` ADD FOREIGN KEY (`imovel_id`) REFERENCES `imovel` (`id`);
