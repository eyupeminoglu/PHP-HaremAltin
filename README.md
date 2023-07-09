# PHP-HaremAltin
Bu class, Harem Altın web sitesinden döviz verilerini çekmek için kullanılır. Bu kütüphaneyi kullanarak Harem Altın web sitesinin canlı döviz bilgilerini çekebilir ve bu bilgileri işleyebilirsiniz.

## Kurulum
Bu kütüphaneyi kullanabilmek için PHP'nin Curl kütüphanesi yüklü olmalıdır. Eğer yüklenmiş değilse, Curl kütüphanesini yükleyebiliriz.

### Curl Yükleme (Ubuntu)

```bash
sudo apt-get install curl
```

## Kullanımı
Kütüphaneyi kullanmak için öncelikle `HaremAltin.php` dosyasını projenize dahil etmeniz gerek:

```php
require_once('HaremAltin.php');
```

Daha sonra, classı çağırarak Harem Altın web sitesinden alınan döviz verilerini çekebilirsiniz:
```php
$haremAltin = new HaremAltin();
$data = $haremAltin->getAllCurrency();
print_r($data);
```

Belirli pariteden gelen döviz verisini almak için ise getCurrency() methodunu kullanabilirsiniz:
```php
$usdTry = $haremAltin->getCurrency('USDTRY');
print_r($usdTry);
```

## Destek
Profilime girip takip etmen yeterli :) 

## Lisans
Bu sınıf MIT lisansı altında yayınlanmıştır. Daha fazla bilgi için LICENSE dosyasını inceleyebilirsiniz.

# Özel Not
Bu kütüphane onaylı değil ve izin alınmamıştır. Kullanım sorumluluğu size aittir.
