<?php
//EOM�y��EOM;�͏����s�ł��B���̊Ԃ̂�html�L�q�\

//config ---------------------------------------------------
$script    ='prac_ps.php';  /* ���s�t�@�C���� */
$LogFile   ='prac_ps.log';  /* ���O�ۑ��t�@�C���� �Z�L�����e�B���� */

/* �K�{=1, not=0 */
$Needname = 1; //����
$Needkana = 0; //�J�i����
$Needsex  = 0; //����
$Needorg  = 0; //����
$Needemail= 0; //���[��
$Needaddr = 0; //�Z��
$Needphone= 0; //�d�b�ԍ�
$Needsent = 0; //���t�敪
$Needenter= 0; //�Q�����i
$Needroom = 0; //��]���镔��
$Needatena= 0; //�̎���������ꍇ�̈���

$Payment1='�X�֐U�� 00150-4-83484';
$Payment2='��s�U�� �݂��ً�s �Ճm��x�X ���� 1013945';
$Payment3='��s�U�� �����O�H��s �{�X ���� 7636858';

$Stay1='1��1��';
$Stay1cost='(��� 65,000  ���� 70,000)';
$Stay2='2��1��';
$Stay2cost='(��� 45,000  ���� 50,000)';
$Stay3='3��1��';
$Stay3cost='(��� 38,000  ���� 43,000)';
$Stay4='4��1��';
$Stay4cost='(��� ---  ���� ---)';

$Bgcolor   ='#ffffff';   /* �ǐF�ݒ�           */
$Fontsize  ='10pt';      /* ��{�t�H���g�T�C�Y */
$Textcolor ='#333333';   /* ��{�����F         */
$Errorcolor='#C00000';   /* �G���[�����F       */
$Linkcolor ='#89796B';   /* �������N�J���[     */
$Linkvisit ='#89796B';   /* �σ����N�J���[     */
$Linkactive='#A3879E';   /* Click���J���[      */
$Linkhover ='#A3879E';   /* onMouse���J���[    */
$Tableborder='#89796B;';
$ReturnURL ='http://www.';  /* �߂�URL            */

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
  <li> �Q���\���݌��ނ𓾂��Q�������������ꍇ�́C2006�N12��15��(��)�܂łɘA�������肢���܂��D����̘A���̂Ȃ��ꍇ�́C�����̓s����C�Q����𒥎������Ă��������܂��D����ɂ��㗝�̎Q���͔F�߂܂��D
  <li> ���\�҂̕����Q���\���݂��K�v�ł��D
  <li> ���C�h���{�݂̓s���ŁC���\���݂ɉ������˂�ꍇ������܂��̂ŁC���炩���߂��������������D
  <li> �J�Ê��Ԓ��̒��r�ł̏o�����C�l���̌�ւ͂��������������D
  <li> �Q����ɂ͗\�e�W��C�h����C�H��C����ł��܂݂܂��D�h���Ȃ��̎Q���͔F�߂܂���D
  <li> �Q���\���҂ɂ́C�������C�Q���͈������C�U�֗p����X�����܂��D�U�֗p�����g���ėX�֋ǂŕ������ޏꍇ�́C�萔���͖����ł��D
  <li> ���񂩂�C���ł͎Q������󂯎��Ȃ����Ƃɂ��܂����D���萔�ł����C�X�֐U�ցC��s�U���݁C���������Ȃǂ̎�i�ŁC���O�ɎQ����̕����݂��ς܂���悤���肢���܂��D

  <li> �v���O������ <a href=program48.html>����</a>�ɂ���܂��D
</ul>
EOM;

//footer ---------------------------------------------------
	$FOOTER= <<<EOM
</body></html>
EOM;

?>