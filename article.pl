#!/usr/bin/perl 

print "Article Insertion\n";

$host = $ARGV[0];
$db = $ARGV[1];
$usr = $ARGV[2];
$pwd = $ARGV[3];

use DBI();

open(IN, "<:utf8", "apr.xml") or die "can't open apr.xml\n";

$dbh=DBI->connect("DBI:mysql:database=$db;host=$host","$usr","$pwd");

$sth_enc=$dbh->prepare("set names utf8");
$sth_enc->execute();
$sth_enc->finish();

$sth_drop=$dbh->prepare("DROP TABLE IF EXISTS article");
$sth_drop->execute();
$sth_drop->finish();

$sth11=$dbh->prepare("CREATE TABLE article(title varchar(500), 
authid varchar(200),
authorname varchar(1000),
featid varchar(10),
page varchar(5), 
volume varchar(3),
issue varchar(5),
year int(4), 
month varchar(2),
titleid int(6) auto_increment, primary key(titleid))auto_increment=10001 ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_general_ci");

$sth11->execute();
$sth11->finish();

$line = <IN>;

while($line)
{
	if($line =~ /<volume vnum="(.*)">/)
	{
		$vnum = $1;
	}
	elsif($line =~ /<issue inum="(.*)" month="(.*)" year="(.*)">/)
	{
		$inum = $1;
		$month = $2;
		$year = $3
	}
	elsif($line =~ /<title>(.*)<\/title>/)
	{
		$title = $1;
	}
	elsif($line =~ /<feature>(.*)<\/feature>/)
	{
		$featurename = $1;
		$fid = get_fid($featurename);
	}
	elsif($line =~ /<page>(.*)<\/page>/)
	{
		$page = $1;
	}
	elsif($line =~ /<author lname="(.*)" fname="(.*)">(.*)<\/author\>/)
	{
		$authorname = $3;
		$authid = $authid.";".get_authid($authorname);
		$authname.=";".$authorname;
	}
	elsif($line =~ /<allauthors\/>/)
	{
		$authname = "";
		$authid = "";
	}
	elsif($line =~ /<\/entry>/)	
	{
		insert_article($vnum,$inum,$month,$year,$title,$fid,$page,$authname,$authid);
		$fid = "";
		$page = "";
		$authname = "";
		$authid = "";
	}	
	
	$line = <IN>;
}
close(IN);
$dbh->disconnect();

sub insert_article()
{
	my($vnum,$inum,$month,$year,$title,$fid,$page,$authname,$authid) = @_;
	my($sth1);

	$title =~ s/'/\\'/g;
	$authname =~ s/^;//;
	$authid =~ s/^;//;
	$sth1=$dbh->prepare("insert into article values('$title','$authid','$authname','$fid','$page','$vnum','$inum','$year','$month','')");
	$sth1->execute();
	$sth1->finish();
}

sub get_authid()
{
	my($authorname) = @_;
	$sth = $dbh->prepare("select * from author where authorname='$authorname'");
	$sth->execute();

	$row = $sth->fetchrow_hashref();
	$authid = $row->{'authid'};
	$sth->finish();
	return($authid);
}

sub get_fid()
{
	my($featurename) = @_;
	my($sth,$fid);

	$featurename =~ s/'/\\'/g;

	$sth = $dbh->prepare("select * from feature where feat_name='$featurename'");
	$sth->execute();

	$row = $sth->fetchrow_hashref();
	$fid = $row->{'featid'};
	$sth->finish();
	return($fid);
}
