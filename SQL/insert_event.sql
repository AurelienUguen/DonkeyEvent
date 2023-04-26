INSERT INTO `show` (`name`, director, casting, year_release, summary, genre, runtime, poster, price, category)
VALUES
("Blade Runner", "Ridley Scott", "Harrison Ford, Sean Young, Rutger Hauer", 1982, '',"Science-fiction", "1h56","https://tinyurl.com/42d7xvbv", 8, 0),
("Jumanji", "Joe Johnston", "Robin Williams, Bonnie Hunt, Kirsten Dunst", 1995, '',"Fantastique", "1h44","https://moviecovers.com/DATA/zipcache/JUMANJI.jpg", 8, 0),
("Les Banshees d'Inisherin", "Martin McDonagh", "Colin Farrell, Brendan Gleeson, Kerry Condon", 2022, "Sur Inisherin, une île isolée..","Drame", "1h54","https://tinyurl.com/5n8xxuw6", 8, 0),
("Beck en solo acoutique", "Beck", "Beck Hansen (vocal, gtr)", null, '',"Pop", '',"https://tinyurl.com/489umrcy", 15, 1),
("Manu Chao, Sibérie m'était contéee", "Manu Chao", "Manu Chao (vocal, gtr)", null, '',"Pop-World", '',"https://tinyurl.com/yckt6553", 15, 1),
("Asaf Avidan en acoustique", "Asaf Avidan", "Asaf avidan (vocal, gtr, piano)", null, '',"Folk-Rock", '',"https://tinyurl.com/2p85wsd2", 15, 1);

INSERT INTO screen (show_id, `name`, `date`, showtime_1, showtime_2, showtime_3, showtime_4, capacity)
VALUES
(1, "Salle Rouge", "2023-05-09", "10:20", "13:00", "15:30", "18:00", 200, 0),
(2, "Salle Bleue", "2023-05-10", "10:00", "12:30", "14:45", "17:15", 300, 0),
(3, "Salle Rouge", "2023-05-10", "10:00", "12:30", "14:45", "17:15", 300, 0),
(4, "Salle Live", "2023-05-18", "20:30", '', '', '', 450, 0),
(5, "Salle Live", "2023-05-22", "20:30", '', '', '', 450, 0),
(6, "Salle Live", "2023-05-23", "20:00", '', '', '', 450, 0);

INSERT INTO `user` (`name`, `password`, email)
VALUES
("Moussa", "1234", "amdin@event.com"),
("Aurélien", "1234", "admin@event.com"),
("Kuba", "1234", "admin@event.com");
