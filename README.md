# JinyPHP
`지니PHP`은 Laravel을 기반으로 완전한 웹사이트를 구현할 수 있는 기본골격을 제공합니다.
* 회원 인증
* 관리자 기능
* 웹사이트 구현기능

## 설치
지니PHP을 설치하기 위해서는 PHP와 컴포저 및 Mysql 데이터베이스가 설치되어 있어야 합니다.

### 프로젝트 설치
컴포저를 통하여 지니PHP 프로젝트를 생성합니다. 컴포저는 필요한 의존 파일을 프로젝트 생성과 동시에 자동으로 설치해 주기 때문에 매우 편리한 도구 입니다. `jiny/jiny` 패키지는 기본 라라벨에 지니의 확장기능을 추가한 프로젝트 패키지 입니다.

```bash
composer create-project jiny/jiny 프로젝트
```

### 환경설정 및 DB 마이그레이션
데이터베이스 연동을 위하여 `.env`를 수정합니다. 
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

데이터베이스 정보를 입력후에 `migrate`명령을 통하여 DB 테이블을 생성합니다.

```bash
php artisan migrate
```

### CSS 및 Asset 설치
front 화면을 처리하기 위한 css 및 assets 을 빌드합니다. 이를 위해서는 nodejs가 필요로 합니다.
```
npm install
npm run build
```

### 서버 실행
데이터베이스와 화면 assets 이 빌드가 완료가 되었으면, PHP 내장 웹서버를 통하여 프로젝트를 실행합니다.
```
php artisan serve
```

## 사이트 구축 및 디자인
지니PHP는 라라벨을 기반으로 손쉽게 웹사이트를 구축할 수 있는 기능들을 제공합니다. 지니PHP는 유연한 웹사이트 구축을 위하여 테마와 slot 개념을 가지고 있습니다. 

### 테마
프로젝트 루트에 위치한 `/theme`폴더 안에는 다양한 테마를 포함하고 있습니다. 테마는 모든 사이트를 래핑하며, 동일한 컨셉의 사이트를 생성하고 일관성을 유지할 수 있습니다.

### www-slot
`/resources/www` 폴더가 추가됩니다. 지니PHP는 정적페이지를 url과 동일하게 매핑하여 자동으로 페이지를 출력합니다. 또한, slot을 적용하시면 `/resources/www/slot1` 을 접근 endpoint로 변경하여 페이지를 출력하게 됩니다.

## 기술문서

