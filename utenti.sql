create DATABASE utenti;
USE utenti;

/*drop TABLE users;*/
CREATE TABLE users(
	nome varchar(255),
    cognome varchar(255),
    data_nascita date,
    email varchar(255) primary key,
    password varchar(255),
    cap varchar(255),
    provincia varchar(255),
    nazione varchar(255),
    citta varchar(255),
    n_famiglia integer,
    indirizzo varchar(255),
    lavoro varchar(255),
    genere varchar(255),
    istruzione varchar(255)
);


/*drop TABLE prodotti;*/
create table products(
	id integer primary key,
	nome varchar(255),
    categoria varchar(255),
    gusto varchar(255),
    img varchar(255),
    testo_ingredienti varchar(1000)
);

/*drop TABLE preferiti;*/
create table favorites(
     email_utente varchar(255),
     id_prodotto integer,
    INDEX new_email(email_utente), FOREIGN KEY (email_utente) references users(email),
    INDEX new_prodotto(id_prodotto), FOREIGN KEY (id_prodotto) references products(id),
    primary key(id_prodotto, email_utente)
);

INSERT INTO products VALUES(1, 'Pavesini Gli Originali', 'biscotti', 'classico', 'https://www.pavesini.it/wp-content/uploads/2021/04/pack_originali.jpg', 'Zucchero 49,2%, farina di frumento, uova fresche 23,5%, agenti lievitanti (carbonato acido d’ammonio, carbonato acido di sodio), zucchero caramellato, aromi.');
INSERT INTO products VALUES(2, 'Pavesini Al Cacao','biscotti', 'cioccolato','https://www.pavesini.it/wp-content/uploads/2021/04/pack_cacao.jpg', 'Zucchero, farina di frumento, uova fresche, agente lievitante (carbonato acido d’ammonio), cacao magro, aromi, caffè 0,3%, zucchero caramellato.');
INSERT INTO products VALUES(3, 'Pavesini Al Caffè','biscotti', 'caffè', 'https://www.pavesini.it/wp-content/uploads/2021/04/pack_caffe.jpg', 'Zucchero, farina di frumento, uova fresche, cacao magro 6,3%, agente lievitante (carbonato acido d’ammonio), aroma (latte, soia), zucchero caramellato.');
INSERT INTO products VALUES(4, 'Ringo Vaniglia', 'biscotti','vaniglia', '	https://www.ringo.it/wp-content/uploads/2022/06/ringovaniglia_dettaglio_poster2-1.png', 'Biscotti (73%*): farina di frumento, zucchero, olio di girasole, amido di frumento, cacao magro 1,8%*, sciroppo di glucosio, siero di latte in polvere, sale, agenti lievitanti (carbonato acido di sodio, carbonato acido d’ammonio), aroma vanillina 0,03%*. Crema (27%*): grasso e olio vegetali non idrogenati (cacao, girasole), zucchero, destrosio, siero di latte in polvere, amido di frumento, aroma vanillina 0,01%*. *Percentuali espresse sul prodotto finito.');
INSERT INTO products VALUES(5, 'Ringo Cacao', 'biscotti','cioccolato','	https://www.ringo.it/wp-content/uploads/2022/06/ringocacao_dettaglio_poster2-1.png', 'Biscotti (73%*): farina di frumento, zucchero, olio di girasole, amido di frumento, cacao magro 1,8%*, sciroppo di glucosio, siero di latte in polvere, sale, agenti lievitanti (carbonato acido di sodio, carbonato acido d’ammonio), aroma. Crema 27%*: zucchero, grasso e olio vegetali non idrogenati (cacao, girasole), cacao magro 2,6%*, amido di frumento, nocciole, aromi. *Percentuali espresse sul prodotto finito.');
INSERT INTO products VALUES(6, 'Ringo Nocciola', 'biscotti','nocciola', 'https://www.ringo.it/wp-content/uploads/2022/06/ringonocciola_dettaglio_poster2-1.png', 'Biscotti (73%*): farina di frumento, zucchero, olio di girasole, amido di frumento, cacao magro, sciroppo di glucosio, siero di latte in polvere, sale, agenti lievitanti (carbonato acido di sodio, carbonato acido d’ammonio), aroma. Crema (27%*): zucchero, grasso e olio vegetali non idrogenati (cacao, girasole), nocciole 3%*, amido di frumento, cioccolato 1,1%* (zucchero, pasta di cacao, cacao magro, aroma), cacao magro, aroma. *Percentuali espresse sul prodotto finito.');
INSERT INTO products VALUES(7, 'Gocciole Chocolate','biscotti', 'classiche','	https://www.gocciole.it/wp-content/uploads/2022/01/PackChoco-515x560-1.png', 'Farina di frumento, zucchero, cioccolato 14,6%* [zucchero, pasta di cacao, burro di cacao, cacao magro, emulsionante: lecitine (soia)], olio di girasole, burro, sciroppo di glucosio, amido di frumento, agenti lievitanti (carbonato acido di sodio, carbonato acido d’ammonio), sale, aroma vanillina. *Percentuali espresse sul prodotto finito.');
INSERT INTO products VALUES(8, 'Gocciole Extra Dark', 'biscotti','cioccolato',  '	https://www.gocciole.it/wp-content/uploads/2022/01/PackDark-515x560-1.png', 'Farina di frumento, zucchero, cioccolato extra fondente 14%* [pasta di cacao, zucchero, emulsionante: lecitine (soia), aroma naturale vaniglia], olio di girasole, amido di frumento, burro, cacao 2%*, cioccolato 1,8%* (zucchero, pasta di cacao, cacao magro, aroma naturale vaniglia), cacao magro 1,2%*, agenti lievitanti (carbonato acido d’ammonio, carbonato acido di sodio), aromi (latte), sale. *Percentuali espresse sul prodotto finito.');
INSERT INTO products VALUES(9, 'Gocciole Cocco','biscotti', 'cocco','	https://www.gocciole.it/wp-content/uploads/2022/01/PackCoconut-515x560-1.png', 'Farina di frumento, zucchero, cioccolato fondente 13%* [zucchero, pasta di cacao, burro di cacao, cacao magro, emulsionante: lecitine (soia)], olio di girasole, cocco 8,5%*, burro, sciroppo di glucosio, agenti lievitanti (carbonato acido di sodio, carbonato acido d’ammonio), sale, aromi.');
INSERT INTO products VALUES(10, 'Gran Pavesi Sfoglie Classiche','cracker', 'classiche', '	https://www.granpavesi.it/wp-content/uploads/2021/01/sfoglie-classiche-1.png', '
Farina di frumento, amido di patata, oli vegetali (girasole, mais, colza, soia), latte scremato in polvere, olio di oliva 6,6%, amido modificato di mais, sciroppo di glucosio, latticello (latte) in polvere, sale marino 2%, sale, agente lievitante: carbonato acido d’ammonio.');
INSERT INTO products VALUES(11, 'Gran Pavesi Sfoglie Olive','cracker', 'olive', '	https://www.granpavesi.it/wp-content/uploads/2021/01/sfoglie-con-olive-1.png', 'Farina di frumento, oli vegetali (girasole, mais, colza, soia), amido di patata, amido modificato di mais, latte scremato in polvere, olive 4,2% (olive nere 3,7% olive verdi 0,5%), sale marino, latticello (latte) in polvere, sale, prezzemolo, aroma, agente lievitante: carbonato acido d’ammonio, peperoncino.');
INSERT INTO products VALUES(12, 'Gran Pavesi Sfoglie di Mais','cracker', 'mais','https://www.granpavesi.it/wp-content/uploads/2021/01/sfoglie-mais.png', 'Farina integrale di mais 54%, fecola di patate, oli vegetali (girasole, mais, colza, soia), amido modificato di mais, sale.' );


select * from users;
select * from products;
select * from favorites;

