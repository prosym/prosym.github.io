<?php
//EOM�ڤ�EOM;�Ͼõ��ԲĤǤ������δ֤Τ�html���Ҳ�ǽ

//config ---------------------------------------------------
$script    ='newregist.php';  /* �¹ԥե�����̾ */
$LogFile   ='/var/www/prosym/hidden/50/newregist.log';  /* ����¸�ե�����̾ �������ƥ���� */
//$LogFile   ='/home/shnsk/web_test/newregist.log';  /* ����¸�ե�����̾ �������ƥ���� */
$mheaders = "From: prosym50@ipsj.or.jp";
$mparams = "-f www-admin@kazu.ecc.u-tokyo.ac.jp";
$mtoaddr = "prosym50@ipsj.or.jp";
//$mtoaddr = "me@shnsk.net";
$msubject = "50th programming symposium registration";
$mheader = "��50��ץ���ߥ󥰥���ݥ�����ؤ���Ͽ��\n�ʲ����̤�˼����դ��ޤ�����\n\n�Х�㱤��ޤĤ�ؤο����ߤ⤪�Ԥ����Ƥ���ޤ���\n";

/* ɬ��=1, not=0 */
$Needname = 1; //��̾
$Needkana = 1; //���ʻ�̾
$Needsex  = 1; //����
$Needorg  = 0; //��°
$Needemail= 1; //�᡼��
$Needaddr = 1; //����
$Needphone= 0; //�����ֹ�
$Needsent = 1; //���ն�ʬ
$Needenter= 1; //���û��
$Needroom = 1; //��˾��������
$Needatena= 0; //�μ���ΰ�̾
$Needrcpt = 1; //�μ���
$Needsmoke= 1; //�ʱ��Ĵ��

$Payment1='͹�ؿ��� 00150-4-83484';
$Payment2='��Կ��� �ߤ��۶�� �ץ����Ź ���� 1013945';
$Payment3='��Կ��� �����ɩ��� ��Ź ���� 7636858';

$Stay1='��̾����            ';
$Stay1cost='�ʲ�� ��67,000  ���� ��73,000��';
$Stay2='��̾����            ';
$Stay2cost='�ʲ�� ��47,000  ���� ��53,000��';
$Stay3='��̾����            ';
$Stay3cost='�ʲ�� ��40,000  ���� ��46,000��';
$Stay4='��̾�����ʳ����˸¤��';
$Stay4cost='�ʲ�� ��29,000  ���� ��35,000��';

$Bgcolor   ='#ffffff';   /* �ɿ�����           */
$Fontsize  ='10pt';      /* ���ܥե���ȥ����� */
$Textcolor ='#333333';   /* ����ʸ����         */
$Errorcolor='#C00000';   /* ���顼ʸ����       */
$Linkcolor ='#89796B';   /* ̤��󥯥��顼     */
$Linkvisit ='#89796B';   /* �ѥ�󥯥��顼     */
$Linkactive='#A3879E';   /* Click�����顼      */
$Linkhover ='#A3879E';   /* onMouse�����顼    */
$Tableborder='#89796B;';
$ReturnURL ='http://www.ipsj.or.jp/prosym/';  /* ���URL            */

$t_border  ='#89796B';   /* �����ϲ���border���顼 */

//header ---------------------------------------------------
	$HEADER= <<<EOM
<html><head><style type="text/css"><!--
   body      {background-color:$Bgcolor;line-height:130%;
              color:$Textcolor;font-size:$Fontsize;}
   td        {color:$Textcolor;font-size:$Fontsize;}
   .error    {color:$Errorcolor;font-weight:bold;}
   .key      {color:$Errorcolor;}
   .t_border {background-color:$t_border;}
    a:link   {color:$Linkcolor;}
    a:visited{color:$Linkvisit;}
    a:active {color:$Linkactive;}
    a:hover  {color:$Linkhover;}
-->
</style>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="Sun, 11 Nov 2007 16:00:00 GMT">
<title>�ץ���ߥ󥰡�����ݥ����� ���ÿ�����</title>
</head><body>
EOM;

//title ----------------------------------------------------
	$TITLE= <<<EOM
