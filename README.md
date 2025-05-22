
# 📦 Laravel Google Login Package

Bu paket, Laravel uygulamanıza **Google ile Giriş** özelliği eklemenizi sağlar. Chrome'da oturum açmış kullanıcılar için giriş yapma süreci son derece kolay hale gelir.

## 🚀 Özellikler

- Google OAuth 2.0 ile kullanıcı girişi
- Kullanıcı zaten varsa giriş yapılır, yoksa otomatik oluşturulur
- Admin kullanıcılar otomatik olarak Filament panele yönlendirilir
- Admin olmayan kullanıcılar kaldıkları sayfada devam eder
- Laravel Socialite kullanır
- Filament veya normal auth sistemleriyle uyumludur

## 🔧 Kurulum

### 1. Paket Gereksinimleri

Önce Socialite paketini yükleyin:

```bash
composer require laravel/socialite
```

### 2. Bu paketi projenize ekleyin

Eğer Composer üzerinden kuracaksanız:

```bash
composer require mgakif/laravel-google-login
```

Eğer Composer'da henüz yayınlanmadıysa:

```json
"repositories": {
  "mgakif": {
    "type": "vcs",
    "url": "https://github.com/mgakif/laravel-google-login.git"
  }
}
```

Ve ardından:

```bash
composer require mgakif/laravel-google-login
```

## ⚙️ Ayarlar

### 1. Servis Sağlayıcıyı Kaydet

Eğer Laravel versiyonunuz otomatik servis sağlayıcıyı tanımıyorsa:

```php
// config/app.php

'providers' => [
    ...
    Mgakif\GoogleLogin\GoogleLoginServiceProvider::class,
],
```

### 2. .env ayarları

Google Console üzerinden OAuth 2.0 Client ID ve Secret alın:

```env
GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
GOOGLE_REDIRECT_URI=https://your-domain.com/auth/google/callback
```

Google Console'da şu URI'yı "Authorized redirect URIs" listesine ekleyin:

```
https://your-domain.com/auth/google/callback
```

## 🌐 Kullanım

Paket, otomatik olarak `/auth/google/redirect` ve `/auth/google/callback` rotalarını kullanır.

### Oturum Açma Butonu

```blade
<a href="{{ route('auth.google.redirect') }}" class="btn btn-google">
    <img src="/images/google-icon.svg" alt="Google"> Google ile Giriş Yap
</a>
```

## 👥 Yetki Yönetimi

### Admin Kullanıcı

Eğer kullanıcı tablosunda `is_admin` alanı varsa ve `true` ise kullanıcı şu rotaya yönlendirilir:

```
/admin
```

### Normal Kullanıcı

Giriş yaptığı önceki sayfaya yönlendirilir. Yetersiz yetkisi varsa, mevcut sayfasında kalır.

## 🧪 Geliştirme ve Güncelleme

### Pakette Değişiklik Yaptınız mı?

GitHub repo’sundaki kodu güncelledikten sonra:

```bash
composer update mgakif/laravel-google-login
```

Eğer önbellek sorunları yaşıyorsanız:

```bash
composer clear-cache
php artisan config:clear
```

## 🙋 Destek / Katkı

Her türlü PR’a, feature önerisine ve sorun bildirimine açığız.  
Lütfen GitHub üzerinden katkıda bulunun:  
👉 [github.com/mgakif/laravel-google-login](https://github.com/mgakif/laravel-google-login)
