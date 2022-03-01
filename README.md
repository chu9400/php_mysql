# PHP_MySQL 정보

## PHP

### 문자열

    1.
        echo "Hello \"W\"orld"
        이렇게 빽슬래쉬 뒤에 오는 문자는 순수한 문자로 사용되게 된다.

    2.
        html "test01" + "test02"
        php  "test01" . "test02" 는 같다.

    3. 문자열의 크기(length) 확인 하는 법
        strlen() 함수사용
        예) echo strlen("Hello World");

### 변수

    1. 문자열 도중에 변수 추가하기
        $name = "test";
        echo "asdasdasd".$name."asdasdasd";

### URL 파라미터

    1. 기본 사용법
        주소/index.php?a=test&b=test02 : 주소창에 url 파라미터 값 입력.

        <body>
            <?php echo $_GET['a']; ?>님 안녕,
            <?php echo $_GET['b']; ?>님도 안녕
        </body>
        * 파라미터 배열 선언시 대소문자 구분함.

    2. 링크 클릭시 해당 파라미터 값 출력하기
        예)
            <ol>
                <li><a href="index.php?id=HTML">HTML</a></li>
                <li><a href="index.php?id=CSS">CSS</a></li>
                <li><a href="index.php?id=Javascript">Javascript</a></li>
            </ol>
            <h2>
                <?php
                    echo $_GET['id'];
                ?>
            </h2>

### 함수 사용

    1. 입력대로 나타내는 함수 사용(nl2br 함수)

    <h2>그냥</h2>
    <?php
        $str = "asdasdasdasdasdasd


            asdasdasdasd end
            ";
        echo $str;
    ?>
    <h2>그냥끝</h2>
    <br />
    <br />
    <h2>함수 사용</h2>
    <?php
        echo nl2br($str);
    ?>
    <h2>함수 사용 끝</h2>

## MySQL

### MySQL 정보
