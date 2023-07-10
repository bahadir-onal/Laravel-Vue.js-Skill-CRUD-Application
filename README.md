# Laravel ve Vue.js ile Yetenek (Skill) CRUD Uygulaması
Bu proje, Laravel API ve Vue.js kullanarak bir yetenek (skill) CRUD (Create, Read, Update, Delete) sistemi oluşturmayı amaçlar.
## Proje Tanımı
 Proje, bir beceriyi temsil eden isim ve slug alanlarını içeren yetenekleri listelemenize, eklemenize, güncellemenize ve silmenize olanak tanır. Laravel API, veritabanı işlemlerini yönetirken Vue.js, kullanıcı arayüzünü oluşturmak ve yeteneklerin görüntülenmesini sağlamak için kullanılır. 
 ## Kurulum ve Kullanım
  Projenin yerel ortamınıza kurulumu ve kullanımı aşağıdaki adımları izleyerek gerçekleştirilebilir:
  ### Laravel API
1. GitHub repository'sini klonlayın:
`git clone https://github.com/bahadir-onal/Laravel-Vue.js-Skill-CRUD-Application.git`

2. Proje dizinine gidin ve gerekli bağımlılıkları yükleyin:
 `composer install`

3.  `.env.example` dosyasını `.env` olarak kopyalayın ve veritabanı ayarlarınızı yapın. 
4. Uygulama anahtarını oluşturun:
 `php artisan key:generate`

5. Veritabanı tablolarını oluşturun:
`php artisan migrate`

6. Laravel projesini başlatın:
`php artisan serve`

### Vue.js
 1. GitHub repository'sini klonlayın:
`git clone https://github.com/bahadir-onal/Laravel-Vue.js-Skill-CRUD-Application.git`

2. Proje dizinine gidin ve gerekli bağımlılıkları yükleyin:
`npm install`
3. Vue.js projesini başlatın:
`npm run serve`


## Contributing
Proje, her türlü katkıya açıktır. Eğer projeye katkıda bulunmak isterseniz, lütfen forklayın ve pull request gönderin.

## İletişim

bahadironal3@gmail.com
