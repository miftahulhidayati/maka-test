# MARI BERKARYA TECHNICAL TEST

## Soal Technical Test

### 1. [looping.php](looping.php)

### 2. [bintang.php](bintang.php)

### 3. User CRUD API

## Quick Start

### Prerequisites
- Docker & Docker Compose
- Git

### Installation

1. **Clone Repository**
```bash
git clone <repository-url>
cd maka-technical-test
```

2. **Start Docker Containers**
```bash
docker compose up -d
```

3. **Run Database Migration**
```bash
docker compose exec app php artisan migrate
```

4. **Create Storage Link**
```bash
docker compose exec app php artisan storage:link
```

5. **Seed Sample Data** (Optional)
```bash
docker compose exec app php artisan db:seed
```

### Access Application

- **Web Application**: http://localhost:8080
- **Database**: MySQL on port 3306

## Tech Stack

- **Backend**: Laravel 11
- **Database**: MySQL 8.0
- **Web Server**: Nginx
- **Containerization**: Docker

## Stop Application

```bash
docker compose down
```

---

That's it! by MH
