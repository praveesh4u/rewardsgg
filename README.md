Assesement
===========

###Objectives:
1.Integrate Sonata Admin Bundle and Fos user bundle to the project
2.Configure login and Registration
3.Create CRUD for Giveaway and User
4.Implement search and sort


###Configuration
The steps to configure the project are given below

1.Edit app/config/parameter.yml file and add the database details.

2.Run `composer install` to install all the dependencies.

3.Run `php app/console doctrine:schema:update --force` to set up the database.

4.Run `php app/console assets:install` to copy all the assets to the web folder

5.I have created data fixtures for loading data into the Giveaway table. The data may be loaded into the database using the command

`php app/console doctrine:fixtures:load --append`

If you prefer to delete all the existing data in the database, please run the command without the `--append` flag.

6.Set the ACL for Giveaways using the following command.

`php app/console acl:set --role=ROLE_USER  VIEW AppBundle/Entity/Giveaway:ID`

In the above given command replace ID with the ID of the Giveaway.

### Test Server
I have hosted the project on an AWS instance for convinience. The test server can be accessed at [Link](http://54.169.186.47 "Here") (http://54.169.186.47)

The credentials for logging into the server are
#####Admin User
**username**: testadmin

**password**: qwerty

#####Normal User
**username**: testuser

**password**: qwerty

The ACL is configured in such a way that the Giveaways with IDs 15,16,25,26,35,36,45 can be viewed by a normal user. 

The ACL can be verified by accessing the database at http://54.169.186.47/phpmyadmin
Credentials for loging into Phpmyadmin are

**username**: root

**password**: ammu123





###Screenshots

1.Integrate Sonata Admin Bundle and Fos user bundle to the project

2.Configure login and Registration

![Alt Text](https://lh3.googleusercontent.com/SVzsLrYBQKgOjyfu_CDlB23RtHDBptQwfDCAZqPFZnbm4JDAzIQlktg1IsXQPcuB-LE4IaRIRyI2HF4=w1920-h966-rw "Registration")

![Alt Text](https://lh5.googleusercontent.com/3oCBbzEoPKYYBMfuPFqGkOjlKSEJZx3-ZOg73OLgHnv5mSmHFVKmaOgsIrurWkTsTN2vr9Mj0cMZ8xg=w1920-h990-rw "Registration")

3.Create CRUD for Giveaway and User

![Alt Text](https://lh6.googleusercontent.com/Zf1k2xiKvUX-3ULTh-4aQnYVgoPc7OsE7sYdUOjl50rRMtw5J2HgmUtBpnLdudBFLUy5nnlodasDP04=w1920-h990-rw "Giveaway Crud")

![Alt Text](https://lh4.googleusercontent.com/8QMTPlAts28ysDQ31gLwAeBsv75YYsvWv-loEkraBoFO0lPC3GP_I1s_uNifp5tHstk3UV_MjeZ_0us=w1920-h990-rw "User Crud")

4.Implement search and sort

![Alt Text](https://lh3.googleusercontent.com/uZjeGdgCT3eBXBgKIlN1WUZe50m7CGFMyXwNg9unTJCyX7H4d9TMdpWAz5_p3ES_G4afeZGUyP90SvM=w1920-h990-rw "Search")
