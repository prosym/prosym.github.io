<?php
require_once "newregist_conf.php";
session_start();

//������ʬ-------------------------------------------------
if($_POST['state']=='confirm'){
/*-- �ֻ��ÿ������ߡפ������줿�� ------------------------*/
	//POST�ͼ������
	import_request_variables('p','');
	$Pname   = $Pname1." ".$Pname2;
	$Pkana   = $Pkana1." ".$Pkana2;
	$Phone   = $Phone1."-".$Phone2."-".$Phone3;
	$Papost  = $Papost1."-".$Papost2;
//	$Paddr   = $Paddr1.$Paddr2.$Paddr3;
	$Paddr   = $Paddr1;
//	$Psday   = $Psdayyear.'/'.$Psdaymonth.'/'.$Psdayday;
	$Psday   = $Psdaymonth.'/'.$Psdayday;
	//������̵������","��ԥꥪ�ɤ��ִ�
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
//	if(is_array($Popt)){
//		if(in_array("seikyu",$Popt)) $Popt1 = '�������';
//		if(in_array("bunri",$Popt))  $Popt2 = '�μ���ʬΥ';
//		if(in_array("smoke",$Popt))  $Popt3 = '�ʱ�';
//	}
	
	//���å������Ϥ�
	$_SESSION['Pname'] =$Pname;
	$_SESSION['Pname1']=$Pname1;
	$_SESSION['Pname2']=$Pname2;
	$_SESSION['Pkana'] =$Pkana;
	$_SESSION['Pkana1']=$Pkana1;
	$_SESSION['Pkana2']=$Pkana2;
	$_SESSION['Psex']  =$Psex;
	$_SESSION['Page']  =$Page;
	$_SESSION['Porg']  =$Porg;
	$_SESSION['Paddr1']=$Paddr1;
//	$_SESSION['Paddr2']=$Paddr2;
//	$_SESSION['Paddr3']=$Paddr3;
	$_SESSION['Phone1']=$Phone1;
	$_SESSION['Phone2']=$Phone2;
	$_SESSION['Phone3']=$Phone3;
	$_SESSION['Pemail']=$Pemail;
	$_SESSION['Paddr'] =$Paddr;
	$_SESSION['Psent'] =$Psent;
	$_SESSION['Phone'] =$Phone;
	$_SESSION['Penter']=$Penter;
	$_SESSION['Pipsj'] =$Pipsj;
	$_SESSION['Pknum'] =$Pknum;
	$_SESSION['Ppay']  =$Ppay;
	$_SESSION['Psday'] =$Psday;
	$_SESSION['Proom'] =$Proom;
	$_SESSION['Paite'] =$Paite;
	$_SESSION['Patena']=$Patena;
	$_SESSION['Popt1'] =$Popt1;
	$_SESSION['Popt2'] =$Popt2;
	$_SESSION['Popt3'] =$Popt3;
	$_SESSION['Papost'] =$Papost;
	$_SESSION['Papost1']=$Papost1;
	$_SESSION['Papost2']=$Papost2;
	$_SESSION['Petc']  =$Petc;
	$_SESSION['Prcpt']=$Prcpt;
	$_SESSION['Psmoke']=$Psmoke;
	
	//���ϥ��顼�����å�
	//���顼���ܤ�$Keyxxx��1�ˤ��뤳�Ȥǡ�$Errorcolor���΢���ɽ������
	if($Needname ==1 &&($Pname1==null || $Pname2==null)){$error[] = '��̾';        $Keyname=1;}
	if($Needkana ==1 &&($Pkana1==null || $Pkana2==null)){$error[] = '���ʻ�̾';    $Keykana=1;}
	if($Needsex  ==1 && $Psex==null){                    $error[] = '����';        $Keysex=1;}
	if($Needorg  ==1 && $Porg==null){                    $error[] = '��°';        $Keyorg=1;}
	if($Needemail==1 && $Pemail==null){                  $error[] = '�Żҥ᡼��';  $Keyemail=1;}
	if($Needaddr ==1 &&(    $Papost1==null  || $Papost2==null
		|| $Paddr1==null
		|| !ctype_digit($Papost1)==1		   || !ctype_digit($Papost2)==1)){
                                                         $error[] = '����';         $Keyadd=1;}
	if($Needphone==1 &&($Phone1==null || $Phone2==null            ||$Phone3==null
		|| !ctype_digit($Phone1)==1   || !ctype_digit($Phone2)==1 || !ctype_digit($Phone3)==1)){
                                                         $error[] = '�����ֹ�';     $Keyphone=1;}
	if($Needsent==1 && $Psent==null){                    $error[] = '���ն�ʬ';     $Keysent=1;}
//	if(!checkdate($Psdaymonth,$Psdayday,$Psdayyear)){    $error[] = '����/��������';}
	if($Needenter==1 &&($Penter==null || $Pipsj==null)){ $error[] = '���û��';     $Keyenter=1;}
	if($Pipsj    =='���' && $Pknum==null) {             $error[] = '����ֹ�';     $Keyenter=1;}
	if($Ppay==null) {                                    $error[] = '��ʧ��ˡ';     $Keypay=1;}
	if($Needroom ==1 && $Proom==null){                   $error[] = '��˾��������'; $Keyroom=1;}
	if($Needatena==1 &&(is_array($Popt) 
		&& in_array("seikyu",$Popt) && $Patena==null)){  $error[] = '�����ΰ�̾'; $Keyopt=1;}
	if($Prcpt==null) { $error[] = '�μ���'; $Keyrcpt=1;}
	if($Psmoke==null) { $error[] = '�ʱ�Ĵ��'; $Keyrcpt=1;}
	$errCount=count($error);
}
//�����ؿ�----------------------------------------
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

	function form_Pulldown($name,$low,$high,$ed,$step){
		print "<select name=$name>\n";
		for($i=$low;$i<=$high;$i+=$step){
			print "<option value=$i";
				if($i==$ed) print " selected";
			print ">$i</option>\n";
		}
		print "</select>\n";
	}

	//���ռ���--------------------------------------------------
	function pay_day($name){
		$toyear = date("Y");
		$tomonth= date("n");
		$today  = date("j");
		$nameY=$name."year";
		$nameM=$name."month";
		$nameD=$name."day";

//		form_Pulldown($nameY,$toyear-1,$toyear+1,$toyear,1);
//		print "ǯ\n";
		form_Pulldown($nameM,1,12,$tomonth,1);
		print "��\n";
		form_Pulldown($nameD,1,31,$today,1);
		print "��";
		if ($nameM < 11) $nameY = $toyear+1;
		else $nameY = $toyear;
	}

	//�ơ��֥�ȸ��Ф�����--------------------------------------
	function tr_Making($value,$key){
		print "</td></tr>\n";
		print "<tr><td>$value";
		if($key==1) print "&nbsp;<a class=\"key\">��</a>";
		print "</td>\n<td>";
	}

