<?php
include_once 'animal.php';
//завозим животных в хлев
$stable=new AnimalBreeding();

//массив с объектами-коровами
$cow=array();
//массив с объектами-курами
$chicken=array();
//первоначальное количество коров по заданию
for($i=1;$i<=10;$i++){
    $cow[]=$stable->addCow();
}
//первоначальное количество кур по заданию
for($i=1;$i<=20;$i++){
    $chicken[]=$stable->addСhicken();
}
//вывод количества животных
print "Кур на ферме - " . count($chicken) . "\n";
print "Коров на ферме - " . count($cow) . "\n";
//продукция на старте
$milk=0;
$egg=0;
//подсчет продукции за неделю

for ($i=1; $i<=7; $i++) {
	foreach ($cow as $value){
		$milk +=$value->getOutputProduct();
	}
}
for ($i=1; $i<=7; $i++) {
	foreach ($chicken as $value){
		$egg +=$value->getOutputProduct();
	}
}

print 'молока собрано '.$milk. "\n";
print 'яиц собрано '.$egg. "\n";
//добавление новых животных
print "Съездили на рынок, еще купили животных" . "\n";

$cow[]=$stable->addCow();
for($i=1;$i<=5;$i++){
    $chicken[]=$stable->addСhicken();
}
print "Кур на ферме стало - " . count($chicken) . "\n";
print "Коров на ферме стало - " . count($cow) . "\n";
//подсчет продукции за неделю с новым количеством животных
for ($i=1; $i<=7; $i++) {
	foreach ($cow as $value){
		$milk +=$value->getOutputProduct();
	}
}
for ($i=1; $i<=7; $i++) {
	foreach ($chicken as $value){
		$egg +=$value->getOutputProduct();
	}
}
print 'молока собрано '.$milk. "\n";
print 'яиц собрано '.$egg. "\n";
?>