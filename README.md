# **Laravel Model Controller**

## **Consegna**

In questo progetto eseguiamo una interazione con il database utilizzando l’ORM di Laravel.

1. Creiamo un nuovo progetto Laravel 9

2. Tramite **phpMyAdmin** create un nuovo database **laravel_model_controller**

3. Importiamo nel vostro database la tabella `movies` in allegato

4. Inseriamo le vostre credenziali per il database nel file `.env`

5. Creiamo un model Movie `php artisan make:model Movie`

6. Creiamo un controller che gestirà la rotta `/` - `php artisan make:controller Guest/PageController`

7. All’interno della funzione **index()** del controller, recuperiamo tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

### **BONUS:**

Creare la pagina di dettaglio del film
