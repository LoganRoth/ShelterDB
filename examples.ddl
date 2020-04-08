-- 17 People
insert into people VALUES("Steve Jobs", 4036660033, "123 King St, Kingston, ON");
insert into people VALUES("Michael Jordan", 6882302323, "67 Goat St, Los Angeles, CA");
insert into people VALUES("Jaromir Jagr", 9973024545, "2 Glenn St, Kingston, ON");
insert into people VALUES("Bianca Andrescu", 2334048888, "90 Collingwood St, Kingston, ON");
insert into people VALUES("Serena Williams", 9098086006, "400 Princess St, Kingston, ON");
insert into people VALUES("Maya Moore", 3445556677, "222 Union St, Kingston, ON");
insert into people VALUES("Robert Moore", 9998887777, "9 Couper St, Kingston, ON");
insert into people VALUES("Curtis Holloway", 8887776666, "9 Couper St, Kingston, ON");
insert into people VALUES("Brandon Moll", 7776665555, "9 Couper St,Kingston, ON");
insert into people VALUES("Chris Scalzitti", 6665554444, "9 Couper St,Kingston, ON");
insert into people VALUES("Anthony Scalzitti", 5554443333, "9 Couper St,Kingston, ON");
insert into people VALUES("Logan Roth", 4443332222, "9 Couper St,Kingston, ON");
insert into people VALUES("Matt Tigwell", 3332221111, "9 Couper St,Kingston, ON");
insert into people VALUES("Patrick Lyster", 2221110000, "9 Couper St,Kingston, ON");
insert into people VALUES("Connor Sparling", 1110009999, "9 Couper St,Kingston, ON");
insert into people VALUES("Anonymous", NULL, NULL);
insert into people VALUES("Adopterson", 6672367837, "67 Adoption St, Kingston, ON");

-- 9 Locations
insert into locations VALUES("Save The Doggies", "72 James St, Kingston, ON", 8002672001, "RESCUE_ORG");
insert into locations VALUES("Pups for You", "688 Street St, Kingston, ON", 9098087227, "RESCUE_ORG");
insert into locations VALUES("Animal Lovers R US", "334 Avenue St, Kingston, ON", 8234567112, "RESCUE_ORG");
insert into locations VALUES("Clergy SPCA", "992 Clergy St, Kingston, ON", 8007670011, "SPCA");
insert into locations VALUES("Division SPCA", "27 Division St, Kingston, ON", 8009982324, "SPCA");
insert into locations VALUES("No Dog Left Behind", "66 Victoria St, Kingston, ON", 5651119090, "SHELTER");
insert into locations VALUES("All Rats All Day", "98 University St, Kingston, ON", 9897772222, "SHELTER");
insert into locations VALUES("It's Raining Cats and Dogs", "120 Bagot St, Kingston, ON", 8882224444, "SHELTER");

-- 3 Shelters
insert into shelters VALUES("No Dog Left Behind", "www.nodogleftbehind.com", "Steve Jobs");
insert into shelters VALUES("All Rats All Day", "www.allratsallday", "Michael Jordan");
insert into shelters VALUES("It's Raining Cats and Dogs", " www.rainingcatsanddogs.com", "Jaromir Jagr");

-- 3 Rescue Organizations
insert into rescue_orgs VALUES("Save The Doggies", "Steve Jobs");
insert into rescue_orgs VALUES("Pups for You", "Steve Jobs");
insert into rescue_orgs VALUES("Animal Lovers R US", "Steve Jobs");

-- 4 Types of Animals
insert into animal_types VALUES("DOG");
insert into animal_types VALUES("CAT");
insert into animal_types VALUES("RODENT");
insert into animal_types VALUES("RABBIT");

-- 5 Accepted Animals
insert into accepted_animals VALUES("No Dog Left Behind", "DOG", 25);
insert into accepted_animals VALUES("All Rats All Day", "RODENT", 20);
insert into accepted_animals VALUES("All Rats All Day", "RABBIT", 20);
insert into accepted_animals VALUES("It's Raining Cats and Dogs", "DOG", 30);
insert into accepted_animals VALUES("It's Raining Cats and Dogs", "CAT", 30);

