<?php
//EOM�y��EOM;�͏����s�ł��B���̊Ԃ̂�html�L�q�\

//config ---------------------------------------------------
$script    ='prac_ps.php';  /* ���s�t�@�C���� */
$LogFile   ='/home/hidden/48/prac_ps.log';  /* ���O�ۑ��t�@�C���� �Z�L�����e�B���� */
$mheaders = "From: prosym48@ipsj.or.jp";
$mparams = "-f webmaster@kitty.watalab.cs.uec.ac.jp";
$mtoaddr = "prosym48@ipsj.or.jp";
$msubject = "48th programming symposium registration";

/* �K�{=1, not=0 */
$Needname = 1; //����
$Needkana = 1; //�J�i����
$Needsex  = 1; //����
$Needorg  = 0; //����
$Needemail= 1; //���[��
$Needaddr = 1; //�Z��
$Needphone= 0; //�d�b�ԍ�
$Needsent = 1; //���t�敪
$Needenter= 1; //�Q�����i
$Needroom = 1; //��]���镔��
$Needatena= 0; //�̎���������ꍇ�̈���

$Payment1='�X�֐U�� 00150-4-83484';
$Payment2='��s�U�� �݂��ً�s �Ճm��x�X ���� 1013945';
$Payment3='��s�U�� �����O�H��s �{�X ���� 7636858';

$Stay1='1��1��            ';
$Stay1cost='�i��� 67,000  ���� 73,000�j';
$Stay2='2��1��            ';
$Stay2cost='�i��� 47,000  ���� 53,000�j';
$Stay3='3��1��            ';
$Stay3cost='�i��� 40,000  ���� 46,000�j';
$Stay4='4��1���i�w���Ɍ���j';
$Stay4cost='�i��� 29,000  ���� 35,000�j';

$Bgcolor   ='#ffffff';   /* �ǐF�ݒ�           */
$Fontsize  ='10pt';      /* ��{�t�H���g�T�C�Y */
$Textcolor ='#333333';   /* ��{�����F         */
$Errorcolor='#C00000';   /* �G���[�����F       */
$Linkcolor ='#89796B';   /* �������N�J���[     */
$Linkvisit ='#89796B';   /* �σ����N�J���[     */
$Linkactive='#A3879E';   /* Click���J���[      */
$Linkhover ='#A3879E';   /* onMouse���J���[    */
$Tableborder='#89796B;';
$ReturnURL ='http://www.ipsj.or.jp/prosym/';  /* �߂�URL            */

$t_border  ='#89796B';   /* ���O�o�͉��border�J���[ */

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
�u�v���O���~���O�E�V���|�W�E���v</a>�֖߂�</p>
<h1>�v���O���~���O�E�V���|�W�E�� �Q���\����</h1>
EOM;

//notice ---------------------------------------------------
	$NOTICE = <<<EOM
<ul>
  <li> �Q����ɂ͗\�e�W��C�h����C�H��C����ł��܂݂܂��D�h���Ȃ��̎Q���͔F�߂܂���D
  <li> ���ł͎Q������󂯎��܂���D���萔�ł����C�X�֐U�ցC��s�U���݁C���������Ȃǂ̎�i�ŁC���O�ɎQ����̕����݂��ς܂���悤���肢���܂��D
  <li> �Q���\���҂ɂ́C�������C�Q���͈������C�U�֗p����X�����܂��D�U�֗p�����g���ėX�֋ǂŕ������ޏꍇ�́C�萔���͖����ł��D
  <li> �J�Ê��Ԓ��̒��r�ł̏o�����C�l���̌�ւ͂��������������D
</ul>
<ul>
  <li> ���C�h���{�݂̓s���ŁC���\���݂ɉ������˂�ꍇ������܂��̂ŁC���炩���߂��������������D
  <li> �Q���\���݌��ނ𓾂��Q�������������ꍇ�́C2006�N12��15��(��)�܂łɘA�������肢���܂��D����̘A���̂Ȃ��ꍇ�́C�����̓s����C�Q����𒥎������Ă��������܂��D����ɂ��㗝�̎Q���͔F�߂܂��D
  <li> ���\�҂̕����Q���\���݂��K�v�ł��D
</ul>
<ul>
  <li> �v���O������ <a href="program48.html">����</a>�ɂ���܂��D
  <li> �u���v�͕K�{���ڂ�\���܂��D
</ul>
EOM;

//footer ---------------------------------------------------
	$FOOTER= <<<EOM
</body></html>
EOM;

?>
