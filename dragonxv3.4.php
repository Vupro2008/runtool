<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 23-08-2023 Wednesday 20:39:31
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : 
----------------------------
*/
error_reporting(0);
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

���������c43ab4e43afc171d157dc07ff434e4876161f2f84a373b4c5056affebe5024c5c4f545fa9c9c6f9b8a1b95e37d3d9817n�B[�YQ|Y	>�ؖ��;3�+n�;Ǽ(ߙt��Pl��#1�o]�������ww���F[�`�:���Ο�6>9�OGK�GO���7u�\�^�.C�'��N�y�������H���|��^=r��m;����k���2����ICV�q�&�	.����[���Վ;�0"w=>�����r,��|~4��0�Nl�p��p�ؔl��z��IH��.=��BR�ߖ�_�6�@"��av�A��z۴"����l�<�n�7���#���hS���/�bdj� )�YԒ�6F�+W!����Ro�Q�ID�KB�	��PZ\�W��n�8|���Y/�y��y��f�qѫ����a���?�[~��I#�퐷P��2!�?�^�и��FC�#�����8&Z6�e�c�H{��J3��[�-I�E͘[8���E]m
�K�3Ȼ�86�d��=!{�e�N�T�BZ�4H�G�f�����0ݟK�v%C?����|B�}۸@f�4�y����s1"Ⱦfmչ!�ʡ��n��^��4���T۬�'�5������858p�V�x��lA��v��F��E�
��et�i~2a��K�dL僲��|�)K��b�Q��U�k�nR�����z�T�?V��C�pɘ���Z��*���;����>e��F�gUW���Y��m$`��,aT�ļAQ=�LS�.-�����Z�}�u>^K�&O��D���&m��If�����?iLA��w�f����,1�����(�d ��D��:�H�l N�V
d�}^Y&���,�A	.���U�G�s�޸�nYלH�v�l�E:�.����������/�]I'sm�g�ց�L�����6n�'�a��?>'�G2��@.��J����>��L���=`i��=��n�1>����� �'�jHs*��}fr�K:F�h~�:�C�ġ�νY#k�(���g)�PWЌ�(�43�ʨ������\Ԁn�_=��fV섹a+R�c��<��!\��
����Cy%5�68�k��=���u�zt�1j��3q��??GXA��ZTApe���|z1�����|��W�O�����,!�0�5�4n�R���g|�� J~�P}f����_�4�SZ�ȬUNS}]1�x��~�t܋�Ǡ�R�D��x�袳�j��o���mZoR�����K�t_UV�WP�i��~�?� �0�\��kу>��zI��
���!�Q�@q��A�\�i�^�X��d�[e��2�l>D���̱=�m��k0�0I��=(Cpm�kN3T�P�2�̀P@	{a���V�
AYi��P&~��B��z�5���FΕ������p�����y�F�g��;ؾ�1��6�0����-Fql�w����H˓���o��r������C�H�ϙ�h�N}&k�ȦJV�t���^�[-�o��n�WU�6�19h�D\^��
��f+!�0z�H��Qd,#��,$�A���w�h�@3��'�*u:�CE�&K{=�r�ԴKO���EE
qpFih/mY�Cd�:��3�s�6�z��0sb�n�{�v�uM[O{5�o�DO5�K�p����3|K�pM="�7��UQ�K>yh��N�
Јm�P��~�_W�J����c`�B�Eh��ª���\�R�Ԁ�?���4T��o��.��c��. 4G���5\��.�����LQdo�c�[a�N 0�O�	�j�i�����Fq���H�Y���%�����v�k��.�w��̀��i��ߢ|&4vjD,�"� n�_\��L�� 0�<�'Y:��I�S���7cta~֋�o  #͋ެ���@��7��0�,cn�Ō��� m0����)�x@&����|i����=���������Y�y�K���s��~�0�鬒���+q.�bp��;��A��GAn(��n/M�@|gZ��x�z�Ĭ*�#�#�����/[��a��B(�gsu��FV���ɭ�����#/Ӎ�a7�yT}/T5P���^�����`��ݽi���fYҙez�8�1|�U�7D�),���v1hH{��D��-u��Pd�l�Z�{���?R����YƞC���?�p+�A�T�$�n�XXw��Ð�{�R510�M'�����-u���I�mB3cM0��O-\��-�j���S:|(9GO�:�$s˃�,���ͧGW����<E�@���\�J喠�o�tY1�!��`C!��Δ5W���]�Ň�}��������U�4���)��Y�蔩��( ���<�i�l��ݎ��U#q�c�oOX����K����j�x��� �_f��;#V�����=�.)��+�8�`@�[IV�@�O�s�O�inDU2�'gbM����p�:� t��8a@�*�P+&d]<�Z�B?Q�������n��Sװ����
ǠW@�,U�K��0���kh�;������W�o/f����^v`����Gw��ogԜ%b��8�cL��j��L.��Wq�H3d����J�5�W?�^� �m�!U�K�ڋ�H	˩��	��s����F/�`a#g�a�s�}�]��{��V�؂�,,�N�C͊�y�l"V��� v�I��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=664dac0ff07c62373a115957dbb8999a38663368.end