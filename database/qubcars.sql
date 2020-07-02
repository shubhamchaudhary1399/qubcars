

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE users (
  id int(11) NOT NULL,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  contact varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE users_booking (
  id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  source varchar(255) NOT NULL,
  destination varchar(255) NOT NULL,
  when_to varchar(255) NOT NULL,
  depart_day varchar(255) NOT NULL,
  depart_time varchar(255) NOT NULL,
  cab varchar(255) NOT NULL,
  fare varchar(255) NOT NULL,
  status enum('Declined','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




ALTER TABLE users
  ADD PRIMARY KEY (id);


ALTER TABLE users_booking
  ADD PRIMARY KEY (id),
  ADD KEY user_id (user_id);


ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


ALTER TABLE users_booking
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


ALTER TABLE users_booking
  ADD CONSTRAINT users_booking_ibfk_2 FOREIGN KEY (user_id) REFERENCES users (id);
COMMIT;


