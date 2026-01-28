<?php
if (isset($_POST['user_name'])) {
    $name = htmlspecialchars($_POST['user_name'],ENT_QUOTES);
}

if (isset($_POST['product'])) {
    $choice = htmlspecialchars($_POST['product'],ENT_QUOTES);
}

if (isset($_POST['quantity'])) {
    $number = htmlspecialchars($_POST['quantity'],ENT_QUOTES);
}

if (isset($_POST['user_name'])) {
print "私の名前は、" . $name . '<br />';
}

if (isset($_POST['product'])) {
print "ご注文の商品は、" . $choice . '<br />';
}

if (isset($_POST['quantity'])) {
print "注文数は、" . $number . '<br />';
}