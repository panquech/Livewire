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