<h1><img border="0" src="../img/mark2.gif" width="115" height="96"></h1>
<p align="right"><a href="http://www.ipsj.or.jp/prosym/">
�֥ץ���ߥ󥰡�����ݥ������</a>�����</p>
<h1>�ץ���ߥ󥰡�����ݥ����� ���ÿ�����</h1>
EOM;

//notice ---------------------------------------------------
	$NOTICE = <<<EOM
<ul>
  <li> ���Ǥϻ������������ޤ��󡥤�����Ǥ�����͹�ؿ��ء���Կ����ߡ������α�ʤɤμ��ʤǡ������˻������ʧ���ߤ�Ѥޤ���褦���ꤤ���ޤ���
  <li> ���ÿ����Ԥˤϡ�����񡤻��þϰ������������ѻ��͹�����ޤ��������ѻ��Ȥä�͹�ضɤ�ʧ��������ϡ��������̵���Ǥ�������ʳ��ο�������ˡ�ξ��ϡ�����Ϣ��ɼ��ɬ�׻���������ơ��嵭�Ȳ���ˤ�Ϣ����������
  <li> <font color=#ff0000>��������������12��19���ʶ��</font>
  <li> �������ϳز�ˤ��ޤ�������������
  <li> ����ϻ�����Ƚ��񿩻����ʬ�����ޤ���������ˤ�ͽ�ƽ��塤�����Ǥ�ޤߤޤ������񿩻���ˤϡ������塤���񡤾����Ǥ�ޤߤޤ�������ʤ��λ��ä�ǧ����ޤ���
  <li> ʣ���ο�ʬ�򤪻��������ϡ��⤤���������Ŭ�Ѥ����Ƥ��������ޤ���
  <li> ����/65�аʾ� �����šʥݥ������ޤ��ȯɽ�Ԥϻ����񤫤� 12,000��/6,000�� �����ˤʤ�ޤ���
  <li> ���ä���������ä˳����ˤ����������ϡ����ε�������񤵤�뤳�Ȥ򤪴��ᤷ�ޤ������������ǯ����� 4,800�ߤǤ����ܤ����� <a href="http://www.ipsj.or.jp/06mem/nyukai/nyukai.html"> http://www.ipsj.or.jp/06mem/nyukai/nyukai.html</a>�򻲾Ȥ���������
  <li> ���ÿ����߸�����������ä���ä������ϡ����ü��罸�ڡ����ξȲ���ޤ�Ϣ��򤪴ꤤ���ޤ�����ä���Ϣ��Τʤ����ϡ�����ϸ�§���֤����ޤ���
  <li> ȯɽ�Ԥ����⻲�ÿ����ߤ�ɬ�פǤ���
  <li> ��졤������ߤ��Թ�ǡ��������ߤ˱������ͤ��礬����ޤ��Τǡ����餫���ᤴλ������������
  <li> ���Ŵ���������ӤǤν�����䡤�Ͱ��θ��ؤϤ���θ�����������ʤ�������
�����ϴ����ˤ����̤�����������
  <li> �ץ����� <a href="50program.html">����</a>�ˤ���ޤ���
  <li> <font color=#0000ff>���������Ƥβ����κݤˤϥ֥饦���Ρ����׵�ǽ�Ϥ��Ȥ��ˤʤ餺���ǽ餫���ľ�����褦���ꤤ�������ޤ���</font>
  <li> <font color=#0000ff>���������Ƥβ����򤵤��ݤˡ��֥饦����ץ����Υ���å��夬�㳲�ˤʤ뤳�Ȥ�����ޤ������ξ��ϥ֥饦���ǥ���å����ѡ����������������Ԥ��������뤤�ϥץ�����Ȥ�ʤ�����ˤ��Ƥ����������ʡ�Proxy error�פ�̵�¥롼�פ˴٤ä����ϡ��֥饦���Ƶ�ư��ȴ���Ф��ޤ�����</font>
  <li> �֢��פ�ɬ�ܹ��ܤ�ɽ���ޤ���
</ul>
EOM;

//footer ---------------------------------------------------
	$FOOTER= <<<EOM
</body></html>
EOM;

?>
