# 수동설치
프로젝트를 수동으로 설치합니다.

## 컴포저 패키지 설치

```
composer install
```

## 환경설정 파일 복사 및 키 생성

```
cp .env.sample .env
```

키를 생성합니다.

```
php artisan key:generate
```

## Asset 빌드

```
npm install
npm run build
```

## 서버실행

```
php artisan serve
```
