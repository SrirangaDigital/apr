#!/usr/bin/perl 

$host = $ARGV[0];
$db = $ARGV[1];
$usr = $ARGV[2];
$pwd = $ARGV[3];

print "Feature Insertion\n";

use DBI();

open(IN, "<:utf8", "apr.xml") or die "can't open apr.xml\n";

$dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd");
$sth_enc=$dbh->prepare("set names utf8");
$sth_enc->execute();
$sth_enc->finish();

$sth11=$dbh->prepare("create table feature(feat_name varchar(200),
featid int(6) auto_increment,
primary key(featid))auto_increment=10001 ENGINE=MyISAM character set utf8 collate utf8_general_ci");

$sth11->execute();
$sth11->finish();

$line = <IN>;

while($line)
{
	if($line =~ /<feature>(.*)<\/feature>/)
	{
		$featurename = $1;
		if(length($featurename) != 0)
		{
			insert_feature($featurename);
		}
		
	}
	$line = <IN>;
}
close(IN);
$dbh->disconnect();

sub insert_feature()
{
	my($featurename) = @_;
	
	my($sth,$ref,$sth1);
	$sth = $dbh->prepare("select * from feature where feat_name='$featurename'");
	$sth->execute();
	$ref=$sth->fetchrow_hashref();
	if($sth->rows() == 0)
	{
		$sth1=$dbh->prepare("insert into feature values('$featurename',null)");
		$sth1->execute();
		$sth1->finish();
	}
	$sth->finish();	
}

