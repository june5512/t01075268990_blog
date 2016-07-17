<?
$dbmsHost = 'localhost'; // 또는 127.0.0.1
$dbmsId= 'root';
$dbmsPw = 'apmsetup';
$dbName = 'blog';

$link = mysqli_connect($dbmsHost, $dbmsId, $dbmsPw, $dbName) or die();

// DB 연결을 UTF-8 모드로 설정
mysqli_query($link, "SET NAMES utf8;");

// 사용법 : 
function getRows($sql) { 
	// 외부에 있는 $link 변수를 함수안에서 사용하겠다는 의미
	global $link;

	// 빈 배열 선언
	$rows = array();
	
	// SELECT * FROM article 쿼리 실행

	if($result === true) { // 정확하게 체크하기 위해서 '==='가 들어감. 값도 같고 형도 같을 경우 사용.
		return null;
	}

	$result = mysqli_query($link, $sql);
	// 쿼리 결과를 맵으로 받아오기
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;  
	}

	return $rows;
}

// 사용법 : execute("DELETE FROM article");
function execute($sql) { 
	getRows($sql);
}
