INSERT INTO `show` (`name`, director, casting, year_release, summary, genre, runtime, cover, price, category)
VALUES
("Blade Runner", "Ridley Scott", "Harrison Ford, Sean Young, Rutger Hauer", 1982, '',"Science-fiction", "1h56","https://tinyurl.com/42d7xvbv", 8, 0),
("Jumanji", "Joe Johnston", "Robin Williams, Bonnie Hunt, Kirsten Dunst", 1995, '',"Fantastique", "1h44","https://moviecovers.com/DATA/zipcache/JUMANJI.jpg", 8, 0),
("Miles Davis at Birdland", "Miles Davis", "Miles Davis (tp), Marcus Miller (bs)..", 1951, '',"Bebop", '',"https://tinyurl.com/489umrcy", 15, 1);

INSERT INTO screen (show_id, `name`, `date`, showtime_1, showtime_2, showtime_3, showtime_4, capacity)
VALUES
(1, "Salle Rouge", "2023-05-09", "10:20", "13:00", "15:30", "18:00", 200),
(2, "Salle Bleue", "2023-05-10", "10:00", "12:30", "14:45", "17:15", 300),
(3, "Salle Live", "2023-05-12", "20:30", '', '', '', 450);

INSERT INTO `user` (`name`, `password`, email)
VALUES
("John Rambo", "1234", "la@foret.com");

INSERT INTO `cart` (`screen_id`, `user_id`)
VALUES
(2, 1);
