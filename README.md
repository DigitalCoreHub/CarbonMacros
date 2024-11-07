# Carbon Macros Paketi

Carbon Macros paketi, Laravel projelerinizde Carbon ve Date sınıflarına ek macro fonksiyonları eklemenizi sağlar. Bu paket ile `greet` macro'sunu kullanarak günün saatine göre selamlama mesajları alabilirsiniz.

## Özellikler

- **Kolay Kullanım**: `Carbon::now()->greet()` ve `now()->greet()` şeklinde basit kullanım.
- **Çoklu Dil Desteği**: Hem Türkçe hem de İngilizce dil desteği.

## Gereksinimler

- **PHP**: ^8.0
- **Laravel**: ^9.2|^10.0|^11.0

## Kurulum

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/DigitalCoreHub/CarbonMacros.git"
    }
],
```

```bash
composer require digitalcorehub/carbon-macros
php artisan vendor:publish --tag=carbon-macros-translations
```

## Kullanım

Paketin sağladığı `greet` macro'sunu kullanmak oldukça basittir.

## Örnek Kullanım

Aşağıdaki örneklerde, günün saatine göre selamlama mesajı alabilirsiniz.

### Controller veya Route İçerisinde

```php
use Carbon\Carbon;

Route::get('/greet', function () {
    $greeting1 = Carbon::now()->greet();
    $greeting2 = now()->greet();

    return view('greet', compact('greeting1', 'greeting2'));
});
```

```blade
<p>{{ Carbon\Carbon::now()->greet() }}</p>
<p>{{ now()->greet() }}</p>
```

### Selamlama Mesajları

- Sabah (00:00 - 11:59): Günaydın veya Good Morning
- Öğleden Sonra (12:00 - 17:59): İyi Günler veya Good Day
- Akşam (18:00 - 23:59): İyi Akşamlar veya Good Evening

### Dil Desteği

Paket, hem Türkçe hem de İngilizce dil desteği sunmaktadır. Uygulamanızın dil ayarlarına göre otomatik olarak doğru çeviri kullanılacaktır.

Dil dosyaları resources/lang/vendor/carbon-macros/{locale}/messages.php konumunda bulunur.

### Zaman Dilimi Ayarı

```php
// config/app.php
'timezone' => 'Europe/Istanbul',
'locale' => 'tr',
```

### Bağımlılıkları Yükleyin:

```bash
composer install
```