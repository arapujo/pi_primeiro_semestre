CREATE TABLE IF NOT EXISTS `material` (  
`id` int(11) NOT NULL AUTO_INCREMENT,  
`nome` varchar(40) NOT NULL,  
`preco` varchar(6) NOT NULL,  
`descricao_simples` varchar(175) NOT NULL,
`descricao` varchar(300) NOT NULL,
`imagem` LONGBLOB, 
`material` LONGBLOB,   
`nome_imagem` varchar(30) NOT NULL,   
PRIMARY KEY (`id`)
)