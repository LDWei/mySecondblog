passenger blog开发流程：
1.首先计划好表结构，Navicat中用模型创建各个表的字段和关联
2.用laravel来创建表
  a.先在命令行中创建模型比如创建user表的模型：php artisan make:model User -m  (加m 对数据库迁移文件自动创建：database/migration/)迁移文件中有up和down方法
3.后台页面的搭建
   a.入口->路由规则的添加/routes.php