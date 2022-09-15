<?php
/**  
 * @author Ske Software
 * @link https://www.facebook.com/skesoftware
 * @license Khách hàng: Đức Minh
 */
include 'Obfuscator.php';
if (isset($_POST)) {
   if (isset($_POST['org_php'])) {
      $encoded_php = new Obfuscator($_POST['org_php']);
      die(json_encode(array(
         'status' => true,
         'msg' => 'Mã hóa thành công',
         'php_encoded' => "<?php ".str_replace(PHP_EOL, '', $encoded_php)." ?>"
      )));
   }
}