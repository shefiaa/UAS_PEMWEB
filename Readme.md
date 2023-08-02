# nama dan nim
- Shefia Anggraeni
- 20210801104

# Default credentials
- Username: admin@admin.com
- Password: password

# All Execute
- git clone 
- cd folder
- docker-compose up -d --build
- docker exec -it uts_php bash
- composer install
- mv .env.example .env
- goto your editor code in folder src change config .env with you database config
- php artisan key:generate
- php artisan migrate --seed
- chmod 777 -R storage/*
- php artisan key:generate
- exit
- goto your browser and croscheck everything what you have done

### happy coding