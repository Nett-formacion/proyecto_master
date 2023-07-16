docker stop $(docker ps -aq)
docker rm $(docker ps -aq)

cd /home/oem/
docker compose up -d
sleep 15
cd laravel/proyecto_master

php artisan serve &

php artisan migrate:fresh --seed

npm run dev
