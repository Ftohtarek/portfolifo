# portfolifo
this project is traning in php native have dashboard with complete crud operator
not bulid in concept of mcv. 

- design is copy just handle it to service in the project needs
- http://ftohtarek.is-best.net/
to go inside dashboard just add in url admin
- http://ftohtarek.is-best.net/admin
email:ftohtarek@gmail.com
password:123456789
# system controller digram 
* i bulid this system as units for each table  in frist  but i bored from repeatation so i bulid as one unit have it's brain

- 1- detect system requried [from_where,what_operator,requests(values)]
- 2- filter this required as system need
- 3- kerenl is the brain of system if the opereator in the system jop then kerenal bulid the connection to database and distrubte the operator to the methods 
- 4- the three crud operoter do the same but in different in value will set , table column and validation 
- 5- in every dynamic there's static so the directory it must have the same name of table and input field name have the same name of coulmn and validation have it's unit and  img too 
- 6- good kerenl call the requried method add and updata method test validation and img frist if there depend on validation unit 
- 7- validation method is switch and detect the depend on the unit and validator is spearte class have the logic of it 
- 8- validator unit design is simple ['tableName'=>methodName],
* i hope that simplefy the system life cycle by easyway :) .

