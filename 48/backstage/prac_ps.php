<?php
require_once "prac_conf.php";
session_start();

//��������-------------------------------------------------
if($_POST['state']=='confirm'){
/*-- �u�Q���\�����݁v�������ꂽ�� ------------------------*/
	//POST�l�󂯎��
	import_request_variables('p','');
	$Pname   = $Pname1." ".$Pname2;
	$Pkana   = $Pkana1." ".$Pkana2;
	$Phone   = $Phone1."-".$Phone2."-".$Phone3;
	$Papost  = $Papost1."-".$Papost2;
	$Paddr   = $Paddr1.$Paddr2.$Paddr3;
	$Psday   = $Psdayyear.'/'.$Psdaymonth.'/'.$Psdayday;
	//�^�O�̖�������","���s���I�h�֒u��
	$Pname   = htmlspecialchars($Pname);	$Pname   = str_replace(',','.',$Pname);
	$Pkana   = htmlspecialchars($Pkana);	$Pkana   = str_replace(',','.',$Pkana);
	$Porg    = htmlspecialchars($Porg); 	$Porg    = str_replace(',','.',$Porg);
	$Pemail  = htmlspecialchars($Pemail);	$Pemail  = str_replace(',','.',$Pemail);
	$Paddr   = htmlspecialchars($Paddr);	$Paddr   = str_replace(',','.',$Paddr);
	$Pknum   = htmlspecialchars($Pknum);	$Pknum   = str_replace(',','.',$Pknum);
	$Paite   = htmlspecialchars($Paite);	$Paite   = str_replace(',','.',$Paite);
	$Patena  = htmlspecialchars($Patena);	$Patena  = str_replace(',','.',$Patena);
	$Petc    = htmlspecialchars($Petc); 	$Petc    = str_replace(',','.',$Petc);
	$Papost  = str_replace(',','.',$Papost);
	$Phone   = str_replace(',','.',$Phone);
	$Petc    = str_replace("\r\n", "<br>", $Petc);
	$Petc    = str_replace("\r", "<br>", $Petc);
	$Petc    = str_replace("\n", "<br>", $Petc);
	if(is_array($Popt)){
		if(in_array("seikyu",$Popt)) $Popt1 = '�������v';
		if(in_array("bunri",$Popt))  $Popt2 = '�̎�������';
		if(in_array("smoke",$Popt))  $Popt3 = '�i��';
	}
	
	//�Z�b�V�����֓n��
	$_SESSION['Pname'] =$Pname;  $_SESSION['Pname1']=$Pname1; $_SESSION['Pname2']=$Pname2;
	$_SESSION['Pkana'] =$Pkana;  $_SESSION['Pkana1']=$Pkana1; $_SESSION['Pkana2']=$Pkana2;
	$_SESSION['Psex']  =$Psex;   $_SESSION['Page']  =$Page;   $_SESSION['Porg']  =$Porg;
	$_SESSION['Paddr1']=$Paddr1; $_SESSION['Paddr2']=$Paddr2; $_SESSION['Paddr3']=$Paddr3;
	$_SESSION['Phone1']=$Phone1; $_SESSION['Phone2']=$Phone2; $_SESSION['Phone3']=$Phone3;
	$_SESSION['Pemail']=$Pemail; $_SESSION['Paddr'] =$Paddr;  $_SESSION['Psent'] =$Psent;
	$_SESSION['Phone'] =$Phone;  $_SESSION['Penter']=$Penter; $_SESSION['Pipsj'] =$Pipsj;
	$_SESSION['Pknum'] =$Pknum;  $_SESSION['Ppay']  =$Ppay;   $_SESSION['Psday'] =$Psday;
	$_SESSION['Proom'] =$Proom;  $_SESSION['Paite'] =$Paite;  $_SESSION['Patena']=$Patena;
	$_SESSION['Popt1'] =$Popt1;  $_SESSION['Popt2'] =$Popt2;  $_SESSION['Popt3'] =$Popt3;
	$_SESSION['Papost'] =$Papost;  $_SESSION['Papost1']=$Papost1; $_SESSION['Papost2']=$Papost2;
	$_SESSION['Petc']  =$Petc;   $_SESSION['Prcpt']=$Prcpt;
	
	//���̓G���[�`�F�b�N
	//�G���[���ڂ�$Keyxxx��1�ɂ��邱�ƂŁA$Errorcolor�F�́���\������
	if($Needname ==1 &&($Pname1==null || $Pname2==null)){$error[] = '����';        $Keyname=1;}
	if($Needkana ==1 &&($Pkana1==null || $Pkana2==null)){$error[] = '�J�i����';    $Keykana=1;}
	if($Needsex  ==1 && $Psex==null){                    $error[] = '����';        $Keysex=1;}
	if($Needorg  ==1 && $Porg==null){                    $error[] = '����';        $Keyorg=1;}
	if($Needemail==1 && $Pemail==null){                  $error[] = '�d�q���[��';  $Keyemail=1;}
	if($Needaddr ==1 &&(    $Papost1==null  || $Papost2==null
		|| $Paddr1==null || $Paddr2 ==null || $Paddr3 ==null
		|| !ctype_digit($Papost1)==1		   || !ctype_digit($Papost2)==1)){
                                                         $error[] = '�Z��';         $Keyadd=1;}
	if($Needphone==1 &&($Phone1==null || $Phone2==null            ||$Phone3==null
		|| !ctype_digit($Phone1)==1   || !ctype_digit($Phone2)==1 || !ctype_digit($Phone3)==1)){
                                                         $error[] = '�d�b�ԍ�';     $Keyphone=1;}
	if($Needsent==1 && $Psent==null){                    $error[] = '���t�敪';     $Keysent=1;}
	if(!checkdate($Psdaymonth,$Psdayday,$Psdayyear)){    $error[] = '����/�U���ݓ�';}
	if($Needenter==1 &&($Penter==null || $Pipsj==null)){ $error[] = '�Q�����i';     $Keyenter=1;}
	if($Pipsj    =='���' && $Pknum==null) {             $error[] = '����ԍ�';     $Keyenter=1;}
	if($Ppay==null) {                                    $error[] = '�x�����@';     $Keypay=1;}
	if($Needroom ==1 && $Proom==null){                   $error[] = '��]���镔��'; $Keyroom=1;}
	if($Needatena==1 &&(is_array($Popt) 
		&& in_array("seikyu",$Popt) && $Patena==null)){  $error[] = '�������̈���'; $Keyopt=1;}
	if($Prcpt==null) { $error[] = '�̎���'; $Keyrcpt=1;}
	$errCount=count($error);
}
//�쐬�֐�----------------------------------------
	function add_flg($isneed,$item){
		if($isneed==0) return "  ".$item;
		else return "��".$item;
	}
	function form_Text($name,$value,$size){
		print "<input type=text name=$name value=\"$value\" size=$size>";
	}

	function form_Radio($name,$value,$ed){
		print "<input type=radio name=$name value=\"$value\"";
		if($value==$ed) print " checked";
		print ">$value&nbsp;&nbsp;\n";
	}

	function form_Checkbox($name,$value,$ed){
		print "<input type=checkbox name=$name value=$value";
		if($ed==1) print " checked";
		print ">";
	}

	function form_Textarea($name,$value,$rows,$cols){
		print "<textarea name=$name rows=$rows cols=$cols>$value</textarea>";
	}

	function form_Pulldown($name,$low,$high,$ed){
		print "<select name=$name>\n";
		for($i=$low;$i<=$high;$i++){
			print "<option value=$i";
				if($i==$ed) print " selected";
			print ">$i</option>\n";
		}
		print "</select>\n";
	}

	//���t�擾--------------------------------------------------
	function pay_day($name){
		$toyear = date("Y");
		$tomonth= date("n");
		$today  = date("j");
		$nameY=$name."year";
		$nameM=$name."month";
		$nameD=$name."day";

		form_Pulldown($nameY,$toyear-1,$toyear+1,$toyear);
		print "�N\n";
		form_Pulldown($nameM,1,12,$tomonth);
		print "��\n";
		form_Pulldown($nameD,1,31,$today);
		print "��";
	}

	//�e�[�u���ƌ��o���쐬--------------------------------------
	function tr_Making($value,$key){
		print "</td></tr>\n";
		print "<tr><td>$value";
		if($key==1) print "&nbsp;<a class=\"key\">��</a>";
		print "</td>\n<td>";
	}

