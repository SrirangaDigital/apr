#!/usr/bin/perl 

$host = $ARGV[0];
$db = $ARGV[1];
$usr = $ARGV[2];
$pwd = $ARGV[3];

print "Author Insertion\n";
use DBI();

open(IN,"<:utf8","apr.xml") or die "can't open apr.xml\n";

$dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd");

$sth_enc=$dbh->prepare("set names utf8");
$sth_enc->execute();
$sth_enc->finish();

$sth_drop=$dbh->prepare("DROP TABLE IF EXISTS author");
$sth_drop->execute();
$sth_drop->finish();

$sth11=$dbh->prepare("CREATE TABLE author(authorname varchar(400),
authid int(6) auto_increment,
primary key(authid)) auto_increment=10001 ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci");

$sth11->execute();
$sth11->finish();

$line = <IN>;

while($line)
{
	if($line =~ /<author lname=\"(.*)\" fname=\"(.*)\"\>(.*)\<\/author\>/)
	{
		$authorname = $3;
		insert_author($authorname);
	}
	$line = <IN>;
}
close(IN);
$dbh->disconnect();

sub insert_author()
{
	my($authorname) = @_;

	$authorname =~ s/'/\\'/g;
	my($sth1,$sth);

	$sth = $dbh->prepare("select * from author where authorname ='$authorname'");
	$sth->execute();
	if($sth->rows() == 0)
	{
		$sth1=$dbh->prepare("insert into author values('$authorname',null)");
		$sth1->execute();
		$sth1->finish();
	}
	$sth->finish();
}
