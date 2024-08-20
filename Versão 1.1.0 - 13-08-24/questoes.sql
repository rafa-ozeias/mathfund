-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Ago-2024 às 17:30
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `questoes`
--
CREATE DATABASE IF NOT EXISTS `questoes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `questoes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

DROP TABLE IF EXISTS `arquivos`;
CREATE TABLE IF NOT EXISTS `arquivos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `caminho` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data_upload` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `caminho`, `data_upload`) VALUES
(16, '66b383a2c29b9.png', '../../IMG/fotoPerfil/66b4f7c28060d.png', '2024-08-08 13:52:18'),
(17, 'R.png', '../../IMG/fotoPerfil/66b4fada0638a.png', '2024-08-08 14:05:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes_6ano`
--

DROP TABLE IF EXISTS `questoes_6ano`;
CREATE TABLE IF NOT EXISTS `questoes_6ano` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enunciado` varchar(250) NOT NULL,
  `questao_certa` varchar(50) NOT NULL,
  `questao_1` varchar(50) NOT NULL,
  `questao_2` varchar(50) NOT NULL,
  `questao_3` varchar(50) NOT NULL,
  `questao_4` varchar(50) NOT NULL,
  `questao_5` varchar(50) NOT NULL,
  `dicas` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `questoes_6ano`
--

INSERT INTO `questoes_6ano` (`id`, `enunciado`, `questao_certa`, `questao_1`, `questao_2`, `questao_3`, `questao_4`, `questao_5`, `dicas`) VALUES
(1, 'A diferença entre os números naturais 1.245 e  345 é igual a:', '900', '1.200 ', '920 ', '1.000 ', '900', '910', 'Subtraia o número menor do maior e mantenha o sinal do número maior. '),
(2, 'A diferença entre os números naturais 4.500 e  345 é igual a:', '4.155 ', '4.000 ', '4.155 ', '4.150 ', '3.155 ', '3.150 ', 'Subtrair um número pequeno de um maior envolve uma simples subtração direta. '),
(3, 'A diferença entre os números naturais 20.010 e 3.291 é igual a:', '16.719 ', '16.720 ', '15.719 ', '16.719 ', '15.720 ', '16.721 ', 'Subtraia o menor número do maior, garantindo que o resultado é positivo se o minuendo for maior. '),
(4, 'A diferença entre os números naturais 50.000 e  36.672 é igual a:', '13.328 ', '13.382 ', '13.329 ', '13.238 ', '23.328 ', '13.328 ', 'Subtraia o número menor do maior, considerando o sinal negativo se o subtraendo for maior.'),
(5, 'A diferença entre os números naturais 1.000.000 e 359.600 é igual a:', '640.400 ', '640.400 ', '650.400 ', '435.000 ', '540.400 ', '550.000 ', 'Subtraia o menor número do maior e mantenha o sinal positivo. '),
(6, 'A soma entre os números naturais 234 e 430 é igual a:', '664', '649', '664', '646', '664', '634', 'Some os dois números normalmente, alinhando as unidades, dezenas e centenas. '),
(7, 'A soma entre os números naturais 1236 e 6321 é igual a:', '7.557 ', '7.498', '7.449', '6.449 ', '6.557', '7.557 ', 'Realize a soma normalmente, verificando o alinhamento correto dos números. '),
(8, 'A soma entre os números naturais 1.200.456 e 898.078 é igual a:', '2.098.534 ', '2.098.530 ', '2.100.000 ', '2.098.534 ', '2.098.533 ', '2.098.535 ', 'Some os números maiores, garantindo a adição correta de unidades e milhares. '),
(9, 'A soma entre os números naturais 1.650 e 4.289 é igual a:', '5.939', '5.940 ', '5.950 ', '5.900', '5.939', '6.000 ', 'Some os números e verifique o resultado com atenção, pois é uma soma grande. '),
(10, 'A soma entre os números naturais 2.850 e 7.180 é igual a:', '10.030', '10.030', '11.000', '10.040 ', '10.130 ', '11.030', 'Some os dois números e verifique o alinhamento dos dígitos. '),
(11, 'A multiplicação entre os números naturais 25 e 4 é igual a:', '100 ', '125', '110 ', '100 ', '75 ', '50', 'Multiplique os dois números diretamente e cheque o resultado final. '),
(12, 'A multiplicação entre os números naturais 15 e 5 é igual a:', '75', '100', '80', '90', '75', '65', 'Realize a multiplicação dos números e confirme o resultado. '),
(13, 'A multiplicação entre os números naturais 45 e 12 é igual a:', '540', '530', '550', '540', '545', '555', 'Multiplique os dois números e verifique a resposta, usando a decomposição se necessário. '),
(14, 'A multiplicação entre os números naturais 23 e 56 é igual a:', '1.288', '1.288', '1.280 ', '1.298 ', '1.300 ', '1.388 ', 'Multiplique os números e ajuste a resposta conforme necessário. '),
(15, 'A multiplicação entre os números naturais 54 e 63 é igual a: ', '3.402', '2.302', '2.402', '3.502', '3.402', '3.302', 'Multiplique normalmente e verifique se o resultado está correto. '),
(16, 'A divisão entre os números naturais 45 e 9 é igual a:', '5', '7', '6', '3', '4', '5', 'Divida o número maior pelo menor e mantenha o sinal da divisão. '),
(17, 'A divisão entre os números naturais 220 e 4 é igual a:', '55', '55', '50', '45', '40', '60', 'Divida o número maior pelo menor número diretamente. '),
(18, 'Qual opção está correta?', '43 > 34', '43 = 34 ', '43 > 34', '34 > 43', '43 < 34', '34 = 43', 'Compare os dois números e determine qual é maior ou menor. '),
(19, 'Qual opção está correta?', '44 > 43', '52 > 90', '46 < 45', '34 = 46', '43 < 34', '44 > 43', 'Compare os números e identifique qual é o maior e qual é o menor. \r\n\r\n  '),
(20, 'Qual opção está correta?', '56 = 56', '540 > 940', '460 < 459 ', '56 = 56', '120 < 34 ', '89 > 98', 'Compare os números diretamente e determine qual é maior. '),
(21, 'Como se escreve o número 23 em algarismos romanos?', 'XXIII', 'XIII', 'XXI', 'XIII', 'XXIII', 'DIII', 'Escreva o número em algarismos romanos, lembrando dos valores básicos (I, V, X, L, C). '),
(22, 'Como se escreve o número 68 em algarismos romanos?', 'LXVIII', 'LXV', 'LXVIII', 'LC', 'LXVII', 'LXVI', 'Converta o número para algarismos romanos, sabendo que LXVIII representa 68.'),
(23, 'Como se escreve o número 198 em algarismos romanos?', 'CXCVIII', 'CXCVI', 'CXVCIII', 'CC', 'CXC', 'CXCVIII', 'Converta o número para algarismos romanos, usando a combinação correta de valores. '),
(24, 'Como se escreve o número romano XXI em algarismos indo-arábicos?', '21', '20', '11', '21', '19', '22', 'Converta o número romano XXI para algarismos indo-arábicos. '),
(25, 'Como se escreve o número romano XXXV em algarismos indo-arábicos?', '35', '35', '36', '37', '34', '33', 'Converta o número romano XXXV para o sistema de números indo-arábicos. '),
(26, 'Como se escreve o número romano LIII em algarismos indo-arábicos? ', '53', '63', '44', '53', '43', '54', 'Converta o número romano LIII para o sistema de números indo-arábicos. '),
(27, 'Como se escreve o número romano CV em algarismos indo-arábicos?', '105', '100', '105', '150', '155', '505', 'Converta CV para números indo-arábicos, sabendo que C é 100 e V é 5.'),
(28, 'A soma entre 2/10 e 3/5 é igual a:', '4/5', '3/6', '4/6', '3/2', '4/5', '4/4', 'Some as frações usando o denominador comum para facilitar a operação. '),
(29, 'A soma entre 4/7 e 1/5 é igual a:', '27/35', '27/35', '20/35', '27/34', '5/12', '28/36', 'Adicione as frações encontrando o denominador comum e depois some.'),
(30, 'A diferença entre 20/4 e 16/5 é igual a:', '9/5', '9/6', '5/9', '9/9', '4/5', '9/5', 'Subtraia as frações encontrando o denominador comum e depois faça a operação. '),
(31, 'A diferença entre 55/10 e 4/5 é igual a:', '47/10', '45/10', '47/10', '51/5', '50/5', '48/5', 'Subtraia as frações ajustando para um denominador comum para facilitar. '),
(32, 'A multiplicação entre 2/13 e 5/7 é igual a:', '10/91', '10/93', '10/92 ', '10/90', '10/91', '10/45', 'Multiplique os numeradores e denominadores das frações diretamente. '),
(33, 'A multiplicação entre 40/2 e 3/70 é igual a: ', '120/140', '120/140', '80/140', '80/210', '80/120', '120/150', 'Multiplique as frações simplificando antes se possível. '),
(34, 'A divisão entre 2/3 e 5/7 é igual a: ', '14/15', '15/14', '14/12', '14/15', '15/12', '13/12', 'Divida as frações multiplicando pela fração inversa. '),
(35, 'A divisão entre 12/4 e 50/3 é igual a:', '36/200', '39/200', '9/200', '9/36', '32/200', '36/200', 'Divida as frações convertendo a divisão em multiplicação pela fração inversa. '),
(36, 'Transforme 5kg para toneladas:', '0,005 t', '0,05 t ', '0,005 t', '0,5 t', '0,0005 t', '5000 t', 'Converta kg para toneladas dividindo por 1.000. '),
(37, 'Transforme 8L para mililitro: ', '8000 mL', '800 mL', '80 mL', '8000 mL', '80000 mL ', '0,8 mL', 'Converta litros para mililitros multiplicando por 1.000. '),
(38, 'Transforme 2400 metros para quilometro:', '2,4 km', '2,4 km', '2,04 km', '24 km ', '240 km', '0,24 km', 'Converta metros para quilômetros dividindo por 1.000. '),
(39, 'Transforme 550.000 metros para milímetro:', '550.000.000 mm ', '55 mm', '5.500 mm ', '550.000.000.000 mm', '55.000 mm', '550.000.000 mm ', 'Converta metros para milímetros multiplicando por 1.000.000. '),
(40, 'Transforme 600 mg para quilograma:', '0,0006 kg', '6 kg ', '0,6 kg', '0,06 kg ', '0,0006 kg', ' 0,006 kg', 'Converta miligramas para quilogramas dividindo por 1.000.000. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes_7ano`
--

DROP TABLE IF EXISTS `questoes_7ano`;
CREATE TABLE IF NOT EXISTS `questoes_7ano` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enunciado` varchar(250) NOT NULL,
  `questao_certa` varchar(50) NOT NULL,
  `questao_1` varchar(50) NOT NULL,
  `questao_2` varchar(50) NOT NULL,
  `questao_3` varchar(50) NOT NULL,
  `questao_4` varchar(50) NOT NULL,
  `questao_5` varchar(50) NOT NULL,
  `dicas` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `questoes_7ano`
--

INSERT INTO `questoes_7ano` (`id`, `enunciado`, `questao_certa`, `questao_1`, `questao_2`, `questao_3`, `questao_4`, `questao_5`, `dicas`) VALUES
(1, 'Qual é o resultado de (-6) + 4?', '2', '-2', '2', '-24', '10', '24', 'Subtraia a unidade maior da menor, mantendo o sinal do maior número. '),
(2, 'Quanto é (-8) - (-3)?', '-5', '-5', '5', '-11', '11', '- 24', ' Lembre-se que subtrair um número negativo é o mesmo que adicionar seu valor positivo. \r\n'),
(3, 'Qual é o produto de (-5) × 3?', '-15', '-8', '2', '-15', '8', '-2', ' Multiplicar um número negativo por um positivo resulta em um número negativo. '),
(4, 'O resultado de (-3) × (-2) é:', '6', '1', '6', '5', '-6', '-1', 'Multiplicar dois números negativos resulta em um número positivo.'),
(5, 'Quanto é (-12) ÷ 4?', '-3', '-3', '3', '-4', '4', '2', 'Divida normalmente e mantenha o sinal negativo'),
(6, 'Qual é o resultado de 3²?', '9', '-9', '6', '-3', '9', '-6', 'Eleve o número à segunda potência (multiplique o número por ele mesmo). '),
(7, 'Se (-7) + 5 = x, qual é o valor de x?', '-2', '-5', '-7', '12', '-2', '5', 'Subtraia a unidade maior da menor, mantendo o sinal do maior número. '),
(8, 'O valor de (-9) - 3 é:', '-12', '-12', '3', '-6', '6', '-3', ' Subtraia o número positivo do negativo, mantendo o sinal negativo. '),
(9, 'Quanto é (-5) × (-3)?', '15', '-3', '15', '-15', '8', '5', 'Multiplicar dois números negativos resulta em um número positivo. '),
(10, 'Se (-15) ÷ (-5) = x, qual é o valor de x?', '3', '5', '3', '-10', '-3', '-2', 'Divida normalmente e transforme o resultado em positivo.'),
(11, 'Qual é o resultado de (-2)³?', '-8', '8', '4', '--6', '-8', '-4', 'Eleve o número à terceira potência (multiplique o número por ele mesmo três vezes), mantendo o sinal. '),
(12, 'Qual é a solução da equação 4x - 8 = 16?', 'x = 6', 'x = 6', 'x = 4', 'x = 8', 'x = 10', 'x = 2', ' Isolar x; mova o 8 para o outro lado da equação e depois divida pelo coeficiente de x. '),
(13, 'Se 2x + 5 = 15, qual é o valor de x?', 'x = 5', 'x = 10', 'x = 5', 'x = 15', 'x = 20', 'x = -5', 'Isolar x; subtraia 5 de ambos os lados e depois divida pelo coeficiente de x. '),
(14, 'O valor de x na equação 3(x - 2) = 21 é:', 'x = 9', 'x = 5', 'x = 7', 'x = 9', 'x = 11', 'x = 3', 'Divida ambos os lados por 3 e depois some 2 para isolar x.'),
(15, 'Qual é a solução da equação 2x + 3 = 11?', 'x = 4', 'x = 5', 'x = 6', 'x = 7', 'x = 4', 'x = 2', ' Isolar x; subtraia 3 de ambos os lados e depois divida pelo coeficiente de x.'),
(16, 'Quanto é 1/2 + 1/3?', '5/6', '5/6', '1/6', '3/5', '1/3', '6/5', 'Encontre um denominador comum antes de somar as frações. '),
(17, 'Qual é o resultado de 3/4 - 1/2?', '1/4', '1', '1/2', '1/4', '1/8', '4/1', 'Encontre um denominador comum antes de subtrair as frações. '),
(18, 'O produto de 2/3 e 5/6 é:', '5/9', '1/9', '5/9', '1/3', '10/18', '9/5', 'Multiplique os numeradores entre si e os denominadores entre si. '),
(19, 'Quanto é (2/5) ÷ (1/4)?', '8/5', '8/5', '2/5', '4/5', '8/5', '5/8', 'Inverter a fração do divisor e depois multiplicar.'),
(20, 'Qual é o valor de (3/2)²?', '9/4', '9/9', '5/6', '1/9', '9/4', '4/9', 'Eleve o numerador e o denominador à segunda potência.'),
(21, 'Se (-1/2) + (3/4) = x, qual é o valor de x?', 'x = 1/4', 'x = 1', 'x = 1/2', 'x = 1/4', 'x = 2', 'x = 4', 'Encontre um denominador comum antes de somar as frações.'),
(22, 'O resultado de (2/3) - (1/6) é:', '1/2', '1/2', '1/3', '1/6', '2/3', '3/2 ', 'Encontre um denominador comum antes de subtrair as frações.'),
(23, 'Quanto é (-3/4) × 2?', '-3/2', '-3/2', '-6/4', '3/8', '6/4', '3/2', 'Multiplique normalmente e mantenha o sinal negativo.'),
(24, 'Qual é o resultado de (-5/6) ÷ (-1/2)?', '5/3', '5/12', '5/3', '-1/10', '1/10', '3/5', ' Inverter a fração do divisor e depois multiplicar, mantendo o sinal positivo. '),
(25, 'Qual o resulto da expressão: 15 – (8 – 7) + (9 – 4) = ?   ', '', '17', '-19', '18', '19', '-17', 'Resolva as operações dentro dos parênteses primeiro.'),
(26, 'Qual o resulto da expressão: 12 – { – 3 + [1 + (+ 2 – 9) – 8] + 5} ? ', '24', '15', '-20', '24', '20', '-12', 'Resolva as operações dentro dos colchetes e chaves primeiro. '),
(27, 'O dobro de um número, somado com 8 é igual a 40. Que número é esse?', '32', '20', '32', '22', '18', '28', 'Subtraia 8 de 40 e depois divida o resultado por 2. '),
(28, 'Calcule: 17% de R$ 540,00. ', 'R$ 91,80', 'R$ 91,50', 'R$ 82,82', 'R$ 91,80', 'R$ 91,79', 'R$ 90,71', 'Multiplique 0,17 pelo valor total. '),
(29, 'Calcule: 30% de R$ 1.200,00. ', 'R$ 360,00', 'R$ 1.100,00', 'R$ 360,00', 'R$ 350,00', 'R$ 1.170,00', 'R$ 362,00', ' Multiplique 0,30 pelo valor total.'),
(30, 'Um terreno tem forma quadrada, de lado 21,7 m. Qual é a área do terreno?', '43,4 m²', '470,89 m²', '43,4 m²', '42,4 m²', '421,7 m²', '301,7 m²', 'Multiplique a medida do lado por ela mesma. '),
(31, 'O dobro de um número, somado com 9 é igual a 45. Que número é esse?', '18', '10', '19', '9', '12', '18', 'Subtraia 9 de 45 e depois divida o resultado por 2. '),
(32, 'Calcule quanto é 30% de R$ 1.500,00', 'R$ 450,00', 'R$ 1.100,00', 'R$ 360,00', 'R$ 450,00', 'R$ 1.470,00', 'R$ 1.200,00', 'Multiplique 0,30 pelo valor total.'),
(33, 'Represente o número decimal 0,35 em forma de fração.', '35/100', '3/5', '35/100', '35/10', '10/35', '5/3', 'Coloque o número sobre 100 e simplifique a fração. '),
(34, 'Represente o número decimal 0,42 em forma de fração.', '42/100', '4/2', '42/100', '42/10', '40/2', '42/1000', 'Coloque o número sobre 100 e simplifique a fração.'),
(35, 'Qual o resulto da expressão: (+ 4) . (+ 8) = 4.(+ 8) = (+ 8) + (+ 8) + (+ 8) + (+ 8) = ? ', '32', '20', '-20', '24', '-31', '32', 'Multiplique 4 por 8.'),
(36, 'Qual é a idade do meu pai hoje, se daqui a 35 anos ele terá 63 anos?', '30', '30', '39', '29', '32', '35', 'Subtraia 35 de 63'),
(37, 'Calcule: 72% de R$ 1.800,00.', 'R$ 1.296,00', 'R$ 1.276,00', 'R$ 1.295,00', 'R$ 1.728,00', 'R$ 1.296,00', 'R$ 1.642,00', 'Multiplique 0,72 pelo valor total.'),
(38, 'Calcule: – 7x = – 63', '9', '6', '56', '-9', '9', '-2', 'Divida ambos os lados da equação por -7.'),
(39, 'Calcule: 54 + (– 6) . (+ 9) = ?', '0', '0', '57', '-57', '69', '-69', 'Resolva a multiplicação e depois some o resultado com 54'),
(40, 'O ingresso do cinema custa R$ 18,00. Como estudante, tenho 50% de desconto. Quanto vou pagar pelo ingresso?', 'R$ 9,00', 'R$ 13,00', 'R$ 9,00', 'R$ 5,00', 'R$ 0,00', 'R$ 5,00', 'Multiplique o valor do ingresso por 0,5. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes_8ano`
--

DROP TABLE IF EXISTS `questoes_8ano`;
CREATE TABLE IF NOT EXISTS `questoes_8ano` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enunciado` varchar(250) NOT NULL,
  `questao_certa` varchar(50) NOT NULL,
  `questao_1` varchar(50) NOT NULL,
  `questao_2` varchar(50) NOT NULL,
  `questao_3` varchar(50) NOT NULL,
  `questao_4` varchar(50) NOT NULL,
  `questao_5` varchar(50) NOT NULL,
  `dicas` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `questoes_8ano`
--

INSERT INTO `questoes_8ano` (`id`, `enunciado`, `questao_certa`, `questao_1`, `questao_2`, `questao_3`, `questao_4`, `questao_5`, `dicas`) VALUES
(1, 'Qual desses números reais é o maior?', '0,64', '0,6', '0,64', '0,57', '0,63', '0,59', 'Compare os números decimais e encontre o maior valor. '),
(2, 'Qual desses números reais é o maior?', '0,536', '0,523', '0,534', '0,525', '0,5', '0,536', 'Compare os números decimais e identifique o maior valor.'),
(3, 'Qual desses números reais é o maior?', '0,7892', '0,7892', '0,7783', '0,7890', '0,7882', '0,7792 ', 'Compare os números decimais e verifique qual é o maior. '),
(4, 'Qual desses números reais é o maior?', '3,24561', '3,24462', '3,24451', '3,24561', '3,23561', '4,24560', 'Compare os números decimais e escolha o maior número. '),
(5, 'Qual desses números reais é o maior?', '1,77723', '1,77713', '1,77721 ', '1,77624', '1,77723', '1,77623', 'Compare os números decimais e selecione o maior valor. '),
(6, 'Qual desses números reais é o menor? ', '1,63', '1,77', '1,63', '1,66', '1,78', '1,68', 'Compare os números decimais e encontre o menor valor. '),
(7, 'Qual desses números reais é o menor?', '23,689', '23,689', '23,690', '23,698', '24,698', '24,589', 'Compare os números decimais e selecione o menor valor. '),
(8, 'Qual desses números reais é o menor?', '4,778', '4,779', '4,878', '4,778', '4,788', '4,888', 'Compare os números decimais e identifique o menor número.'),
(9, 'Qual desses números reais é o menor?', '99,124', '99,154', '99,120', '99,144', '99,134', '99,124', 'Compare os números decimais e encontre o menor valor. '),
(10, 'Qual desses números reais é o menor?', '100,998', '100,999', '110,990', '110,998', '100,998', '101,99 ', 'Compare os números decimais e encontre o menor valor. '),
(11, 'Passe o número 105.000 para notação cientifíca', '1,05 x 10^5', '10,5 x 10^5', '1,05 x 10^5', '105 x 10^5', '1,5 x 10^5', '15 x 10^5', 'Converta o número para notação científica ajustando a posição do ponto decimal.'),
(12, 'Passe o número 0,0019 para notação científica', '1,9 x 10^-3', '19 x 10^-3', '9 x 10^-3', '90 x 10^-3', '1,9 x 10^-3', '0,9 x 10^-3', 'Converta o número para notação científica ajustando o expoente.'),
(13, 'Passe o número 0,00004 para notação científica', '4 x 10^-5 ', '400 x 10^-5', '4 x 10^-4', '0,4 x 10^-5', '40 x 10^-5', '4 x 10^-5 ', 'Converta o número para notação científica, ajustando o ponto decimal corretamente. '),
(14, 'Passe o número 24.000.000 para notação cientifíca', '2,4 x 10^7', '2,4 x 10^8', '24 x 10^7', '2,4 x 10^7', '24 x 10^7', '240 x 10^8 ', 'Converta o número para notação científica, ajustando a posição correta do ponto decimal. '),
(15, 'Passe o número 2.000.000.000 para notação cientifíca', '2,0 x 10^9', '2,0 x 10^10', '2,0 x 10^9', '2,0 x 10^8', '2,0 x 10^6', '2,0 x 10^7', 'Converta o número para notação científica ajustando a posição do ponto decimal.'),
(16, 'Passe a notação 1,20 x 10^-3  para número', '0,00120 ', '0,00120 ', '0,0120', '0,12', '1,2', '1,02', 'Converta a notação científica para número, movendo o ponto decimal. '),
(17, 'Passe a notação 6,02 x 10^23  para número', '602.000.000.000.000.000.000.000', '602', '602.000.000.000', '602.000.000.000.000.000', '602.000.000.000.000.000.000', '602.000.000.000.000.000.000.000', 'Converta a notação científica para número, ajustando o expoente.'),
(18, 'Passe a notação 2,99792458 x 10^8  para número', '299.792.458', '299.792.458.000', '2.997.924.580', '29.792.458', '299.792.458', '299.792.548', 'Converta a notação científica para número, movendo o ponto decimal. '),
(19, 'Passe a notação 2,03 x 10^8  para número', '203.000.000', '203', '203.000', '203.000.000', '203.000.000.000', '20.300', 'Converta a notação científica para número, ajustando o expoente. '),
(20, 'Passe a notação 1,496 x 10^8  para número', '149.600.000', '149.600.000', '149.600', '149.600.000.000', '1.496 ', '14.960', 'Converta a notação científica para número, ajustando a posição do ponto decimal. '),
(21, 'Calcule a raiz quadrada de 144.', '12', '10', '14', '12', '13', '11', 'Calcule a raiz quadrada do número, procurando o número que ao ser multiplicado por ele mesmo resulta no número original. '),
(22, 'Calcule a raiz quadrada de 441.', '21', '20', '21', '22', '24', '19', 'Calcule a raiz quadrada do número e encontre a raiz exata.'),
(23, 'Calcule a raiz quadrada de 324.', '18', '19', '16', '17', '14', '18', 'Calcule a raiz quadrada do número, verificando qual número elevado ao quadrado resulta no valor dado. '),
(24, 'Calcule a raiz cúbica de 216.', '6', '7', '5', '12', '6', '8', 'Calcule a raiz cúbica do número, encontrando o valor que multiplicado por ele mesmo três vezes resulta no número original.'),
(25, 'Calcule a raiz cúbica de 512.', '8', '8', '9', '10', '12', '7', 'Calcule a raiz cúbica do número para encontrar o valor que ao ser multiplicado três vezes resulta no número dado. '),
(26, 'Calcule 2^6', '64', '54', '62', '64', '52', '66', 'Calcule a potência do número, elevando a base ao expoente indicado. '),
(27, 'Calcule 1^600', '1', '1.000', '1', '1.000.000', '1.000.000.000', '100', 'Calcule a potência de 1 elevado a qualquer número para obter o resultado. '),
(28, 'Calcule 120.000.000.000^0', '1', '0,12', '12', '120 ', '1', '0', 'Qualquer número elevado a zero é igual a 1.'),
(29, 'Calcule 3^8', '6.561', '6.561', '5.561', '6.651', '5.651', '6.551', 'Calcule a potência para encontrar o valor resultante da base elevada ao expoente dado.'),
(30, 'Calcule 7^4', '2.401', '2.500', '2.300', '2.301', '2.400 ', '2.401', 'Calcule a potência de 7 elevada ao expoente indicado para obter o resultado.'),
(31, 'Calcule a equação: 3x - x = 8 ', '4', '6', '4', '3', '2', '7', 'Resolva a equação isolando a variável e resolvendo a expressão.'),
(32, 'Calcule a equação: 4x - 9 = 1 - 2x', '10/6', '10/6', '11/6', '10/5', '10/6', '11/5', 'Resolva a equação ajustando os termos para isolar a variável.'),
(33, 'Calcule a equação: 9x - 4x + 10 = 7x - 30', '20', '22', '15', '20', '-20', '-15', 'Resolva a equação encontrando o valor da variável que satisfaz a igualdade. '),
(34, 'Calcule a equação: x + 5 = 20 - 4x', '3', '1', '4', '6', '2', '3', 'Resolva a equação isolando a variável e resolvendo a expressão. '),
(35, 'Calcule a equação: x + x − 14 = 88', '51', '40', '41', '50', '51', '61', 'Resolva a equação ajustando e simplificando os termos para encontrar o valor da variável. '),
(36, 'Calcule a equação: 3x + 4 = 5x - 8', '6', '6', '8', '3', '7', '10', 'Resolva a equação isolando a variável e simplificando a expressão.'),
(37, 'Calcule a equação: 55x = 50.(x−7) + 510', '32', '12', '36', '32', '25', '27', 'Resolva a equação simplificando e isolando a variável. '),
(38, 'Calcule a equação: x + (x+1) + (x−1) = 222', '74', '65', '74', '79', '64', '80', 'Resolva a equação simplificando a expressão para encontrar o valor da variável. '),
(39, 'Calcule a equação: 3x − x = 94 ⋅ 3', '141', '141', '148', '155', '151', '138', 'Resolva a equação ajustando os termos e isolando a variável. '),
(40, 'Calcule a equação: 3x + 4 + 2x – 15 + 86 = 180', '21', '11', '30', '24', '27', '21', 'Resolva a equação isolando a variável e simplificando a expressão. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes_9ano`
--

DROP TABLE IF EXISTS `questoes_9ano`;
CREATE TABLE IF NOT EXISTS `questoes_9ano` (
  `id` int NOT NULL AUTO_INCREMENT,
  `enunciado` varchar(250) NOT NULL,
  `questao_certa` varchar(50) NOT NULL,
  `questao_1` varchar(50) NOT NULL,
  `questao_2` varchar(50) NOT NULL,
  `questao_3` varchar(50) NOT NULL,
  `questao_4` varchar(50) NOT NULL,
  `questao_5` varchar(50) NOT NULL,
  `dicas` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `questoes_9ano`
--

INSERT INTO `questoes_9ano` (`id`, `enunciado`, `questao_certa`, `questao_1`, `questao_2`, `questao_3`, `questao_4`, `questao_5`, `dicas`) VALUES
(1, 'Resolva a seguinte equação: x² + 5x/2 - 3/2 = 0', 'As raízes são -3; 1/2   ', 'As raízes são -3; 4/2', 'As raízes são -3; 1/2   ', 'As raízes são -4; 1/2', 'As raízes são 3; 1/2', 'As raízes são -3; -1/2', 'Use a fórmula de Bhaskara para resolver a equação quadrática.'),
(2, 'Resolva a seguinte equação: 3x - 6y + a.x – 2a.y', '(3+a)(x-2y)', '(3+x)(x-2y)', '(3+a)(x+2y) ', '(3-a)(x-2y)', '(3+a)(x-2y)', '(3+a)(6-2y)', 'Agrupe os termos semelhantes e fatorize. '),
(3, 'Se X= (-3)³ - 4², então X é igual a:', '- 43', '- 43', '-23', '33', '43', '- 33', 'Lembre-se das propriedades de potências e subtração. '),
(4, 'Resolva: 3,45 . 108 . 6,74 . 10-2', '  25,12', '  21,12', '  22,15', '  25,16', '  10,32', '  20,12', 'Para resolver a expressão, calcule o produto dos números e, em seguida, ajuste o resultado usando a potência de 10.'),
(5, 'Se x + y = 13 e x . y = 1, então x2 + y2 é', '167', '16', '170', '168', '169', '167', 'Use a identidade algébrica: (x + y)² = x² + 2x.y + y ²'),
(6, 'Qual o valor da raiz quadrada de 36?', '6', '8', '-6', '3+3 x 6', '9', '2', 'Verifique se a expressão é um produto notável.'),
(7, 'Um triângulo retângulo formado pelos catetos 9 cm e 12 cm. Qual a medida da hipotenusa?', '15 cm', '18 cm', '16 cm', '15 cm', '17 cm', '14 cm', 'Use o teorema de Pitágoras'),
(8, 'Calcule a área de um triângulo com base de 10cm e altura 5cm.', '25 cm²', '15 cm²', '25 cm²', '20 cm²', '30 cm²', '35 cm²', 'A fórmula para a área de um triângulo é: base x altura dividido por 2'),
(9, 'Qual é a soma dos 10 primeiros termos da PA em que o primeiro termo é 3 e a razão é 4?', '150', '120', '130', '140', '150', '160', 'Use a fórmula da soma dos primeiros termos de uma PA.'),
(10, 'Qual o valor da raiz quadrada de 81?', '9', '9', '8', '2', '40,5', '40', 'A raiz quadrada de 81 é um número inteiro.'),
(11, 'Calcule o volume de um cubo com aresta de 4cm.', '64 cm²', '16 cm²', '32 cm²', '64 cm²', '60 cm²', '48 cm²', ' Lembre-se da fórmula para o volume de um cubo: (aresta)³'),
(12, 'Calcule: \r\n2x + y = 8\r\n3x – y = 7\r\n', 'x = 3, y = 2', 'x = 2, y = 4', 'x = 1, y = 6', 'x = 4, y = 0', 'x = 5, y = -2', 'x = 3, y = 2', 'Resolva o sistema de equações simultâneas. '),
(13, 'Qual o perímetro de um quadrado com lado 5 cm?', '20 cm', '10 cm', '15 cm', '20 cm', '25 cm', '30 cm', 'O perímetro de um quadrado é a soma de todos os seus lados. '),
(14, 'Calcule a área de um círculo com raio de 4cm, Pi = 3,14.', '50,24 cm²', '12,56 cm²', '25,12 cm²', '37,68 cm²', '50,24 cm²', '62,80 cm²', 'Use a fórmula da área do círculo: 𝜋.𝑟²\r\n'),
(15, 'Em um dado de 6 faces, qual é a probabilidade de cair um número ímpar em um lançamento?', '1/2', '1/6', '1/2', '1/3', '2/3', '5/6', 'Conte quantos números ímpares há entre 1 e 6. '),
(16, 'Qual é a média dos números: 6, 8, 10, 12, 14?', '10', '8', '9', '12', '11', '10', 'Some todos os números e divida o resultado pela quantidade de números.'),
(17, 'Qual é a soma dos ângulos internos de um triângulo?', '180°', '90°', '120°', '180°', '270°', '360°', 'A soma dos ângulos internos de um triângulo é sempre a mesma. '),
(18, 'Qual é o valor de 7²?', '49', '49', '21', '28', '35', '14', ' Calcule o quadrado de 7.'),
(19, 'Qual é a área de um trapézio com bases de 8 cm e 6 cm, e altura de 5 cm?', '35 cm²', '30 cm²', '35 cm²', '40 cm²', '45 cm²', '55 cm²', 'Use a formula: (base maior + base menor) x altura dividido por 2'),
(20, 'Resolva a equação: 4(x-1) = 2(x+3)', 'x = 5', 'x = -1', 'x = 0', 'x = 2', 'x = 5', 'x = 1', 'Primeiro distribua os fatores em ambos os lados. Depois, reúna os termos com x e um lado e os termos constantes do outro para isolar x.'),
(21, 'Resolva a equação: 4 x 5 - 3²?', '11', '11', '7', '13', '15', '17', 'Primeiro, calcule a potência e depois multiplique. '),
(22, 'Calcule a área de um triângulo com base de 12 cm e altura de 7 cm.', '42 cm²', '21 cm²', '24 cm²', '42 cm²', '43 cm²', '84 cm²', 'Use a fórmula para calcular a área de um triângulo. '),
(23, 'Qual é o volume de um cubo com aresta de 6 cm?', '216 cm³', '108 cm³', '36 cm³', '72 cm³', '216 cm³', '324 cm³', 'Use: (aresta)³'),
(24, 'Qual é a medida do ângulo complementar de 65°?', '25°', '15°', '25°', '45°', '35°', '25°', 'Subtraia o ângulo dado de 90°.'),
(25, 'Em uma urna com 3 bolas vermelhas, 4 bolas azuis e 3 bolas verdes, qual a probabilidade de cair uma bola azul?', '4/10', '1/10', '3/10', '4/10', '5/10', '2/10', 'Conte quantas bolas são azuis e divida pelo total de bolas. '),
(26, 'Qual é o valor do seno de 90 graus?', '1', '0', '1', '2/2', '1/2', '9', 'Lembre-se de que o seno de 90° é sempre 1 porque é o valor máximo da função seno em um círculo unitário.'),
(27, 'Se o raio de um círculo é 6cm, qual é a sua área? ', '24π cm² ', '6π cm² ', '12π cm² ', '18π cm² ', '24π cm²', '36π cm²', 'Use a fórmula da área do círculo: π.r² '),
(28, 'Qual é o resultado da expressão 3x - 7 quando x = 4?', '17', '5', '12', '17 ', '25', '28', 'Substitua o valor de x na expressão e simplifique. '),
(29, 'Se um triângulo tem lados medindo 7cm, 9cm e 12cm, qual é o tipo de triângulo?', 'Escaleno', 'Equilátero', 'Isósceles', 'Escaleno', 'Retângulo', 'Obtusângulo', 'Verifique se todos os lados são diferentes para identificar um triângulo escaleno. Para triângulo retângulo, use o Teorema de Pitágoras.'),
(30, 'Qual é a medida do ângulo oposto ao lado mais longo em um triângulo retângulo? ', 'Ângulo de 90°', 'Ângulo reto ', 'Ângulo agudo ', 'Ângulo obtuso ', 'Ângulo raso ', 'Ângulo de 90°', 'Em um triângulo retângulo, a hipotenusa é sempre o lado mais longo e o ângulo oposto a ela é o ângulo reto, que é 90°'),
(31, 'Se um polígono tem 8 lados, quantos diagonais ele tem?', '20', '16', '20', '24', '28', '32', 'Para encontrar o número de diagonais de um polígono com 𝑛 lados, use a fórmula: n(n-3)/2. Substitua 𝑛 pelo número de lados do polígono'),
(32, 'Qual é o resultado da expressão 2(3x - 5) quando x = 6?', '26', '16', '18', '20', '26', '24', 'Substitua x na expressão, faça as operações dentro dos parênteses e, por fim, multiplique pelo fator fora dos parênteses.'),
(33, 'Calcule a média aritmética dos números 8, 12, 15, 9 e 6.', '10', '8', '9', '12', '11', '10', 'Para calcular a média aritmética, some todos os números e depois divida a soma pelo número total de valores.'),
(34, 'O valor de y na expressão y = 10x – 17, quando x for 3 é:', '13', '- 13', '- 4', '4', '13', '3', 'Substitua x na expressão e faça a operação indicada para encontrar y.'),
(35, 'Veja a fração da pizza que cada amigo comeu. Gustavo 2/6 Luiz 1/2 Júlio 1/3. É correto afirmar que:', 'Gustavo e Júlio comeram a mesma quantidade.', 'Gustavo e Júlio comeram a mesma quantidade.', 'Gustavo comeu mais que Júlio.', 'Luiz comeu menos que Júlio.', 'Júlio e Luiz comeram a mesma fração.', 'Todos comeram igualmente.', 'Gustavo e Júlio comeram a mesma quantidade.'),
(36, 'Se a razão entre x e y é 3:4 e y=12, qual é o valor de x?', '9', '6', '8', '9', '10', '12', 'Multiplique a razão pela quantidade de y para encontrar x.'),
(37, 'Qual é 20% de 150?', '30', '25', '30', '35', '40', '45', 'Calcule 20% de 150'),
(38, 'Qual é a raiz da função f(x)=2x−6?', 'x= 3', 'x= 2', 'x= 1', 'x= 3', 'x= 4', 'x= 5', 'Resolva a equação para encontrar a raiz.'),
(39, 'Qual é o complemento de um ângulo de 45°?', '45°', '15°', '30°', '75°', '60°', '45°', 'Subtraia o ângulo dado de 90°. '),
(40, 'Fatore a expressão x²−9.', '(x−3)(x+3)', '(x−3)(x+3)', '(x−3)(x−3)', '(x+3)(x+3)', '(x−9)(x+9)', '(x−1)(x+9)', 'Use a fórmula da diferença de quadrados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_fotoPerfil` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nivel` int NOT NULL,
  `moedas` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fotoPerfil` (`id_fotoPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `id_fotoPerfil`, `nome`, `email`, `senha`, `nivel`, `moedas`) VALUES
(2, 16, 'Rafael Eduardo Ozeias', 'rafaozeias2@gmail.com', '123', 4, 0),
(3, 16, 'rafa', 'rafael.ozeias@etec.sp.gov.br', '123', 9, 15),
(4, 16, 'pipoca', 'pipoca@gmail.com', 'pipoca123', 1, 0),
(5, 16, 'erica', 'ericaedu04@hotmail.com', '123', 1, 0),
(6, 16, 'rafael', 'rolfis19@gmail.com', '1234567', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_login_adm`
--

DROP TABLE IF EXISTS `tbl_login_adm`;
CREATE TABLE IF NOT EXISTS `tbl_login_adm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbl_login_adm`
--

INSERT INTO `tbl_login_adm` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'adm', 'adm@adm.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_ranking`
--

DROP TABLE IF EXISTS `tbl_ranking`;
CREATE TABLE IF NOT EXISTS `tbl_ranking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_login` int NOT NULL,
  `pontuacao` int NOT NULL,
  `nome` varchar(55) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_login_fk` (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbl_ranking`
--

INSERT INTO `tbl_ranking` (`id`, `id_login`, `pontuacao`, `nome`) VALUES
(1, 2, 20, '0'),
(2, 3, 1, '0'),
(3, 3, 4, '0'),
(4, 3, 1, 'rafa'),
(5, 3, 2, 'rafa'),
(6, 4, 90, 'pipoca'),
(7, 2, 5, 'Rafael Eduardo Ozeias'),
(8, 5, 4, 'erica'),
(9, 3, 0, 'rafa'),
(10, 3, 0, 'rafa'),
(11, 3, 0, 'rafa'),
(12, 3, 0, 'rafa'),
(13, 3, 0, 'rafa'),
(14, 3, 0, 'rafa'),
(15, 3, 1, 'rafa'),
(16, 3, 1, 'rafa'),
(17, 3, 2, 'rafa'),
(18, 3, 2, 'rafa');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `id_fotoPerfil` FOREIGN KEY (`id_fotoPerfil`) REFERENCES `arquivos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD CONSTRAINT `id_login_fk` FOREIGN KEY (`id_login`) REFERENCES `tbl_login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
