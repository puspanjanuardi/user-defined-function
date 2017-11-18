<?php
function familyName($fname,int $umur=34) {
    echo "$fname Refsnes.<br>";
	echo "$umur umur .<br>"; }
	familyName(34,"27");
	familyName("Hege",35);
	familyName("Stale", "34");
	familyName("Kai Jim", 35);
	familyName("Borge"); 
	//batas akhir
?>
<?php
		function ada() {
		echo "    hello world";
		}
		  ada();
?>
<?php
	function setHeight($minheight = array (50,60) ) {
		if(is_array($minheight)) { //kode cara kedua
		$minheight = implode ($minheight, ','); //kode cara pertama dan kedua (wajib)
	}
		$indek = rand (0,1);
		echo "The height is : $minheight[$indek] <br>";
}
		setHeight(array(350));//cara pertama
		setHeight();
		setHeight(135);//cara kedua
		setHeight();
?>
<?php
function add1($x, $y){
    $total = $x + $y;
    echo $total;
}
echo "<p>4 + 2 = ", add1(4, 2), "</p>";

function add2($x, $y){
    $total = $x - $y;
    return $total;
}
echo "<p>2 - 2 = ", add2(2, 2), "</p>";

?>
<?php
$greet = "Hello World!";
 
// Defining function
function test(){
    global $greet;
    echo $greet;
}
?>