-- 11 Animals
insert into animals VALUES(1234567890, "DOG", "Clergy SPCA", '2020-01-01');
insert into animals VALUES(1111111111, "CAT", "Clergy SPCA", '2019-06-04');
insert into animals VALUES(2222222222, "RODENT", "All Rats All Day", '2020-01-25');
insert into animals VALUES(3333333333, "RABBIT", "Division SPCA", '2019-08-22');
insert into animals VALUES(4444444444, "DOG", "Division SPCA", '2018-05-20');
insert into animals VALUES(5555555555, "CAT", "It's Raining Cats and Dogs", '2020-01-22');
insert into animals VALUES(6666666666, "DOG", "No Dog Left Behind", '2020-01-10');
insert into animals VALUES(7777777777, "DOG", "Clergy SPCA", '2019-09-23');
insert into animals VALUES(8888888888, "RABBIT", "Division SPCA", '2019-06-13');
insert into animals VALUES(9999999999, "DOG", "Division SPCA", '2018-11-29');
insert into animals VALUES(1234512345, "CAT", "Division SPCA", '2019-12-15');

-- 3 Drivers
insert into drivers VALUES("Maya Moore", 123456789012345, "BBB-1234", "Pups for You");
insert into drivers VALUES("Anthony Scalzitti", 999998888877777, "ABC-1234", "Animal Lovers R US");
insert into drivers VALUES("Chris Scalzitti", 123451234512345, "ZXY-999", "Save The Doggies");

-- 6 Employees
insert into employees VALUES("Steve Jobs", "No Dog Left Behind");
insert into employees VALUES("Michael Jordan", "All Rats All Day");
insert into employees VALUES("Jaromir Jagr", "It's Raining Cats and Dogs");
insert into employees VALUES("Connor Sparling", "Clergy SPCA");
insert into employees VALUES("Patrick Lyster", "Division SPCA");
insert into employees VALUES("Matt Tigwell", "Division SPCA");

-- 3 Vet Visits
insert into vet_visits VALUES("Robert Moore", 1234567890, '2018-10-10', 500.50, "Overweight");
insert into vet_visits VALUES("Robert Moore", 1234567890, '2019-06-15', 600.50, "More overweight");
insert into vet_visits VALUES("Robert Moore", 1234567890, '2019-10-10', 700.00, "Even more overweight");

-- 9 Donations
insert into donations VALUES("Logan Roth", "Save The Doggies", 20.00, '2018-11-28');
insert into donations VALUES("Logan Roth", "Save The Doggies", 1000.00, '2019-11-28');
insert into donations VALUES("Anonymous", "It's Raining Cats and Dogs", 100.00, '2020-01-15');
insert into donations VALUES("Anonymous", "All Rats All Day", 100.00, '2018-01-15');
insert into donations VALUES("Anonymous", "Animal Lovers R US", 101.00, '2018-01-15');
insert into donations VALUES("Anonymous", "Clergy SPCA", 102.00, '2018-01-15');	
insert into donations VALUES("Anonymous", "Division SPCA", 103.00, '2018-01-15');	
insert into donations VALUES("Anonymous", "No Dog Left Behind", 104.00, '2018-01-15');	
insert into donations VALUES("Anonymous", "Pups for You", 105.00, '2018-01-15');
insert into donations VALUES("Anonymous", "It's Raining Cats and Dogs", 106.00, '2018-01-15');



-- 3 Adoptions
insert into adoptions VALUES(4444444444, "Adopterson", 50.00, '2020-01-01');
insert into adoptions VALUES(9999999999, "Adopterson", 50.00, '2020-01-01');
insert into adoptions VALUES(3333333333, "Adopterson", 50.00, '2019-02-03');

-- 3 Transfers
insert into transfers VALUES(6666666666, "Anthony Scalzitti", 50.00, '2020-01-10', "Clergy SPCA", "No Dog Left Behind");
insert into transfers VALUES(5555555555, "Maya Moore", 50.00, '2020-01-22', "Division SPCA", "It's Raining Cats and Dogs");
insert into transfers VALUES(2222222222, "Chris Scalzitti", 50.00, '2020-01-25', "Clergy SPCA", "All Rats All Day");
