# Laravel Google Login

Laravel için Google OAuth ile kolay giriş sağlayan paket.

## Özellikler

- Google ile kullanıcıların kolayca giriş yapması.
- Admin ve normal kullanıcılar için farklı yönlendirme (Filament panel entegrasyonu için hazır).
- Paket kurulumunda `laravel/socialite` otomatik kurulur.

## Kurulum

1. Paketi Composer ile yükleyin:

```bash
composer require mgakif/laravel-google-login
```

2. Config dosyasını yayınlayın:

```bash
php artisan vendor:publish --tag=config
```

3. .env dosyanıza Google OAuth bilgilerini ekleyin:

```env
GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
GOOGLE_REDIRECT_URI=https://your-app.com/auth/google/callback
```

## Kullanım

Tarayıcıda `/auth/google` adresine gidin ve Google ile giriş yapın.

## Güncellemeler

```bash
composer update mgakif/laravel-google-login
```

## Lisans

MIT