//���\������-----------------------------------------------------
print $HEADER;
print $TITLE."\n<hr />\n";
	
if($_POST['state']=='confirm' && $errCount==0){
/*- �Q���\�����݂�������Ă��G���[���Ȃ������Ƃ� -------*/
	//���M�m�F���
	print "<table border=1>";
	print "<tr><td width=130></td><td width=450>";
	tr_Making('����',0);			print $_SESSION['Pname'];
	tr_Making('�J�i����',0);		print $_SESSION['Pkana'];
	tr_Making('����',0);			print $_SESSION['Psex'];
	tr_Making('�N��',0);			print $_SESSION['Page'];
	tr_Making('����',0);			print $_SESSION['Porg'];
	tr_Making('�d�q���[��',0);		print $_SESSION['Pemail'];
	tr_Making('�Z��',0);			print "��".$_SESSION['Papost']."<br />";
									print $_SESSION['Paddr'];
	tr_Making('���t�敪',0);		print $_SESSION['Psent'];
	tr_Making('�d�b�ԍ�',0);		print $_SESSION['Phone'];
	tr_Making('�Q�����i<br />(�Љ�l�w���͈��)',0);	print $_SESSION['Penter'];
		print " / ";				print $_SESSION['Pipsj']." ".$_SESSION['Pknum'];
	tr_Making('�x�����@',0);		print $_SESSION['Ppay']."<br />";
		print "����/�U�荞�ݓ� : ";	print $_SESSION['Psday'];
	tr_Making('��]���镔�� <br /> (�w����4��1��)',0);	print $_SESSION['Proom']." ".$_SESSION['Paite'];
	tr_Making('�I�v�V����',0);
		if(!is_array($Popt)) print "---";
		else{
			if(in_array("seikyu",$Popt)) print "���Ϗ��Ɣ[�i�����K�v(�����F".$_SESSION['Patena'].")<br />";
			if(in_array("bunri",$Popt))  print "���z���Q����Əh���H����ɕ�������i�̎����j<br />";
			if(in_array("smoke",$Popt))  print "�i��������]<br />";
		}
	tr_Making('���̑����v�]',0);	print $_SESSION['Petc'];
	print "</td></tr></table>";
	
	print "<br />�ȏ�̓��e�ő��M���܂��B<br />\n";
	print "<table border=0><tr><td>";
	print "<form action=\"$script\" method=\"post\">";
	print "<input type=hidden name=\"state\" value=\"return\">";
	print "<input type=submit value=\" �߂� \">\n";
	print "</form></td>";
	print "<td><form action=\"$script\" method=\"post\">\n";
	print "<input type=hidden name=\"state\" value=\"save\">";
	print "<input type=submit value=\" ���M \">\n";
	print "</form></td></tr></table>";
}
elseif($_POST['state']=='save'){
/*- ���M���ꂽ�Ƃ� --------------------------------------*/
	//���O�t�@�C���ۑ�
	$data = date("Y/m/d H:i:s");
	$data.= ",".$_SESSION['Pname'];
	$data.= ",".$_SESSION['Pkana'];
	$data.= ",".$_SESSION['Psex'];
	$data.= ",".$_SESSION['Page'];
	$data.= ",".$_SESSION['Porg'];
	$data.= ",".$_SESSION['Pemail'];
	$data.= ",".$_SESSION['Papost'];
	$data.= ",".$_SESSION['Paddr'];
	$data.= ",".$_SESSION['Psent'];
	$data.= ",".$_SESSION['Phone'];
	$data.= ",".$_SESSION['Penter'];
	$data.= ",".$_SESSION['Pipsj'];
	$data.= ",".$_SESSION['Pknum'];
	$data.= ",".$_SESSION['Ppay'];
	$data.= ",".$_SESSION['Psday'];
	$data.= ",".$_SESSION['Proom'];
	$data.= ",".$_SESSION['Paite'];
	$data.= ",".$_SESSION['Popt1'];
	$data.= ",".$_SESSION['Prcpt'];
	$data.= ",".$_SESSION['Patena'];
	$data.= ",".$_SESSION['Popt2'];
	$data.= ",".$_SESSION['Popt3'];
	$data.= ",".$_SESSION['Petc'];
	//���O�t�@�C�����Ȃ������ꍇ�͍쐬���A�������ꍇ�͏㏑������
	if(!file_exists($LogFile)){
		$fp = fopen($LogFile,'w');
	}else{
		$fp = fopen($LogFile,'a+');
	}
	flock($fp,LOCK_EX);
	fputs($fp,$data."\n");
	flock($fp,LOCK_UN);
	fclose($fp);
	
	//�֌W�҂Ƀ��[���ő��M
	$datam =   "��t����:".date("Y/m/d H:i:s");
	$datam.= "\n����:".$_SESSION['Pname'];
	$datam.= "\n�����ǂ�:".$_SESSION['Pkana'];
	$datam.= "\n����:".$_SESSION['Psex'];
	$datam.= "\n�N��:".$_SESSION['Page'];
	$datam.= "\n����:".$_SESSION['Porg'];
	$datam.= "\n���[��:".$_SESSION['Pemail'];
	$datam.= "\n�X�֔ԍ�:".$_SESSION['Papost'];
	$datam.= "\n�Z��:".$_SESSION['Paddr'];
	$datam.= "\n���t�敪:".$_SESSION['Psent'];
	$datam.= "\n�d�b�ԍ�:".$_SESSION['Phone'];
	$datam.= "\n�Q�����i:".$_SESSION['Penter'];
	$datam.= "\n����H:".$_SESSION['Pipsj'];
	$datam.= "\n����ԍ�:".$_SESSION['Pknum'];
	$datam.= "\n�x�������@:".$_SESSION['Ppay'];
	$datam.= "\n�x�����\���:".$_SESSION['Psday'];
	$datam.= "\n������]:".$_SESSION['Proom'];
	$datam.= "\n��������:".$_SESSION['Paite'];
	$datam.= "\n������:".$_SESSION['Popt1'];
	$datam.= "\n�̎���:".$_SESSION['Prcpt'];
	$datam.= "\n����������:".$_SESSION['Patena'];
	$datam.= "\n�̎����敪:".$_SESSION['Popt2'];
	$datam.= "\n�։��H".$_SESSION['Popt3'];
	$datam.= "\n���l:".$_SESSION['Petc'];
	$datam.= "\n";
	$message = mb_convert_encoding($datam, "SJIS", "ISO-2022-JP"); 

	mail("gian@cs.uec.ac.jp", $msubject, $message, $mheaders, $mparams);

	print "<br />�Q���\�����݂��󂯕t���܂����B<br />";
	print "<p align=\"center\"><a href=\"".$ReturnURL."\">";
	print "�߂�</a></p>";
session_destroy();
}
else{
/*- �����t�H�[���\�� -------------------------------------*/
	print $NOTICE."\n<hr />\n";
	
	if($errCount>=1){//�G���[������ꍇ---------------------
		print "<p class=error>ERROR!! <br />";
		for($i=0;$i<$errCount;$i++) {
			print $error[$i];
			if($i<$errCount-1) print ", ";
		}
		print "�̍��ڂ������͂������͕s���ł��B</p>";
	}
	
	print "<form action=\"$script\" method=\"post\">\n";
	print "<table border=1>";
	print "<tr><td width=130></td><td width=450>";
	tr_Making(add_flg($Needname, '����'),$Keyname);
		print "�� :";				form_Text(Pname1,$_SESSION['Pname1'],20);
		print "�� :";				form_Text(Pname2,$_SESSION['Pname2'],20);
	tr_Making(add_flg($Needkana,'�J�i����'),$Keykana);
		print "�� :";				form_Text(Pkana1,$_SESSION['Pkana1'],20);
		print "�� :";				form_Text(Pkana2,$_SESSION['Pkana2'],20);
	tr_Making(add_flg($Needsex,'����'),$Keysex);
									form_Radio(Psex,'�j��',$_SESSION['Psex']);
									form_Radio(Psex,'����',$_SESSION['Psex']);
	tr_Making('�N��',$Keyage);		form_Pulldown(Page,18,99,$_SESSION['Page']);
		print "��&nbsp;&nbsp;�i��������̎Q�l�ɂ����Ē����܂����C�K�{�ł͂���܂���j";
	tr_Making(add_flg($Needorg,'����'),$Keyorg);
									form_Text(Porg,$_SESSION['Porg'],50);
	tr_Making(add_flg($Needemail,'�d�q���[��'),$Keyemail);
									form_Text(Pemail,$_SESSION['Pemail'],50);
	tr_Making(add_flg($Needaddr,'�Z��'),$Keyadd);
		print "��";					form_Text(Papost1,$_SESSION['Papost1'],3);
		print "-";					form_Text(Papost2,$_SESSION['Papost2'],5);
		print "<br />�s���{�� :";	form_Text(Paddr1,$_SESSION['Paddr1'],10);
		print "�s���� :";			form_Text(Paddr2,$_SESSION['Paddr2'],20);
		print "<br />�Ԓn :";		form_Text(Paddr3,$_SESSION['Paddr3'],75);
	tr_Making(add_flg($Needsent,'���t�敪'),$Keysent);
		form_Radio(Psent,'����',  $_SESSION['Psent']);
		form_Radio(Psent,'�Ζ���',$_SESSION['Psent']);
	tr_Making(add_flg($Needphone,'�d�b�ԍ�'),$Keyphone);
									form_Text(Phone1,$_SESSION['Phone1'],7);
		print " - ";				form_Text(Phone2,$_SESSION['Phone2'],7);
		print " - ";				form_Text(Phone3,$_SESSION['Phone3'],7);
	tr_Making(add_flg($Needenter,'�Q�����i<br />(�Љ�l�w���͈��)'),$Keyenter);
		form_Radio(Penter,'���',$_SESSION['Penter']);
		form_Radio(Penter,'�w��',$_SESSION['Penter']);
//		form_Radio(Penter,'���\�w��',$Penter);			print "<hr size=1 />";
		form_Radio(Penter,'���\�w��',$_SESSION[Penter]);
		form_Radio(Penter,'�U�T�Έȏ�̔��\��',$_SESSION[Penter]);			print "<hr size=1 />";
		form_Radio(Pipsj,'���',$_SESSION['Pipsj']);		print "�i����ԍ� : ";
		form_Text(Pknum,$_SESSION['Pknum'],20);			print "�j";
		form_Radio(Pipsj,'����',$_SESSION['Pipsj']);
	tr_Making('�x�����@',$Keypay);
		form_Radio(Ppay,$Payment1,$_SESSION['Ppay']);	print "<br />";
		form_Radio(Ppay,$Payment2,$_SESSION['Ppay']);	print "<br />";
		form_Radio(Ppay,$Payment3,$_SESSION['Ppay']);	print "<br />";
		print "����/�U���ݗ\���";						pay_day(Psday);
	tr_Making(add_flg($Needroom,'��]���镔�� <br /> (�w����4��1��)'),$Keyroom);
		form_Radio(Proom,$Stay1,$_SESSION['Proom']);			print $Stay1cost."<br />";
		form_Radio(Proom,$Stay2,$_SESSION['Proom']);			print $Stay2cost." ��������F";
				form_Text(Paite,$_SESSION['Paite'],20);			print "<br />";
//		form_Radio(Proom,$Stay3,$_SESSION['Proom']);			print $Stay3cost." ��������F";
//				form_Text(Paite,$_SESSION['Paite'],20);			print "<br />";
		form_Radio(Proom,$Stay3,$_SESSION['Proom']);			print $Stay3cost."<br />";
//		form_Radio(Proom,$Stay4,$_SESSION['Proom']);			print $Stay4cost." ��������F";
//				form_Text(Paite,$_SESSION['Paite'],20);			print "<br />";
		form_Radio(Proom,$Stay4,$_SESSION['Proom']);			print $Stay4cost."<br />";
		print "����]�ʂ�ɂȂ�Ȃ��ꍇ������܂�<br />";
	tr_Making('�I�v�V����',$Keyopt);
			if(is_array($Popt) && in_array(seikyu,$Popt)) $ed=1;
			else $ed=0;
//		form_Checkbox('Popt[]',"seikyu",$ed);	print "���Ϗ��Ɣ[�i�����K�v\n";
//		print "--".add_flg($Needatena,"�������̈���");					form_Text(Patena,$_SESSION['Patena'],30);
		print add_flg($Needatena,"�������̈���");					form_Text(Patena,$_SESSION['Patena'],30);
		print "<br />\n";
			if(is_array($Popt) && in_array(bunri,$Popt)) $ed=1;
			else $ed=0;
//		form_Checkbox('Popt[]',"bunri",$ed);	print "���z���Q����Əh���H����ɕ�������i�̎����j<br />\n";
//			if(is_array($Popt) && in_array(smoke,$Popt)) $ed=1;
//			else $ed=0;
		print "���̎�����";
		form_Radio(Prcpt,'�Q����Əh����̂Q��',$_SESSION['Prcpt']);
		form_Radio(Prcpt,'�Q����h����ꊇ�̂P��',$_SESSION['Prcpt']);
		form_Radio(Prcpt,'�s�v',$_SESSION['Prcpt']);
		print "<br />\n";
		form_Checkbox('Popt[]',"smoke",$ed);	print "�i��������]<br />\n";
	tr_Making('���̑����v�]',$etckey);				form_Textarea(Petc,$_SESSION['Petc'],4,60);
	print "</td></tr></table>";
	
	print "<input type=hidden name=\"state\" value=\"confirm\">\n";
	print "<input type=submit value=\"�Q���\������\">\n";
	print "</form>\n";
	
	}
	print $FOOTER;
?>
