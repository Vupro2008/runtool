#!/bin/php
<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 30-09-2023 Saturday 09:13:32
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : Encode By DragonX Team
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
if(!defined("ext_ver__"))define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("The device you are using does not support executing this file !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>

���������703c87a5785d4052554e404418e60c3219f7661225845cbb8c28832a5c947aa08a721445e157c165f08eaa3956c03fef��� ����(��x+��	��%�6�$�8����3���yu��C|��E$;���}b��%�z���������� dr�Yv��l��2|�AʭKk,�����1:�~�,�^&���Cc�GS2��j,�:2�S��G`"=�r��=����e��X���i�}T��^v���1Am�8@���f����ע�n{G�����=s
T�����w�%y�3Xn��̠�p� ������쾢�/�-��s͹�/Lv�3�@�N�v��bs̝"�Io*kM?t	��
,�T �`�y���s�O&%-���Ao����o���SsDW]��)Id�^kB�	5�讕(�o�i�0�bح�~�o����{��2�d�����,8��+�J��Hj�|�Lc�'��m����7/�{��F�"-�!�w�#�����@��Qo��ᵒ ���jͨ5����#�}F�+"-�OϦa�����2wvD������������8�Ϥ���2,N:qU˭r%&��wH�@��z�.���U�1C���X���Sh�φ�e��ꈏH�6.|��v)��9�y-�B��.��Ƨ���=�:Q �pwT�X͂�W��{G2�5ux��T��������D�
˪�_�ENKX4����A��WT�x ;'�3��A�)�O����m���{ʆI�-cj@�i�.��Ŭ��!l�e�͜�����f��BG����$A�1|�0[Ei(�Lv�1�
��9,�y�ӄh@}��7��ΊS�����K�K(>��/�8"i�{4s��j[�6��2H l�"�u|�8�ޝg�t��u�b�My�`���%�fy����m�����+%4�a����{u��
B�&����хq�Jmk��;��G'v��ږs���U� ������-̐�������@����<�G����ył��_CȽ18��f�jIuw:��~j(���~��S `>�\Ca$urs��؍o�����
�7nn%�J�-Mº>�|�c� 9q��P�aꊆS�� ��&P��',HI�a�M��L��Q0�k*|�2wRڹ�?70�P0{��t�{�%�>x�6|%E�=`Z��i{x�[ҥ�I���1/�M")�_�r?
��o��$�2��-�K �v�r���_f��?����[�����4���RY�~#�K��Z��&l�]�
�2\�g� 27�����m.N��I���Q}�VJ]�斈���%)e�~��.��ɸf���������}�L���>U��NuIt�	�g�ԍ��8n5 {�Wf�4ptF�Ĺ�ݣ������^�����3��n�V��>���K��9�u��l��{Ni�i���G\ҧ��&�����݀�c����`c��� A�Bqa�D��_B?'�Q�z�W���	X�nag����f��9�D��Bi�#Tsb��K'��V�ag a���{hv~���Pݵ�8�:�>-L�_/���	Yc���$B	�@��akB��:QQ{	yl�Ǳ����u����[U�o!�s 茺f��Z_�TQ�?Şb��2�lx�� �T���Z��=mP����f��V����W���ة�}q��L8zS�c��������I�� �����V>�5��%�I>x���a�_	d��k����Xw����=�V�;�[B�P�09���e������l�Ȇ���������A�$!�@�� ���m}�da'��R�sC�B���Ѝ���͛w��CaL�~on���|���E
��2]���<k^*��y2�7�C��Y�n�s{���2ͅ�<�2�Y��=���)E��'!F��Ff�Ԛ�0bf�NV�EQ�M�doiЛ e	}�꧳�*���@���������$�zI��u�S�2��I��*�m��yx��_IV�\i����?Y��ʤ���Ck����E����f\�T�-�j.O��N`�坰�*�U����AϽ],�˅��G���A�Ϟ�6��*�=�Do)2��vd�QRg���Mni��Ŋ"�Ol���>pӮ��'�_Ǩә��n|�i�Љb?�|҈�v��6w�9�6~4 ��U�U"1j�Y�B��l�t3L� fBǉ%�{��8�����?���<�QR;��m)�=w�Cp����>v�2'i�km2/���9
�:_�'��Uڼ3��TP�>�A�#;�����m��k+�um��G4R�\x_ky�x��0���v���N������XE9�|�H�T�o�ށ�?F@�ۏ � ��"N�թ��3�e�6��(ч�Z�K�2��	��{zmhn�lQ����;�EC����:�7�������M�X��V��(jY=f�W����O�1X��j>��R�b�e�/ֹy�e-B�����L�ag"�lDgh:\6-Y3sN�d��-��Rˣ5Lxٱ]`AӣG3��W͒���P ��%�ض8"g��FJ쀴	�� N�Ҁ��Ĳ��^�9��-V	�7�,:���u�F���i�y￲I���K&䠸�O}�\"N��� G�I��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=96aae869000968f8fb6a51bbf5cabed3e3f8232c.end