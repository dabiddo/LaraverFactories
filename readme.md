### Factories on Laravel

---
This is a minimal example on how to use Factories on PHP to segment business logic when used on SaS applications.

Please review `app/Http/Factories`, to see how the generic Factory Class instanciates the desired class.

Please review `app/Http/Controllers/CarController` to see how the Factory Class is called.

To Test the different responses

`http://<URL>/api` & `http://<URL>/api?maker=tesla`
