## step1、
```shell
composer install
```
## step2、
```shell
cp .env.example .env
php artisan key:generate

自行配置好数据库链接
```
## step3、
# <font color=red>**命令会清空数据库并重建，请务必创建新的测试库**</font>
```shell
php artisan migrate:fresh --seed
```

## step4、
```shell
php artisan serve
```

## step4、
访问项目，优化查询
