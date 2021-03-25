# Name:- Deep Patel

https://www.youtube.com/watch?v=3qlnR9hK-lQ
https://sequelize.org/master/manual/model-querying-basics.html

# Tables

1.Teams (Example:'Avengers','Revengers,'Team Soul')
2.Heros (Example:'Steve','Tony','Clint') //And other details
3.Powers(Example: 'PrimaryPowers','Secondary Powers' , 'utility')//Strength--Durability--Shield
4.Villans(Example: 'Thanos','Loki','Red Skull')
5.Faught (JUST A JUNCTION BETWEEN Heros and Villans)

# Relationships

Teams --->1:n---> Heros
--A team can contain many heros

Heros --->1:1---> Powers
--A hero have a fixed set of powers

Heros-->n:n-->Faught--->n:n-->Villans
--different Heros faught different Villans
eg:- Steve faught with thanos,redskull,ultron
antman faught with thanos but not with ultron
thanos faught with everyone
