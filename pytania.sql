CREATE TABLE Pytania
	(NR_PYTANIA SERIAL PRIMARY KEY,
	 PYTANIE CHARACTER VARYING(100),
	ODP_1 CHARACTER VARYING(100),
	ODP_2 CHARACTER VARYING(100),
	ODP_3 CHARACTER VARYING(100),
	ODP_4 CHARACTER VARYING(100),
	NR_POP_ODP NUMERIC(1));
	

INSERT INTO Pytania (PYTANIE,ODP_1,ODP_2,ODP_3, ODP_4, NR_POP_ODP)
VALUES ( 'Jak nazwa się stolica Australii ?','Canberra', 'Sydney', 'Hobart', NULL, 2);

INSERT INTO Pytania (PYTANIE,ODP_1,ODP_2,ODP_3, ODP_4, NR_POP_ODP)
VALUES ( 'Jak nazywa się największa góra na Ziemi ?', 'Mount Blanc', ' Śnieżka', 'Mont Everest', 'K2', 3);

INSERT INTO Pytania (PYTANIE,ODP_1,ODP_2,ODP_3, ODP_4, NR_POP_ODP)
VALUES ( 'Jaka rzeka przepływa przez Warszawę ?','Odra', 'Warta', 'Dunaj', 'Wisła', 4);

INSERT INTO Pytania (PYTANIE,ODP_1,ODP_2,ODP_3, ODP_4, NR_POP_ODP)
VALUES ( 'Jak nazwywa się stolica Polski ?', 'Mount Blanc', ' Śnieżka', 'Mont Everest', 'K2', 3);