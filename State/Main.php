<?php

// Stateパターンはシステムの各状態を個別のクラスで表現する。
// この例は本ではなくネットから拾ったもの https://shimooka.hateblo.jp/entry/20141219/1418965549
// Context役（Userクラス）の動作は、内部に保持している状態オブジェクト（= Stateクラス）によって変化する。
// Userクラス内では現在の状態を意識せずnextStateメソッドを使って状態の切り替えをおこなっていたが、
// これは状態クラスであるAuthorizedStateクラスやUnauthorizedStateクラス自身が次に遷移すべき状態を知っているからこそ可能になっている。
// こうすることでStateクラス間の依存関係は深まってしまう。このやり方をやめて、すべての状態遷移をContext役（Userクラス）に任せることもできるが、
// そうするとここのConcreteState役の独立性が高まり、プログラム全体の未投資は良くなる場合があるが、今度はContext役（Userクラス）が
// すべてのConcreteState役を知らなくてはならなくなる。その場合はMediatorパターンが使える可能性がある。


namespace DesignPattern\State;

require_once 'User.php';

session_start();

$context = isset($_SESSION['context']) ? $_SESSION['context'] : null;
if (is_null($context)) {
    $context = new User('ほげ');
}

$mode = (isset($_GET['mode']) ? $_GET['mode'] : '');
switch ($mode) {
    case 'state':
        echo '<p style="color: #aa0000">状態を遷移します</p>';
        $context->switchState();
        break;
    case 'inc':
        echo '<p style="color: #008800">カウントアップします</p>';
        $context->incrementCount();
        break;
    case 'reset':
        echo '<p style="color: #008800">カウントをリセットします</p>';
        $context->resetCount();
        break;
}

$_SESSION['context'] = $context;

echo 'ようこそ、' . $context->getUserName() . 'さん<br>';
echo '現在、ログインして' . ($context->isAuthenticated() ? 'います' : 'いません') . '<br>';
echo '現在のカウント：' . $context->getCount() . '<br>';
echo $context->getMenu() . '<br>';
