# PHP Temp Mail

PHP ile Sınırsız Geçici Mail Oluşurma.

## Kurulum

Repoyu bilgisayarınıza klonlayın.

```
git clone https://github.com/emreramazanoglu72/PHP-Temp-Mail-Api.git
```
## Dahil Etme - Import 

En temel olarak bir rota şöyle tanımlanır

```php
$tempmail = new TempMailApi();
```

#### API Metodları

#### Rastgele E-Posta Oluturma => Limit default 10 adet
```php
$result = $tempmail->getMail();
```

#### E-Postanın Detayını Alma => Session Key mail adresinin base64 formatı
```php
 $result = $tempmail->getMailInfo ("Sesison");
```

#### E-Posta İçeriği => Session Key mail adresinin base64 formatı && subject ID Mailinin ID'si
```php
$result = $tempmail->MailDetail ("Session","subject ID")
```

#### E-Posta Dosya İndirme => Session Key mail adresinin base64 formatı && subject ID Mailinin ID'si && file = dosyanın idsi
```php
$result = $tempmail->MailDetail ("Session","subject ID","file")
```
