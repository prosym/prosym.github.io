#!/usr/bin/env perl

if (@ARGV > 0) {
    $pdf_file = shift @ARGV;
}
open(PDF, $pdf_file) or die "Can't open $pdf_file: $!\n";
binmode(PDF);

##print "File: ", $pdf_file, "\n";

# �ǥ�ߥå����괺���� 0x0a ������
$/ = chr(10);
# �إå��� "%PDF" ʸ���󤬤��뤫��ǧ
##<PDF> =~ /^\%PDF-[\d\.]+/ or die "Not in PDF format: $pdf_file\n";
if (!(<PDF> =~ /^\%PDF-[\d\.]+/)) {
    print "Not in PDF format: 1: $pdf_file";
    exit -1;
}

# �ȥ쥤��� "%%EOF" ʸ���󤬤��뤫��ǧ
seek PDF, -16, 2;
$line = join("", <PDF>);	# �ǥ�ߥå�̵���ǥե����������ޤ��ɤ߹���
if ($line =~ /([\x0D\x0A\f]+)\%\%EOF\W*$/) {
    $eol1 = substr($1, 0, 1);
    $eol2 = $1;
} else {
##    die "Not in PDF format: $pdf_file\n";
    print "Not in PDF format: 2: $pdf_file";
    close PDF;
    exit -1;
}

##print "eol1: ", unpack("c", $eol1), ", eol2: ", unpack("c*", $eol2), "\n";

#
# �ե�����������˰�ư����߻���ɽ����������
#
$/ = $eol1;				# �ǥ�ߥå�������
$keyw = "startxref";			# keyword to be found
$words = length $keyw;			# "startxref" -> 10 words
$posi = 0;
$xref = "";

#
# �ե������������������������ "startxref" �����򸫤Ĥ���
#
do {
    $posi -= $words * 3;
    # �ե��������Ƭ�ޤǹԤäƤ��ޤä��鸫�Ĥ���ʤ��ä���Ƚ�ǡ���λ
    seek(PDF, $posi, 2) or die "Can't find xref table\n";
#    $ret = seek(PDF, $posi, 2);
#    if ($ret == 0) {
#	print "Not in PDF format: $pdf_file";
#	close PDF;
#	exit -1;
#    }

    do {
	if (($line = <PDF>) =~ /$keyw/) {
#	    print "line = ", $line;
	    if ($line =~ /(\d+)/ || ($line = <PDF>) =~ /(\d+)/) {
		$xref = $1;
#		print "xref = ", $xref;
	    }
	}
    } while ($line ne "" && $xref eq "");
} while ($xref eq "");


#
# ��߻���ɽ�����Τ����
#
# 0000285833 00000 n 
#
$/ = $eol2;
do {
##    printf("Xref position: %d\n", $xref);

    # xref �����Τ��륢�ɥ쥹�˰�ư����������� "xref" �����뤫��ǧ
    seek(PDF, $xref, 0) or die "Can't set xref table address: ", $xref, "\n";
    <PDF> =~ /xref/ or die "Can't find xref table at address: ", $xref, "\n";

    while (($line = <PDF>) =~ /^(\d+) (\d+)\W*$/) {
	$from  = $1;		# �����ֹ�
	$nobjs = $2;		# �Ŀ�
	for ($i = $from; $i < $from + $nobjs; $i++) {
	    $line = <PDF>;
	    $line =~ s/^\s+|\s+$//g;
	    if ($line =~ /^(\d{10}) (\d{5}) n/) {
		push(@addr, sprintf("%d", $1));
	    }
	}
    }

    # trailer �֥�å��������ɤ߹���
    $trailer = "";
    if ($line =~ m/trailer/) {
	do {
	    $line = <PDF>;
	    $line =~ s/[\x0D\x0A]*//g;
	    $trailer = $trailer . " " . $line;
	} while (!($line =~ m/>>|startxref/));
    }

    # trailer �֥�å��� Prev ������������߻���ɽ�ˤ����뤫��ǧ
    $xref = "";
    if ($trailer =~ /\/Prev\s+(\d+)/) {
	$xref = $1;
    }
} while ($xref ne "");

