<?php
//EOM�ڤ�EOM;�Ͼõ��ԲĤǤ������δ֤Τ�html���Ҳ�ǽ

//config ---------------------------------------------------
$script    ='newregist.php';  /* �¹ԥե�����̾ */
$LogFile   ='/home/hidden/48/newregist.log';  /* ����¸�ե�����̾ �������ƥ���� */
$mheaders = "From: prosym48@ipsj.or.jp";
$mparams = "-f webmaster@kitty.watalab.cs.uec.ac.jp";
$mtoaddr = "prosym48@ipsj.or.jp";
$msubject = "48th programming symposium registration";
$mheader = "��48��ץ���ߥ󥰥���ݥ�����ؤ���Ͽ��\n�٤ޤ��ʤ���ʲ����̤�˼����դ��ޤ�����";

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

$Stay1='1̾1��            ';
$Stay1cost='�ʲ�� 67,000  ���� 73,000��';
$Stay2='2̾1��            ';
$Stay2cost='�ʲ�� 47,000  ���� 53,000��';
$Stay3='3̾1��            ';
$Stay3cost='�ʲ�� 40,000  ���� 46,000��';
$Stay4='4̾1���ʳ����˸¤��';
$Stay4cost='�ʲ�� 29,000  ���� 35,000��';

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
</head><body>
EOM;

//title ----------------------------------------------------
	$TITLE= <<<EOM
<h1><img border="0" src="../img/mark2.gif" width="115" height="96"></h1>
<p align="right"><a href="http://www.ipsj.or.jp/prosym/">
�֥ץ���ߥ󥰡�����ݥ������</a>�����</p>
<h1>�ץ���ߥ󥰡�����ݥ����� <font color=#ff0000>�٤ޤ��ʤ����</font>���ÿ�����</h1>
EOM;

//notice ---------------------------------------------------
	$NOTICE = <<<EOM
<ul>
  <li> ������ˤ�ͽ�ƽ��塤�����񡤿��񡤾����Ǥ�ޤߤޤ�������ʤ��λ��ä�ǧ��ޤ���
  <li> ���Ǥϻ������������ޤ��󡥤�����Ǥ�����͹�ؿ��ء���Կ����ߡ������α�ʤɤμ��ʤǡ������˻������ʧ���ߤ�Ѥޤ���褦���ꤤ���ޤ���
  <li> ���ÿ����Ԥˤϡ�����񡤻��þϰ������������ѻ��͹�����ޤ��Τǡ�<font color=#ff0000>���</font>ʧ�����ߤ�Ѥޤ��Ʋ������������ѻ��Ȥä�͹�ضɤ�ʧ��������ϡ��������̵���Ǥ���
  <li> ���Ŵ���������ӤǤν�����䡤�Ͱ��θ��ؤϤ���θ�������������������ʤ����ϴ����ˤ����̤�����������
</ul>
<ul>
  <li> ��졤������ߤ��Թ�ǡ��������ߤ˱������ͤ��礬����ޤ��Τǡ����餫���ᤴλ������������
  <li> ���ÿ����߸�����������ä���ä������ϡ�2006ǯ12��15��(��)�ޤǤ�Ϣ��򤪴ꤤ���ޤ�����ä�Ϣ��Τʤ����ϡ��������Թ�塤�������ħ�������Ƥ��������ޤ�������ˤ�������λ��ä�ǧ��ޤ���
  <li> ȯɽ�Ԥ����⻲�ÿ����ߤ�ɬ�פǤ���
</ul>
<ul>
  <li> �ץ����� <a href="48program.html">����</a>�ˤ���ޤ���
  <li> �֢��פ�ɬ�ܹ��ܤ�ɽ���ޤ���
</ul>
EOM;

//footer ---------------------------------------------------
	$FOOTER= <<<EOM
</body></html>
EOM;

?>
