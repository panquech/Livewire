# Livewire Components

## Creation

para crear un componente:
    
    php artisan make:livewire 'carpeta'.'nombre-componente'

Esto creará una vista y una clase donde controlaremos lo que queremos que haga.

Cuando el componente es pequeno, podemos usar un componente 'inline', que lo que se muestre quede en la clase y no se cree la vista.

    php artisan make:livewire 'carpeta'.'nombre-componente' --inline

## Lamada

En la vista que queramos traer el componente

    @livewire('carpeta'.'nombre-componente')


*Los componentes están encapsulados, es decir, lo que está fuera no se toma en cuenta.*

## Componentes de Página completa

El componente abarca toda la página y no se deben colocar demás elementos fuera.

Son útiles cuadno queremos que toda la página se recargue por ejemplo, **a diferencia de los componentes de cajita que tienen su propio espacio**.

### Proceso de creación

En routes->web.php vamos a establecer que la vista es controlada por el '*controller*'

1. Importamos el 'controller'

        use App\Livewire\Posts\CreatePost;

2. Decimos que la ruta /Dashboard será controlada por el controlador

        Route::get('/dashboard', CreatePost::class)
        ->name('dashboard');

3. Crear el archivo de configuración de Livewire en caso de que no exista, para establecer la carpeta donde se encuentran los layout.

        php artisan livewire:publish --config

    - Dentro (se genera en config/livewire.php), modificar la siguiente linea (es el caso para laravel 11)

            'layout' => 'components.layouts.app', ------------> 'layout' => 'layouts.app',

Es importante hacer mención de que cuando trabajas con componentes de Página completa, todo lo que pongas en la vista fuera del componente no será tomado en cuenta.

Para hacer uso del componente lo llamamos:

    @livewire('create-post', [
        'atributos que queramos pasar (opcionales)' => 'valor del atributo'
    ])