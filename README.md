# Laravel_sample_pic_upload
参考：https://note.com/laravelstudy/n/n038bd68f53a7?magazine_key=me6288d51a1b8

## day1
1. .envの修正
2. databaseの作成
3. マイグレーション
4. ストレージの作成
```$ php artisan storage:link```
5. マイグレーションの作成、編集
```$ php artisan make:migration create_upload_image_table```
```$ php artisan migrate```
6. モデルの作成
```$ php artisan make:model UploadImage```
7. 画像のアップロードフォームの作成
```$ php artisan make:controller UploadImageController```
8. ルーティングの設定
9. アップロード機能の作成
10. 画像一覧コントローラーの作成、編集
```$ php artisan make:controller ImageListController```
