
DROP TABLE IF EXISTS food_example;
CREATE TABLE food_example (
  id SERIAL NOT NULL ,
	image_path VARCHAR(45) NULL,
	food_name VARCHAR(45) NULL,
  food_type VARCHAR(45) NULL,
  information VARCHAR(45) NULL,
  PRIMARY KEY (id)
);


INSERT INTO food_example VALUES ("","/iMenu/food/1.jpg","Chicken","hot","Chicken, Green onion");
INSERT INTO food_example VALUES ("","/iMenu/food/2.jpg","Tofu","hot","Tofu, Hot sauce");
INSERT INTO food_example VALUES ("","/iMenu/food/3.jpg","Noodle","medium","Noodle, onion");
INSERT INTO food_example VALUES ("","/iMenu/food/4.jpg","Lobster","medium","Lobster, gralic, onion");
INSERT INTO food_example VALUES ("","/iMenu/food/5.jpg","Fish Soup","medium","fish, Tofu, mushroom");
INSERT INTO food_example VALUES ("","/iMenu/food/6.jpg","Mussel","middle","Mussel, veges");
INSERT INTO food_example VALUES ("","/iMenu/food/7.jpg","Bao Zi","cold","pork, Lettuce");
INSERT INTO food_example VALUES ("","/iMenu/food/8.jpg","Fried Noodle","hot","Noodle, onion, beef/pork/Chicken");
INSERT INTO food_example VALUES ("","/iMenu/food/9.jpg","Green Pepper and beef","hot","green Pepper, beef, ");