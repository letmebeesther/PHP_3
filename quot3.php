<?php
	// 수정사항 : 에러가 발생되지 않게 처리하시오
	$name = "안지영";
	
	echo "$name님 반갑습니다!<br>"; // 님과 변수 사이에 한칸을 띄우지 않으면 에러생김
	echo "$name 님 반갑습니다!<br>"; 
	
	echo "{$name}님 반갑습니다!<br>"; // 중괄호를 붙이면 한칸 띄우지 않아도 됨.
	
	echo $name."님 반갑습니다! <br>"; // 점으로 연결 1
	echo "$name"."님 반갑습니다!"; // 점으로 연결 2
?>