##print "# of addresses: ", int(@addr), "\n";

#
# ��߻���ɽ���˥��֥������Ȥ����
#
$/ = $eol1;	# �ǥ�ߥå�
while (@addr > 0) {
    $a = shift @addr;	# ���ɥ쥹
    seek(PDF, $a, 0) or	die "No xref table at address: ", $a, "\n";

    $i = "";
    if (($line = <PDF>) =~ /(\d+) (\d+) obj\s*/) {
	$i = $1 . ":" . $2;
	if ($obj{$i} eq "") {
	    $line =~ s/\s+/ /g;
	    $obj{$i} = $line;
	    push(@idx, $i);
	} else {
	    $i = "";	# ������Ͽ�����ä����
	} 
    }

    if ($i ne "") {
#	while (!($line =~ m/endobj/)) {	# XXX
	while (!($line =~ m/endobj|stream/)) {
	    $line = <PDF>;
	    $line =~ s/\s+/ /g;
	    $obj{$i} = $obj{$i} . $line;
	}
	$obj{$i} =~ s/(stream).*(endstream)/$1 $2/s;
    }
}

$nfonts = 0;

while (@idx > 0) {
    $i = shift @idx;
    $arg = $obj{$i};
    $obj{$i} = "";
    if ($arg ne "") {
	&find_fontname($arg);	# recursive call
    }
}

$nnofonts = 0;

##print "Number of fonts: ", $nfonts, "\n";
for ($i = 0; $i < $nfonts; $i++) {
#    if ($embed[$i] ne "") {
#	print "Font Name: Embedded:      ", $i2f[$i], "(", $embed[$i], ")\n";
#    } else {
#	print "Font Name: No Definition: ", $i2f[$i], "\n";
#    }
    if ($embed[$i] eq "") {
	if ($i2f[$i] =~ /WinCharSetFFFF/) {
	# MUST BE FIXED
	} else {
		print "Font Name: ", $i2f[$i], "\n";
		$nnofonts++;
	}
    }
}

close PDF;

exit $nnofonts;

sub find_fontname {
    my $arg = shift;
    my @refs;

#    print "Argument: ", $arg, "\n";
    if ($arg eq "") {
	return;
    }

    $fname = "";
    $ffile = "";
    while ($arg =~ /\/(FontName|BaseFont|FontFile\w*)[^\w]*([^\/\x0D\x0A\t\[\]<>]+)/g) {
	$key = $1;
	$param = $2;
#	print "Key: ", $1, ", Param: ", $2, "\n";
	if ($key =~ m/FontName|BaseFont/) {
	    $fname = $param;
	    if ($param =~ /(\d+) (\d+) R[^w]*/) {
		$ref =  $1 . ":" . $2;
		$fname = $obj{$ref};
	    }
	}
	if ($key =~ m/FontFile/) {
	    $ffile = $param;
	}
    }

    # �������Ͽ
    if ($fname ne "") {
	$fname =~ s/\s*\d+ \d+ obj\W*(.*)\s*endobj/$1/;
	$fname =~ s/\w+\+|-Identity|-Proportional|-H$|-V$|\s+$//g;
	if ($f2i{$fname} eq "") {
	    $f2i{$fname} = $nfonts;
	    $i2f[$nfonts] = $fname;
	    $nfonts++;
	}
	if ($ffile ne "") {
	    $ffile =~ s/\s+$//;
	    $embed[$f2i{$fname}] = $ffile;
	}
    }

    while ($arg =~ /\/(\w+)\[* (\d+) (\d+) R[^\w]+/sg) {
#	if (!($1 =~ m/^Parent$|^Prev$|^First$|^Last$|^F$|^V$|^T$|^N$|^K$/i))
	push(@refs, $2 . ":" . $3);
    }

    if (@refs > 0) {
	while ($ref = shift(@refs)) {
	    if ($obj{$ref} ne "") {
		$arg = $obj{$ref};
		$obj{$ref} = "";		# XXX
		if ($arg ne "") {
		    &find_fontname($arg);		# recursive call
		}
	    }
	}
    }
}
