# Twitter Clone (twitter-clone)

### Tutorial showing you how to build Twitter

If you'd like a step by step guide on how to build this just **CLICK THE IMAGE BELOW**

[![GO TO JOHN WEEKS DEV TUTORIAL VIDEOS](https://user-images.githubusercontent.com/108229029/220173582-bd4beef4-165a-4272-a3c5-5c98a6e44918.png)](https://www.youtube.com/watch?v=RWJF0xSSaps)

Come and check out my YOUTUBE channel for lots more tutorials -> https://www.youtube.com/@johnweeksdev

**LIKE**, **SUBSCRIBE**, and **SMASH THE NOTIFICATION BELL**!!!

## App Setup

```
git clone https://github.com/John-Weeks-Dev/twitter-clone.git

composer install 

cp .env.example .env 

php artisan cache:clear 

composer dump-autoload 

php artisan key:generate

composer require laravel/breeze --dev

php artisan breeze:install vue --ssr

php artisan serve
```

Create the DB
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=twitter-clone
DB_USERNAME=root
DB_PASSWORD=
```
Now migrate your DB
```
php artisan migrate

php artisan db:seed
```

Now run this command to start the project 
```
npm i

npm run dev
```

You should be good to go!

# Application Images
![Screenshot 2023-01-26 at 16 45 28](https://user-images.githubusercontent.com/108229029/214846914-799dd1dd-a063-4a39-b41f-0c18d1ff365c.png)
![Screenshot 2023-01-26 at 16 45 53](https://user-images.githubusercontent.com/108229029/214846904-a4e3cbfe-dd24-451c-b0ba-79f6068283e3.png)
![Screenshot 2023-01-26 at 16 46 08](https://user-images.githubusercontent.com/108229029/214846901-27368967-7f5a-4acf-91c9-8d4dad756fae.png)
![Screenshot 2023-01-26 at 16 47 03](https://user-images.githubusercontent.com/108229029/214846892-3bed7033-c600-4161-87c9-ee18fe06e6c3.png)
![Screenshot 2023-01-26 at 16 47 24](https://user-images.githubusercontent.com/108229029/214846886-e401fbda-746a-4a6d-9e56-a2e75ab54873.png)
![Screenshot 2023-01-26 at 16 47 38](https://user-images.githubusercontent.com/108229029/214846882-c3ed31ad-6898-4ac7-96a7-2ff2daa35ae7.png)
![Screenshot 2023-01-26 at 16 47 51](https://user-images.githubusercontent.com/108229029/214846876-bfeb7762-c316-404b-b832-ceb967b97005.png)
