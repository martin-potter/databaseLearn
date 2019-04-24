# databaseLearn
数据库课程实验作业

## 参考学习笔记
https://learnku.com/articles/27882

## 配置文件
复制 .env.example 到 .env
将 DB 部分改为自己的数据库配置

## 准备数据库
使用命令迁移数据表
```
php artisan migrate
```
使用命令填充数据库
```
php artisan db:seed
```

## 访问页面
使用命令启动服务器
```
php artisan serve
```
