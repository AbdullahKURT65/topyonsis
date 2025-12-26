# topyonsis

Kurumsal Toplantı Yönetim Sistemi - Laravel 10 scaffold

## Hızlı başlatma (Docker)

1. Çalıştır:

   docker-compose build --no-cache
   docker-compose up -d

2. Container içine girip composer install ve artisan komutları:

   docker exec -it topyonsis_app_1 bash
   composer install
   php artisan key:generate
   php artisan migrate

3. Uygulamayı http://localhost üzerinde açın (nginx ile yapılandırıldı)
