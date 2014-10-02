#!/bin/sh

host='localhost';
db='apr';
usr='root';
pwd='mysql';

echo "drop database if exists $db; create database apr  DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;" | /usr/bin/mysql -u root -pmysql
php insert_author.php $host $usr $pwd $db 
php insert_feat.php $host $usr $pwd $db 
php insert_articles.php $host $usr $pwd $db 

#~ edit the below line of command and then run the script
#~ convert cover.png -resize '200x' php/images/cover.png | convert Volumes/2014_08.pdf[0] cover.png;
#~ theme image should be 50x in size
