<?php

// http://10.9.44.5/pgfeesapi.php?patron_id=

$dbi1 = new PDO('pgsql:host=10.9.150.31;port=5432;dbname=newgenlib1;user=postgres;password=admin');

if (! empty($_GET['patron_id'])) {
    $statement = $dbi1->prepare("update patron set delinquency_reason='Fees pending' where patron_id={$_GET['patron_id']}");
    $statement->execute();

    $statement_select = $dbi1->prepare("select * from patron where patron_id='{$_GET['patron_id']}'");
    $statement_select->execute();
    $result = $statement_select->fetch(PDO::FETCH_ASSOC);
    // var_dump($result);
    $date = date('d-m-Y H:i');
    $changes = "Name:- {$result['fname']} {$result['mname']} {$result['lname']} Department id:- {$result['dept_id']} Date is :- {$date} Reason :- {$result['delinquency_reason']}";
    $logfile = fopen('log.txt', 'a');
    fwrite($logfile, $changes);
    fclose($logfile);

}

$dbi2 = new PDO('pgsql:host=10.9.150.32;port=5432;dbname=newgenlib;user=postgres;password=admin');

if (! empty($_GET['patron_id'])) {
    $statement = $dbi2->prepare("update patron set delinquency_reason='Fees pending' where patron_id={$_GET['patron_id']}");
    $statement->execute();
}
$dbi3 = new PDO('pgsql:host=10.9.150.33;port=5432;dbname=newgenlib;user=postgres;password=admin');

if (! empty($_GET['patron_id'])) {
    $statement = $dbi3->prepare("update patron set delinquency_reason='Fees pending' where patron_id={$_GET['patron_id']}");
    $statement->execute();
}

$dbi4 = new PDO('pgsql:host=10.9.150.35;port=5432;dbname=newgenlib;user=postgres;password=admin');

if (! empty($_GET['patron_id'])) {
    $statement = $dbi4->prepare("update patron set delinquency_reason='Fees pending' where patron_id={$_GET['patron_id']}");
    $statement->execute();
}