//��ɽ����ʬ-----------------------------------------------------
print $HEADER;
print $TITLE."\n<hr />\n";
	
if($_POST['state']=='confirm' && $errCount==0){
/*- ���ÿ������ߤ�������Ƥ��ĥ��顼���ʤ��ä��Ȥ� -------*/
	//������ǧ����
	print "<table border=1>";
	print "<tr><td width=130></td><td width=450>";
	tr_Making('��̾',0);			print $_SESSION['Pname'];
	tr_Making('���ʻ�̾',0);		print $_SESSION['Pkana'];
	tr_Making('����',0);			print $_SESSION['Psex'];
	tr_Making('ǯ��',0);			print $_SESSION['Page'];
	tr_Making('��°',0);			print $_SESSION['Porg'];
	tr_Making('�Żҥ᡼��',0);		print $_SESSION['Pemail'];
	tr_Making('����',0);			print "��".$_SESSION['Papost']."<br />";
									print $_SESSION['Paddr'];
	tr_Making('���ն�ʬ',0);		print $_SESSION['Psent'];
	tr_Making('�����ֹ�',0);		print $_SESSION['Phone'];
	tr_Making('���û��<br />(�Ҳ�ͳ����ϰ���)',0);	print $_SESSION['Penter'];
		print " / ";				print $_SESSION['Pipsj']." ".$_SESSION['Pknum'];
	tr_Making('��ʧ��ˡ',0);		print $_SESSION['Ppay']."<br />";
		print "����/��������� : ";	print $_SESSION['Psday'];
	tr_Making('��˾�������� <br /> (������4̾1��)',0);	print $_SESSION['Proom']." ".$_SESSION['Paite'];
	tr_Making('�����ΰ�̾',0);		print $_SESSION['Patena'];
	tr_Making('�μ���',0);		print $_SESSION['Prcpt'];
	tr_Making('�ʱ�Ĵ��',0);		print $_SESSION['Psmoke'];
//	tr_Making('���ץ����',0);
//		if(!is_array($Popt)) print "---";
//		else{
//			if(in_array("seikyu",$Popt)) print "���ѽ��Ǽ�ʽ�ɬ��(��̾��".$_SESSION['Patena'].")<br />";
//			if(in_array("bunri",$Popt))  print "��ۤ򻲲���Ƚ��񿩻����ʬΥ������μ����<br />";
//			if(in_array("smoke",$Popt))  print "�ʱ�������˾<br />";
//		}
	tr_Making('����¾����˾',0);	print $_SESSION['Petc'];
	print "</td></tr></table>";
	
	print "<br />�ʾ�����Ƥ��������ޤ���<br />\n";
	print "<table border=0><tr><td>";
	print "<form action=\"$script\" method=\"post\">";
	print "<input type=hidden name=\"state\" value=\"return\">";
	print "<input type=submit value=\" ��� \">\n";
	print "</form></td>";
	print "<td><form action=\"$script\" method=\"post\">\n";
	print "<input type=hidden name=\"state\" value=\"save\">";
	print "<input type=submit value=\" ���� \">\n";
	print "</form></td></tr></table>";
}
elseif($_POST['state']=='save'){
/*- �������줿�Ȥ� --------------------------------------*/
	//���ե�������¸
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
	$data.= ",".$_SESSION['Psmoke'];
//	$data.= ",".$_SESSION['Popt2'];
//	$data.= ",".$_SESSION['Popt3'];
	$data.= ",".$_SESSION['Petc'];
	$data.= "\n";
	$data = mb_convert_encoding($data, "EUC-JP", "auto"); 
	//���ե����뤬�ʤ��ä����Ϻ����������ä����Ͼ�񤭤���
	if(!file_exists($LogFile)){
		$fp = fopen($LogFile,'w');
	}else{
		$fp = fopen($LogFile,'a+');
	}
	flock($fp,LOCK_EX);
	fputs($fp,$data."\n");
	flock($fp,LOCK_UN);
	fclose($fp);
	
	//�ط��Ԥ˥᡼�������
	$datam =   "��������:".date("Y/m/d H:i:s");
	$datam.= "\n��̾:".$_SESSION['Pname'];
	$datam.= "\n��̾�ɤ�:".$_SESSION['Pkana'];
	$datam.= "\n����:".$_SESSION['Psex'];
	$datam.= "\nǯ��:".$_SESSION['Page'];
	$datam.= "\n��°:".$_SESSION['Porg'];
	$datam.= "\n�᡼��:".$_SESSION['Pemail'];
	$datam.= "\n͹���ֹ�:".$_SESSION['Papost'];
	$datam.= "\n����:".$_SESSION['Paddr'];
	$datam.= "\n���ն�ʬ:".$_SESSION['Psent'];
	$datam.= "\n�����ֹ�:".$_SESSION['Phone'];
	$datam.= "\n���û��:".$_SESSION['Penter'];
	$datam.= "\n�����:".$_SESSION['Pipsj'];
	$datam.= "\n����ֹ�:".$_SESSION['Pknum'];
	$datam.= "\n��ʧ����ˡ:".$_SESSION['Ppay'];
	$datam.= "\n��ʧ��ͽ����:".$_SESSION['Psday'];
	$datam.= "\n������˾:".$_SESSION['Proom'];
	$datam.= "\nƱ�����:".$_SESSION['Paite'];
	$datam.= "\n�����:".$_SESSION['Popt1'];
	$datam.= "\n�μ���:".$_SESSION['Prcpt'];
	$datam.= "\n�����̾:".$_SESSION['Patena'];
//	$datam.= "\n�μ����ʬ:".$_SESSION['Popt2'];
	$datam.= "\n�ر�Ĵ��".$_SESSION['Psmoke'];
	$datam.= "\n����:".$_SESSION['Petc'];
	$datam.= "\n";
	$datam = mb_convert_encoding($datam, "ISO-2022-JP", "auto"); 

//	mail($mtoaddr, $msubject, $datam, $mheaders, $mparams);
	mail("gian@cs.uec.ac.jp", $msubject, $datam, $mheaders, $mparams);

	print "<br />���ÿ������ߤ�����դ��ޤ�����<br />";
	print "<p align=\"center\"><a href=\"".$ReturnURL."\">";
	print "���</a></p>";
session_destroy();
}
else{
/*- ����ե�����ɽ�� -------------------------------------*/
	print $NOTICE."\n<hr />\n";
	
	if($errCount>=1){//���顼��������---------------------
		print "<p class=error>ERROR!! <br />";
		for($i=0;$i<$errCount;$i++) {
			print $error[$i];
			if($i<$errCount-1) print ", ";
		}
		print "�ι��ܤ�̤���Ϥ⤷���������Ǥ���</p>";
	}
	
	print "<form action=\"$script\" method=\"post\">\n";
	print "<table border=1>";
	print "<tr><td width=130></td><td width=450>";
	tr_Making(add_flg($Needname, '��̾'),$Keyname);
		print "�� :";				form_Text(Pname1,$_SESSION['Pname1'],20);
		print "̾ :";				form_Text(Pname2,$_SESSION['Pname2'],20);
	tr_Making(add_flg($Needkana,'���ʻ�̾'),$Keykana);
		print "�� :";				form_Text(Pkana1,$_SESSION['Pkana1'],20);
		print "̾ :";				form_Text(Pkana2,$_SESSION['Pkana2'],20);
	tr_Making(add_flg($Needsex,'����'),$Keysex);
									form_Radio(Psex,'����',$_SESSION['Psex']);
									form_Radio(Psex,'����',$_SESSION['Psex']);
	tr_Making('ǯ��',$Keyage);		form_Pulldown(Page,10,80,$_SESSION['Page'],10);
		print "����&nbsp;&nbsp;���������λ��ͤˤ�����ĺ���ޤ�����ɬ�ܤǤϤ���ޤ����";
	tr_Making(add_flg($Needorg,'��°'),$Keyorg);
									form_Text(Porg,$_SESSION['Porg'],50);
	tr_Making(add_flg($Needemail,'�Żҥ᡼��'),$Keyemail);
									form_Text(Pemail,$_SESSION['Pemail'],50);
	tr_Making(add_flg($Needaddr,'����'),$Keyadd);
		print "��";					form_Text(Papost1,$_SESSION['Papost1'],3);
		print "-";					form_Text(Papost2,$_SESSION['Papost2'],5);
		form_Text(Paddr1,$_SESSION['Paddr1'],75);
//		print "<br />��ƻ�ܸ� :";	form_Text(Paddr1,$_SESSION['Paddr1'],10);
//		print "��Į¼ :";			form_Text(Paddr2,$_SESSION['Paddr2'],20);
//		print "<br />���� :";		form_Text(Paddr3,$_SESSION['Paddr3'],75);
	tr_Making(add_flg($Needsent,'���ն�ʬ'),$Keysent);
		form_Radio(Psent,'����',  $_SESSION['Psent']);
		form_Radio(Psent,'��̳��',$_SESSION['Psent']);
	tr_Making(add_flg($Needphone,'�����ֹ�'),$Keyphone);
									form_Text(Phone1,$_SESSION['Phone1'],7);
		print " - ";				form_Text(Phone2,$_SESSION['Phone2'],7);
		print " - ";				form_Text(Phone3,$_SESSION['Phone3'],7);
	tr_Making(add_flg($Needenter,'���û��<br />(�Ҳ�ͳ����ϰ���)'),$Keyenter);
		form_Radio(Penter,'����',$_SESSION['Penter']);
		form_Radio(Penter,'����',$_SESSION['Penter']);
//		form_Radio(Penter,'ȯɽ����',$Penter);			print "<hr size=1 />";
		form_Radio(Penter,'ȯɽ����',$_SESSION[Penter]);
		form_Radio(Penter,'�����аʾ��ȯɽ��',$_SESSION[Penter]);			print "<hr size=1 />";
		form_Radio(Pipsj,'���',$_SESSION['Pipsj']);		print "�ʲ���ֹ� : ";
		form_Text(Pknum,$_SESSION['Pknum'],20);			print "��";
		form_Radio(Pipsj,'����',$_SESSION['Pipsj']);
	tr_Making('��ʧ��ˡ',$Keypay);
		form_Radio(Ppay,$Payment1,$_SESSION['Ppay']);	print "<br />";
		form_Radio(Ppay,$Payment2,$_SESSION['Ppay']);	print "<br />";
		form_Radio(Ppay,$Payment3,$_SESSION['Ppay']);	print "<br />";
		print "����/������ͽ����";						pay_day(Psday);
	tr_Making(add_flg($Needroom,'��˾�������� <br /> (������4̾1��)'),$Keyroom);
		form_Radio(Proom,$Stay1,$_SESSION['Proom']);			print $Stay1cost."<br />";
		form_Radio(Proom,$Stay2,$_SESSION['Proom']);			print $Stay2cost." Ʊ����ꡧ";
				form_Text(Paite,$_SESSION['Paite'],20);			print "<br />";
//		form_Radio(Proom,$Stay3,$_SESSION['Proom']);			print $Stay3cost." Ʊ����ꡧ";
//				form_Text(Paite,$_SESSION['Paite'],20);			print "<br />";
		form_Radio(Proom,$Stay3,$_SESSION['Proom']);			print $Stay3cost."<br />";
//		form_Radio(Proom,$Stay4,$_SESSION['Proom']);			print $Stay4cost." Ʊ����ꡧ";
//				form_Text(Paite,$_SESSION['Paite'],20);			print "<br />";
		form_Radio(Proom,$Stay4,$_SESSION['Proom']);			print $Stay4cost."<br />";
		print "����˾�̤�ˤʤ�ʤ����⤢��ޤ�<br />";
	tr_Making('�����ΰ�̾',$Keyatena);
		form_Text(Patena,$_SESSION['Patena'],30);
	tr_Making('�μ���',$Keyrcpt);
		form_Radio(Prcpt,'������Ƚ�����Σ���',$_SESSION['Prcpt']);
		form_Radio(Prcpt,'�������������Σ���',$_SESSION['Prcpt']);
		form_Radio(Prcpt,'����',$_SESSION['Prcpt']);
	tr_Making('�ʱ�Ĵ��',$Keyrcpt);
		form_Radio(Psmoke,'�ʱ켼',$_SESSION['Psmoke']);
		form_Radio(Psmoke,'�ر켼',$_SESSION['Psmoke']); print "�������Ǥεʱ�Ϥ��ʤ���";
		form_Radio(Psmoke,'���켼',$_SESSION['Psmoke']); print "�ʥ��Х������ͤ����";
//	tr_Making('���ץ����',$Keyopt);
//			if(is_array($Popt) && in_array(seikyu,$Popt)) $ed=1;
//			else $ed=0;
//		form_Checkbox('Popt[]',"seikyu",$ed);	print "���ѽ��Ǽ�ʽ�ɬ��\n";
//		print "--".add_flg($Needatena,"�����ΰ�̾");					form_Text(Patena,$_SESSION['Patena'],30);
//		print add_flg($Needatena,"�����ΰ�̾");					form_Text(Patena,$_SESSION['Patena'],30);
//		print "<br />\n";
//			if(is_array($Popt) && in_array(bunri,$Popt)) $ed=1;
//			else $ed=0;
//		form_Checkbox('Popt[]',"bunri",$ed);	print "��ۤ򻲲���Ƚ��񿩻����ʬΥ������μ����<br />\n";
//			if(is_array($Popt) && in_array(smoke,$Popt)) $ed=1;
//			else $ed=0;
//		print "���μ����";
//		print "<br />\n";
//		form_Checkbox('Popt[]',"smoke",$ed);	print "�ʱ�������˾<br />\n";
	tr_Making('����¾����˾',$etckey);				form_Textarea(Petc,$_SESSION['Petc'],4,60);
	print "</td></tr></table>";
	
	print "<input type=hidden name=\"state\" value=\"confirm\">\n";
	print "<input type=submit value=\"���ÿ�������\">\n";
	print "</form>\n";
	
	}
	print $FOOTER;
?>
