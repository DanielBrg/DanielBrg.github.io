<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

session_start();
if( ($_SESSION['security_code']==$_POST['security_code']) && (!empty($_POST['security_code'])) ) { 
mail("allrox@outlook.com","phpFormGenerator - Form submission","Form data:

Linha Padrão: " . $_POST['field_1'] . " 
Linha Premium: " . $_POST['field_2'] . " 
Reformer: " . $_POST['field_3'] . " 
Reformer Torre: " . $_POST['field_4'] . " 
Step Chair: " . $_POST['field_5'] . " 
Cadilac: " . $_POST['field_6'] . " 
All-in-One: " . $_POST['field_7'] . " 
Ladder Barrel: " . $_POST['field_8'] . " 
Wall Unit: " . $_POST['field_9'] . " 
Prancha de Molas: " . $_POST['field_10'] . " 
Small Barrel: " . $_POST['field_11'] . " 
Meia Lua: " . $_POST['field_12'] . " 
Linha Pilates Aéreo: " . $_POST['field_13'] . " 
Banco de Sapatos: " . $_POST['field_14'] . " 
Suporte de Molas: " . $_POST['field_15'] . " 
Disco de Equilibrio: " . $_POST['field_16'] . " 
Disco Inflavel : " . $_POST['field_17'] . " 
Physio Roll : " . $_POST['field_18'] . " 
Bolas Gyminic : " . $_POST['field_19'] . " 
Anel Flex: " . $_POST['field_20'] . " 
SoftGYM Over : " . $_POST['field_21'] . " 
Alça- Punho: " . $_POST['field_22'] . " 
Alça - Pé : " . $_POST['field_23'] . " 
Alça -Fuzzy: " . $_POST['field_24'] . " 
Alça - segurança: " . $_POST['field_25'] . " 
Par corda-Reformer: " . $_POST['field_26'] . " 
Bastão-Cadilac: " . $_POST['field_27'] . " 
Molas Amarelas : " . $_POST['field_28'] . " 
Molas Marrons : " . $_POST['field_29'] . " 
Molas Azuis : " . $_POST['field_30'] . " 
Molas Brancas : " . $_POST['field_31'] . " 
Molas Verdes  : " . $_POST['field_32'] . " 
Molas Vermelhas : " . $_POST['field_33'] . " 
Nome: " . $_POST['field_34'] . " 
Email: " . $_POST['field_35'] . " 
Telefone: " . $_POST['field_36'] . " 
Mensagem: " . $_POST['field_37'] . " 


 powered by phpFormGenerator.
");

include("confirm.html");
}
else {
echo "Invalid Captcha String.";
}

?>